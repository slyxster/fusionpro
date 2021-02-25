<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportBackStatusRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReportBackStatusRequest
 * @subpackage Structs
 */
class ReportBackStatusRequest extends AbstractStructBase
{
    /**
     * The CompletionDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CompletionDateTime;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ID;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Message;
    /**
     * The ReturnCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ReturnCode;
    /**
     * The TotalPages
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalPages;
    /**
     * The TotalRecords
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalRecords;
    /**
     * The status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $status;
    /**
     * Constructor method for ReportBackStatusRequest
     * @uses ReportBackStatusRequest::setCompletionDateTime()
     * @uses ReportBackStatusRequest::setID()
     * @uses ReportBackStatusRequest::setMessage()
     * @uses ReportBackStatusRequest::setReturnCode()
     * @uses ReportBackStatusRequest::setTotalPages()
     * @uses ReportBackStatusRequest::setTotalRecords()
     * @uses ReportBackStatusRequest::setStatus()
     * @param string $completionDateTime
     * @param int $iD
     * @param string $message
     * @param int $returnCode
     * @param int $totalPages
     * @param int $totalRecords
     * @param string $status
     */
    public function __construct($completionDateTime = null, $iD = null, $message = null, $returnCode = null, $totalPages = null, $totalRecords = null, $status = null)
    {
        $this
            ->setCompletionDateTime($completionDateTime)
            ->setID($iD)
            ->setMessage($message)
            ->setReturnCode($returnCode)
            ->setTotalPages($totalPages)
            ->setTotalRecords($totalRecords)
            ->setStatus($status);
    }
    /**
     * Get CompletionDateTime value
     * @return string|null
     */
    public function getCompletionDateTime()
    {
        return $this->CompletionDateTime;
    }
    /**
     * Set CompletionDateTime value
     * @param string $completionDateTime
     * @return \StructType\ReportBackStatusRequest
     */
    public function setCompletionDateTime($completionDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($completionDateTime) && !is_string($completionDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($completionDateTime, true), gettype($completionDateTime)), __LINE__);
        }
        $this->CompletionDateTime = $completionDateTime;
        return $this;
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \StructType\ReportBackStatusRequest
     */
    public function setID($iD = null)
    {
        // validation for constraint: int
        if (!is_null($iD) && !(is_int($iD) || ctype_digit($iD))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get Message value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessage()
    {
        return isset($this->Message) ? $this->Message : null;
    }
    /**
     * Set Message value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $message
     * @return \StructType\ReportBackStatusRequest
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        if (is_null($message) || (is_array($message) && empty($message))) {
            unset($this->Message);
        } else {
            $this->Message = $message;
        }
        return $this;
    }
    /**
     * Get ReturnCode value
     * @return int|null
     */
    public function getReturnCode()
    {
        return $this->ReturnCode;
    }
    /**
     * Set ReturnCode value
     * @param int $returnCode
     * @return \StructType\ReportBackStatusRequest
     */
    public function setReturnCode($returnCode = null)
    {
        // validation for constraint: int
        if (!is_null($returnCode) && !(is_int($returnCode) || ctype_digit($returnCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($returnCode, true), gettype($returnCode)), __LINE__);
        }
        $this->ReturnCode = $returnCode;
        return $this;
    }
    /**
     * Get TotalPages value
     * @return int|null
     */
    public function getTotalPages()
    {
        return $this->TotalPages;
    }
    /**
     * Set TotalPages value
     * @param int $totalPages
     * @return \StructType\ReportBackStatusRequest
     */
    public function setTotalPages($totalPages = null)
    {
        // validation for constraint: int
        if (!is_null($totalPages) && !(is_int($totalPages) || ctype_digit($totalPages))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalPages, true), gettype($totalPages)), __LINE__);
        }
        $this->TotalPages = $totalPages;
        return $this;
    }
    /**
     * Get TotalRecords value
     * @return int|null
     */
    public function getTotalRecords()
    {
        return $this->TotalRecords;
    }
    /**
     * Set TotalRecords value
     * @param int $totalRecords
     * @return \StructType\ReportBackStatusRequest
     */
    public function setTotalRecords($totalRecords = null)
    {
        // validation for constraint: int
        if (!is_null($totalRecords) && !(is_int($totalRecords) || ctype_digit($totalRecords))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalRecords, true), gettype($totalRecords)), __LINE__);
        }
        $this->TotalRecords = $totalRecords;
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set status value
     * @uses \EnumType\JobStatus::valueIsValid()
     * @uses \EnumType\JobStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\ReportBackStatusRequest
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\JobStatus::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\JobStatus', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\JobStatus::getValidValues())), __LINE__);
        }
        $this->status = $status;
        return $this;
    }
}
