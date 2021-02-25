<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SettingType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SettingType
 * @subpackage Enumerations
 */
class SettingType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BOOL_SettingType'
     * @return string 'BOOL_SettingType'
     */
    const VALUE_BOOL_SETTING_TYPE = 'BOOL_SettingType';
    /**
     * Constant for value 'INT_SettingType'
     * @return string 'INT_SettingType'
     */
    const VALUE_INT_SETTING_TYPE = 'INT_SettingType';
    /**
     * Constant for value 'STRING_SettingType'
     * @return string 'STRING_SettingType'
     */
    const VALUE_STRING_SETTING_TYPE = 'STRING_SettingType';
    /**
     * Return allowed values
     * @uses self::VALUE_BOOL_SETTING_TYPE
     * @uses self::VALUE_INT_SETTING_TYPE
     * @uses self::VALUE_STRING_SETTING_TYPE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BOOL_SETTING_TYPE,
            self::VALUE_INT_SETTING_TYPE,
            self::VALUE_STRING_SETTING_TYPE,
        );
    }
}
