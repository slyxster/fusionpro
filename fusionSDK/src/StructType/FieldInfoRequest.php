<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FieldInfoRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FieldInfoRequest
 * @subpackage Structs
 */
class FieldInfoRequest extends AbstractStructBase
{
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
     * The TemplateName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TemplateName;
    /**
     * Constructor method for FieldInfoRequest
     * @uses FieldInfoRequest::setGroupName()
     * @uses FieldInfoRequest::setLanguage()
     * @uses FieldInfoRequest::setTemplateName()
     * @param string $groupName
     * @param string $language
     * @param string $templateName
     */
    public function __construct($groupName = null, $language = null, $templateName = null)
    {
        $this
            ->setGroupName($groupName)
            ->setLanguage($language)
            ->setTemplateName($templateName);
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
     * @return \StructType\FieldInfoRequest
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
     * @return \StructType\FieldInfoRequest
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
     * @return \StructType\FieldInfoRequest
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
