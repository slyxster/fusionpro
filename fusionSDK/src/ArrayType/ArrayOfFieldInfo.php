<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfFieldInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfFieldInfo
 * @subpackage Arrays
 */
class ArrayOfFieldInfo extends AbstractStructArrayBase
{
    /**
     * The FieldInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\FieldInfo[]
     */
    public $FieldInfo;
    /**
     * Constructor method for ArrayOfFieldInfo
     * @uses ArrayOfFieldInfo::setFieldInfo()
     * @param \StructType\FieldInfo[] $fieldInfo
     */
    public function __construct(array $fieldInfo = array())
    {
        $this
            ->setFieldInfo($fieldInfo);
    }
    /**
     * Get FieldInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\FieldInfo[]|null
     */
    public function getFieldInfo()
    {
        return isset($this->FieldInfo) ? $this->FieldInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setFieldInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFieldInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFieldInfoForArrayConstraintsFromSetFieldInfo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfFieldInfoFieldInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfFieldInfoFieldInfoItem instanceof \StructType\FieldInfo) {
                $invalidValues[] = is_object($arrayOfFieldInfoFieldInfoItem) ? get_class($arrayOfFieldInfoFieldInfoItem) : sprintf('%s(%s)', gettype($arrayOfFieldInfoFieldInfoItem), var_export($arrayOfFieldInfoFieldInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FieldInfo property can only contain items of type \StructType\FieldInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set FieldInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\FieldInfo[] $fieldInfo
     * @return \ArrayType\ArrayOfFieldInfo
     */
    public function setFieldInfo(array $fieldInfo = array())
    {
        // validation for constraint: array
        if ('' !== ($fieldInfoArrayErrorMessage = self::validateFieldInfoForArrayConstraintsFromSetFieldInfo($fieldInfo))) {
            throw new \InvalidArgumentException($fieldInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($fieldInfo) || (is_array($fieldInfo) && empty($fieldInfo))) {
            unset($this->FieldInfo);
        } else {
            $this->FieldInfo = $fieldInfo;
        }
        return $this;
    }
    /**
     * Add item to FieldInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\FieldInfo $item
     * @return \ArrayType\ArrayOfFieldInfo
     */
    public function addToFieldInfo(\StructType\FieldInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\FieldInfo) {
            throw new \InvalidArgumentException(sprintf('The FieldInfo property can only contain items of type \StructType\FieldInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->FieldInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\FieldInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\FieldInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\FieldInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\FieldInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\FieldInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string FieldInfo
     */
    public function getAttributeName()
    {
        return 'FieldInfo';
    }
}
