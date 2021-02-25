<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ApplicationSetting StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ApplicationSetting
 * @subpackage Structs
 */
class ApplicationSetting extends KeyValue
{
    /**
     * The Enabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Enabled;
    /**
     * The RequiresRestart
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $RequiresRestart;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * Constructor method for ApplicationSetting
     * @uses ApplicationSetting::setEnabled()
     * @uses ApplicationSetting::setRequiresRestart()
     * @uses ApplicationSetting::setType()
     * @param bool $enabled
     * @param bool $requiresRestart
     * @param string $type
     */
    public function __construct($enabled = null, $requiresRestart = null, $type = null)
    {
        $this
            ->setEnabled($enabled)
            ->setRequiresRestart($requiresRestart)
            ->setType($type);
    }
    /**
     * Get Enabled value
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->Enabled;
    }
    /**
     * Set Enabled value
     * @param bool $enabled
     * @return \StructType\ApplicationSetting
     */
    public function setEnabled($enabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($enabled) && !is_bool($enabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enabled, true), gettype($enabled)), __LINE__);
        }
        $this->Enabled = $enabled;
        return $this;
    }
    /**
     * Get RequiresRestart value
     * @return bool|null
     */
    public function getRequiresRestart()
    {
        return $this->RequiresRestart;
    }
    /**
     * Set RequiresRestart value
     * @param bool $requiresRestart
     * @return \StructType\ApplicationSetting
     */
    public function setRequiresRestart($requiresRestart = null)
    {
        // validation for constraint: boolean
        if (!is_null($requiresRestart) && !is_bool($requiresRestart)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requiresRestart, true), gettype($requiresRestart)), __LINE__);
        }
        $this->RequiresRestart = $requiresRestart;
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
     * @uses \EnumType\SettingType::valueIsValid()
     * @uses \EnumType\SettingType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\ApplicationSetting
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SettingType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SettingType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\SettingType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
}
