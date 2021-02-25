<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_GetAllTextFrameNamesResponse StructType
 * @subpackage Structs
 */
class Format_GetAllTextFrameNamesResponse extends AbstractStructBase
{
    /**
     * The Format_GetAllTextFrameNamesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $Format_GetAllTextFrameNamesResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_GetAllTextFrameNamesResponse
     * @uses Format_GetAllTextFrameNamesResponse::setFormat_GetAllTextFrameNamesResult()
     * @uses Format_GetAllTextFrameNamesResponse::setErrorMessage()
     * @param \ArrayType\ArrayOfstring $format_GetAllTextFrameNamesResult
     * @param string $errorMessage
     */
    public function __construct(\ArrayType\ArrayOfstring $format_GetAllTextFrameNamesResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_GetAllTextFrameNamesResult($format_GetAllTextFrameNamesResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_GetAllTextFrameNamesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getFormat_GetAllTextFrameNamesResult()
    {
        return isset($this->Format_GetAllTextFrameNamesResult) ? $this->Format_GetAllTextFrameNamesResult : null;
    }
    /**
     * Set Format_GetAllTextFrameNamesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $format_GetAllTextFrameNamesResult
     * @return \StructType\Format_GetAllTextFrameNamesResponse
     */
    public function setFormat_GetAllTextFrameNamesResult(\ArrayType\ArrayOfstring $format_GetAllTextFrameNamesResult = null)
    {
        if (is_null($format_GetAllTextFrameNamesResult) || (is_array($format_GetAllTextFrameNamesResult) && empty($format_GetAllTextFrameNamesResult))) {
            unset($this->Format_GetAllTextFrameNamesResult);
        } else {
            $this->Format_GetAllTextFrameNamesResult = $format_GetAllTextFrameNamesResult;
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
     * @return \StructType\Format_GetAllTextFrameNamesResponse
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
