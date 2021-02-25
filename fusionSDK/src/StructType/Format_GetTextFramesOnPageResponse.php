<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_GetTextFramesOnPageResponse StructType
 * @subpackage Structs
 */
class Format_GetTextFramesOnPageResponse extends AbstractStructBase
{
    /**
     * The Format_GetTextFramesOnPageResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfTextFrame
     */
    public $Format_GetTextFramesOnPageResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_GetTextFramesOnPageResponse
     * @uses Format_GetTextFramesOnPageResponse::setFormat_GetTextFramesOnPageResult()
     * @uses Format_GetTextFramesOnPageResponse::setErrorMessage()
     * @param \ArrayType\ArrayOfTextFrame $format_GetTextFramesOnPageResult
     * @param string $errorMessage
     */
    public function __construct(\ArrayType\ArrayOfTextFrame $format_GetTextFramesOnPageResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_GetTextFramesOnPageResult($format_GetTextFramesOnPageResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_GetTextFramesOnPageResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfTextFrame|null
     */
    public function getFormat_GetTextFramesOnPageResult()
    {
        return isset($this->Format_GetTextFramesOnPageResult) ? $this->Format_GetTextFramesOnPageResult : null;
    }
    /**
     * Set Format_GetTextFramesOnPageResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfTextFrame $format_GetTextFramesOnPageResult
     * @return \StructType\Format_GetTextFramesOnPageResponse
     */
    public function setFormat_GetTextFramesOnPageResult(\ArrayType\ArrayOfTextFrame $format_GetTextFramesOnPageResult = null)
    {
        if (is_null($format_GetTextFramesOnPageResult) || (is_array($format_GetTextFramesOnPageResult) && empty($format_GetTextFramesOnPageResult))) {
            unset($this->Format_GetTextFramesOnPageResult);
        } else {
            $this->Format_GetTextFramesOnPageResult = $format_GetTextFramesOnPageResult;
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
     * @return \StructType\Format_GetTextFramesOnPageResponse
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
