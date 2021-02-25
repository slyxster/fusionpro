<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FieldPickListDisplay EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FieldPickListDisplay
 * @subpackage Enumerations
 */
class FieldPickListDisplay extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Droplist'
     * @return string 'Droplist'
     */
    const VALUE_DROPLIST = 'Droplist';
    /**
     * Constant for value 'MultiSelect'
     * @return string 'MultiSelect'
     */
    const VALUE_MULTI_SELECT = 'MultiSelect';
    /**
     * Constant for value 'SingleSelect'
     * @return string 'SingleSelect'
     */
    const VALUE_SINGLE_SELECT = 'SingleSelect';
    /**
     * Constant for value 'RadioButtons'
     * @return string 'RadioButtons'
     */
    const VALUE_RADIO_BUTTONS = 'RadioButtons';
    /**
     * Return allowed values
     * @uses self::VALUE_DROPLIST
     * @uses self::VALUE_MULTI_SELECT
     * @uses self::VALUE_SINGLE_SELECT
     * @uses self::VALUE_RADIO_BUTTONS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DROPLIST,
            self::VALUE_MULTI_SELECT,
            self::VALUE_SINGLE_SELECT,
            self::VALUE_RADIO_BUTTONS,
        );
    }
}
