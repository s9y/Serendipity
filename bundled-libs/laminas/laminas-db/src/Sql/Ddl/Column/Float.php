<?php

/**
 * @see       https://github.com/laminas/laminas-db for the canonical source repository
 * @copyright https://github.com/laminas/laminas-db/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-db/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Db\Sql\Ddl\Column;

/**
 * Stub class for backwards compatibility.
 *
 * Since PHP 7 adds "float" as a reserved keyword, we can no longer have a class
 * named that and retain PHP 7 compatibility. The original class has been
 * renamed to "Floating", and this class is now an extension of it. It raises an
 * E_USER_DEPRECATED to warn users to migrate.
 *
 * @deprecated
 */
class Float extends Floating
{
    /**
     * {@inheritDoc}
     *
     * Raises a deprecation notice.
     */
    public function __construct(
        $name,
        $digits = null,
        $decimal = null,
        $nullable = false,
        $default = null,
        array $options = []
    ) {
        trigger_error(
            sprintf(
                'The class %s has been deprecated; please use %s\\Floating',
                __CLASS__,
                __NAMESPACE__
            ),
            E_USER_DEPRECATED
        );

        parent::__construct($name, $digits, $decimal, $nullable, $default, $options);
    }
}
