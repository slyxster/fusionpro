<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FieldYesNoStorage EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FieldYesNoStorage
 * @subpackage Enumerations
 */
class FieldYesNoStorage extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Y_N'
     * @return string 'Y_N'
     */
    const VALUE_Y_N = 'Y_N';
    /**
     * Constant for value 'Yes_No'
     * @return string 'Yes_No'
     */
    const VALUE_YES_NO = 'Yes_No';
    /**
     * Constant for value 'One_Zero'
     * @return string 'One_Zero'
     */
    const VALUE_ONE_ZERO = 'One_Zero';
    /**
     * Constant for value 'T_F'
     * @return string 'T_F'
     */
    const VALUE_T_F = 'T_F';
    /**
     * Constant for value 'True_False'
     * @return string 'True_False'
     */
    const VALUE_TRUE_FALSE = 'True_False';
    /**
     * Constant for value 'M_F'
     * @return string 'M_F'
     */
    const VALUE_M_F = 'M_F';
    /**
     * Constant for value 'Male_Female'
     * @return string 'Male_Female'
     */
    const VALUE_MALE_FEMALE = 'Male_Female';
    /**
     * Return allowed values
     * @uses self::VALUE_Y_N
     * @uses self::VALUE_YES_NO
     * @uses self::VALUE_ONE_ZERO
     * @uses self::VALUE_T_F
     * @uses self::VALUE_TRUE_FALSE
     * @uses self::VALUE_M_F
     * @uses self::VALUE_MALE_FEMALE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_Y_N,
            self::VALUE_YES_NO,
            self::VALUE_ONE_ZERO,
            self::VALUE_T_F,
            self::VALUE_TRUE_FALSE,
            self::VALUE_M_F,
            self::VALUE_MALE_FEMALE,
        );
    }
}
