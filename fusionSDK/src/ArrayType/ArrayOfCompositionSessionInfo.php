<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCompositionSessionInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCompositionSessionInfo
 * @subpackage Arrays
 */
class ArrayOfCompositionSessionInfo extends AbstractStructArrayBase
{
    /**
     * The CompositionSessionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionSessionInfo[]
     */
    public $CompositionSessionInfo;
    /**
     * Constructor method for ArrayOfCompositionSessionInfo
     * @uses ArrayOfCompositionSessionInfo::setCompositionSessionInfo()
     * @param \StructType\CompositionSessionInfo[] $compositionSessionInfo
     */
    public function __construct(array $compositionSessionInfo = array())
    {
        $this
            ->setCompositionSessionInfo($compositionSessionInfo);
    }
    /**
     * Get CompositionSessionInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionSessionInfo[]|null
     */
    public function getCompositionSessionInfo()
    {
        return isset($this->CompositionSessionInfo) ? $this->CompositionSessionInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCompositionSessionInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCompositionSessionInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCompositionSessionInfoForArrayConstraintsFromSetCompositionSessionInfo(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCompositionSessionInfoCompositionSessionInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfCompositionSessionInfoCompositionSessionInfoItem instanceof \StructType\CompositionSessionInfo) {
                $invalidValues[] = is_object($arrayOfCompositionSessionInfoCompositionSessionInfoItem) ? get_class($arrayOfCompositionSessionInfoCompositionSessionInfoItem) : sprintf('%s(%s)', gettype($arrayOfCompositionSessionInfoCompositionSessionInfoItem), var_export($arrayOfCompositionSessionInfoCompositionSessionInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CompositionSessionInfo property can only contain items of type \StructType\CompositionSessionInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CompositionSessionInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\CompositionSessionInfo[] $compositionSessionInfo
     * @return \ArrayType\ArrayOfCompositionSessionInfo
     */
    public function setCompositionSessionInfo(array $compositionSessionInfo = array())
    {
        // validation for constraint: array
        if ('' !== ($compositionSessionInfoArrayErrorMessage = self::validateCompositionSessionInfoForArrayConstraintsFromSetCompositionSessionInfo($compositionSessionInfo))) {
            throw new \InvalidArgumentException($compositionSessionInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($compositionSessionInfo) || (is_array($compositionSessionInfo) && empty($compositionSessionInfo))) {
            unset($this->CompositionSessionInfo);
        } else {
            $this->CompositionSessionInfo = $compositionSessionInfo;
        }
        return $this;
    }
    /**
     * Add item to CompositionSessionInfo value
     * @throws \InvalidArgumentException
     * @param \StructType\CompositionSessionInfo $item
     * @return \ArrayType\ArrayOfCompositionSessionInfo
     */
    public function addToCompositionSessionInfo(\StructType\CompositionSessionInfo $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CompositionSessionInfo) {
            throw new \InvalidArgumentException(sprintf('The CompositionSessionInfo property can only contain items of type \StructType\CompositionSessionInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CompositionSessionInfo[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\CompositionSessionInfo|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\CompositionSessionInfo|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\CompositionSessionInfo|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\CompositionSessionInfo|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\CompositionSessionInfo|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CompositionSessionInfo
     */
    public function getAttributeName()
    {
        return 'CompositionSessionInfo';
    }
}
