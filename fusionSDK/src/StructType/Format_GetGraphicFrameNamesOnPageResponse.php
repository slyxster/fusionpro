<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_GetGraphicFrameNamesOnPageResponse StructType
 * @subpackage Structs
 */
class Format_GetGraphicFrameNamesOnPageResponse extends AbstractStructBase
{
    /**
     * The Format_GetGraphicFrameNamesOnPageResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $Format_GetGraphicFrameNamesOnPageResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_GetGraphicFrameNamesOnPageResponse
     * @uses Format_GetGraphicFrameNamesOnPageResponse::setFormat_GetGraphicFrameNamesOnPageResult()
     * @uses Format_GetGraphicFrameNamesOnPageResponse::setErrorMessage()
     * @param \ArrayType\ArrayOfstring $format_GetGraphicFrameNamesOnPageResult
     * @param string $errorMessage
     */
    public function __construct(\ArrayType\ArrayOfstring $format_GetGraphicFrameNamesOnPageResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_GetGraphicFrameNamesOnPageResult($format_GetGraphicFrameNamesOnPageResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_GetGraphicFrameNamesOnPageResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getFormat_GetGraphicFrameNamesOnPageResult()
    {
        return isset($this->Format_GetGraphicFrameNamesOnPageResult) ? $this->Format_GetGraphicFrameNamesOnPageResult : null;
    }
    /**
     * Set Format_GetGraphicFrameNamesOnPageResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $format_GetGraphicFrameNamesOnPageResult
     * @return \StructType\Format_GetGraphicFrameNamesOnPageResponse
     */
    public function setFormat_GetGraphicFrameNamesOnPageResult(\ArrayType\ArrayOfstring $format_GetGraphicFrameNamesOnPageResult = null)
    {
        if (is_null($format_GetGraphicFrameNamesOnPageResult) || (is_array($format_GetGraphicFrameNamesOnPageResult) && empty($format_GetGraphicFrameNamesOnPageResult))) {
            unset($this->Format_GetGraphicFrameNamesOnPageResult);
        } else {
            $this->Format_GetGraphicFrameNamesOnPageResult = $format_GetGraphicFrameNamesOnPageResult;
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
     * @return \StructType\Format_GetGraphicFrameNamesOnPageResponse
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
