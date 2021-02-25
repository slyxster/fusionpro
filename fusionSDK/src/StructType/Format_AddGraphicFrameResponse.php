<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_AddGraphicFrameResponse StructType
 * @subpackage Structs
 */
class Format_AddGraphicFrameResponse extends AbstractStructBase
{
    /**
     * The Format_AddGraphicFrameResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Format_AddGraphicFrameResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_AddGraphicFrameResponse
     * @uses Format_AddGraphicFrameResponse::setFormat_AddGraphicFrameResult()
     * @uses Format_AddGraphicFrameResponse::setErrorMessage()
     * @param bool $format_AddGraphicFrameResult
     * @param string $errorMessage
     */
    public function __construct($format_AddGraphicFrameResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_AddGraphicFrameResult($format_AddGraphicFrameResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_AddGraphicFrameResult value
     * @return bool|null
     */
    public function getFormat_AddGraphicFrameResult()
    {
        return $this->Format_AddGraphicFrameResult;
    }
    /**
     * Set Format_AddGraphicFrameResult value
     * @param bool $format_AddGraphicFrameResult
     * @return \StructType\Format_AddGraphicFrameResponse
     */
    public function setFormat_AddGraphicFrameResult($format_AddGraphicFrameResult = null)
    {
        // validation for constraint: boolean
        if (!is_null($format_AddGraphicFrameResult) && !is_bool($format_AddGraphicFrameResult)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($format_AddGraphicFrameResult, true), gettype($format_AddGraphicFrameResult)), __LINE__);
        }
        $this->Format_AddGraphicFrameResult = $format_AddGraphicFrameResult;
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
     * @return \StructType\Format_AddGraphicFrameResponse
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
