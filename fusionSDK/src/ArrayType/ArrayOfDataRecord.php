<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDataRecord ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDataRecord
 * @subpackage Arrays
 */
class ArrayOfDataRecord extends AbstractStructArrayBase
{
    /**
     * The DataRecord
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DataRecord[]
     */
    public $DataRecord;
    /**
     * Constructor method for ArrayOfDataRecord
     * @uses ArrayOfDataRecord::setDataRecord()
     * @param \StructType\DataRecord[] $dataRecord
     */
    public function __construct(array $dataRecord = array())
    {
        $this
            ->setDataRecord($dataRecord);
    }
    /**
     * Get DataRecord value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DataRecord[]|null
     */
    public function getDataRecord()
    {
        return isset($this->DataRecord) ? $this->DataRecord : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDataRecord method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDataRecord method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDataRecordForArrayConstraintsFromSetDataRecord(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDataRecordDataRecordItem) {
            // validation for constraint: itemType
            if (!$arrayOfDataRecordDataRecordItem instanceof \StructType\DataRecord) {
                $invalidValues[] = is_object($arrayOfDataRecordDataRecordItem) ? get_class($arrayOfDataRecordDataRecordItem) : sprintf('%s(%s)', gettype($arrayOfDataRecordDataRecordItem), var_export($arrayOfDataRecordDataRecordItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DataRecord property can only contain items of type \StructType\DataRecord, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DataRecord value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\DataRecord[] $dataRecord
     * @return \ArrayType\ArrayOfDataRecord
     */
    public function setDataRecord(array $dataRecord = array())
    {
        // validation for constraint: array
        if ('' !== ($dataRecordArrayErrorMessage = self::validateDataRecordForArrayConstraintsFromSetDataRecord($dataRecord))) {
            throw new \InvalidArgumentException($dataRecordArrayErrorMessage, __LINE__);
        }
        if (is_null($dataRecord) || (is_array($dataRecord) && empty($dataRecord))) {
            unset($this->DataRecord);
        } else {
            $this->DataRecord = $dataRecord;
        }
        return $this;
    }
    /**
     * Add item to DataRecord value
     * @throws \InvalidArgumentException
     * @param \StructType\DataRecord $item
     * @return \ArrayType\ArrayOfDataRecord
     */
    public function addToDataRecord(\StructType\DataRecord $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DataRecord) {
            throw new \InvalidArgumentException(sprintf('The DataRecord property can only contain items of type \StructType\DataRecord, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DataRecord[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DataRecord|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DataRecord|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DataRecord|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DataRecord|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DataRecord|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DataRecord
     */
    public function getAttributeName()
    {
        return 'DataRecord';
    }
}
