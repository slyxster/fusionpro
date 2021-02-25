<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Preview StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Preview
 * @subpackage Structs
 */
class Preview extends AbstractStructBase
{
    /**
     * The CompositionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CompositionID;
    /**
     * The Data
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDataField
     */
    public $Data;
    /**
     * The GroupName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GroupName;
    /**
     * The HighRes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $HighRes;
    /**
     * The JPEGOptions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\JPEG_Options
     */
    public $JPEGOptions;
    /**
     * The Override
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Override;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
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
     * The TimeoutSeconds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TimeoutSeconds;
    /**
     * Constructor method for Preview
     * @uses Preview::setCompositionID()
     * @uses Preview::setData()
     * @uses Preview::setGroupName()
     * @uses Preview::setHighRes()
     * @uses Preview::setJPEGOptions()
     * @uses Preview::setOverride()
     * @uses Preview::setPageNumber()
     * @uses Preview::setPriority()
     * @uses Preview::setTemplateName()
     * @uses Preview::setTimeoutSeconds()
     * @param int $compositionID
     * @param \ArrayType\ArrayOfDataField $data
     * @param string $groupName
     * @param bool $highRes
     * @param \StructType\JPEG_Options $jPEGOptions
     * @param bool $override
     * @param int $pageNumber
     * @param int $priority
     * @param string $templateName
     * @param int $timeoutSeconds
     */
    public function __construct($compositionID = null, \ArrayType\ArrayOfDataField $data = null, $groupName = null, $highRes = null, \StructType\JPEG_Options $jPEGOptions = null, $override = null, $pageNumber = null, $priority = null, $templateName = null, $timeoutSeconds = null)
    {
        $this
            ->setCompositionID($compositionID)
            ->setData($data)
            ->setGroupName($groupName)
            ->setHighRes($highRes)
            ->setJPEGOptions($jPEGOptions)
            ->setOverride($override)
            ->setPageNumber($pageNumber)
            ->setPriority($priority)
            ->setTemplateName($templateName)
            ->setTimeoutSeconds($timeoutSeconds);
    }
    /**
     * Get CompositionID value
     * @return int|null
     */
    public function getCompositionID()
    {
        return $this->CompositionID;
    }
    /**
     * Set CompositionID value
     * @param int $compositionID
     * @return \StructType\Preview
     */
    public function setCompositionID($compositionID = null)
    {
        // validation for constraint: int
        if (!is_null($compositionID) && !(is_int($compositionID) || ctype_digit($compositionID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($compositionID, true), gettype($compositionID)), __LINE__);
        }
        $this->CompositionID = $compositionID;
        return $this;
    }
    /**
     * Get Data value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDataField|null
     */
    public function getData()
    {
        return isset($this->Data) ? $this->Data : null;
    }
    /**
     * Set Data value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDataField $data
     * @return \StructType\Preview
     */
    public function setData(\ArrayType\ArrayOfDataField $data = null)
    {
        if (is_null($data) || (is_array($data) && empty($data))) {
            unset($this->Data);
        } else {
            $this->Data = $data;
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
     * @return \StructType\Preview
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
     * Get HighRes value
     * @return bool|null
     */
    public function getHighRes()
    {
        return $this->HighRes;
    }
    /**
     * Set HighRes value
     * @param bool $highRes
     * @return \StructType\Preview
     */
    public function setHighRes($highRes = null)
    {
        // validation for constraint: boolean
        if (!is_null($highRes) && !is_bool($highRes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($highRes, true), gettype($highRes)), __LINE__);
        }
        $this->HighRes = $highRes;
        return $this;
    }
    /**
     * Get JPEGOptions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\JPEG_Options|null
     */
    public function getJPEGOptions()
    {
        return isset($this->JPEGOptions) ? $this->JPEGOptions : null;
    }
    /**
     * Set JPEGOptions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\JPEG_Options $jPEGOptions
     * @return \StructType\Preview
     */
    public function setJPEGOptions(\StructType\JPEG_Options $jPEGOptions = null)
    {
        if (is_null($jPEGOptions) || (is_array($jPEGOptions) && empty($jPEGOptions))) {
            unset($this->JPEGOptions);
        } else {
            $this->JPEGOptions = $jPEGOptions;
        }
        return $this;
    }
    /**
     * Get Override value
     * @return bool|null
     */
    public function getOverride()
    {
        return $this->Override;
    }
    /**
     * Set Override value
     * @param bool $override
     * @return \StructType\Preview
     */
    public function setOverride($override = null)
    {
        // validation for constraint: boolean
        if (!is_null($override) && !is_bool($override)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($override, true), gettype($override)), __LINE__);
        }
        $this->Override = $override;
        return $this;
    }
    /**
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \StructType\Preview
     */
    public function setPageNumber($pageNumber = null)
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !(is_int($pageNumber) || ctype_digit($pageNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNumber, true), gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
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
     * @return \StructType\Preview
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
     * @return \StructType\Preview
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
     * Get TimeoutSeconds value
     * @return int|null
     */
    public function getTimeoutSeconds()
    {
        return $this->TimeoutSeconds;
    }
    /**
     * Set TimeoutSeconds value
     * @param int $timeoutSeconds
     * @return \StructType\Preview
     */
    public function setTimeoutSeconds($timeoutSeconds = null)
    {
        // validation for constraint: int
        if (!is_null($timeoutSeconds) && !(is_int($timeoutSeconds) || ctype_digit($timeoutSeconds))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($timeoutSeconds, true), gettype($timeoutSeconds)), __LINE__);
        }
        $this->TimeoutSeconds = $timeoutSeconds;
        return $this;
    }
}
