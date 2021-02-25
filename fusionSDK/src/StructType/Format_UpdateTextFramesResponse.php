<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_UpdateTextFramesResponse StructType
 * @subpackage Structs
 */
class Format_UpdateTextFramesResponse extends AbstractStructBase
{
    /**
     * The Format_UpdateTextFramesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Format_UpdateTextFramesResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_UpdateTextFramesResponse
     * @uses Format_UpdateTextFramesResponse::setFormat_UpdateTextFramesResult()
     * @uses Format_UpdateTextFramesResponse::setErrorMessage()
     * @param bool $format_UpdateTextFramesResult
     * @param string $errorMessage
     */
    public function __construct($format_UpdateTextFramesResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_UpdateTextFramesResult($format_UpdateTextFramesResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_UpdateTextFramesResult value
     * @return bool|null
     */
    public function getFormat_UpdateTextFramesResult()
    {
        return $this->Format_UpdateTextFramesResult;
    }
    /**
     * Set Format_UpdateTextFramesResult value
     * @param bool $format_UpdateTextFramesResult
     * @return \StructType\Format_UpdateTextFramesResponse
     */
    public function setFormat_UpdateTextFramesResult($format_UpdateTextFramesResult = null)
    {
        // validation for constraint: boolean
        if (!is_null($format_UpdateTextFramesResult) && !is_bool($format_UpdateTextFramesResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($format_UpdateTextFramesResult, true), gettype($format_UpdateTextFramesResult)), __LINE__);
        }
        $this->Format_UpdateTextFramesResult = $format_UpdateTextFramesResult;
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
     * @return \StructType\Format_UpdateTextFramesResponse
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
