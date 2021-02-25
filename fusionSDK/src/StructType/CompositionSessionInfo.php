<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompositionSessionInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CompositionSessionInfo
 * @subpackage Structs
 */
class CompositionSessionInfo extends AbstractStructBase
{
    /**
     * The AssignedServerAlias
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AssignedServerAlias;
    /**
     * The CompletionDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CompletionDateTime;
    /**
     * The GroupName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GroupName;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ID;
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
     * The OnDemand
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $OnDemand;
    /**
     * The OutputFile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OutputFile;
    /**
     * The PercentComplete
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PercentComplete;
    /**
     * The Priority
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Priority;
    /**
     * The ReturnCode
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ReturnCode;
    /**
     * The StartDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $StartDateTime;
    /**
     * The TemplateName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TemplateName;
    /**
     * Constructor method for CompositionSessionInfo
     * @uses CompositionSessionInfo::setAssignedServerAlias()
     * @uses CompositionSessionInfo::setCompletionDateTime()
     * @uses CompositionSessionInfo::setGroupName()
     * @uses CompositionSessionInfo::setID()
     * @uses CompositionSessionInfo::setJobStatus()
     * @uses CompositionSessionInfo::setMessage()
     * @uses CompositionSessionInfo::setOnDemand()
     * @uses CompositionSessionInfo::setOutputFile()
     * @uses CompositionSessionInfo::setPercentComplete()
     * @uses CompositionSessionInfo::setPriority()
     * @uses CompositionSessionInfo::setReturnCode()
     * @uses CompositionSessionInfo::setStartDateTime()
     * @uses CompositionSessionInfo::setTemplateName()
     * @param string $assignedServerAlias
     * @param string $completionDateTime
     * @param string $groupName
     * @param int $iD
     * @param string $jobStatus
     * @param string $message
     * @param bool $onDemand
     * @param string $outputFile
     * @param int $percentComplete
     * @param int $priority
     * @param int $returnCode
     * @param string $startDateTime
     * @param string $templateName
     */
    public function __construct($assignedServerAlias = null, $completionDateTime = null, $groupName = null, $iD = null, $jobStatus = null, $message = null, $onDemand = null, $outputFile = null, $percentComplete = null, $priority = null, $returnCode = null, $startDateTime = null, $templateName = null)
    {
        $this
            ->setAssignedServerAlias($assignedServerAlias)
            ->setCompletionDateTime($completionDateTime)
            ->setGroupName($groupName)
            ->setID($iD)
            ->setJobStatus($jobStatus)
            ->setMessage($message)
            ->setOnDemand($onDemand)
            ->setOutputFile($outputFile)
            ->setPercentComplete($percentComplete)
            ->setPriority($priority)
            ->setReturnCode($returnCode)
            ->setStartDateTime($startDateTime)
            ->setTemplateName($templateName);
    }
    /**
     * Get AssignedServerAlias value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAssignedServerAlias()
    {
        return isset($this->AssignedServerAlias) ? $this->AssignedServerAlias : null;
    }
    /**
     * Set AssignedServerAlias value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $assignedServerAlias
     * @return \StructType\CompositionSessionInfo
     */
    public function setAssignedServerAlias($assignedServerAlias = null)
    {
        // validation for constraint: string
        if (!is_null($assignedServerAlias) && !is_string($assignedServerAlias)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedServerAlias, true), gettype($assignedServerAlias)), __LINE__);
        }
        if (is_null($assignedServerAlias) || (is_array($assignedServerAlias) && empty($assignedServerAlias))) {
            unset($this->AssignedServerAlias);
        } else {
            $this->AssignedServerAlias = $assignedServerAlias;
        }
        return $this;
    }
    /**
     * Get CompletionDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCompletionDateTime()
    {
        return isset($this->CompletionDateTime) ? $this->CompletionDateTime : null;
    }
    /**
     * Set CompletionDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $completionDateTime
     * @return \StructType\CompositionSessionInfo
     */
    public function setCompletionDateTime($completionDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($completionDateTime) && !is_string($completionDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($completionDateTime, true), gettype($completionDateTime)), __LINE__);
        }
        if (is_null($completionDateTime) || (is_array($completionDateTime) && empty($completionDateTime))) {
            unset($this->CompletionDateTime);
        } else {
            $this->CompletionDateTime = $completionDateTime;
        }
        return $this;
    }
    /**
     * Get GroupName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getGroupName()
    {
        return isset($this->GroupName) ? $this->GroupName : null;
    }
    /**
     * Set GroupName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $groupName
     * @return \StructType\CompositionSessionInfo
     */
    public function setGroupName($groupName = null)
    {
        // validation for constraint: string
        if (!is_null($groupName) && !is_string($groupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($groupName, true), gettype($groupName)), __LINE__);
        }
        if (is_null($groupName) || (is_array($groupName) && empty($groupName))) {
            unset($this->GroupName);
        } else {
            $this->GroupName = $groupName;
        }
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
     * @return \StructType\CompositionSessionInfo
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
     * @return \StructType\CompositionSessionInfo
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
     * @return \StructType\CompositionSessionInfo
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
     * Get OnDemand value
     * @return bool|null
     */
    public function getOnDemand()
    {
        return $this->OnDemand;
    }
    /**
     * Set OnDemand value
     * @param bool $onDemand
     * @return \StructType\CompositionSessionInfo
     */
    public function setOnDemand($onDemand = null)
    {
        // validation for constraint: boolean
        if (!is_null($onDemand) && !is_bool($onDemand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onDemand, true), gettype($onDemand)), __LINE__);
        }
        $this->OnDemand = $onDemand;
        return $this;
    }
    /**
     * Get OutputFile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOutputFile()
    {
        return isset($this->OutputFile) ? $this->OutputFile : null;
    }
    /**
     * Set OutputFile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $outputFile
     * @return \StructType\CompositionSessionInfo
     */
    public function setOutputFile($outputFile = null)
    {
        // validation for constraint: string
        if (!is_null($outputFile) && !is_string($outputFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputFile, true), gettype($outputFile)), __LINE__);
        }
        if (is_null($outputFile) || (is_array($outputFile) && empty($outputFile))) {
            unset($this->OutputFile);
        } else {
            $this->OutputFile = $outputFile;
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
     * @return \StructType\CompositionSessionInfo
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
     * Get Priority value
     * @return int|null
     */
    public function getPriority()
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param int $priority
     * @return \StructType\CompositionSessionInfo
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->Priority = $priority;
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
     * @return \StructType\CompositionSessionInfo
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
     * Get StartDateTime value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getStartDateTime()
    {
        return isset($this->StartDateTime) ? $this->StartDateTime : null;
    }
    /**
     * Set StartDateTime value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $startDateTime
     * @return \StructType\CompositionSessionInfo
     */
    public function setStartDateTime($startDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDateTime, true), gettype($startDateTime)), __LINE__);
        }
        if (is_null($startDateTime) || (is_array($startDateTime) && empty($startDateTime))) {
            unset($this->StartDateTime);
        } else {
            $this->StartDateTime = $startDateTime;
        }
        return $this;
    }
    /**
     * Get TemplateName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTemplateName()
    {
        return isset($this->TemplateName) ? $this->TemplateName : null;
    }
    /**
     * Set TemplateName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $templateName
     * @return \StructType\CompositionSessionInfo
     */
    public function setTemplateName($templateName = null)
    {
        // validation for constraint: string
        if (!is_null($templateName) && !is_string($templateName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateName, true), gettype($templateName)), __LINE__);
        }
        if (is_null($templateName) || (is_array($templateName) && empty($templateName))) {
            unset($this->TemplateName);
        } else {
            $this->TemplateName = $templateName;
        }
        return $this;
    }
}
