<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompositionSessionRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CompositionSessionRequest
 * @subpackage Structs
 */
class CompositionSessionRequest extends AbstractStructBase
{
    /**
     * The ActiveOnly
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ActiveOnly;
    /**
     * The GroupName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $GroupName;
    /**
     * The NumRecent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumRecent;
    /**
     * The TemplateName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TemplateName;
    /**
     * Constructor method for CompositionSessionRequest
     * @uses CompositionSessionRequest::setActiveOnly()
     * @uses CompositionSessionRequest::setGroupName()
     * @uses CompositionSessionRequest::setNumRecent()
     * @uses CompositionSessionRequest::setTemplateName()
     * @param bool $activeOnly
     * @param string $groupName
     * @param int $numRecent
     * @param string $templateName
     */
    public function __construct($activeOnly = null, $groupName = null, $numRecent = null, $templateName = null)
    {
        $this
            ->setActiveOnly($activeOnly)
            ->setGroupName($groupName)
            ->setNumRecent($numRecent)
            ->setTemplateName($templateName);
    }
    /**
     * Get ActiveOnly value
     * @return bool|null
     */
    public function getActiveOnly()
    {
        return $this->ActiveOnly;
    }
    /**
     * Set ActiveOnly value
     * @param bool $activeOnly
     * @return \StructType\CompositionSessionRequest
     */
    public function setActiveOnly($activeOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($activeOnly) && !is_bool($activeOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($activeOnly, true), gettype($activeOnly)), __LINE__);
        }
        $this->ActiveOnly = $activeOnly;
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
     * @return \StructType\CompositionSessionRequest
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
     * Get NumRecent value
     * @return int|null
     */
    public function getNumRecent()
    {
        return $this->NumRecent;
    }
    /**
     * Set NumRecent value
     * @param int $numRecent
     * @return \StructType\CompositionSessionRequest
     */
    public function setNumRecent($numRecent = null)
    {
        // validation for constraint: int
        if (!is_null($numRecent) && !(is_int($numRecent) || ctype_digit($numRecent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numRecent, true), gettype($numRecent)), __LINE__);
        }
        $this->NumRecent = $numRecent;
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
     * @return \StructType\CompositionSessionRequest
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
