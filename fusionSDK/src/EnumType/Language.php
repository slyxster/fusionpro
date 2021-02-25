<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Language EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Language
 * @subpackage Enumerations
 */
class Language extends AbstractStructEnumBase
{
    /**
     * Constant for value 'English'
     * @return string 'English'
     */
    const VALUE_ENGLISH = 'English';
    /**
     * Constant for value 'German'
     * @return string 'German'
     */
    const VALUE_GERMAN = 'German';
    /**
     * Constant for value 'French'
     * @return string 'French'
     */
    const VALUE_FRENCH = 'French';
    /**
     * Constant for value 'Spanish'
     * @return string 'Spanish'
     */
    const VALUE_SPANISH = 'Spanish';
    /**
     * Constant for value 'Italian'
     * @return string 'Italian'
     */
    const VALUE_ITALIAN = 'Italian';
    /**
     * Return allowed values
     * @uses self::VALUE_ENGLISH
     * @uses self::VALUE_GERMAN
     * @uses self::VALUE_FRENCH
     * @uses self::VALUE_SPANISH
     * @uses self::VALUE_ITALIAN
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ENGLISH,
            self::VALUE_GERMAN,
            self::VALUE_FRENCH,
            self::VALUE_SPANISH,
            self::VALUE_ITALIAN,
        );
    }
}
