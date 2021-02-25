<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FieldType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FieldType
 * @subpackage Enumerations
 */
class FieldType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SingleLine'
     * @return string 'SingleLine'
     */
    const VALUE_SINGLE_LINE = 'SingleLine';
    /**
     * Constant for value 'MultiLine'
     * @return string 'MultiLine'
     */
    const VALUE_MULTI_LINE = 'MultiLine';
    /**
     * Constant for value 'Gender'
     * @return string 'Gender'
     */
    const VALUE_GENDER = 'Gender';
    /**
     * Constant for value 'YesNo'
     * @return string 'YesNo'
     */
    const VALUE_YES_NO = 'YesNo';
    /**
     * Constant for value 'PickList'
     * @return string 'PickList'
     */
    const VALUE_PICK_LIST = 'PickList';
    /**
     * Constant for value 'Child'
     * @return string 'Child'
     */
    const VALUE_CHILD = 'Child';
    /**
     * Constant for value 'GraphicUpload'
     * @return string 'GraphicUpload'
     */
    const VALUE_GRAPHIC_UPLOAD = 'GraphicUpload';
    /**
     * Constant for value 'GraphicPicklist'
     * @return string 'GraphicPicklist'
     */
    const VALUE_GRAPHIC_PICKLIST = 'GraphicPicklist';
    /**
     * Constant for value 'Separator'
     * @return string 'Separator'
     */
    const VALUE_SEPARATOR = 'Separator';
    /**
     * Return allowed values
     * @uses self::VALUE_SINGLE_LINE
     * @uses self::VALUE_MULTI_LINE
     * @uses self::VALUE_GENDER
     * @uses self::VALUE_YES_NO
     * @uses self::VALUE_PICK_LIST
     * @uses self::VALUE_CHILD
     * @uses self::VALUE_GRAPHIC_UPLOAD
     * @uses self::VALUE_GRAPHIC_PICKLIST
     * @uses self::VALUE_SEPARATOR
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SINGLE_LINE,
            self::VALUE_MULTI_LINE,
            self::VALUE_GENDER,
            self::VALUE_YES_NO,
            self::VALUE_PICK_LIST,
            self::VALUE_CHILD,
            self::VALUE_GRAPHIC_UPLOAD,
            self::VALUE_GRAPHIC_PICKLIST,
            self::VALUE_SEPARATOR,
        );
    }
}
