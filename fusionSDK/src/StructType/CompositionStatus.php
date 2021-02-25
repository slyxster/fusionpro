<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompositionStatus StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CompositionStatus
 * @subpackage Structs
 */
class CompositionStatus extends AbstractStructBase
{
    /**
     * The CompletionDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CompletionDateTime;
    /**
     * The JobStatus
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $JobStatus;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Message;
    /**
     * The PercentComplete
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PercentComplete;
    /**
     * The ProcessID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ProcessID;
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
     * The WorkingFolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WorkingFolder;
    /**
     * Constructor method for CompositionStatus
     * @uses CompositionStatus::setCompletionDateTime()
     * @uses CompositionStatus::setJobStatus()
     * @uses CompositionStatus::setMessage()
     * @uses CompositionStatus::setPercentComplete()
     * @uses CompositionStatus::setProcessID()
     * @uses CompositionStatus::setReturnCode()
     * @uses CompositionStatus::setTotalPages()
     * @uses CompositionStatus::setTotalRecords()
     * @uses CompositionStatus::setWorkingFolder()
     * @param string $completionDateTime
     * @param string $jobStatus
     * @param string $message
     * @param int $percentComplete
     * @param int $processID
     * @param int $returnCode
     * @param int $totalPages
     * @param int $totalRecords
     * @param string $workingFolder
     */
    public function __construct($completionDateTime = null, $jobStatus = null, $message = null, $percentComplete = null, $processID = null, $returnCode = null, $totalPages = null, $totalRecords = null, $workingFolder = null)
    {
        $this
            ->setCompletionDateTime($completionDateTime)
            ->setJobStatus($jobStatus)
            ->setMessage($message)
            ->setPercentComplete($percentComplete)
            ->setProcessID($processID)
            ->setReturnCode($returnCode)
            ->setTotalPages($totalPages)
            ->setTotalRecords($totalRecords)
            ->setWorkingFolder($workingFolder);
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
     * @return \StructType\CompositionStatus
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
     * Get JobStatus value
     * @return string|null
     */
    public function getJobStatus()
    {
        return $this->JobStatus;
    }
    /**
     * Set JobStatus value
     * @uses \EnumType\JobStatus::valueIsValid()
     * @uses \EnumType\JobStatus::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $jobStatus
     * @return \StructType\CompositionStatus
     */
    public function setJobStatus($jobStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\JobStatus::valueIsValid($jobStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\JobStatus', is_array($jobStatus) ? implode(', ', $jobStatus) : var_export($jobStatus, true), implode(', ', \EnumType\JobStatus::getValidValues())), __LINE__);
        }
        $this->JobStatus = $jobStatus;
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
     * @return \StructType\CompositionStatus
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
     * Get PercentComplete value
     * @return int|null
     */
    public function getPercentComplete()
    {
        return $this->PercentComplete;
    }
    /**
     * Set PercentComplete value
     * @param int $percentComplete
     * @return \StructType\CompositionStatus
     */
    public function setPercentComplete($percentComplete = null)
    {
        // validation for constraint: int
        if (!is_null($percentComplete) && !(is_int($percentComplete) || ctype_digit($percentComplete))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($percentComplete, true), gettype($percentComplete)), __LINE__);
        }
        $this->PercentComplete = $percentComplete;
        return $this;
    }
    /**
     * Get ProcessID value
     * @return int|null
     */
    public function getProcessID()
    {
        return $this->ProcessID;
    }
    /**
     * Set ProcessID value
     * @param int $processID
     * @return \StructType\CompositionStatus
     */
    public function setProcessID($processID = null)
    {
        // validation for constraint: int
        if (!is_null($processID) && !(is_int($processID) || ctype_digit($processID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($processID, true), gettype($processID)), __LINE__);
        }
        $this->ProcessID = $processID;
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
     * @return \StructType\CompositionStatus
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
     * @return \StructType\CompositionStatus
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
     * @return \StructType\CompositionStatus
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
     * Get WorkingFolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWorkingFolder()
    {
        return isset($this->WorkingFolder) ? $this->WorkingFolder : null;
    }
    /**
     * Set WorkingFolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $workingFolder
     * @return \StructType\CompositionStatus
     */
    public function setWorkingFolder($workingFolder = null)
    {
        // validation for constraint: string
        if (!is_null($workingFolder) && !is_string($workingFolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workingFolder, true), gettype($workingFolder)), __LINE__);
        }
        if (is_null($workingFolder) || (is_array($workingFolder) && empty($workingFolder))) {
            unset($this->WorkingFolder);
        } else {
            $this->WorkingFolder = $workingFolder;
        }
        return $this;
    }
}
