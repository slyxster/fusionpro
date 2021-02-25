<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_GetGraphicFramesOnPageResponse StructType
 * @subpackage Structs
 */
class Format_GetGraphicFramesOnPageResponse extends AbstractStructBase
{
    /**
     * The Format_GetGraphicFramesOnPageResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfGraphicFrame
     */
    public $Format_GetGraphicFramesOnPageResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_GetGraphicFramesOnPageResponse
     * @uses Format_GetGraphicFramesOnPageResponse::setFormat_GetGraphicFramesOnPageResult()
     * @uses Format_GetGraphicFramesOnPageResponse::setErrorMessage()
     * @param \ArrayType\ArrayOfGraphicFrame $format_GetGraphicFramesOnPageResult
     * @param string $errorMessage
     */
    public function __construct(\ArrayType\ArrayOfGraphicFrame $format_GetGraphicFramesOnPageResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_GetGraphicFramesOnPageResult($format_GetGraphicFramesOnPageResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_GetGraphicFramesOnPageResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfGraphicFrame|null
     */
    public function getFormat_GetGraphicFramesOnPageResult()
    {
        return isset($this->Format_GetGraphicFramesOnPageResult) ? $this->Format_GetGraphicFramesOnPageResult : null;
    }
    /**
     * Set Format_GetGraphicFramesOnPageResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfGraphicFrame $format_GetGraphicFramesOnPageResult
     * @return \StructType\Format_GetGraphicFramesOnPageResponse
     */
    public function setFormat_GetGraphicFramesOnPageResult(\ArrayType\ArrayOfGraphicFrame $format_GetGraphicFramesOnPageResult = null)
    {
        if (is_null($format_GetGraphicFramesOnPageResult) || (is_array($format_GetGraphicFramesOnPageResult) && empty($format_GetGraphicFramesOnPageResult))) {
            unset($this->Format_GetGraphicFramesOnPageResult);
        } else {
            $this->Format_GetGraphicFramesOnPageResult = $format_GetGraphicFramesOnPageResult;
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
     * @return \StructType\Format_GetGraphicFramesOnPageResponse
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
