<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_UpdateGraphicFrameResponse StructType
 * @subpackage Structs
 */
class Format_UpdateGraphicFrameResponse extends AbstractStructBase
{
    /**
     * The Format_UpdateGraphicFrameResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Format_UpdateGraphicFrameResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_UpdateGraphicFrameResponse
     * @uses Format_UpdateGraphicFrameResponse::setFormat_UpdateGraphicFrameResult()
     * @uses Format_UpdateGraphicFrameResponse::setErrorMessage()
     * @param bool $format_UpdateGraphicFrameResult
     * @param string $errorMessage
     */
    public function __construct($format_UpdateGraphicFrameResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_UpdateGraphicFrameResult($format_UpdateGraphicFrameResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_UpdateGraphicFrameResult value
     * @return bool|null
     */
    public function getFormat_UpdateGraphicFrameResult()
    {
        return $this->Format_UpdateGraphicFrameResult;
    }
    /**
     * Set Format_UpdateGraphicFrameResult value
     * @param bool $format_UpdateGraphicFrameResult
     * @return \StructType\Format_UpdateGraphicFrameResponse
     */
    public function setFormat_UpdateGraphicFrameResult($format_UpdateGraphicFrameResult = null)
    {
        // validation for constraint: boolean
        if (!is_null($format_UpdateGraphicFrameResult) && !is_bool($format_UpdateGraphicFrameResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($format_UpdateGraphicFrameResult, true), gettype($format_UpdateGraphicFrameResult)), __LINE__);
        }
        $this->Format_UpdateGraphicFrameResult = $format_UpdateGraphicFrameResult;
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
     * @return \StructType\Format_UpdateGraphicFrameResponse
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
