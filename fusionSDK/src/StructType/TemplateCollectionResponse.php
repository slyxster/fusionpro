<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TemplateCollectionResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TemplateCollectionResponse
 * @subpackage Structs
 */
class TemplateCollectionResponse extends AbstractStructBase
{
    /**
     * The Groups
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $Groups;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Message;
    /**
     * The TemplateNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $TemplateNames;
    /**
     * The Templates
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfTemplate
     */
    public $Templates;
    /**
     * Constructor method for TemplateCollectionResponse
     * @uses TemplateCollectionResponse::setGroups()
     * @uses TemplateCollectionResponse::setMessage()
     * @uses TemplateCollectionResponse::setTemplateNames()
     * @uses TemplateCollectionResponse::setTemplates()
     * @param \ArrayType\ArrayOfstring $groups
     * @param string $message
     * @param \ArrayType\ArrayOfstring $templateNames
     * @param \ArrayType\ArrayOfTemplate $templates
     */
    public function __construct(\ArrayType\ArrayOfstring $groups = null, $message = null, \ArrayType\ArrayOfstring $templateNames = null, \ArrayType\ArrayOfTemplate $templates = null)
    {
        $this
            ->setGroups($groups)
            ->setMessage($message)
            ->setTemplateNames($templateNames)
            ->setTemplates($templates);
    }
    /**
     * Get Groups value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getGroups()
    {
        return isset($this->Groups) ? $this->Groups : null;
    }
    /**
     * Set Groups value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $groups
     * @return \StructType\TemplateCollectionResponse
     */
    public function setGroups(\ArrayType\ArrayOfstring $groups = null)
    {
        if (is_null($groups) || (is_array($groups) && empty($groups))) {
            unset($this->Groups);
        } else {
            $this->Groups = $groups;
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
     * @return \StructType\TemplateCollectionResponse
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
     * Get TemplateNames value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getTemplateNames()
    {
        return isset($this->TemplateNames) ? $this->TemplateNames : null;
    }
    /**
     * Set TemplateNames value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $templateNames
     * @return \StructType\TemplateCollectionResponse
     */
    public function setTemplateNames(\ArrayType\ArrayOfstring $templateNames = null)
    {
        if (is_null($templateNames) || (is_array($templateNames) && empty($templateNames))) {
            unset($this->TemplateNames);
        } else {
            $this->TemplateNames = $templateNames;
        }
        return $this;
    }
    /**
     * Get Templates value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfTemplate|null
     */
    public function getTemplates()
    {
        return isset($this->Templates) ? $this->Templates : null;
    }
    /**
     * Set Templates value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfTemplate $templates
     * @return \StructType\TemplateCollectionResponse
     */
    public function setTemplates(\ArrayType\ArrayOfTemplate $templates = null)
    {
        if (is_null($templates) || (is_array($templates) && empty($templates))) {
            unset($this->Templates);
        } else {
            $this->Templates = $templates;
        }
        return $this;
    }
}
