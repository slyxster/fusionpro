<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_GetNumberOfBodyPagesResponse StructType
 * @subpackage Structs
 */
class Format_GetNumberOfBodyPagesResponse extends AbstractStructBase
{
    /**
     * The Format_GetNumberOfBodyPagesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Format_GetNumberOfBodyPagesResult;
    /**
     * The ErrorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ErrorMessage;
    /**
     * Constructor method for Format_GetNumberOfBodyPagesResponse
     * @uses Format_GetNumberOfBodyPagesResponse::setFormat_GetNumberOfBodyPagesResult()
     * @uses Format_GetNumberOfBodyPagesResponse::setErrorMessage()
     * @param int $format_GetNumberOfBodyPagesResult
     * @param string $errorMessage
     */
    public function __construct($format_GetNumberOfBodyPagesResult = null, $errorMessage = null)
    {
        $this
            ->setFormat_GetNumberOfBodyPagesResult($format_GetNumberOfBodyPagesResult)
            ->setErrorMessage($errorMessage);
    }
    /**
     * Get Format_GetNumberOfBodyPagesResult value
     * @return int|null
     */
    public function getFormat_GetNumberOfBodyPagesResult()
    {
        return $this->Format_GetNumberOfBodyPagesResult;
    }
    /**
     * Set Format_GetNumberOfBodyPagesResult value
     * @param int $format_GetNumberOfBodyPagesResult
     * @return \StructType\Format_GetNumberOfBodyPagesResponse
     */
    public function setFormat_GetNumberOfBodyPagesResult($format_GetNumberOfBodyPagesResult = null)
    {
        // validation for constraint: int
        if (!is_null($format_GetNumberOfBodyPagesResult) && !(is_int($format_GetNumberOfBodyPagesResult) || ctype_digit($format_GetNumberOfBodyPagesResult))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($format_GetNumberOfBodyPagesResult, true), gettype($format_GetNumberOfBodyPagesResult)), __LINE__);
        }
        $this->Format_GetNumberOfBodyPagesResult = $format_GetNumberOfBodyPagesResult;
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
     * @return \StructType\Format_GetNumberOfBodyPagesResponse
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
