<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWatchFolderCondition ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfWatchFolderCondition
 * @subpackage Arrays
 */
class ArrayOfWatchFolderCondition extends AbstractStructArrayBase
{
    /**
     * The WatchFolderCondition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WatchFolderCondition[]
     */
    public $WatchFolderCondition;
    /**
     * Constructor method for ArrayOfWatchFolderCondition
     * @uses ArrayOfWatchFolderCondition::setWatchFolderCondition()
     * @param \StructType\WatchFolderCondition[] $watchFolderCondition
     */
    public function __construct(array $watchFolderCondition = array())
    {
        $this
            ->setWatchFolderCondition($watchFolderCondition);
    }
    /**
     * Get WatchFolderCondition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WatchFolderCondition[]|null
     */
    public function getWatchFolderCondition()
    {
        return isset($this->WatchFolderCondition) ? $this->WatchFolderCondition : null;
    }
    /**
     * This method is responsible for validating the values passed to the setWatchFolderCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWatchFolderCondition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWatchFolderConditionForArrayConstraintsFromSetWatchFolderCondition(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWatchFolderConditionWatchFolderConditionItem) {
            // validation for constraint: itemType
            if (!$arrayOfWatchFolderConditionWatchFolderConditionItem instanceof \StructType\WatchFolderCondition) {
                $invalidValues[] = is_object($arrayOfWatchFolderConditionWatchFolderConditionItem) ? get_class($arrayOfWatchFolderConditionWatchFolderConditionItem) : sprintf('%s(%s)', gettype($arrayOfWatchFolderConditionWatchFolderConditionItem), var_export($arrayOfWatchFolderConditionWatchFolderConditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WatchFolderCondition property can only contain items of type \StructType\WatchFolderCondition, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set WatchFolderCondition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WatchFolderCondition[] $watchFolderCondition
     * @return \ArrayType\ArrayOfWatchFolderCondition
     */
    public function setWatchFolderCondition(array $watchFolderCondition = array())
    {
        // validation for constraint: array
        if ('' !== ($watchFolderConditionArrayErrorMessage = self::validateWatchFolderConditionForArrayConstraintsFromSetWatchFolderCondition($watchFolderCondition))) {
            throw new \InvalidArgumentException($watchFolderConditionArrayErrorMessage, __LINE__);
        }
        if (is_null($watchFolderCondition) || (is_array($watchFolderCondition) && empty($watchFolderCondition))) {
            unset($this->WatchFolderCondition);
        } else {
            $this->WatchFolderCondition = $watchFolderCondition;
        }
        return $this;
    }
    /**
     * Add item to WatchFolderCondition value
     * @throws \InvalidArgumentException
     * @param \StructType\WatchFolderCondition $item
     * @return \ArrayType\ArrayOfWatchFolderCondition
     */
    public function addToWatchFolderCondition(\StructType\WatchFolderCondition $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WatchFolderCondition) {
            throw new \InvalidArgumentException(sprintf('The WatchFolderCondition property can only contain items of type \StructType\WatchFolderCondition, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->WatchFolderCondition[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WatchFolderCondition|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WatchFolderCondition|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WatchFolderCondition|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WatchFolderCondition|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WatchFolderCondition|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WatchFolderCondition
     */
    public function getAttributeName()
    {
        return 'WatchFolderCondition';
    }
}
