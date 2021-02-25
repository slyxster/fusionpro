<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TemplateDuplicateRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TemplateDuplicateRequest
 * @subpackage Structs
 */
class TemplateDuplicateRequest extends AbstractStructBase
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
     * The NewGroupName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NewGroupName;
    /**
     * The NewTemplateName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $NewTemplateName;
    /**
     * The TemplateName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TemplateName;
    /**
     * Constructor method for TemplateDuplicateRequest
     * @uses TemplateDuplicateRequest::setGroupName()
     * @uses TemplateDuplicateRequest::setNewGroupName()
     * @uses TemplateDuplicateRequest::setNewTemplateName()
     * @uses TemplateDuplicateRequest::setTemplateName()
     * @param string $groupName
     * @param string $newGroupName
     * @param string $newTemplateName
     * @param string $templateName
     */
    public function __construct($groupName = null, $newGroupName = null, $newTemplateName = null, $templateName = null)
    {
        $this
            ->setGroupName($groupName)
            ->setNewGroupName($newGroupName)
            ->setNewTemplateName($newTemplateName)
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
     * @return \StructType\TemplateDuplicateRequest
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
     * Get NewGroupName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNewGroupName()
    {
        return isset($this->NewGroupName) ? $this->NewGroupName : null;
    }
    /**
     * Set NewGroupName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $newGroupName
     * @return \StructType\TemplateDuplicateRequest
     */
    public function setNewGroupName($newGroupName = null)
    {
        // validation for constraint: string
        if (!is_null($newGroupName) && !is_string($newGroupName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newGroupName, true), gettype($newGroupName)), __LINE__);
        }
        if (is_null($newGroupName) || (is_array($newGroupName) && empty($newGroupName))) {
            unset($this->NewGroupName);
        } else {
            $this->NewGroupName = $newGroupName;
        }
        return $this;
    }
    /**
     * Get NewTemplateName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getNewTemplateName()
    {
        return isset($this->NewTemplateName) ? $this->NewTemplateName : null;
    }
    /**
     * Set NewTemplateName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $newTemplateName
     * @return \StructType\TemplateDuplicateRequest
     */
    public function setNewTemplateName($newTemplateName = null)
    {
        // validation for constraint: string
        if (!is_null($newTemplateName) && !is_string($newTemplateName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newTemplateName, true), gettype($newTemplateName)), __LINE__);
        }
        if (is_null($newTemplateName) || (is_array($newTemplateName) && empty($newTemplateName))) {
            unset($this->NewTemplateName);
        } else {
            $this->NewTemplateName = $newTemplateName;
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
     * @return \StructType\TemplateDuplicateRequest
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
