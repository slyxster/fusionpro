<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfServerStatus ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfServerStatus
 * @subpackage Arrays
 */
class ArrayOfServerStatus extends AbstractStructArrayBase
{
    /**
     * The ServerStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ServerStatus[]
     */
    public $ServerStatus;
    /**
     * Constructor method for ArrayOfServerStatus
     * @uses ArrayOfServerStatus::setServerStatus()
     * @param \StructType\ServerStatus[] $serverStatus
     */
    public function __construct(array $serverStatus = array())
    {
        $this
            ->setServerStatus($serverStatus);
    }
    /**
     * Get ServerStatus value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ServerStatus[]|null
     */
    public function getServerStatus()
    {
        return isset($this->ServerStatus) ? $this->ServerStatus : null;
    }
    /**
     * This method is responsible for validating the values passed to the setServerStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServerStatus method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServerStatusForArrayConstraintsFromSetServerStatus(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfServerStatusServerStatusItem) {
            // validation for constraint: itemType
            if (!$arrayOfServerStatusServerStatusItem instanceof \StructType\ServerStatus) {
                $invalidValues[] = is_object($arrayOfServerStatusServerStatusItem) ? get_class($arrayOfServerStatusServerStatusItem) : sprintf('%s(%s)', gettype($arrayOfServerStatusServerStatusItem), var_export($arrayOfServerStatusServerStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ServerStatus property can only contain items of type \StructType\ServerStatus, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ServerStatus value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\ServerStatus[] $serverStatus
     * @return \ArrayType\ArrayOfServerStatus
     */
    public function setServerStatus(array $serverStatus = array())
    {
        // validation for constraint: array
        if ('' !== ($serverStatusArrayErrorMessage = self::validateServerStatusForArrayConstraintsFromSetServerStatus($serverStatus))) {
            throw new \InvalidArgumentException($serverStatusArrayErrorMessage, __LINE__);
        }
        if (is_null($serverStatus) || (is_array($serverStatus) && empty($serverStatus))) {
            unset($this->ServerStatus);
        } else {
            $this->ServerStatus = $serverStatus;
        }
        return $this;
    }
    /**
     * Add item to ServerStatus value
     * @throws \InvalidArgumentException
     * @param \StructType\ServerStatus $item
     * @return \ArrayType\ArrayOfServerStatus
     */
    public function addToServerStatus(\StructType\ServerStatus $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ServerStatus) {
            throw new \InvalidArgumentException(sprintf('The ServerStatus property can only contain items of type \StructType\ServerStatus, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ServerStatus[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ServerStatus|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ServerStatus|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ServerStatus|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ServerStatus|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ServerStatus|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ServerStatus
     */
    public function getAttributeName()
    {
        return 'ServerStatus';
    }
}
