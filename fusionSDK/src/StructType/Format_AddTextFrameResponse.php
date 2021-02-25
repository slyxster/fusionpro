<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_AddTextFrameResponse StructType
 * @subpackage Structs
 */
class Format_AddTextFrameResponse extends AbstractStructBase
{
    /**
     * The Format_AddTextFrameResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Format_AddTextFrameResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_AddTextFrameResponse
     * @uses Format_AddTextFrameResponse::setFormat_AddTextFrameResult()
     * @uses Format_AddTextFrameResponse::setErrorMessage()
     * @param bool $format_AddTextFrameResult
     * @param string $errorMessage
     */
    public function __construct($format_AddTextFrameResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_AddTextFrameResult($format_AddTextFrameResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_AddTextFrameResult value
     * @return bool|null
     */
    public function getFormat_AddTextFrameResult()
    {
        return $this->Format_AddTextFrameResult;
    }
    /**
     * Set Format_AddTextFrameResult value
     * @param bool $format_AddTextFrameResult
     * @return \StructType\Format_AddTextFrameResponse
     */
    public function setFormat_AddTextFrameResult($format_AddTextFrameResult = null)
    {
        // validation for constraint: boolean
        if (!is_null($format_AddTextFrameResult) && !is_bool($format_AddTextFrameResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($format_AddTextFrameResult, true), gettype($format_AddTextFrameResult)), __LINE__);
        }
        $this->Format_AddTextFrameResult = $format_AddTextFrameResult;
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
     * @return \StructType\Format_AddTextFrameResponse
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
