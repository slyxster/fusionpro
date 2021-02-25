<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_UpdateTextFrame StructType
 * @subpackage Structs
 */
class Format_UpdateTextFrame extends AbstractStructBase
{
    /**
     * The CompositionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CompositionID;
    /**
     * The textFrame
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TextFrame
     */
    public $textFrame;
    /**
     * Constructor method for Format_UpdateTextFrame
     * @uses Format_UpdateTextFrame::setCompositionID()
     * @uses Format_UpdateTextFrame::setTextFrame()
     * @param int $compositionID
     * @param \StructType\TextFrame $textFrame
     */
    public function __construct($compositionID = null, \StructType\TextFrame $textFrame = null)
    {
        $this
            ->setCompositionID($compositionID)
            ->setTextFrame($textFrame);
    }
    /**
     * Get CompositionID value
     * @return int|null
     */
    public function getCompositionID()
    {
        return $this->CompositionID;
    }
    /**
     * Set CompositionID value
     * @param int $compositionID
     * @return \StructType\Format_UpdateTextFrame
     */
    public function setCompositionID($compositionID = null)
    {
        // validation for constraint: int
        if (!is_null($compositionID) && !(is_int($compositionID) || ctype_digit($compositionID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($compositionID, true), gettype($compositionID)), __LINE__);
        }
        $this->CompositionID = $compositionID;
        return $this;
    }
    /**
     * Get textFrame value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TextFrame|null
     */
    public function getTextFrame()
    {
        return isset($this->textFrame) ? $this->textFrame : null;
    }
    /**
     * Set textFrame value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TextFrame $textFrame
     * @return \StructType\Format_UpdateTextFrame
     */
    public function setTextFrame(\StructType\TextFrame $textFrame = null)
    {
        if (is_null($textFrame) || (is_array($textFrame) && empty($textFrame))) {
            unset($this->textFrame);
        } else {
            $this->textFrame = $textFrame;
        }
        return $this;
    }
}
