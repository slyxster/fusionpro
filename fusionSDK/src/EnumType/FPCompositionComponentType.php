<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FPCompositionComponentType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FPCompositionComponentType
 * @subpackage Enumerations
 */
class FPCompositionComponentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FromString'
     * @return string 'FromString'
     */
    const VALUE_FROM_STRING = 'FromString';
    /**
     * Constant for value 'FromFile'
     * @return string 'FromFile'
     */
    const VALUE_FROM_FILE = 'FromFile';
    /**
     * Constant for value 'FromBytes'
     * @return string 'FromBytes'
     */
    const VALUE_FROM_BYTES = 'FromBytes';
    /**
     * Return allowed values
     * @uses self::VALUE_FROM_STRING
     * @uses self::VALUE_FROM_FILE
     * @uses self::VALUE_FROM_BYTES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_FROM_STRING,
            self::VALUE_FROM_FILE,
            self::VALUE_FROM_BYTES,
        );
    }
}
