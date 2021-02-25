<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OutputFormat EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OutputFormat
 * @subpackage Enumerations
 */
class OutputFormat extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PostScript'
     * @return string 'PostScript'
     */
    const VALUE_POST_SCRIPT = 'PostScript';
    /**
     * Constant for value 'PDF'
     * @return string 'PDF'
     */
    const VALUE_PDF = 'PDF';
    /**
     * Constant for value 'VPDF'
     * @return string 'VPDF'
     */
    const VALUE_VPDF = 'VPDF';
    /**
     * Constant for value 'PDF_VT'
     * @return string 'PDF_VT'
     */
    const VALUE_PDF_VT = 'PDF_VT';
    /**
     * Constant for value 'AFP'
     * @return string 'AFP'
     */
    const VALUE_AFP = 'AFP';
    /**
     * Constant for value 'VDX'
     * @return string 'VDX'
     */
    const VALUE_VDX = 'VDX';
    /**
     * Constant for value 'Digimaster_PS'
     * @return string 'Digimaster_PS'
     */
    const VALUE_DIGIMASTER_PS = 'Digimaster_PS';
    /**
     * Constant for value 'PPML'
     * @return string 'PPML'
     */
    const VALUE_PPML = 'PPML';
    /**
     * Constant for value 'HP_PPML'
     * @return string 'HP_PPML'
     */
    const VALUE_HP_PPML = 'HP_PPML';
    /**
     * Constant for value 'JLYT'
     * @return string 'JLYT'
     */
    const VALUE_JLYT = 'JLYT';
    /**
     * Constant for value 'MultiFile_VPS'
     * @return string 'MultiFile_VPS'
     */
    const VALUE_MULTI_FILE_VPS = 'MultiFile_VPS';
    /**
     * Constant for value 'SingleFile_VPS'
     * @return string 'SingleFile_VPS'
     */
    const VALUE_SINGLE_FILE_VPS = 'SingleFile_VPS';
    /**
     * Constant for value 'VIPP'
     * @return string 'VIPP'
     */
    const VALUE_VIPP = 'VIPP';
    /**
     * Constant for value 'BIF'
     * @return string 'BIF'
     */
    const VALUE_BIF = 'BIF';
    /**
     * Return allowed values
     * @uses self::VALUE_POST_SCRIPT
     * @uses self::VALUE_PDF
     * @uses self::VALUE_VPDF
     * @uses self::VALUE_PDF_VT
     * @uses self::VALUE_AFP
     * @uses self::VALUE_VDX
     * @uses self::VALUE_DIGIMASTER_PS
     * @uses self::VALUE_PPML
     * @uses self::VALUE_HP_PPML
     * @uses self::VALUE_JLYT
     * @uses self::VALUE_MULTI_FILE_VPS
     * @uses self::VALUE_SINGLE_FILE_VPS
     * @uses self::VALUE_VIPP
     * @uses self::VALUE_BIF
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_POST_SCRIPT,
            self::VALUE_PDF,
            self::VALUE_VPDF,
            self::VALUE_PDF_VT,
            self::VALUE_AFP,
            self::VALUE_VDX,
            self::VALUE_DIGIMASTER_PS,
            self::VALUE_PPML,
            self::VALUE_HP_PPML,
            self::VALUE_JLYT,
            self::VALUE_MULTI_FILE_VPS,
            self::VALUE_SINGLE_FILE_VPS,
            self::VALUE_VIPP,
            self::VALUE_BIF,
        );
    }
}
