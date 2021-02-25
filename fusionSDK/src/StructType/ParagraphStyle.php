<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ParagraphStyle StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ParagraphStyle
 * @subpackage Structs
 */
class ParagraphStyle extends AbstractStructBase
{
    /**
     * The Alignment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Alignment;
    /**
     * The AutoLetterSpace
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $AutoLetterSpace;
    /**
     * The AutoNumberCharStyle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AutoNumberCharStyle;
    /**
     * The AutoNumberFormat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AutoNumberFormat;
    /**
     * The AutoNumberPosition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AutoNumberPosition;
    /**
     * The Balance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Balance;
    /**
     * The CellBottomMargin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CellBottomMargin;
    /**
     * The CellLeftMargin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CellLeftMargin;
    /**
     * The CellRightMargin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CellRightMargin;
    /**
     * The CellTopMargin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CellTopMargin;
    /**
     * The CellVerticalAlign
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CellVerticalAlign;
    /**
     * The FirstIndent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FirstIndent;
    /**
     * The HyphenMinPrefix
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $HyphenMinPrefix;
    /**
     * The HyphenMinSuffix
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $HyphenMinSuffix;
    /**
     * The Hyphenate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Hyphenate;
    /**
     * The KeepNext
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $KeepNext;
    /**
     * The KeepPrev
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $KeepPrev;
    /**
     * The LeadAfter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LeadAfter;
    /**
     * The LeadBefore
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LeadBefore;
    /**
     * The LeftIndent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $LeftIndent;
    /**
     * The Margins
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Margins;
    /**
     * The ParagraphPlacement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ParagraphPlacement;
    /**
     * The RightIndent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RightIndent;
    /**
     * The SmallCapRatio
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SmallCapRatio;
    /**
     * The SubScriptOffset
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SubScriptOffset;
    /**
     * The SubScriptRatio
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SubScriptRatio;
    /**
     * The SuperScriptOffset
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SuperScriptOffset;
    /**
     * The SuperScriptRatio
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SuperScriptRatio;
    /**
     * The Tabs
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Tabs;
    /**
     * The VerticalStartPosition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VerticalStartPosition;
    /**
     * The Widows
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Widows;
    /**
     * The WordSpaceMax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $WordSpaceMax;
    /**
     * The WordSpaceMin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $WordSpaceMin;
    /**
     * The WordSpaceOpt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $WordSpaceOpt;
    /**
     * Constructor method for ParagraphStyle
     * @uses ParagraphStyle::setAlignment()
     * @uses ParagraphStyle::setAutoLetterSpace()
     * @uses ParagraphStyle::setAutoNumberCharStyle()
     * @uses ParagraphStyle::setAutoNumberFormat()
     * @uses ParagraphStyle::setAutoNumberPosition()
     * @uses ParagraphStyle::setBalance()
     * @uses ParagraphStyle::setCellBottomMargin()
     * @uses ParagraphStyle::setCellLeftMargin()
     * @uses ParagraphStyle::setCellRightMargin()
     * @uses ParagraphStyle::setCellTopMargin()
     * @uses ParagraphStyle::setCellVerticalAlign()
     * @uses ParagraphStyle::setFirstIndent()
     * @uses ParagraphStyle::setHyphenMinPrefix()
     * @uses ParagraphStyle::setHyphenMinSuffix()
     * @uses ParagraphStyle::setHyphenate()
     * @uses ParagraphStyle::setKeepNext()
     * @uses ParagraphStyle::setKeepPrev()
     * @uses ParagraphStyle::setLeadAfter()
     * @uses ParagraphStyle::setLeadBefore()
     * @uses ParagraphStyle::setLeftIndent()
     * @uses ParagraphStyle::setMargins()
     * @uses ParagraphStyle::setParagraphPlacement()
     * @uses ParagraphStyle::setRightIndent()
     * @uses ParagraphStyle::setSmallCapRatio()
     * @uses ParagraphStyle::setSubScriptOffset()
     * @uses ParagraphStyle::setSubScriptRatio()
     * @uses ParagraphStyle::setSuperScriptOffset()
     * @uses ParagraphStyle::setSuperScriptRatio()
     * @uses ParagraphStyle::setTabs()
     * @uses ParagraphStyle::setVerticalStartPosition()
     * @uses ParagraphStyle::setWidows()
     * @uses ParagraphStyle::setWordSpaceMax()
     * @uses ParagraphStyle::setWordSpaceMin()
     * @uses ParagraphStyle::setWordSpaceOpt()
     * @param string $alignment
     * @param bool $autoLetterSpace
     * @param string $autoNumberCharStyle
     * @param string $autoNumberFormat
     * @param string $autoNumberPosition
     * @param string $balance
     * @param int $cellBottomMargin
     * @param int $cellLeftMargin
     * @param int $cellRightMargin
     * @param int $cellTopMargin
     * @param int $cellVerticalAlign
     * @param int $firstIndent
     * @param int $hyphenMinPrefix
     * @param int $hyphenMinSuffix
     * @param bool $hyphenate
     * @param int $keepNext
     * @param int $keepPrev
     * @param int $leadAfter
     * @param int $leadBefore
     * @param int $leftIndent
     * @param string $margins
     * @param string $paragraphPlacement
     * @param int $rightIndent
     * @param int $smallCapRatio
     * @param int $subScriptOffset
     * @param int $subScriptRatio
     * @param int $superScriptOffset
     * @param int $superScriptRatio
     * @param string $tabs
     * @param string $verticalStartPosition
     * @param int $widows
     * @param int $wordSpaceMax
     * @param int $wordSpaceMin
     * @param int $wordSpaceOpt
     */
    public function __construct($alignment = null, $autoLetterSpace = null, $autoNumberCharStyle = null, $autoNumberFormat = null, $autoNumberPosition = null, $balance = null, $cellBottomMargin = null, $cellLeftMargin = null, $cellRightMargin = null, $cellTopMargin = null, $cellVerticalAlign = null, $firstIndent = null, $hyphenMinPrefix = null, $hyphenMinSuffix = null, $hyphenate = null, $keepNext = null, $keepPrev = null, $leadAfter = null, $leadBefore = null, $leftIndent = null, $margins = null, $paragraphPlacement = null, $rightIndent = null, $smallCapRatio = null, $subScriptOffset = null, $subScriptRatio = null, $superScriptOffset = null, $superScriptRatio = null, $tabs = null, $verticalStartPosition = null, $widows = null, $wordSpaceMax = null, $wordSpaceMin = null, $wordSpaceOpt = null)
    {
        $this
            ->setAlignment($alignment)
            ->setAutoLetterSpace($autoLetterSpace)
            ->setAutoNumberCharStyle($autoNumberCharStyle)
            ->setAutoNumberFormat($autoNumberFormat)
            ->setAutoNumberPosition($autoNumberPosition)
            ->setBalance($balance)
            ->setCellBottomMargin($cellBottomMargin)
            ->setCellLeftMargin($cellLeftMargin)
            ->setCellRightMargin($cellRightMargin)
            ->setCellTopMargin($cellTopMargin)
            ->setCellVerticalAlign($cellVerticalAlign)
            ->setFirstIndent($firstIndent)
            ->setHyphenMinPrefix($hyphenMinPrefix)
            ->setHyphenMinSuffix($hyphenMinSuffix)
            ->setHyphenate($hyphenate)
            ->setKeepNext($keepNext)
            ->setKeepPrev($keepPrev)
            ->setLeadAfter($leadAfter)
            ->setLeadBefore($leadBefore)
            ->setLeftIndent($leftIndent)
            ->setMargins($margins)
            ->setParagraphPlacement($paragraphPlacement)
            ->setRightIndent($rightIndent)
            ->setSmallCapRatio($smallCapRatio)
            ->setSubScriptOffset($subScriptOffset)
            ->setSubScriptRatio($subScriptRatio)
            ->setSuperScriptOffset($superScriptOffset)
            ->setSuperScriptRatio($superScriptRatio)
            ->setTabs($tabs)
            ->setVerticalStartPosition($verticalStartPosition)
            ->setWidows($widows)
            ->setWordSpaceMax($wordSpaceMax)
            ->setWordSpaceMin($wordSpaceMin)
            ->setWordSpaceOpt($wordSpaceOpt);
    }
    /**
     * Get Alignment value
     * @return string|null
     */
    public function getAlignment()
    {
        return $this->Alignment;
    }
    /**
     * Set Alignment value
     * @uses \EnumType\ParagraphAlignment::valueIsValid()
     * @uses \EnumType\ParagraphAlignment::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $alignment
     * @return \StructType\ParagraphStyle
     */
    public function setAlignment($alignment = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ParagraphAlignment::valueIsValid($alignment)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ParagraphAlignment', is_array($alignment) ? implode(', ', $alignment) : var_export($alignment, true), implode(', ', \EnumType\ParagraphAlignment::getValidValues())), __LINE__);
        }
        $this->Alignment = $alignment;
        return $this;
    }
    /**
     * Get AutoLetterSpace value
     * @return bool|null
     */
    public function getAutoLetterSpace()
    {
        return $this->AutoLetterSpace;
    }
    /**
     * Set AutoLetterSpace value
     * @param bool $autoLetterSpace
     * @return \StructType\ParagraphStyle
     */
    public function setAutoLetterSpace($autoLetterSpace = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoLetterSpace) && !is_bool($autoLetterSpace)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoLetterSpace, true), gettype($autoLetterSpace)), __LINE__);
        }
        $this->AutoLetterSpace = $autoLetterSpace;
        return $this;
    }
    /**
     * Get AutoNumberCharStyle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAutoNumberCharStyle()
    {
        return isset($this->AutoNumberCharStyle) ? $this->AutoNumberCharStyle : null;
    }
    /**
     * Set AutoNumberCharStyle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $autoNumberCharStyle
     * @return \StructType\ParagraphStyle
     */
    public function setAutoNumberCharStyle($autoNumberCharStyle = null)
    {
        // validation for constraint: string
        if (!is_null($autoNumberCharStyle) && !is_string($autoNumberCharStyle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autoNumberCharStyle, true), gettype($autoNumberCharStyle)), __LINE__);
        }
        if (is_null($autoNumberCharStyle) || (is_array($autoNumberCharStyle) && empty($autoNumberCharStyle))) {
            unset($this->AutoNumberCharStyle);
        } else {
            $this->AutoNumberCharStyle = $autoNumberCharStyle;
        }
        return $this;
    }
    /**
     * Get AutoNumberFormat value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAutoNumberFormat()
    {
        return isset($this->AutoNumberFormat) ? $this->AutoNumberFormat : null;
    }
    /**
     * Set AutoNumberFormat value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $autoNumberFormat
     * @return \StructType\ParagraphStyle
     */
    public function setAutoNumberFormat($autoNumberFormat = null)
    {
        // validation for constraint: string
        if (!is_null($autoNumberFormat) && !is_string($autoNumberFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autoNumberFormat, true), gettype($autoNumberFormat)), __LINE__);
        }
        if (is_null($autoNumberFormat) || (is_array($autoNumberFormat) && empty($autoNumberFormat))) {
            unset($this->AutoNumberFormat);
        } else {
            $this->AutoNumberFormat = $autoNumberFormat;
        }
        return $this;
    }
    /**
     * Get AutoNumberPosition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAutoNumberPosition()
    {
        return isset($this->AutoNumberPosition) ? $this->AutoNumberPosition : null;
    }
    /**
     * Set AutoNumberPosition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $autoNumberPosition
     * @return \StructType\ParagraphStyle
     */
    public function setAutoNumberPosition($autoNumberPosition = null)
    {
        // validation for constraint: string
        if (!is_null($autoNumberPosition) && !is_string($autoNumberPosition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autoNumberPosition, true), gettype($autoNumberPosition)), __LINE__);
        }
        if (is_null($autoNumberPosition) || (is_array($autoNumberPosition) && empty($autoNumberPosition))) {
            unset($this->AutoNumberPosition);
        } else {
            $this->AutoNumberPosition = $autoNumberPosition;
        }
        return $this;
    }
    /**
     * Get Balance value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBalance()
    {
        return isset($this->Balance) ? $this->Balance : null;
    }
    /**
     * Set Balance value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $balance
     * @return \StructType\ParagraphStyle
     */
    public function setBalance($balance = null)
    {
        // validation for constraint: string
        if (!is_null($balance) && !is_string($balance)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($balance, true), gettype($balance)), __LINE__);
        }
        if (is_null($balance) || (is_array($balance) && empty($balance))) {
            unset($this->Balance);
        } else {
            $this->Balance = $balance;
        }
        return $this;
    }
    /**
     * Get CellBottomMargin value
     * @return int|null
     */
    public function getCellBottomMargin()
    {
        return $this->CellBottomMargin;
    }
    /**
     * Set CellBottomMargin value
     * @param int $cellBottomMargin
     * @return \StructType\ParagraphStyle
     */
    public function setCellBottomMargin($cellBottomMargin = null)
    {
        // validation for constraint: int
        if (!is_null($cellBottomMargin) && !(is_int($cellBottomMargin) || ctype_digit($cellBottomMargin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cellBottomMargin, true), gettype($cellBottomMargin)), __LINE__);
        }
        $this->CellBottomMargin = $cellBottomMargin;
        return $this;
    }
    /**
     * Get CellLeftMargin value
     * @return int|null
     */
    public function getCellLeftMargin()
    {
        return $this->CellLeftMargin;
    }
    /**
     * Set CellLeftMargin value
     * @param int $cellLeftMargin
     * @return \StructType\ParagraphStyle
     */
    public function setCellLeftMargin($cellLeftMargin = null)
    {
        // validation for constraint: int
        if (!is_null($cellLeftMargin) && !(is_int($cellLeftMargin) || ctype_digit($cellLeftMargin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cellLeftMargin, true), gettype($cellLeftMargin)), __LINE__);
        }
        $this->CellLeftMargin = $cellLeftMargin;
        return $this;
    }
    /**
     * Get CellRightMargin value
     * @return int|null
     */
    public function getCellRightMargin()
    {
        return $this->CellRightMargin;
    }
    /**
     * Set CellRightMargin value
     * @param int $cellRightMargin
     * @return \StructType\ParagraphStyle
     */
    public function setCellRightMargin($cellRightMargin = null)
    {
        // validation for constraint: int
        if (!is_null($cellRightMargin) && !(is_int($cellRightMargin) || ctype_digit($cellRightMargin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cellRightMargin, true), gettype($cellRightMargin)), __LINE__);
        }
        $this->CellRightMargin = $cellRightMargin;
        return $this;
    }
    /**
     * Get CellTopMargin value
     * @return int|null
     */
    public function getCellTopMargin()
    {
        return $this->CellTopMargin;
    }
    /**
     * Set CellTopMargin value
     * @param int $cellTopMargin
     * @return \StructType\ParagraphStyle
     */
    public function setCellTopMargin($cellTopMargin = null)
    {
        // validation for constraint: int
        if (!is_null($cellTopMargin) && !(is_int($cellTopMargin) || ctype_digit($cellTopMargin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cellTopMargin, true), gettype($cellTopMargin)), __LINE__);
        }
        $this->CellTopMargin = $cellTopMargin;
        return $this;
    }
    /**
     * Get CellVerticalAlign value
     * @return int|null
     */
    public function getCellVerticalAlign()
    {
        return $this->CellVerticalAlign;
    }
    /**
     * Set CellVerticalAlign value
     * @param int $cellVerticalAlign
     * @return \StructType\ParagraphStyle
     */
    public function setCellVerticalAlign($cellVerticalAlign = null)
    {
        // validation for constraint: int
        if (!is_null($cellVerticalAlign) && !(is_int($cellVerticalAlign) || ctype_digit($cellVerticalAlign))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cellVerticalAlign, true), gettype($cellVerticalAlign)), __LINE__);
        }
        $this->CellVerticalAlign = $cellVerticalAlign;
        return $this;
    }
    /**
     * Get FirstIndent value
     * @return int|null
     */
    public function getFirstIndent()
    {
        return $this->FirstIndent;
    }
    /**
     * Set FirstIndent value
     * @param int $firstIndent
     * @return \StructType\ParagraphStyle
     */
    public function setFirstIndent($firstIndent = null)
    {
        // validation for constraint: int
        if (!is_null($firstIndent) && !(is_int($firstIndent) || ctype_digit($firstIndent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($firstIndent, true), gettype($firstIndent)), __LINE__);
        }
        $this->FirstIndent = $firstIndent;
        return $this;
    }
    /**
     * Get HyphenMinPrefix value
     * @return int|null
     */
    public function getHyphenMinPrefix()
    {
        return $this->HyphenMinPrefix;
    }
    /**
     * Set HyphenMinPrefix value
     * @param int $hyphenMinPrefix
     * @return \StructType\ParagraphStyle
     */
    public function setHyphenMinPrefix($hyphenMinPrefix = null)
    {
        // validation for constraint: int
        if (!is_null($hyphenMinPrefix) && !(is_int($hyphenMinPrefix) || ctype_digit($hyphenMinPrefix))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hyphenMinPrefix, true), gettype($hyphenMinPrefix)), __LINE__);
        }
        $this->HyphenMinPrefix = $hyphenMinPrefix;
        return $this;
    }
    /**
     * Get HyphenMinSuffix value
     * @return int|null
     */
    public function getHyphenMinSuffix()
    {
        return $this->HyphenMinSuffix;
    }
    /**
     * Set HyphenMinSuffix value
     * @param int $hyphenMinSuffix
     * @return \StructType\ParagraphStyle
     */
    public function setHyphenMinSuffix($hyphenMinSuffix = null)
    {
        // validation for constraint: int
        if (!is_null($hyphenMinSuffix) && !(is_int($hyphenMinSuffix) || ctype_digit($hyphenMinSuffix))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hyphenMinSuffix, true), gettype($hyphenMinSuffix)), __LINE__);
        }
        $this->HyphenMinSuffix = $hyphenMinSuffix;
        return $this;
    }
    /**
     * Get Hyphenate value
     * @return bool|null
     */
    public function getHyphenate()
    {
        return $this->Hyphenate;
    }
    /**
     * Set Hyphenate value
     * @param bool $hyphenate
     * @return \StructType\ParagraphStyle
     */
    public function setHyphenate($hyphenate = null)
    {
        // validation for constraint: boolean
        if (!is_null($hyphenate) && !is_bool($hyphenate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hyphenate, true), gettype($hyphenate)), __LINE__);
        }
        $this->Hyphenate = $hyphenate;
        return $this;
    }
    /**
     * Get KeepNext value
     * @return int|null
     */
    public function getKeepNext()
    {
        return $this->KeepNext;
    }
    /**
     * Set KeepNext value
     * @param int $keepNext
     * @return \StructType\ParagraphStyle
     */
    public function setKeepNext($keepNext = null)
    {
        // validation for constraint: int
        if (!is_null($keepNext) && !(is_int($keepNext) || ctype_digit($keepNext))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($keepNext, true), gettype($keepNext)), __LINE__);
        }
        $this->KeepNext = $keepNext;
        return $this;
    }
    /**
     * Get KeepPrev value
     * @return int|null
     */
    public function getKeepPrev()
    {
        return $this->KeepPrev;
    }
    /**
     * Set KeepPrev value
     * @param int $keepPrev
     * @return \StructType\ParagraphStyle
     */
    public function setKeepPrev($keepPrev = null)
    {
        // validation for constraint: int
        if (!is_null($keepPrev) && !(is_int($keepPrev) || ctype_digit($keepPrev))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($keepPrev, true), gettype($keepPrev)), __LINE__);
        }
        $this->KeepPrev = $keepPrev;
        return $this;
    }
    /**
     * Get LeadAfter value
     * @return int|null
     */
    public function getLeadAfter()
    {
        return $this->LeadAfter;
    }
    /**
     * Set LeadAfter value
     * @param int $leadAfter
     * @return \StructType\ParagraphStyle
     */
    public function setLeadAfter($leadAfter = null)
    {
        // validation for constraint: int
        if (!is_null($leadAfter) && !(is_int($leadAfter) || ctype_digit($leadAfter))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($leadAfter, true), gettype($leadAfter)), __LINE__);
        }
        $this->LeadAfter = $leadAfter;
        return $this;
    }
    /**
     * Get LeadBefore value
     * @return int|null
     */
    public function getLeadBefore()
    {
        return $this->LeadBefore;
    }
    /**
     * Set LeadBefore value
     * @param int $leadBefore
     * @return \StructType\ParagraphStyle
     */
    public function setLeadBefore($leadBefore = null)
    {
        // validation for constraint: int
        if (!is_null($leadBefore) && !(is_int($leadBefore) || ctype_digit($leadBefore))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($leadBefore, true), gettype($leadBefore)), __LINE__);
        }
        $this->LeadBefore = $leadBefore;
        return $this;
    }
    /**
     * Get LeftIndent value
     * @return int|null
     */
    public function getLeftIndent()
    {
        return $this->LeftIndent;
    }
    /**
     * Set LeftIndent value
     * @param int $leftIndent
     * @return \StructType\ParagraphStyle
     */
    public function setLeftIndent($leftIndent = null)
    {
        // validation for constraint: int
        if (!is_null($leftIndent) && !(is_int($leftIndent) || ctype_digit($leftIndent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($leftIndent, true), gettype($leftIndent)), __LINE__);
        }
        $this->LeftIndent = $leftIndent;
        return $this;
    }
    /**
     * Get Margins value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMargins()
    {
        return isset($this->Margins) ? $this->Margins : null;
    }
    /**
     * Set Margins value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $margins
     * @return \StructType\ParagraphStyle
     */
    public function setMargins($margins = null)
    {
        // validation for constraint: string
        if (!is_null($margins) && !is_string($margins)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($margins, true), gettype($margins)), __LINE__);
        }
        if (is_null($margins) || (is_array($margins) && empty($margins))) {
            unset($this->Margins);
        } else {
            $this->Margins = $margins;
        }
        return $this;
    }
    /**
     * Get ParagraphPlacement value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParagraphPlacement()
    {
        return isset($this->ParagraphPlacement) ? $this->ParagraphPlacement : null;
    }
    /**
     * Set ParagraphPlacement value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $paragraphPlacement
     * @return \StructType\ParagraphStyle
     */
    public function setParagraphPlacement($paragraphPlacement = null)
    {
        // validation for constraint: string
        if (!is_null($paragraphPlacement) && !is_string($paragraphPlacement)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paragraphPlacement, true), gettype($paragraphPlacement)), __LINE__);
        }
        if (is_null($paragraphPlacement) || (is_array($paragraphPlacement) && empty($paragraphPlacement))) {
            unset($this->ParagraphPlacement);
        } else {
            $this->ParagraphPlacement = $paragraphPlacement;
        }
        return $this;
    }
    /**
     * Get RightIndent value
     * @return int|null
     */
    public function getRightIndent()
    {
        return $this->RightIndent;
    }
    /**
     * Set RightIndent value
     * @param int $rightIndent
     * @return \StructType\ParagraphStyle
     */
    public function setRightIndent($rightIndent = null)
    {
        // validation for constraint: int
        if (!is_null($rightIndent) && !(is_int($rightIndent) || ctype_digit($rightIndent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rightIndent, true), gettype($rightIndent)), __LINE__);
        }
        $this->RightIndent = $rightIndent;
        return $this;
    }
    /**
     * Get SmallCapRatio value
     * @return int|null
     */
    public function getSmallCapRatio()
    {
        return $this->SmallCapRatio;
    }
    /**
     * Set SmallCapRatio value
     * @param int $smallCapRatio
     * @return \StructType\ParagraphStyle
     */
    public function setSmallCapRatio($smallCapRatio = null)
    {
        // validation for constraint: int
        if (!is_null($smallCapRatio) && !(is_int($smallCapRatio) || ctype_digit($smallCapRatio))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($smallCapRatio, true), gettype($smallCapRatio)), __LINE__);
        }
        $this->SmallCapRatio = $smallCapRatio;
        return $this;
    }
    /**
     * Get SubScriptOffset value
     * @return int|null
     */
    public function getSubScriptOffset()
    {
        return $this->SubScriptOffset;
    }
    /**
     * Set SubScriptOffset value
     * @param int $subScriptOffset
     * @return \StructType\ParagraphStyle
     */
    public function setSubScriptOffset($subScriptOffset = null)
    {
        // validation for constraint: int
        if (!is_null($subScriptOffset) && !(is_int($subScriptOffset) || ctype_digit($subScriptOffset))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($subScriptOffset, true), gettype($subScriptOffset)), __LINE__);
        }
        $this->SubScriptOffset = $subScriptOffset;
        return $this;
    }
    /**
     * Get SubScriptRatio value
     * @return int|null
     */
    public function getSubScriptRatio()
    {
        return $this->SubScriptRatio;
    }
    /**
     * Set SubScriptRatio value
     * @param int $subScriptRatio
     * @return \StructType\ParagraphStyle
     */
    public function setSubScriptRatio($subScriptRatio = null)
    {
        // validation for constraint: int
        if (!is_null($subScriptRatio) && !(is_int($subScriptRatio) || ctype_digit($subScriptRatio))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($subScriptRatio, true), gettype($subScriptRatio)), __LINE__);
        }
        $this->SubScriptRatio = $subScriptRatio;
        return $this;
    }
    /**
     * Get SuperScriptOffset value
     * @return int|null
     */
    public function getSuperScriptOffset()
    {
        return $this->SuperScriptOffset;
    }
    /**
     * Set SuperScriptOffset value
     * @param int $superScriptOffset
     * @return \StructType\ParagraphStyle
     */
    public function setSuperScriptOffset($superScriptOffset = null)
    {
        // validation for constraint: int
        if (!is_null($superScriptOffset) && !(is_int($superScriptOffset) || ctype_digit($superScriptOffset))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($superScriptOffset, true), gettype($superScriptOffset)), __LINE__);
        }
        $this->SuperScriptOffset = $superScriptOffset;
        return $this;
    }
    /**
     * Get SuperScriptRatio value
     * @return int|null
     */
    public function getSuperScriptRatio()
    {
        return $this->SuperScriptRatio;
    }
    /**
     * Set SuperScriptRatio value
     * @param int $superScriptRatio
     * @return \StructType\ParagraphStyle
     */
    public function setSuperScriptRatio($superScriptRatio = null)
    {
        // validation for constraint: int
        if (!is_null($superScriptRatio) && !(is_int($superScriptRatio) || ctype_digit($superScriptRatio))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($superScriptRatio, true), gettype($superScriptRatio)), __LINE__);
        }
        $this->SuperScriptRatio = $superScriptRatio;
        return $this;
    }
    /**
     * Get Tabs value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTabs()
    {
        return isset($this->Tabs) ? $this->Tabs : null;
    }
    /**
     * Set Tabs value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $tabs
     * @return \StructType\ParagraphStyle
     */
    public function setTabs($tabs = null)
    {
        // validation for constraint: string
        if (!is_null($tabs) && !is_string($tabs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tabs, true), gettype($tabs)), __LINE__);
        }
        if (is_null($tabs) || (is_array($tabs) && empty($tabs))) {
            unset($this->Tabs);
        } else {
            $this->Tabs = $tabs;
        }
        return $this;
    }
    /**
     * Get VerticalStartPosition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVerticalStartPosition()
    {
        return isset($this->VerticalStartPosition) ? $this->VerticalStartPosition : null;
    }
    /**
     * Set VerticalStartPosition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $verticalStartPosition
     * @return \StructType\ParagraphStyle
     */
    public function setVerticalStartPosition($verticalStartPosition = null)
    {
        // validation for constraint: string
        if (!is_null($verticalStartPosition) && !is_string($verticalStartPosition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($verticalStartPosition, true), gettype($verticalStartPosition)), __LINE__);
        }
        if (is_null($verticalStartPosition) || (is_array($verticalStartPosition) && empty($verticalStartPosition))) {
            unset($this->VerticalStartPosition);
        } else {
            $this->VerticalStartPosition = $verticalStartPosition;
        }
        return $this;
    }
    /**
     * Get Widows value
     * @return int|null
     */
    public function getWidows()
    {
        return $this->Widows;
    }
    /**
     * Set Widows value
     * @param int $widows
     * @return \StructType\ParagraphStyle
     */
    public function setWidows($widows = null)
    {
        // validation for constraint: int
        if (!is_null($widows) && !(is_int($widows) || ctype_digit($widows))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($widows, true), gettype($widows)), __LINE__);
        }
        $this->Widows = $widows;
        return $this;
    }
    /**
     * Get WordSpaceMax value
     * @return int|null
     */
    public function getWordSpaceMax()
    {
        return $this->WordSpaceMax;
    }
    /**
     * Set WordSpaceMax value
     * @param int $wordSpaceMax
     * @return \StructType\ParagraphStyle
     */
    public function setWordSpaceMax($wordSpaceMax = null)
    {
        // validation for constraint: int
        if (!is_null($wordSpaceMax) && !(is_int($wordSpaceMax) || ctype_digit($wordSpaceMax))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($wordSpaceMax, true), gettype($wordSpaceMax)), __LINE__);
        }
        $this->WordSpaceMax = $wordSpaceMax;
        return $this;
    }
    /**
     * Get WordSpaceMin value
     * @return int|null
     */
    public function getWordSpaceMin()
    {
        return $this->WordSpaceMin;
    }
    /**
     * Set WordSpaceMin value
     * @param int $wordSpaceMin
     * @return \StructType\ParagraphStyle
     */
    public function setWordSpaceMin($wordSpaceMin = null)
    {
        // validation for constraint: int
        if (!is_null($wordSpaceMin) && !(is_int($wordSpaceMin) || ctype_digit($wordSpaceMin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($wordSpaceMin, true), gettype($wordSpaceMin)), __LINE__);
        }
        $this->WordSpaceMin = $wordSpaceMin;
        return $this;
    }
    /**
     * Get WordSpaceOpt value
     * @return int|null
     */
    public function getWordSpaceOpt()
    {
        return $this->WordSpaceOpt;
    }
    /**
     * Set WordSpaceOpt value
     * @param int $wordSpaceOpt
     * @return \StructType\ParagraphStyle
     */
    public function setWordSpaceOpt($wordSpaceOpt = null)
    {
        // validation for constraint: int
        if (!is_null($wordSpaceOpt) && !(is_int($wordSpaceOpt) || ctype_digit($wordSpaceOpt))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($wordSpaceOpt, true), gettype($wordSpaceOpt)), __LINE__);
        }
        $this->WordSpaceOpt = $wordSpaceOpt;
        return $this;
    }
}
