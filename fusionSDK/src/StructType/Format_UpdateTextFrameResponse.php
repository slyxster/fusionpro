<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_UpdateTextFrameResponse StructType
 * @subpackage Structs
 */
class Format_UpdateTextFrameResponse extends AbstractStructBase
{
    /**
     * The Format_UpdateTextFrameResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Format_UpdateTextFrameResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_UpdateTextFrameResponse
     * @uses Format_UpdateTextFrameResponse::setFormat_UpdateTextFrameResult()
     * @uses Format_UpdateTextFrameResponse::setErrorMessage()
     * @param bool $format_UpdateTextFrameResult
     * @param string $errorMessage
     */
    public function __construct($format_UpdateTextFrameResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_UpdateTextFrameResult($format_UpdateTextFrameResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_UpdateTextFrameResult value
     * @return bool|null
     */
    public function getFormat_UpdateTextFrameResult()
    {
        return $this->Format_UpdateTextFrameResult;
    }
    /**
     * Set Format_UpdateTextFrameResult value
     * @param bool $format_UpdateTextFrameResult
     * @return \StructType\Format_UpdateTextFrameResponse
     */
    public function setFormat_UpdateTextFrameResult($format_UpdateTextFrameResult = null)
    {
        // validation for constraint: boolean
        if (!is_null($format_UpdateTextFrameResult) && !is_bool($format_UpdateTextFrameResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($format_UpdateTextFrameResult, true), gettype($format_UpdateTextFrameResult)), __LINE__);
        }
        $this->Format_UpdateTextFrameResult = $format_UpdateTextFrameResult;
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
     * @return \StructType\Format_UpdateTextFrameResponse
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
