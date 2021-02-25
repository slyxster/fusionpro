<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_DeleteGraphicFrameResponse StructType
 * @subpackage Structs
 */
class Format_DeleteGraphicFrameResponse extends AbstractStructBase
{
    /**
     * The Format_DeleteGraphicFrameResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Format_DeleteGraphicFrameResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_DeleteGraphicFrameResponse
     * @uses Format_DeleteGraphicFrameResponse::setFormat_DeleteGraphicFrameResult()
     * @uses Format_DeleteGraphicFrameResponse::setErrorMessage()
     * @param bool $format_DeleteGraphicFrameResult
     * @param string $errorMessage
     */
    public function __construct($format_DeleteGraphicFrameResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_DeleteGraphicFrameResult($format_DeleteGraphicFrameResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_DeleteGraphicFrameResult value
     * @return bool|null
     */
    public function getFormat_DeleteGraphicFrameResult()
    {
        return $this->Format_DeleteGraphicFrameResult;
    }
    /**
     * Set Format_DeleteGraphicFrameResult value
     * @param bool $format_DeleteGraphicFrameResult
     * @return \StructType\Format_DeleteGraphicFrameResponse
     */
    public function setFormat_DeleteGraphicFrameResult($format_DeleteGraphicFrameResult = null)
    {
        // validation for constraint: boolean
        if (!is_null($format_DeleteGraphicFrameResult) && !is_bool($format_DeleteGraphicFrameResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($format_DeleteGraphicFrameResult, true), gettype($format_DeleteGraphicFrameResult)), __LINE__);
        }
        $this->Format_DeleteGraphicFrameResult = $format_DeleteGraphicFrameResult;
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
     * @return \StructType\Format_DeleteGraphicFrameResponse
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
