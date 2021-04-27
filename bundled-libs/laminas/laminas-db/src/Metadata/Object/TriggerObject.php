<?php

/**
 * @see       https://github.com/laminas/laminas-db for the canonical source repository
 * @copyright https://github.com/laminas/laminas-db/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-db/blob/master/LICENSE.md New BSD License
 */

namespace Laminas\Db\Metadata\Object;

class TriggerObject
{
    /**
     *
     *
     * @var string
     */
    protected $name;

    /**
     *
     *
     * @var string
     */
    protected $eventManipulation;

    /**
     *
     *
     * @var string
     */
    protected $eventObjectCatalog;

    /**
     *
     *
     * @var string
     */
    protected $eventObjectSchema;

    /**
     *
     *
     * @var string
     */
    protected $eventObjectTable;

    /**
     *
     *
     * @var string
     */
    protected $actionOrder;

    /**
     *
     *
     * @var string
     */
    protected $actionCondition;

    /**
     *
     *
     * @var string
     */
    protected $actionStatement;

    /**
     *
     *
     * @var string
     */
    protected $actionOrientation;

    /**
     *
     *
     * @var string
     */
    protected $actionTiming;

    /**
     *
     *
     * @var string
     */
    protected $actionReferenceOldTable;

    /**
     *
     *
     * @var string
     */
    protected $actionReferenceNewTable;

    /**
     *
     *
     * @var string
     */
    protected $actionReferenceOldRow;

    /**
     *
     *
     * @var string
     */
    protected $actionReferenceNewRow;

    /**
     *
     *
     * @var \DateTime
     */
    protected $created;

    /**
     * Get Name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set Name.
     *
     * @param string $name
     * @return self Provides a fluent interface
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get Event Manipulation.
     *
     * @return string
     */
    public function getEventManipulation()
    {
        return $this->eventManipulation;
    }

    /**
     * Set Event Manipulation.
     *
     * @param string $eventManipulation
     * @return self Provides a fluent interface
     */
    public function setEventManipulation($eventManipulation)
    {
        $this->eventManipulation = $eventManipulation;
        return $this;
    }

    /**
     * Get Event Object Catalog.
     *
     * @return string
     */
    public function getEventObjectCatalog()
    {
        return $this->eventObjectCatalog;
    }

    /**
     * Set Event Object Catalog.
     *
     * @param string $eventObjectCatalog
     * @return self Provides a fluent interface
     */
    public function setEventObjectCatalog($eventObjectCatalog)
    {
        $this->eventObjectCatalog = $eventObjectCatalog;
        return $this;
    }

    /**
     * Get Event Object Schema.
     *
     * @return string
     */
    public function getEventObjectSchema()
    {
        return $this->eventObjectSchema;
    }

    /**
     * Set Event Object Schema.
     *
     * @param string $eventObjectSchema
     * @return self Provides a fluent interface
     */
    public function setEventObjectSchema($eventObjectSchema)
    {
        $this->eventObjectSchema = $eventObjectSchema;
        return $this;
    }

    /**
     * Get Event Object Table.
     *
     * @return string
     */
    public function getEventObjectTable()
    {
        return $this->eventObjectTable;
    }

    /**
     * Set Event Object Table.
     *
     * @param string $eventObjectTable
     * @return self Provides a fluent interface
     */
    public function setEventObjectTable($eventObjectTable)
    {
        $this->eventObjectTable = $eventObjectTable;
        return $this;
    }

    /**
     * Get Action Order.
     *
     * @return string
     */
    public function getActionOrder()
    {
        return $this->actionOrder;
    }

    /**
     * Set Action Order.
     *
     * @param string $actionOrder
     * @return self Provides a fluent interface
     */
    public function setActionOrder($actionOrder)
    {
        $this->actionOrder = $actionOrder;
        return $this;
    }

    /**
     * Get Action Condition.
     *
     * @return string
     */
    public function getActionCondition()
    {
        return $this->actionCondition;
    }

    /**
     * Set Action Condition.
     *
     * @param string $actionCondition
     * @return self Provides a fluent interface
     */
    public function setActionCondition($actionCondition)
    {
        $this->actionCondition = $actionCondition;
        return $this;
    }

    /**
     * Get Action Statement.
     *
     * @return string
     */
    public function getActionStatement()
    {
        return $this->actionStatement;
    }

    /**
     * Set Action Statement.
     *
     * @param string $actionStatement
     * @return self Provides a fluent interface
     */
    public function setActionStatement($actionStatement)
    {
        $this->actionStatement = $actionStatement;
        return $this;
    }

    /**
     * Get Action Orientation.
     *
     * @return string
     */
    public function getActionOrientation()
    {
        return $this->actionOrientation;
    }

    /**
     * Set Action Orientation.
     *
     * @param string $actionOrientation
     * @return self Provides a fluent interface
     */
    public function setActionOrientation($actionOrientation)
    {
        $this->actionOrientation = $actionOrientation;
        return $this;
    }

    /**
     * Get Action Timing.
     *
     * @return string
     */
    public function getActionTiming()
    {
        return $this->actionTiming;
    }

    /**
     * Set Action Timing.
     *
     * @param string $actionTiming
     * @return self Provides a fluent interface
     */
    public function setActionTiming($actionTiming)
    {
        $this->actionTiming = $actionTiming;
        return $this;
    }

    /**
     * Get Action Reference Old Table.
     *
     * @return string
     */
    public function getActionReferenceOldTable()
    {
        return $this->actionReferenceOldTable;
    }

    /**
     * Set Action Reference Old Table.
     *
     * @param string $actionReferenceOldTable
     * @return self Provides a fluent interface
     */
    public function setActionReferenceOldTable($actionReferenceOldTable)
    {
        $this->actionReferenceOldTable = $actionReferenceOldTable;
        return $this;
    }

    /**
     * Get Action Reference New Table.
     *
     * @return string
     */
    public function getActionReferenceNewTable()
    {
        return $this->actionReferenceNewTable;
    }

    /**
     * Set Action Reference New Table.
     *
     * @param string $actionReferenceNewTable
     * @return self Provides a fluent interface
     */
    public function setActionReferenceNewTable($actionReferenceNewTable)
    {
        $this->actionReferenceNewTable = $actionReferenceNewTable;
        return $this;
    }

    /**
     * Get Action Reference Old Row.
     *
     * @return string
     */
    public function getActionReferenceOldRow()
    {
        return $this->actionReferenceOldRow;
    }

    /**
     * Set Action Reference Old Row.
     *
     * @param string $actionReferenceOldRow
     * @return self Provides a fluent interface
     */
    public function setActionReferenceOldRow($actionReferenceOldRow)
    {
        $this->actionReferenceOldRow = $actionReferenceOldRow;
        return $this;
    }

    /**
     * Get Action Reference New Row.
     *
     * @return string
     */
    public function getActionReferenceNewRow()
    {
        return $this->actionReferenceNewRow;
    }

    /**
     * Set Action Reference New Row.
     *
     * @param string $actionReferenceNewRow
     * @return self Provides a fluent interface
     */
    public function setActionReferenceNewRow($actionReferenceNewRow)
    {
        $this->actionReferenceNewRow = $actionReferenceNewRow;
        return $this;
    }

    /**
     * Get Created.
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set Created.
     *
     * @param \DateTime $created
     * @return self Provides a fluent interface
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }
}
