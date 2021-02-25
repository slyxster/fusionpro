<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_GetTextFrameResponse StructType
 * @subpackage Structs
 */
class Format_GetTextFrameResponse extends AbstractStructBase
{
    /**
     * The Format_GetTextFrameResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TextFrame
     */
    public $Format_GetTextFrameResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_GetTextFrameResponse
     * @uses Format_GetTextFrameResponse::setFormat_GetTextFrameResult()
     * @uses Format_GetTextFrameResponse::setErrorMessage()
     * @param \StructType\TextFrame $format_GetTextFrameResult
     * @param string $errorMessage
     */
    public function __construct(\StructType\TextFrame $format_GetTextFrameResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_GetTextFrameResult($format_GetTextFrameResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_GetTextFrameResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TextFrame|null
     */
    public function getFormat_GetTextFrameResult()
    {
        return isset($this->Format_GetTextFrameResult) ? $this->Format_GetTextFrameResult : null;
    }
    /**
     * Set Format_GetTextFrameResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TextFrame $format_GetTextFrameResult
     * @return \StructType\Format_GetTextFrameResponse
     */
    public function setFormat_GetTextFrameResult(\StructType\TextFrame $format_GetTextFrameResult = null)
    {
        if (is_null($format_GetTextFrameResult) || (is_array($format_GetTextFrameResult) && empty($format_GetTextFrameResult))) {
            unset($this->Format_GetTextFrameResult);
        } else {
            $this->Format_GetTextFrameResult = $format_GetTextFrameResult;
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
     * @return \StructType\Format_GetTextFrameResponse
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
