<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_GetAllGraphicFrameNamesResponse StructType
 * @subpackage Structs
 */
class Format_GetAllGraphicFrameNamesResponse extends AbstractStructBase
{
    /**
     * The Format_GetAllGraphicFrameNamesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $Format_GetAllGraphicFrameNamesResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_GetAllGraphicFrameNamesResponse
     * @uses Format_GetAllGraphicFrameNamesResponse::setFormat_GetAllGraphicFrameNamesResult()
     * @uses Format_GetAllGraphicFrameNamesResponse::setErrorMessage()
     * @param \ArrayType\ArrayOfstring $format_GetAllGraphicFrameNamesResult
     * @param string $errorMessage
     */
    public function __construct(\ArrayType\ArrayOfstring $format_GetAllGraphicFrameNamesResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_GetAllGraphicFrameNamesResult($format_GetAllGraphicFrameNamesResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_GetAllGraphicFrameNamesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getFormat_GetAllGraphicFrameNamesResult()
    {
        return isset($this->Format_GetAllGraphicFrameNamesResult) ? $this->Format_GetAllGraphicFrameNamesResult : null;
    }
    /**
     * Set Format_GetAllGraphicFrameNamesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $format_GetAllGraphicFrameNamesResult
     * @return \StructType\Format_GetAllGraphicFrameNamesResponse
     */
    public function setFormat_GetAllGraphicFrameNamesResult(\ArrayType\ArrayOfstring $format_GetAllGraphicFrameNamesResult = null)
    {
        if (is_null($format_GetAllGraphicFrameNamesResult) || (is_array($format_GetAllGraphicFrameNamesResult) && empty($format_GetAllGraphicFrameNamesResult))) {
            unset($this->Format_GetAllGraphicFrameNamesResult);
        } else {
            $this->Format_GetAllGraphicFrameNamesResult = $format_GetAllGraphicFrameNamesResult;
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
     * @return \StructType\Format_GetAllGraphicFrameNamesResponse
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
