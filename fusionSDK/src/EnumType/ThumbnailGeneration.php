<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ThumbnailGeneration EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ThumbnailGeneration
 * @subpackage Enumerations
 */
class ThumbnailGeneration extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Generate'
     * @return string 'Generate'
     */
    const VALUE_GENERATE = 'Generate';
    /**
     * Constant for value 'Custom'
     * @return string 'Custom'
     */
    const VALUE_CUSTOM = 'Custom';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Return allowed values
     * @uses self::VALUE_GENERATE
     * @uses self::VALUE_CUSTOM
     * @uses self::VALUE_NONE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_GENERATE,
            self::VALUE_CUSTOM,
            self::VALUE_NONE,
        );
    }
}
