<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FPParameterType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FPParameterType
 * @subpackage Enumerations
 */
class FPParameterType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MaxServerLicense'
     * @return string 'MaxServerLicense'
     */
    const VALUE_MAX_SERVER_LICENSE = 'MaxServerLicense';
    /**
     * Constant for value 'AvailableLicense'
     * @return string 'AvailableLicense'
     */
    const VALUE_AVAILABLE_LICENSE = 'AvailableLicense';
    /**
     * Return allowed values
     * @uses self::VALUE_MAX_SERVER_LICENSE
     * @uses self::VALUE_AVAILABLE_LICENSE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_MAX_SERVER_LICENSE,
            self::VALUE_AVAILABLE_LICENSE,
        );
    }
}
