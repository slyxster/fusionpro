<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfKeyValue ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfKeyValue
 * @subpackage Arrays
 */
class ArrayOfKeyValue extends AbstractStructArrayBase
{
    /**
     * The KeyValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\KeyValue[]
     */
    public $KeyValue;
    /**
     * Constructor method for ArrayOfKeyValue
     * @uses ArrayOfKeyValue::setKeyValue()
     * @param \StructType\KeyValue[] $keyValue
     */
    public function __construct(array $keyValue = array())
    {
        $this
            ->setKeyValue($keyValue);
    }
    /**
     * Get KeyValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\KeyValue[]|null
     */
    public function getKeyValue()
    {
        return isset($this->KeyValue) ? $this->KeyValue : null;
    }
    /**
     * This method is responsible for validating the values passed to the setKeyValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKeyValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKeyValueForArrayConstraintsFromSetKeyValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfKeyValueKeyValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfKeyValueKeyValueItem instanceof \StructType\KeyValue) {
                $invalidValues[] = is_object($arrayOfKeyValueKeyValueItem) ? get_class($arrayOfKeyValueKeyValueItem) : sprintf('%s(%s)', gettype($arrayOfKeyValueKeyValueItem), var_export($arrayOfKeyValueKeyValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The KeyValue property can only contain items of type \StructType\KeyValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set KeyValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\KeyValue[] $keyValue
     * @return \ArrayType\ArrayOfKeyValue
     */
    public function setKeyValue(array $keyValue = array())
    {
        // validation for constraint: array
        if ('' !== ($keyValueArrayErrorMessage = self::validateKeyValueForArrayConstraintsFromSetKeyValue($keyValue))) {
            throw new \InvalidArgumentException($keyValueArrayErrorMessage, __LINE__);
        }
        if (is_null($keyValue) || (is_array($keyValue) && empty($keyValue))) {
            unset($this->KeyValue);
        } else {
            $this->KeyValue = $keyValue;
        }
        return $this;
    }
    /**
     * Add item to KeyValue value
     * @throws \InvalidArgumentException
     * @param \StructType\KeyValue $item
     * @return \ArrayType\ArrayOfKeyValue
     */
    public function addToKeyValue(\StructType\KeyValue $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\KeyValue) {
            throw new \InvalidArgumentException(sprintf('The KeyValue property can only contain items of type \StructType\KeyValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->KeyValue[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\KeyValue|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\KeyValue|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\KeyValue|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\KeyValue|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\KeyValue|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeyValue
     */
    public function getAttributeName()
    {
        return 'KeyValue';
    }
}
