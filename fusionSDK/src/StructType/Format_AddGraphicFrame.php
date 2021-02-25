<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_AddGraphicFrame StructType
 * @subpackage Structs
 */
class Format_AddGraphicFrame extends AbstractStructBase
{
    /**
     * The CompositionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CompositionID;
    /**
     * The graphicFrame
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GraphicFrame
     */
    public $graphicFrame;
    /**
     * Constructor method for Format_AddGraphicFrame
     * @uses Format_AddGraphicFrame::setCompositionID()
     * @uses Format_AddGraphicFrame::setGraphicFrame()
     * @param int $compositionID
     * @param \StructType\GraphicFrame $graphicFrame
     */
    public function __construct($compositionID = null, \StructType\GraphicFrame $graphicFrame = null)
    {
        $this
            ->setCompositionID($compositionID)
            ->setGraphicFrame($graphicFrame);
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
     * @return \StructType\Format_AddGraphicFrame
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
     * Get graphicFrame value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GraphicFrame|null
     */
    public function getGraphicFrame()
    {
        return isset($this->graphicFrame) ? $this->graphicFrame : null;
    }
    /**
     * Set graphicFrame value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\GraphicFrame $graphicFrame
     * @return \StructType\Format_AddGraphicFrame
     */
    public function setGraphicFrame(\StructType\GraphicFrame $graphicFrame = null)
    {
        if (is_null($graphicFrame) || (is_array($graphicFrame) && empty($graphicFrame))) {
            unset($this->graphicFrame);
        } else {
            $this->graphicFrame = $graphicFrame;
        }
        return $this;
    }
}
