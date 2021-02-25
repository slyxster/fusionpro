<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_UpdateTextFrames StructType
 * @subpackage Structs
 */
class Format_UpdateTextFrames extends AbstractStructBase
{
    /**
     * The CompositionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CompositionID;
    /**
     * The textFrames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfTextFrame
     */
    public $textFrames;
    /**
     * Constructor method for Format_UpdateTextFrames
     * @uses Format_UpdateTextFrames::setCompositionID()
     * @uses Format_UpdateTextFrames::setTextFrames()
     * @param int $compositionID
     * @param \ArrayType\ArrayOfTextFrame $textFrames
     */
    public function __construct($compositionID = null, \ArrayType\ArrayOfTextFrame $textFrames = null)
    {
        $this
            ->setCompositionID($compositionID)
            ->setTextFrames($textFrames);
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
     * @return \StructType\Format_UpdateTextFrames
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
     * Get textFrames value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfTextFrame|null
     */
    public function getTextFrames()
    {
        return isset($this->textFrames) ? $this->textFrames : null;
    }
    /**
     * Set textFrames value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfTextFrame $textFrames
     * @return \StructType\Format_UpdateTextFrames
     */
    public function setTextFrames(\ArrayType\ArrayOfTextFrame $textFrames = null)
    {
        if (is_null($textFrames) || (is_array($textFrames) && empty($textFrames))) {
            unset($this->textFrames);
        } else {
            $this->textFrames = $textFrames;
        }
        return $this;
    }
}
