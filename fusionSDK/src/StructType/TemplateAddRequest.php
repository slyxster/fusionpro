<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TemplateAddRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TemplateAddRequest
 * @subpackage Structs
 */
class TemplateAddRequest extends AbstractStructBase
{
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The FilePath
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FilePath;
    /**
     * The GroupName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GroupName;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Message;
    /**
     * The Overwrite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Overwrite;
    /**
     * The TemplateName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TemplateName;
    /**
     * The TemplateWebConfig
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfKeyValue
     */
    public $TemplateWebConfig;
    /**
     * The TemplateZipFile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TemplateZipFile;
    /**
     * The ThumbnailFile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ThumbnailFile;
    /**
     * The ThumbnailProcess
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ThumbnailProcess;
    /**
     * The WebEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $WebEnabled;
    /**
     * Constructor method for TemplateAddRequest
     * @uses TemplateAddRequest::setDescription()
     * @uses TemplateAddRequest::setFilePath()
     * @uses TemplateAddRequest::setGroupName()
     * @uses TemplateAddRequest::setMessage()
     * @uses TemplateAddRequest::setOverwrite()
     * @uses TemplateAddRequest::setTemplateName()
     * @uses TemplateAddRequest::setTemplateWebConfig()
     * @uses TemplateAddRequest::setTemplateZipFile()
     * @uses TemplateAddRequest::setThumbnailFile()
     * @uses TemplateAddRequest::setThumbnailProcess()
     * @uses TemplateAddRequest::setWebEnabled()
     * @param string $description
     * @param string $filePath
     * @param string $groupName
     * @param string $message
     * @param bool $overwrite
     * @param string $templateName
     * @param \ArrayType\ArrayOfKeyValue $templateWebConfig
     * @param string $templateZipFile
     * @param string $thumbnailFile
     * @param string $thumbnailProcess
     * @param bool $webEnabled
     */
    public function __construct($description = null, $filePath = null, $groupName = null, $message = null, $overwrite = null, $templateName = null, \ArrayType\ArrayOfKeyValue $templateWebConfig = null, $templateZipFile = null, $thumbnailFile = null, $thumbnailProcess = null, $webEnabled = null)
    {
        $this
            ->setDescription($description)
            ->setFilePath($filePath)
            ->setGroupName($groupName)
            ->setMessage($message)
            ->setOverwrite($overwrite)
            ->setTemplateName($templateName)
            ->setTemplateWebConfig($templateWebConfig)
            ->setTemplateZipFile($templateZipFile)
            ->setThumbnailFile($thumbnailFile)
            ->setThumbnailProcess($thumbnailProcess)
            ->setWebEnabled($webEnabled);
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \StructType\TemplateAddRequest
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        return $this;
    }
    /**
     * Get FilePath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFilePath()
    {
        return isset($this->FilePath) ? $this->FilePath : null;
    }
    /**
     * Set FilePath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $filePath
     * @return \StructType\TemplateAddRequest
     */
    public function setFilePath($filePath = null)
    {
        // validation for constraint: string
        if (!is_null($filePath) && !is_string($filePath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filePath, true), gettype($filePath)), __LINE__);
        }
        if (is_null($filePath) || (is_array($filePath) && empty($filePath))) {
            unset($this->FilePath);
        } else {
            $this->FilePath = $filePath;
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
     * @return \StructType\TemplateAddRequest
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
     * @return \StructType\TemplateAddRequest
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
     * Get Overwrite value
     * @return bool|null
     */
    public function getOverwrite()
    {
        return $this->Overwrite;
    }
    /**
     * Set Overwrite value
     * @param bool $overwrite
     * @return \StructType\TemplateAddRequest
     */
    public function setOverwrite($overwrite = null)
    {
        // validation for constraint: boolean
        if (!is_null($overwrite) && !is_bool($overwrite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($overwrite, true), gettype($overwrite)), __LINE__);
        }
        $this->Overwrite = $overwrite;
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
     * @return \StructType\TemplateAddRequest
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
     * Get TemplateWebConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfKeyValue|null
     */
    public function getTemplateWebConfig()
    {
        return isset($this->TemplateWebConfig) ? $this->TemplateWebConfig : null;
    }
    /**
     * Set TemplateWebConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfKeyValue $templateWebConfig
     * @return \StructType\TemplateAddRequest
     */
    public function setTemplateWebConfig(\ArrayType\ArrayOfKeyValue $templateWebConfig = null)
    {
        if (is_null($templateWebConfig) || (is_array($templateWebConfig) && empty($templateWebConfig))) {
            unset($this->TemplateWebConfig);
        } else {
            $this->TemplateWebConfig = $templateWebConfig;
        }
        return $this;
    }
    /**
     * Get TemplateZipFile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTemplateZipFile()
    {
        return isset($this->TemplateZipFile) ? $this->TemplateZipFile : null;
    }
    /**
     * Set TemplateZipFile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $templateZipFile
     * @return \StructType\TemplateAddRequest
     */
    public function setTemplateZipFile($templateZipFile = null)
    {
        // validation for constraint: string
        if (!is_null($templateZipFile) && !is_string($templateZipFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateZipFile, true), gettype($templateZipFile)), __LINE__);
        }
        if (is_null($templateZipFile) || (is_array($templateZipFile) && empty($templateZipFile))) {
            unset($this->TemplateZipFile);
        } else {
            $this->TemplateZipFile = $templateZipFile;
        }
        return $this;
    }
    /**
     * Get ThumbnailFile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getThumbnailFile()
    {
        return isset($this->ThumbnailFile) ? $this->ThumbnailFile : null;
    }
    /**
     * Set ThumbnailFile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $thumbnailFile
     * @return \StructType\TemplateAddRequest
     */
    public function setThumbnailFile($thumbnailFile = null)
    {
        // validation for constraint: string
        if (!is_null($thumbnailFile) && !is_string($thumbnailFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($thumbnailFile, true), gettype($thumbnailFile)), __LINE__);
        }
        if (is_null($thumbnailFile) || (is_array($thumbnailFile) && empty($thumbnailFile))) {
            unset($this->ThumbnailFile);
        } else {
            $this->ThumbnailFile = $thumbnailFile;
        }
        return $this;
    }
    /**
     * Get ThumbnailProcess value
     * @return string|null
     */
    public function getThumbnailProcess()
    {
        return $this->ThumbnailProcess;
    }
    /**
     * Set ThumbnailProcess value
     * @uses \EnumType\ThumbnailGeneration::valueIsValid()
     * @uses \EnumType\ThumbnailGeneration::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $thumbnailProcess
     * @return \StructType\TemplateAddRequest
     */
    public function setThumbnailProcess($thumbnailProcess = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ThumbnailGeneration::valueIsValid($thumbnailProcess)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ThumbnailGeneration', is_array($thumbnailProcess) ? implode(', ', $thumbnailProcess) : var_export($thumbnailProcess, true), implode(', ', \EnumType\ThumbnailGeneration::getValidValues())), __LINE__);
        }
        $this->ThumbnailProcess = $thumbnailProcess;
        return $this;
    }
    /**
     * Get WebEnabled value
     * @return bool|null
     */
    public function getWebEnabled()
    {
        return $this->WebEnabled;
    }
    /**
     * Set WebEnabled value
     * @param bool $webEnabled
     * @return \StructType\TemplateAddRequest
     */
    public function setWebEnabled($webEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($webEnabled) && !is_bool($webEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($webEnabled, true), gettype($webEnabled)), __LINE__);
        }
        $this->WebEnabled = $webEnabled;
        return $this;
    }
}
