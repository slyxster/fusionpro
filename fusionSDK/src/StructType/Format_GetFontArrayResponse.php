<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_GetFontArrayResponse StructType
 * @subpackage Structs
 */
class Format_GetFontArrayResponse extends AbstractStructBase
{
    /**
     * The Format_GetFontArrayResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $Format_GetFontArrayResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_GetFontArrayResponse
     * @uses Format_GetFontArrayResponse::setFormat_GetFontArrayResult()
     * @uses Format_GetFontArrayResponse::setErrorMessage()
     * @param \ArrayType\ArrayOfstring $format_GetFontArrayResult
     * @param string $errorMessage
     */
    public function __construct(\ArrayType\ArrayOfstring $format_GetFontArrayResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_GetFontArrayResult($format_GetFontArrayResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_GetFontArrayResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getFormat_GetFontArrayResult()
    {
        return isset($this->Format_GetFontArrayResult) ? $this->Format_GetFontArrayResult : null;
    }
    /**
     * Set Format_GetFontArrayResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $format_GetFontArrayResult
     * @return \StructType\Format_GetFontArrayResponse
     */
    public function setFormat_GetFontArrayResult(\ArrayType\ArrayOfstring $format_GetFontArrayResult = null)
    {
        if (is_null($format_GetFontArrayResult) || (is_array($format_GetFontArrayResult) && empty($format_GetFontArrayResult))) {
            unset($this->Format_GetFontArrayResult);
        } else {
            $this->Format_GetFontArrayResult = $format_GetFontArrayResult;
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
     * @return \StructType\Format_GetFontArrayResponse
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
