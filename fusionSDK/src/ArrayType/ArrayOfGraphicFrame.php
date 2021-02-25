<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfGraphicFrame ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfGraphicFrame
 * @subpackage Arrays
 */
class ArrayOfGraphicFrame extends AbstractStructArrayBase
{
    /**
     * The GraphicFrame
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GraphicFrame[]
     */
    public $GraphicFrame;
    /**
     * Constructor method for ArrayOfGraphicFrame
     * @uses ArrayOfGraphicFrame::setGraphicFrame()
     * @param \StructType\GraphicFrame[] $graphicFrame
     */
    public function __construct(array $graphicFrame = array())
    {
        $this
            ->setGraphicFrame($graphicFrame);
    }
    /**
     * Get GraphicFrame value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GraphicFrame[]|null
     */
    public function getGraphicFrame()
    {
        return isset($this->GraphicFrame) ? $this->GraphicFrame : null;
    }
    /**
     * This method is responsible for validating the values passed to the setGraphicFrame method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGraphicFrame method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGraphicFrameForArrayConstraintsFromSetGraphicFrame(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfGraphicFrameGraphicFrameItem) {
            // validation for constraint: itemType
            if (!$arrayOfGraphicFrameGraphicFrameItem instanceof \StructType\GraphicFrame) {
                $invalidValues[] = is_object($arrayOfGraphicFrameGraphicFrameItem) ? get_class($arrayOfGraphicFrameGraphicFrameItem) : sprintf('%s(%s)', gettype($arrayOfGraphicFrameGraphicFrameItem), var_export($arrayOfGraphicFrameGraphicFrameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GraphicFrame property can only contain items of type \StructType\GraphicFrame, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set GraphicFrame value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\GraphicFrame[] $graphicFrame
     * @return \ArrayType\ArrayOfGraphicFrame
     */
    public function setGraphicFrame(array $graphicFrame = array())
    {
        // validation for constraint: array
        if ('' !== ($graphicFrameArrayErrorMessage = self::validateGraphicFrameForArrayConstraintsFromSetGraphicFrame($graphicFrame))) {
            throw new \InvalidArgumentException($graphicFrameArrayErrorMessage, __LINE__);
        }
        if (is_null($graphicFrame) || (is_array($graphicFrame) && empty($graphicFrame))) {
            unset($this->GraphicFrame);
        } else {
            $this->GraphicFrame = $graphicFrame;
        }
        return $this;
    }
    /**
     * Add item to GraphicFrame value
     * @throws \InvalidArgumentException
     * @param \StructType\GraphicFrame $item
     * @return \ArrayType\ArrayOfGraphicFrame
     */
    public function addToGraphicFrame(\StructType\GraphicFrame $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\GraphicFrame) {
            throw new \InvalidArgumentException(sprintf('The GraphicFrame property can only contain items of type \StructType\GraphicFrame, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GraphicFrame[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\GraphicFrame|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\GraphicFrame|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\GraphicFrame|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\GraphicFrame|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\GraphicFrame|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string GraphicFrame
     */
    public function getAttributeName()
    {
        return 'GraphicFrame';
    }
}
