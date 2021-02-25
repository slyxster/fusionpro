<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompositionRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CompositionRequest
 * @subpackage Structs
 */
class CompositionRequest extends AbstractStructBase
{
    /**
     * The DataRecords
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDataRecord
     */
    public $DataRecords;
    /**
     * The EmailAddresses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfKeyValue
     */
    public $EmailAddresses;
    /**
     * The ExportSave
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ExportSave;
    /**
     * The GroupName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GroupName;
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
     * The Priority
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Priority;
    /**
     * The TemplateName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TemplateName;
    /**
     * Constructor method for CompositionRequest
     * @uses CompositionRequest::setDataRecords()
     * @uses CompositionRequest::setEmailAddresses()
     * @uses CompositionRequest::setExportSave()
     * @uses CompositionRequest::setGroupName()
     * @uses CompositionRequest::setOnDemand()
     * @uses CompositionRequest::setOnDemandComp()
     * @uses CompositionRequest::setOptions()
     * @uses CompositionRequest::setPriority()
     * @uses CompositionRequest::setTemplateName()
     * @param \ArrayType\ArrayOfDataRecord $dataRecords
     * @param \ArrayType\ArrayOfKeyValue $emailAddresses
     * @param bool $exportSave
     * @param string $groupName
     * @param bool $onDemand
     * @param \StructType\OnDemandComponents $onDemandComp
     * @param \StructType\JobOptions $options
     * @param int $priority
     * @param string $templateName
     */
    public function __construct(\ArrayType\ArrayOfDataRecord $dataRecords = null, \ArrayType\ArrayOfKeyValue $emailAddresses = null, $exportSave = null, $groupName = null, $onDemand = null, \StructType\OnDemandComponents $onDemandComp = null, \StructType\JobOptions $options = null, $priority = null, $templateName = null)
    {
        $this
            ->setDataRecords($dataRecords)
            ->setEmailAddresses($emailAddresses)
            ->setExportSave($exportSave)
            ->setGroupName($groupName)
            ->setOnDemand($onDemand)
            ->setOnDemandComp($onDemandComp)
            ->setOptions($options)
            ->setPriority($priority)
            ->setTemplateName($templateName);
    }
    /**
     * Get DataRecords value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDataRecord|null
     */
    public function getDataRecords()
    {
        return isset($this->DataRecords) ? $this->DataRecords : null;
    }
    /**
     * Set DataRecords value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDataRecord $dataRecords
     * @return \StructType\CompositionRequest
     */
    public function setDataRecords(\ArrayType\ArrayOfDataRecord $dataRecords = null)
    {
        if (is_null($dataRecords) || (is_array($dataRecords) && empty($dataRecords))) {
            unset($this->DataRecords);
        } else {
            $this->DataRecords = $dataRecords;
        }
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
     * @return \StructType\CompositionRequest
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
     * Get ExportSave value
     * @return bool|null
     */
    public function getExportSave()
    {
        return $this->ExportSave;
    }
    /**
     * Set ExportSave value
     * @param bool $exportSave
     * @return \StructType\CompositionRequest
     */
    public function setExportSave($exportSave = null)
    {
        // validation for constraint: boolean
        if (!is_null($exportSave) && !is_bool($exportSave)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($exportSave, true), gettype($exportSave)), __LINE__);
        }
        $this->ExportSave = $exportSave;
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
     * @return \StructType\CompositionRequest
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
     * @return \StructType\CompositionRequest
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
     * @return \StructType\CompositionRequest
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
     * @return \StructType\CompositionRequest
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
     * @return \StructType\CompositionRequest
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
     * @return \StructType\CompositionRequest
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
