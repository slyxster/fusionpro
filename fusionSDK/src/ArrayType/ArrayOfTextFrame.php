<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTextFrame ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTextFrame
 * @subpackage Arrays
 */
class ArrayOfTextFrame extends AbstractStructArrayBase
{
    /**
     * The TextFrame
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TextFrame[]
     */
    public $TextFrame;
    /**
     * Constructor method for ArrayOfTextFrame
     * @uses ArrayOfTextFrame::setTextFrame()
     * @param \StructType\TextFrame[] $textFrame
     */
    public function __construct(array $textFrame = array())
    {
        $this
            ->setTextFrame($textFrame);
    }
    /**
     * Get TextFrame value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TextFrame[]|null
     */
    public function getTextFrame()
    {
        return isset($this->TextFrame) ? $this->TextFrame : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTextFrame method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTextFrame method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTextFrameForArrayConstraintsFromSetTextFrame(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTextFrameTextFrameItem) {
            // validation for constraint: itemType
            if (!$arrayOfTextFrameTextFrameItem instanceof \StructType\TextFrame) {
                $invalidValues[] = is_object($arrayOfTextFrameTextFrameItem) ? get_class($arrayOfTextFrameTextFrameItem) : sprintf('%s(%s)', gettype($arrayOfTextFrameTextFrameItem), var_export($arrayOfTextFrameTextFrameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TextFrame property can only contain items of type \StructType\TextFrame, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TextFrame value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\TextFrame[] $textFrame
     * @return \ArrayType\ArrayOfTextFrame
     */
    public function setTextFrame(array $textFrame = array())
    {
        // validation for constraint: array
        if ('' !== ($textFrameArrayErrorMessage = self::validateTextFrameForArrayConstraintsFromSetTextFrame($textFrame))) {
            throw new \InvalidArgumentException($textFrameArrayErrorMessage, __LINE__);
        }
        if (is_null($textFrame) || (is_array($textFrame) && empty($textFrame))) {
            unset($this->TextFrame);
        } else {
            $this->TextFrame = $textFrame;
        }
        return $this;
    }
    /**
     * Add item to TextFrame value
     * @throws \InvalidArgumentException
     * @param \StructType\TextFrame $item
     * @return \ArrayType\ArrayOfTextFrame
     */
    public function addToTextFrame(\StructType\TextFrame $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TextFrame) {
            throw new \InvalidArgumentException(sprintf('The TextFrame property can only contain items of type \StructType\TextFrame, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TextFrame[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\TextFrame|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\TextFrame|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\TextFrame|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\TextFrame|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\TextFrame|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TextFrame
     */
    public function getAttributeName()
    {
        return 'TextFrame';
    }
}
