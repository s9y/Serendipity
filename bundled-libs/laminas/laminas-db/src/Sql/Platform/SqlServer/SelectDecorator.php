<?php

/**
 * @see       https://github.com/laminas/laminas-db for the canonical source repository
 * @copyright https://github.com/laminas/laminas-db/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-db/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Db\Sql\Platform\SqlServer;

use Laminas\Db\Adapter\Driver\DriverInterface;
use Laminas\Db\Adapter\ParameterContainer;
use Laminas\Db\Adapter\Platform\PlatformInterface;
use Laminas\Db\Sql\Platform\PlatformDecoratorInterface;
use Laminas\Db\Sql\Select;

class SelectDecorator extends Select implements PlatformDecoratorInterface
{
    /**
     * @var Select
     */
    protected $subject = null;

    /**
     * @param Select $select
     */
    public function setSubject($select)
    {
        $this->subject = $select;
    }

    protected function localizeVariables()
    {
        parent::localizeVariables();
        // set specifications
        unset($this->specifications[self::LIMIT]);
        unset($this->specifications[self::OFFSET]);

        $this->specifications['LIMITOFFSET'] = null;
    }

    /**
     * @param PlatformInterface $platform
     * @param DriverInterface $driver
     * @param ParameterContainer $parameterContainer
     * @param $sqls
     * @param $parameters
     * @return null
     */
    protected function processLimitOffset(
        PlatformInterface $platform,
        DriverInterface $driver = null,
        ParameterContainer $parameterContainer = null,
        &$sqls,
        &$parameters
    ) {
        if ($this->limit === null && $this->offset === null) {
            return;
        }

        $selectParameters = $parameters[self::SELECT];

        /** if this is a DISTINCT query then real SELECT part goes to second element in array **/
        $parameterIndex = 0;
        if ($selectParameters[0] === 'DISTINCT') {
            unset($selectParameters[0]);
            $selectParameters = array_values($selectParameters);
            $parameterIndex = 1;
        }

        $starSuffix = $platform->getIdentifierSeparator() . self::SQL_STAR;
        foreach ($selectParameters[0] as $i => $columnParameters) {
            if ($columnParameters[0] == self::SQL_STAR
                || (isset($columnParameters[1]) && $columnParameters[1] == self::SQL_STAR)
                || strpos($columnParameters[0], $starSuffix)
            ) {
                $selectParameters[0] = [[self::SQL_STAR]];
                break;
            }
            if (isset($columnParameters[1])) {
                array_shift($columnParameters);
                $selectParameters[0][$i] = $columnParameters;
            }
        }

        // first, produce column list without compound names (using the AS portion only)
        array_unshift($sqls, $this->createSqlFromSpecificationAndParameters(
            ['SELECT %1$s FROM (' => current($this->specifications[self::SELECT])],
            $selectParameters
        ));

        if ($parameterContainer) {
            // create bottom part of query, with offset and limit using row_number
            $limitParamName = $driver->formatParameterName('limit');
            $offsetParamName = $driver->formatParameterName('offset');
            $offsetForSumParamName = $driver->formatParameterName('offsetForSum');
            // @codingStandardsIgnoreStart
            array_push($sqls, ') AS [LAMINAS_SQL_SERVER_LIMIT_OFFSET_EMULATION] WHERE [LAMINAS_SQL_SERVER_LIMIT_OFFSET_EMULATION].[__LAMINAS_ROW_NUMBER] BETWEEN '
                . $offsetParamName . '+1 AND ' . $limitParamName . '+' . $offsetForSumParamName);
            // @codingStandardsIgnoreEnd
            $parameterContainer->offsetSet('offset', $this->offset);
            $parameterContainer->offsetSet('limit', $this->limit);
            $parameterContainer->offsetSetReference('offsetForSum', 'offset');
        } else {
            // @codingStandardsIgnoreStart
            array_push($sqls, ') AS [LAMINAS_SQL_SERVER_LIMIT_OFFSET_EMULATION] WHERE [LAMINAS_SQL_SERVER_LIMIT_OFFSET_EMULATION].[__LAMINAS_ROW_NUMBER] BETWEEN '
                . (int) $this->offset . '+1 AND '
                . (int) $this->limit . '+' . (int) $this->offset);
            // @codingStandardsIgnoreEnd
        }

        if (isset($sqls[self::ORDER])) {
            $orderBy = $sqls[self::ORDER];
            unset($sqls[self::ORDER]);
        } else {
            $orderBy = 'ORDER BY (SELECT 1)';
        }

        // add a column for row_number() using the order specification
        $parameters[self::SELECT][$parameterIndex][] = [
            'ROW_NUMBER() OVER (' . $orderBy . ')',
            '[__LAMINAS_ROW_NUMBER]',
        ];

        $sqls[self::SELECT] = $this->createSqlFromSpecificationAndParameters(
            $this->specifications[self::SELECT],
            $parameters[self::SELECT]
        );
    }
}
