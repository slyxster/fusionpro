<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FPWebFontCapability EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FPWebFontCapability
 * @subpackage Enumerations
 */
class FPWebFontCapability extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoFontChanges'
     * @return string 'NoFontChanges'
     */
    const VALUE_NO_FONT_CHANGES = 'NoFontChanges';
    /**
     * Constant for value 'TemplateFonts'
     * @return string 'TemplateFonts'
     */
    const VALUE_TEMPLATE_FONTS = 'TemplateFonts';
    /**
     * Constant for value 'SpecificFontList'
     * @return string 'SpecificFontList'
     */
    const VALUE_SPECIFIC_FONT_LIST = 'SpecificFontList';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_FONT_CHANGES
     * @uses self::VALUE_TEMPLATE_FONTS
     * @uses self::VALUE_SPECIFIC_FONT_LIST
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_FONT_CHANGES,
            self::VALUE_TEMPLATE_FONTS,
            self::VALUE_SPECIFIC_FONT_LIST,
        );
    }
}
