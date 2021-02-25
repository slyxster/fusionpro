<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetApplicationSettingsRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SetApplicationSettingsRequest
 * @subpackage Structs
 */
class SetApplicationSettingsRequest extends AbstractStructBase
{
    /**
     * The Settings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfApplicationSetting
     */
    public $Settings;
    /**
     * The TargetChanges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $TargetChanges;
    /**
     * Constructor method for SetApplicationSettingsRequest
     * @uses SetApplicationSettingsRequest::setSettings()
     * @uses SetApplicationSettingsRequest::setTargetChanges()
     * @param \ArrayType\ArrayOfApplicationSetting $settings
     * @param bool $targetChanges
     */
    public function __construct(\ArrayType\ArrayOfApplicationSetting $settings = null, $targetChanges = null)
    {
        $this
            ->setSettings($settings)
            ->setTargetChanges($targetChanges);
    }
    /**
     * Get Settings value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfApplicationSetting|null
     */
    public function getSettings()
    {
        return isset($this->Settings) ? $this->Settings : null;
    }
    /**
     * Set Settings value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfApplicationSetting $settings
     * @return \StructType\SetApplicationSettingsRequest
     */
    public function setSettings(\ArrayType\ArrayOfApplicationSetting $settings = null)
    {
        if (is_null($settings) || (is_array($settings) && empty($settings))) {
            unset($this->Settings);
        } else {
            $this->Settings = $settings;
        }
        return $this;
    }
    /**
     * Get TargetChanges value
     * @return bool|null
     */
    public function getTargetChanges()
    {
        return $this->TargetChanges;
    }
    /**
     * Set TargetChanges value
     * @param bool $targetChanges
     * @return \StructType\SetApplicationSettingsRequest
     */
    public function setTargetChanges($targetChanges = null)
    {
        // validation for constraint: boolean
        if (!is_null($targetChanges) && !is_bool($targetChanges)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($targetChanges, true), gettype($targetChanges)), __LINE__);
        }
        $this->TargetChanges = $targetChanges;
        return $this;
    }
}
