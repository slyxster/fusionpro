<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_GetTextFrameNamesOnPageResponse StructType
 * @subpackage Structs
 */
class Format_GetTextFrameNamesOnPageResponse extends AbstractStructBase
{
    /**
     * The Format_GetTextFrameNamesOnPageResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $Format_GetTextFrameNamesOnPageResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_GetTextFrameNamesOnPageResponse
     * @uses Format_GetTextFrameNamesOnPageResponse::setFormat_GetTextFrameNamesOnPageResult()
     * @uses Format_GetTextFrameNamesOnPageResponse::setErrorMessage()
     * @param \ArrayType\ArrayOfstring $format_GetTextFrameNamesOnPageResult
     * @param string $errorMessage
     */
    public function __construct(\ArrayType\ArrayOfstring $format_GetTextFrameNamesOnPageResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_GetTextFrameNamesOnPageResult($format_GetTextFrameNamesOnPageResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_GetTextFrameNamesOnPageResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getFormat_GetTextFrameNamesOnPageResult()
    {
        return isset($this->Format_GetTextFrameNamesOnPageResult) ? $this->Format_GetTextFrameNamesOnPageResult : null;
    }
    /**
     * Set Format_GetTextFrameNamesOnPageResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $format_GetTextFrameNamesOnPageResult
     * @return \StructType\Format_GetTextFrameNamesOnPageResponse
     */
    public function setFormat_GetTextFrameNamesOnPageResult(\ArrayType\ArrayOfstring $format_GetTextFrameNamesOnPageResult = null)
    {
        if (is_null($format_GetTextFrameNamesOnPageResult) || (is_array($format_GetTextFrameNamesOnPageResult) && empty($format_GetTextFrameNamesOnPageResult))) {
            unset($this->Format_GetTextFrameNamesOnPageResult);
        } else {
            $this->Format_GetTextFrameNamesOnPageResult = $format_GetTextFrameNamesOnPageResult;
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
     * @return \StructType\Format_GetTextFrameNamesOnPageResponse
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
