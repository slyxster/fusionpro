<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OutputFileNameSource EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OutputFileNameSource
 * @subpackage Enumerations
 */
class OutputFileNameSource extends AbstractStructEnumBase
{
    /**
     * Constant for value 'InputFileName'
     * @return string 'InputFileName'
     */
    const VALUE_INPUT_FILE_NAME = 'InputFileName';
    /**
     * Constant for value 'CompositionID'
     * @return string 'CompositionID'
     */
    const VALUE_COMPOSITION_ID = 'CompositionID';
    /**
     * Constant for value 'InputFileAndCompositionID'
     * @return string 'InputFileAndCompositionID'
     */
    const VALUE_INPUT_FILE_AND_COMPOSITION_ID = 'InputFileAndCompositionID';
    /**
     * Return allowed values
     * @uses self::VALUE_INPUT_FILE_NAME
     * @uses self::VALUE_COMPOSITION_ID
     * @uses self::VALUE_INPUT_FILE_AND_COMPOSITION_ID
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_INPUT_FILE_NAME,
            self::VALUE_COMPOSITION_ID,
            self::VALUE_INPUT_FILE_AND_COMPOSITION_ID,
        );
    }
}
