<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ConditionType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ConditionType
 * @subpackage Enumerations
 */
class ConditionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'StartsWith'
     * @return string 'StartsWith'
     */
    const VALUE_STARTS_WITH = 'StartsWith';
    /**
     * Constant for value 'EndsWith'
     * @return string 'EndsWith'
     */
    const VALUE_ENDS_WITH = 'EndsWith';
    /**
     * Constant for value 'Contains'
     * @return string 'Contains'
     */
    const VALUE_CONTAINS = 'Contains';
    /**
     * Constant for value 'Matches'
     * @return string 'Matches'
     */
    const VALUE_MATCHES = 'Matches';
    /**
     * Return allowed values
     * @uses self::VALUE_STARTS_WITH
     * @uses self::VALUE_ENDS_WITH
     * @uses self::VALUE_CONTAINS
     * @uses self::VALUE_MATCHES
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_STARTS_WITH,
            self::VALUE_ENDS_WITH,
            self::VALUE_CONTAINS,
            self::VALUE_MATCHES,
        );
    }
}
