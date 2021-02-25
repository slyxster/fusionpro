<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TemplateRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TemplateRequest
 * @subpackage Structs
 */
class TemplateRequest extends AbstractStructBase
{
    /**
     * The AsWSDL
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AsWSDL;
    /**
     * The FileName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FileName;
    /**
     * The GroupName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GroupName;
    /**
     * The Language
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Language;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
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
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The WebEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $WebEnabled;
    /**
     * Constructor method for TemplateRequest
     * @uses TemplateRequest::setAsWSDL()
     * @uses TemplateRequest::setFileName()
     * @uses TemplateRequest::setGroupName()
     * @uses TemplateRequest::setLanguage()
     * @uses TemplateRequest::setPageNumber()
     * @uses TemplateRequest::setTemplateName()
     * @uses TemplateRequest::setTemplateWebConfig()
     * @uses TemplateRequest::setType()
     * @uses TemplateRequest::setWebEnabled()
     * @param bool $asWSDL
     * @param string $fileName
     * @param string $groupName
     * @param string $language
     * @param int $pageNumber
     * @param string $templateName
     * @param \ArrayType\ArrayOfKeyValue $templateWebConfig
     * @param string $type
     * @param bool $webEnabled
     */
    public function __construct($asWSDL = null, $fileName = null, $groupName = null, $language = null, $pageNumber = null, $templateName = null, \ArrayType\ArrayOfKeyValue $templateWebConfig = null, $type = null, $webEnabled = null)
    {
        $this
            ->setAsWSDL($asWSDL)
            ->setFileName($fileName)
            ->setGroupName($groupName)
            ->setLanguage($language)
            ->setPageNumber($pageNumber)
            ->setTemplateName($templateName)
            ->setTemplateWebConfig($templateWebConfig)
            ->setType($type)
            ->setWebEnabled($webEnabled);
    }
    /**
     * Get AsWSDL value
     * @return bool|null
     */
    public function getAsWSDL()
    {
        return $this->AsWSDL;
    }
    /**
     * Set AsWSDL value
     * @param bool $asWSDL
     * @return \StructType\TemplateRequest
     */
    public function setAsWSDL($asWSDL = null)
    {
        // validation for constraint: boolean
        if (!is_null($asWSDL) && !is_bool($asWSDL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($asWSDL, true), gettype($asWSDL)), __LINE__);
        }
        $this->AsWSDL = $asWSDL;
        return $this;
    }
    /**
     * Get FileName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFileName()
    {
        return isset($this->FileName) ? $this->FileName : null;
    }
    /**
     * Set FileName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fileName
     * @return \StructType\TemplateRequest
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        if (is_null($fileName) || (is_array($fileName) && empty($fileName))) {
            unset($this->FileName);
        } else {
            $this->FileName = $fileName;
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
     * @return \StructType\TemplateRequest
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
     * Get Language value
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->Language;
    }
    /**
     * Set Language value
     * @uses \EnumType\Language::valueIsValid()
     * @uses \EnumType\Language::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $language
     * @return \StructType\TemplateRequest
     */
    public function setLanguage($language = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\Language::valueIsValid($language)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\Language', is_array($language) ? implode(', ', $language) : var_export($language, true), implode(', ', \EnumType\Language::getValidValues())), __LINE__);
        }
        $this->Language = $language;
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
     * @return \StructType\TemplateRequest
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
     * @return \StructType\TemplateRequest
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
     * @return \StructType\TemplateRequest
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
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\FileType::valueIsValid()
     * @uses \EnumType\FileType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\TemplateRequest
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FileType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FileType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\FileType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
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
     * @return \StructType\TemplateRequest
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
