<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_GetAllGraphicFramesResponse StructType
 * @subpackage Structs
 */
class Format_GetAllGraphicFramesResponse extends AbstractStructBase
{
    /**
     * The Format_GetAllGraphicFramesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfGraphicFrame
     */
    public $Format_GetAllGraphicFramesResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_GetAllGraphicFramesResponse
     * @uses Format_GetAllGraphicFramesResponse::setFormat_GetAllGraphicFramesResult()
     * @uses Format_GetAllGraphicFramesResponse::setErrorMessage()
     * @param \ArrayType\ArrayOfGraphicFrame $format_GetAllGraphicFramesResult
     * @param string $errorMessage
     */
    public function __construct(\ArrayType\ArrayOfGraphicFrame $format_GetAllGraphicFramesResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_GetAllGraphicFramesResult($format_GetAllGraphicFramesResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_GetAllGraphicFramesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfGraphicFrame|null
     */
    public function getFormat_GetAllGraphicFramesResult()
    {
        return isset($this->Format_GetAllGraphicFramesResult) ? $this->Format_GetAllGraphicFramesResult : null;
    }
    /**
     * Set Format_GetAllGraphicFramesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfGraphicFrame $format_GetAllGraphicFramesResult
     * @return \StructType\Format_GetAllGraphicFramesResponse
     */
    public function setFormat_GetAllGraphicFramesResult(\ArrayType\ArrayOfGraphicFrame $format_GetAllGraphicFramesResult = null)
    {
        if (is_null($format_GetAllGraphicFramesResult) || (is_array($format_GetAllGraphicFramesResult) && empty($format_GetAllGraphicFramesResult))) {
            unset($this->Format_GetAllGraphicFramesResult);
        } else {
            $this->Format_GetAllGraphicFramesResult = $format_GetAllGraphicFramesResult;
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
     * @return \StructType\Format_GetAllGraphicFramesResponse
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
