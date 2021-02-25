<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FieldSingleLineFilter EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FieldSingleLineFilter
 * @subpackage Enumerations
 */
class FieldSingleLineFilter extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Anything'
     * @return string 'Anything'
     */
    const VALUE_ANYTHING = 'Anything';
    /**
     * Constant for value 'Integer'
     * @return string 'Integer'
     */
    const VALUE_INTEGER = 'Integer';
    /**
     * Constant for value 'Numeric'
     * @return string 'Numeric'
     */
    const VALUE_NUMERIC = 'Numeric';
    /**
     * Return allowed values
     * @uses self::VALUE_ANYTHING
     * @uses self::VALUE_INTEGER
     * @uses self::VALUE_NUMERIC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ANYTHING,
            self::VALUE_INTEGER,
            self::VALUE_NUMERIC,
        );
    }
}
