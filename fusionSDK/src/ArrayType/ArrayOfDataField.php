<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDataField ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDataField
 * @subpackage Arrays
 */
class ArrayOfDataField extends AbstractStructArrayBase
{
    /**
     * The DataField
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DataField[]
     */
    public $DataField;
    /**
     * Constructor method for ArrayOfDataField
     * @uses ArrayOfDataField::setDataField()
     * @param \StructType\DataField[] $dataField
     */
    public function __construct(array $dataField = array())
    {
        $this
            ->setDataField($dataField);
    }
    /**
     * Get DataField value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DataField[]|null
     */
    public function getDataField()
    {
        return isset($this->DataField) ? $this->DataField : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDataField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDataField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDataFieldForArrayConstraintsFromSetDataField(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDataFieldDataFieldItem) {
            // validation for constraint: itemType
            if (!$arrayOfDataFieldDataFieldItem instanceof \StructType\DataField) {
                $invalidValues[] = is_object($arrayOfDataFieldDataFieldItem) ? get_class($arrayOfDataFieldDataFieldItem) : sprintf('%s(%s)', gettype($arrayOfDataFieldDataFieldItem), var_export($arrayOfDataFieldDataFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DataField property can only contain items of type \StructType\DataField, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DataField value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\DataField[] $dataField
     * @return \ArrayType\ArrayOfDataField
     */
    public function setDataField(array $dataField = array())
    {
        // validation for constraint: array
        if ('' !== ($dataFieldArrayErrorMessage = self::validateDataFieldForArrayConstraintsFromSetDataField($dataField))) {
            throw new \InvalidArgumentException($dataFieldArrayErrorMessage, __LINE__);
        }
        if (is_null($dataField) || (is_array($dataField) && empty($dataField))) {
            unset($this->DataField);
        } else {
            $this->DataField = $dataField;
        }
        return $this;
    }
    /**
     * Add item to DataField value
     * @throws \InvalidArgumentException
     * @param \StructType\DataField $item
     * @return \ArrayType\ArrayOfDataField
     */
    public function addToDataField(\StructType\DataField $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DataField) {
            throw new \InvalidArgumentException(sprintf('The DataField property can only contain items of type \StructType\DataField, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DataField[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DataField|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DataField|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DataField|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DataField|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DataField|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DataField
     */
    public function getAttributeName()
    {
        return 'DataField';
    }
}
