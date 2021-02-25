<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FileType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FileType
 * @subpackage Enumerations
 */
class FileType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Template'
     * @return string 'Template'
     */
    const VALUE_TEMPLATE = 'Template';
    /**
     * Constant for value 'Thumbnail'
     * @return string 'Thumbnail'
     */
    const VALUE_THUMBNAIL = 'Thumbnail';
    /**
     * Constant for value 'InputData'
     * @return string 'InputData'
     */
    const VALUE_INPUT_DATA = 'InputData';
    /**
     * Constant for value 'Format'
     * @return string 'Format'
     */
    const VALUE_FORMAT = 'Format';
    /**
     * Constant for value 'DataDefinition'
     * @return string 'DataDefinition'
     */
    const VALUE_DATA_DEFINITION = 'DataDefinition';
    /**
     * Constant for value 'HTMLFormDefinition'
     * @return string 'HTMLFormDefinition'
     */
    const VALUE_HTMLFORM_DEFINITION = 'HTMLFormDefinition';
    /**
     * Constant for value 'FontAssets'
     * @return string 'FontAssets'
     */
    const VALUE_FONT_ASSETS = 'FontAssets';
    /**
     * Constant for value 'JobSettings'
     * @return string 'JobSettings'
     */
    const VALUE_JOB_SETTINGS = 'JobSettings';
    /**
     * Constant for value 'Output'
     * @return string 'Output'
     */
    const VALUE_OUTPUT = 'Output';
    /**
     * Constant for value 'JPEGOutput'
     * @return string 'JPEGOutput'
     */
    const VALUE_JPEGOUTPUT = 'JPEGOutput';
    /**
     * Constant for value 'Log'
     * @return string 'Log'
     */
    const VALUE_LOG = 'Log';
    /**
     * Constant for value 'XMLLog'
     * @return string 'XMLLog'
     */
    const VALUE_XMLLOG = 'XMLLog';
    /**
     * Constant for value 'MediaStyle'
     * @return string 'MediaStyle'
     */
    const VALUE_MEDIA_STYLE = 'MediaStyle';
    /**
     * Constant for value 'Imposition'
     * @return string 'Imposition'
     */
    const VALUE_IMPOSITION = 'Imposition';
    /**
     * Constant for value 'WEBBackground'
     * @return string 'WEBBackground'
     */
    const VALUE_WEBBACKGROUND = 'WEBBackground';
    /**
     * Constant for value 'CSS'
     * @return string 'CSS'
     */
    const VALUE_CSS = 'CSS';
    /**
     * Constant for value 'BinaryInputFormat'
     * @return string 'BinaryInputFormat'
     */
    const VALUE_BINARY_INPUT_FORMAT = 'BinaryInputFormat';
    /**
     * Return allowed values
     * @uses self::VALUE_TEMPLATE
     * @uses self::VALUE_THUMBNAIL
     * @uses self::VALUE_INPUT_DATA
     * @uses self::VALUE_FORMAT
     * @uses self::VALUE_DATA_DEFINITION
     * @uses self::VALUE_HTMLFORM_DEFINITION
     * @uses self::VALUE_FONT_ASSETS
     * @uses self::VALUE_JOB_SETTINGS
     * @uses self::VALUE_OUTPUT
     * @uses self::VALUE_JPEGOUTPUT
     * @uses self::VALUE_LOG
     * @uses self::VALUE_XMLLOG
     * @uses self::VALUE_MEDIA_STYLE
     * @uses self::VALUE_IMPOSITION
     * @uses self::VALUE_WEBBACKGROUND
     * @uses self::VALUE_CSS
     * @uses self::VALUE_BINARY_INPUT_FORMAT
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_TEMPLATE,
            self::VALUE_THUMBNAIL,
            self::VALUE_INPUT_DATA,
            self::VALUE_FORMAT,
            self::VALUE_DATA_DEFINITION,
            self::VALUE_HTMLFORM_DEFINITION,
            self::VALUE_FONT_ASSETS,
            self::VALUE_JOB_SETTINGS,
            self::VALUE_OUTPUT,
            self::VALUE_JPEGOUTPUT,
            self::VALUE_LOG,
            self::VALUE_XMLLOG,
            self::VALUE_MEDIA_STYLE,
            self::VALUE_IMPOSITION,
            self::VALUE_WEBBACKGROUND,
            self::VALUE_CSS,
            self::VALUE_BINARY_INPUT_FORMAT,
        );
    }
}
