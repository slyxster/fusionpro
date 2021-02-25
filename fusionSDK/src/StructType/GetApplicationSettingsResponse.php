<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetApplicationSettingsResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetApplicationSettingsResponse
 * @subpackage Structs
 */
class GetApplicationSettingsResponse extends AbstractStructBase
{
    /**
     * The RestartPending
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $RestartPending;
    /**
     * The Settings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfApplicationSetting
     */
    public $Settings;
    /**
     * The GetApplicationSettingsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GetApplicationSettingsResponse
     */
    public $GetApplicationSettingsResult;
    /**
     * Constructor method for GetApplicationSettingsResponse
     * @uses GetApplicationSettingsResponse::setRestartPending()
     * @uses GetApplicationSettingsResponse::setSettings()
     * @uses GetApplicationSettingsResponse::setGetApplicationSettingsResult()
     * @param bool $restartPending
     * @param \ArrayType\ArrayOfApplicationSetting $settings
     * @param \StructType\GetApplicationSettingsResponse $getApplicationSettingsResult
     */
    public function __construct($restartPending = null, \ArrayType\ArrayOfApplicationSetting $settings = null, \StructType\GetApplicationSettingsResponse $getApplicationSettingsResult = null)
    {
        $this
            ->setRestartPending($restartPending)
            ->setSettings($settings)
            ->setGetApplicationSettingsResult($getApplicationSettingsResult);
    }
    /**
     * Get RestartPending value
     * @return bool|null
     */
    public function getRestartPending()
    {
        return $this->RestartPending;
    }
    /**
     * Set RestartPending value
     * @param bool $restartPending
     * @return \StructType\GetApplicationSettingsResponse
     */
    public function setRestartPending($restartPending = null)
    {
        // validation for constraint: boolean
        if (!is_null($restartPending) && !is_bool($restartPending)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($restartPending, true), gettype($restartPending)), __LINE__);
        }
        $this->RestartPending = $restartPending;
        return $this;
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
     * @return \StructType\GetApplicationSettingsResponse
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
     * Get GetApplicationSettingsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GetApplicationSettingsResponse|null
     */
    public function getGetApplicationSettingsResult()
    {
        return isset($this->GetApplicationSettingsResult) ? $this->GetApplicationSettingsResult : null;
    }
    /**
     * Set GetApplicationSettingsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\GetApplicationSettingsResponse $getApplicationSettingsResult
     * @return \StructType\GetApplicationSettingsResponse
     */
    public function setGetApplicationSettingsResult(\StructType\GetApplicationSettingsResponse $getApplicationSettingsResult = null)
    {
        if (is_null($getApplicationSettingsResult) || (is_array($getApplicationSettingsResult) && empty($getApplicationSettingsResult))) {
            unset($this->GetApplicationSettingsResult);
        } else {
            $this->GetApplicationSettingsResult = $getApplicationSettingsResult;
        }
        return $this;
    }
}
