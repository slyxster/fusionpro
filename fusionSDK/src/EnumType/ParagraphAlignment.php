<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ParagraphAlignment EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ParagraphAlignment
 * @subpackage Enumerations
 */
class ParagraphAlignment extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Left'
     * @return string 'Left'
     */
    const VALUE_LEFT = 'Left';
    /**
     * Constant for value 'Center'
     * @return string 'Center'
     */
    const VALUE_CENTER = 'Center';
    /**
     * Constant for value 'Right'
     * @return string 'Right'
     */
    const VALUE_RIGHT = 'Right';
    /**
     * Constant for value 'Justified'
     * @return string 'Justified'
     */
    const VALUE_JUSTIFIED = 'Justified';
    /**
     * Constant for value 'JustifiedFull'
     * @return string 'JustifiedFull'
     */
    const VALUE_JUSTIFIED_FULL = 'JustifiedFull';
    /**
     * Return allowed values
     * @uses self::VALUE_LEFT
     * @uses self::VALUE_CENTER
     * @uses self::VALUE_RIGHT
     * @uses self::VALUE_JUSTIFIED
     * @uses self::VALUE_JUSTIFIED_FULL
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_LEFT,
            self::VALUE_CENTER,
            self::VALUE_RIGHT,
            self::VALUE_JUSTIFIED,
            self::VALUE_JUSTIFIED_FULL,
        );
    }
}
