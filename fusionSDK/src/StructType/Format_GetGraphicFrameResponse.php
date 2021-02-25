<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_GetGraphicFrameResponse StructType
 * @subpackage Structs
 */
class Format_GetGraphicFrameResponse extends AbstractStructBase
{
    /**
     * The Format_GetGraphicFrameResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GraphicFrame
     */
    public $Format_GetGraphicFrameResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_GetGraphicFrameResponse
     * @uses Format_GetGraphicFrameResponse::setFormat_GetGraphicFrameResult()
     * @uses Format_GetGraphicFrameResponse::setErrorMessage()
     * @param \StructType\GraphicFrame $format_GetGraphicFrameResult
     * @param string $errorMessage
     */
    public function __construct(\StructType\GraphicFrame $format_GetGraphicFrameResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_GetGraphicFrameResult($format_GetGraphicFrameResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_GetGraphicFrameResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GraphicFrame|null
     */
    public function getFormat_GetGraphicFrameResult()
    {
        return isset($this->Format_GetGraphicFrameResult) ? $this->Format_GetGraphicFrameResult : null;
    }
    /**
     * Set Format_GetGraphicFrameResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\GraphicFrame $format_GetGraphicFrameResult
     * @return \StructType\Format_GetGraphicFrameResponse
     */
    public function setFormat_GetGraphicFrameResult(\StructType\GraphicFrame $format_GetGraphicFrameResult = null)
    {
        if (is_null($format_GetGraphicFrameResult) || (is_array($format_GetGraphicFrameResult) && empty($format_GetGraphicFrameResult))) {
            unset($this->Format_GetGraphicFrameResult);
        } else {
            $this->Format_GetGraphicFrameResult = $format_GetGraphicFrameResult;
        }
        return $this;
    }
    /**
     * Get ErrorMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getErrorMessage()
    {
        return isset($this->ErrorMessage) ? $this->ErrorMessage : null;
    }
    /**
     * Set ErrorMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $errorMessage
     * @return \StructType\Format_GetGraphicFrameResponse
     */
    public function setErrorMessage($errorMessage = null)
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        if (is_null($errorMessage) || (is_array($errorMessage) && empty($errorMessage))) {
            unset($this->ErrorMessage);
        } else {
            $this->ErrorMessage = $errorMessage;
        }
        return $this;
    }
}
