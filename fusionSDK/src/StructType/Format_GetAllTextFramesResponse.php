<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_GetAllTextFramesResponse StructType
 * @subpackage Structs
 */
class Format_GetAllTextFramesResponse extends AbstractStructBase
{
    /**
     * The Format_GetAllTextFramesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfTextFrame
     */
    public $Format_GetAllTextFramesResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_GetAllTextFramesResponse
     * @uses Format_GetAllTextFramesResponse::setFormat_GetAllTextFramesResult()
     * @uses Format_GetAllTextFramesResponse::setErrorMessage()
     * @param \ArrayType\ArrayOfTextFrame $format_GetAllTextFramesResult
     * @param string $errorMessage
     */
    public function __construct(\ArrayType\ArrayOfTextFrame $format_GetAllTextFramesResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_GetAllTextFramesResult($format_GetAllTextFramesResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_GetAllTextFramesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfTextFrame|null
     */
    public function getFormat_GetAllTextFramesResult()
    {
        return isset($this->Format_GetAllTextFramesResult) ? $this->Format_GetAllTextFramesResult : null;
    }
    /**
     * Set Format_GetAllTextFramesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfTextFrame $format_GetAllTextFramesResult
     * @return \StructType\Format_GetAllTextFramesResponse
     */
    public function setFormat_GetAllTextFramesResult(\ArrayType\ArrayOfTextFrame $format_GetAllTextFramesResult = null)
    {
        if (is_null($format_GetAllTextFramesResult) || (is_array($format_GetAllTextFramesResult) && empty($format_GetAllTextFramesResult))) {
            unset($this->Format_GetAllTextFramesResult);
        } else {
            $this->Format_GetAllTextFramesResult = $format_GetAllTextFramesResult;
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
     * @return \StructType\Format_GetAllTextFramesResponse
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
