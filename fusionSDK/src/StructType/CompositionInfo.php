<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompositionInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CompositionInfo
 * @subpackage Structs
 */
class CompositionInfo extends AbstractStructBase
{
    /**
     * The AssignedServer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AssignedServer;
    /**
     * The AssignedServerAlias
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AssignedServerAlias;
    /**
     * The CFGFile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $CFGFile;
    /**
     * The CompletionDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CompletionDateTime;
    /**
     * The EmailAddresses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfKeyValue
     */
    public $EmailAddresses;
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
     * The OnDemandComp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\OnDemandComponents
     */
    public $OnDemandComp;
    /**
     * The Options
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\JobOptions
     */
    public $Options;
    /**
     * The OutputFile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OutputFile;
    /**
     * The Priority
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Priority;
    /**
     * The ProcessID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ProcessID;
    /**
     * The StartDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StartDateTime;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionStatus
     */
    public $Status;
    /**
     * The TemplateName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TemplateName;
    /**
     * The WorkingFolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WorkingFolder;
    /**
     * Constructor method for CompositionInfo
     * @uses CompositionInfo::setAssignedServer()
     * @uses CompositionInfo::setAssignedServerAlias()
     * @uses CompositionInfo::setCFGFile()
     * @uses CompositionInfo::setCompletionDateTime()
     * @uses CompositionInfo::setEmailAddresses()
     * @uses CompositionInfo::setGroupName()
     * @uses CompositionInfo::setID()
     * @uses CompositionInfo::setMessage()
     * @uses CompositionInfo::setOnDemand()
     * @uses CompositionInfo::setOnDemandComp()
     * @uses CompositionInfo::setOptions()
     * @uses CompositionInfo::setOutputFile()
     * @uses CompositionInfo::setPriority()
     * @uses CompositionInfo::setProcessID()
     * @uses CompositionInfo::setStartDateTime()
     * @uses CompositionInfo::setStatus()
     * @uses CompositionInfo::setTemplateName()
     * @uses CompositionInfo::setWorkingFolder()
     * @param string $assignedServer
     * @param string $assignedServerAlias
     * @param string $cFGFile
     * @param string $completionDateTime
     * @param \ArrayType\ArrayOfKeyValue $emailAddresses
     * @param string $groupName
     * @param int $iD
     * @param string $message
     * @param bool $onDemand
     * @param \StructType\OnDemandComponents $onDemandComp
     * @param \StructType\JobOptions $options
     * @param string $outputFile
     * @param int $priority
     * @param int $processID
     * @param string $startDateTime
     * @param \StructType\CompositionStatus $status
     * @param string $templateName
     * @param string $workingFolder
     */
    public function __construct($assignedServer = null, $assignedServerAlias = null, $cFGFile = null, $completionDateTime = null, \ArrayType\ArrayOfKeyValue $emailAddresses = null, $groupName = null, $iD = null, $message = null, $onDemand = null, \StructType\OnDemandComponents $onDemandComp = null, \StructType\JobOptions $options = null, $outputFile = null, $priority = null, $processID = null, $startDateTime = null, \StructType\CompositionStatus $status = null, $templateName = null, $workingFolder = null)
    {
        $this
            ->setAssignedServer($assignedServer)
            ->setAssignedServerAlias($assignedServerAlias)
            ->setCFGFile($cFGFile)
            ->setCompletionDateTime($completionDateTime)
            ->setEmailAddresses($emailAddresses)
            ->setGroupName($groupName)
            ->setID($iD)
            ->setMessage($message)
            ->setOnDemand($onDemand)
            ->setOnDemandComp($onDemandComp)
            ->setOptions($options)
            ->setOutputFile($outputFile)
            ->setPriority($priority)
            ->setProcessID($processID)
            ->setStartDateTime($startDateTime)
            ->setStatus($status)
            ->setTemplateName($templateName)
            ->setWorkingFolder($workingFolder);
    }
    /**
     * Get AssignedServer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAssignedServer()
    {
        return isset($this->AssignedServer) ? $this->AssignedServer : null;
    }
    /**
     * Set AssignedServer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $assignedServer
     * @return \StructType\CompositionInfo
     */
    public function setAssignedServer($assignedServer = null)
    {
        // validation for constraint: string
        if (!is_null($assignedServer) && !is_string($assignedServer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedServer, true), gettype($assignedServer)), __LINE__);
        }
        if (is_null($assignedServer) || (is_array($assignedServer) && empty($assignedServer))) {
            unset($this->AssignedServer);
        } else {
            $this->AssignedServer = $assignedServer;
        }
        return $this;
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
     * @return \StructType\CompositionInfo
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
     * Get CFGFile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getCFGFile()
    {
        return isset($this->CFGFile) ? $this->CFGFile : null;
    }
    /**
     * Set CFGFile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $cFGFile
     * @return \StructType\CompositionInfo
     */
    public function setCFGFile($cFGFile = null)
    {
        // validation for constraint: string
        if (!is_null($cFGFile) && !is_string($cFGFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cFGFile, true), gettype($cFGFile)), __LINE__);
        }
        if (is_null($cFGFile) || (is_array($cFGFile) && empty($cFGFile))) {
            unset($this->CFGFile);
        } else {
            $this->CFGFile = $cFGFile;
        }
        return $this;
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
     * @return \StructType\CompositionInfo
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
     * Get EmailAddresses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfKeyValue|null
     */
    public function getEmailAddresses()
    {
        return isset($this->EmailAddresses) ? $this->EmailAddresses : null;
    }
    /**
     * Set EmailAddresses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfKeyValue $emailAddresses
     * @return \StructType\CompositionInfo
     */
    public function setEmailAddresses(\ArrayType\ArrayOfKeyValue $emailAddresses = null)
    {
        if (is_null($emailAddresses) || (is_array($emailAddresses) && empty($emailAddresses))) {
            unset($this->EmailAddresses);
        } else {
            $this->EmailAddresses = $emailAddresses;
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
     * @return \StructType\CompositionInfo
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
     * @return \StructType\CompositionInfo
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
     * @return \StructType\CompositionInfo
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
     * @return \StructType\CompositionInfo
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
     * Get OnDemandComp value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\OnDemandComponents|null
     */
    public function getOnDemandComp()
    {
        return isset($this->OnDemandComp) ? $this->OnDemandComp : null;
    }
    /**
     * Set OnDemandComp value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\OnDemandComponents $onDemandComp
     * @return \StructType\CompositionInfo
     */
    public function setOnDemandComp(\StructType\OnDemandComponents $onDemandComp = null)
    {
        if (is_null($onDemandComp) || (is_array($onDemandComp) && empty($onDemandComp))) {
            unset($this->OnDemandComp);
        } else {
            $this->OnDemandComp = $onDemandComp;
        }
        return $this;
    }
    /**
     * Get Options value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\JobOptions|null
     */
    public function getOptions()
    {
        return isset($this->Options) ? $this->Options : null;
    }
    /**
     * Set Options value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\JobOptions $options
     * @return \StructType\CompositionInfo
     */
    public function setOptions(\StructType\JobOptions $options = null)
    {
        if (is_null($options) || (is_array($options) && empty($options))) {
            unset($this->Options);
        } else {
            $this->Options = $options;
        }
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
     * @return \StructType\CompositionInfo
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
     * @return \StructType\CompositionInfo
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
     * @return \StructType\CompositionInfo
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
     * Get StartDateTime value
     * @return string|null
     */
    public function getStartDateTime()
    {
        return $this->StartDateTime;
    }
    /**
     * Set StartDateTime value
     * @param string $startDateTime
     * @return \StructType\CompositionInfo
     */
    public function setStartDateTime($startDateTime = null)
    {
        // validation for constraint: string
        if (!is_null($startDateTime) && !is_string($startDateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startDateTime, true), gettype($startDateTime)), __LINE__);
        }
        $this->StartDateTime = $startDateTime;
        return $this;
    }
    /**
     * Get Status value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionStatus|null
     */
    public function getStatus()
    {
        return isset($this->Status) ? $this->Status : null;
    }
    /**
     * Set Status value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionStatus $status
     * @return \StructType\CompositionInfo
     */
    public function setStatus(\StructType\CompositionStatus $status = null)
    {
        if (is_null($status) || (is_array($status) && empty($status))) {
            unset($this->Status);
        } else {
            $this->Status = $status;
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
     * @return \StructType\CompositionInfo
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
     * @return \StructType\CompositionInfo
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
