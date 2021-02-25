<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharacterStyle StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CharacterStyle
 * @subpackage Structs
 */
class CharacterStyle extends AbstractStructBase
{
    /**
     * The BaseStyleName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BaseStyleName;
    /**
     * The Bold
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Bold;
    /**
     * The Capitalization
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Capitalization;
    /**
     * The Color
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Color;
    /**
     * The FontFamily
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FontFamily;
    /**
     * The FontStyleName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FontStyleName;
    /**
     * The InddFontName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InddFontName;
    /**
     * The Italics
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Italics;
    /**
     * The Kerning
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Kerning;
    /**
     * The Leading
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Space
     */
    public $Leading;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The Position
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Position;
    /**
     * The SetWidth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SetWidth;
    /**
     * The SmallCapRatio
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SmallCapRatio;
    /**
     * The SmallCaps
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SmallCaps;
    /**
     * The StrikeThrough
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $StrikeThrough;
    /**
     * The SubScript
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SubScript;
    /**
     * The SuperScript
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SuperScript;
    /**
     * The SupersubFontRatio
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SupersubFontRatio;
    /**
     * The SupersubOffsetRatio
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SupersubOffsetRatio;
    /**
     * The Tint
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $Tint;
    /**
     * The TypeSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TypeSize;
    /**
     * The Underline
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Underline;
    /**
     * Constructor method for CharacterStyle
     * @uses CharacterStyle::setBaseStyleName()
     * @uses CharacterStyle::setBold()
     * @uses CharacterStyle::setCapitalization()
     * @uses CharacterStyle::setColor()
     * @uses CharacterStyle::setFontFamily()
     * @uses CharacterStyle::setFontStyleName()
     * @uses CharacterStyle::setInddFontName()
     * @uses CharacterStyle::setItalics()
     * @uses CharacterStyle::setKerning()
     * @uses CharacterStyle::setLeading()
     * @uses CharacterStyle::setName()
     * @uses CharacterStyle::setPosition()
     * @uses CharacterStyle::setSetWidth()
     * @uses CharacterStyle::setSmallCapRatio()
     * @uses CharacterStyle::setSmallCaps()
     * @uses CharacterStyle::setStrikeThrough()
     * @uses CharacterStyle::setSubScript()
     * @uses CharacterStyle::setSuperScript()
     * @uses CharacterStyle::setSupersubFontRatio()
     * @uses CharacterStyle::setSupersubOffsetRatio()
     * @uses CharacterStyle::setTint()
     * @uses CharacterStyle::setTypeSize()
     * @uses CharacterStyle::setUnderline()
     * @param string $baseStyleName
     * @param bool $bold
     * @param int $capitalization
     * @param string $color
     * @param string $fontFamily
     * @param string $fontStyleName
     * @param string $inddFontName
     * @param bool $italics
     * @param bool $kerning
     * @param \StructType\Space $leading
     * @param string $name
     * @param int $position
     * @param int $setWidth
     * @param int $smallCapRatio
     * @param bool $smallCaps
     * @param bool $strikeThrough
     * @param bool $subScript
     * @param bool $superScript
     * @param int $supersubFontRatio
     * @param int $supersubOffsetRatio
     * @param float $tint
     * @param int $typeSize
     * @param bool $underline
     */
    public function __construct($baseStyleName = null, $bold = null, $capitalization = null, $color = null, $fontFamily = null, $fontStyleName = null, $inddFontName = null, $italics = null, $kerning = null, \StructType\Space $leading = null, $name = null, $position = null, $setWidth = null, $smallCapRatio = null, $smallCaps = null, $strikeThrough = null, $subScript = null, $superScript = null, $supersubFontRatio = null, $supersubOffsetRatio = null, $tint = null, $typeSize = null, $underline = null)
    {
        $this
            ->setBaseStyleName($baseStyleName)
            ->setBold($bold)
            ->setCapitalization($capitalization)
            ->setColor($color)
            ->setFontFamily($fontFamily)
            ->setFontStyleName($fontStyleName)
            ->setInddFontName($inddFontName)
            ->setItalics($italics)
            ->setKerning($kerning)
            ->setLeading($leading)
            ->setName($name)
            ->setPosition($position)
            ->setSetWidth($setWidth)
            ->setSmallCapRatio($smallCapRatio)
            ->setSmallCaps($smallCaps)
            ->setStrikeThrough($strikeThrough)
            ->setSubScript($subScript)
            ->setSuperScript($superScript)
            ->setSupersubFontRatio($supersubFontRatio)
            ->setSupersubOffsetRatio($supersubOffsetRatio)
            ->setTint($tint)
            ->setTypeSize($typeSize)
            ->setUnderline($underline);
    }
    /**
     * Get BaseStyleName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBaseStyleName()
    {
        return isset($this->BaseStyleName) ? $this->BaseStyleName : null;
    }
    /**
     * Set BaseStyleName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $baseStyleName
     * @return \StructType\CharacterStyle
     */
    public function setBaseStyleName($baseStyleName = null)
    {
        // validation for constraint: string
        if (!is_null($baseStyleName) && !is_string($baseStyleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseStyleName, true), gettype($baseStyleName)), __LINE__);
        }
        if (is_null($baseStyleName) || (is_array($baseStyleName) && empty($baseStyleName))) {
            unset($this->BaseStyleName);
        } else {
            $this->BaseStyleName = $baseStyleName;
        }
        return $this;
    }
    /**
     * Get Bold value
     * @return bool|null
     */
    public function getBold()
    {
        return $this->Bold;
    }
    /**
     * Set Bold value
     * @param bool $bold
     * @return \StructType\CharacterStyle
     */
    public function setBold($bold = null)
    {
        // validation for constraint: boolean
        if (!is_null($bold) && !is_bool($bold)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bold, true), gettype($bold)), __LINE__);
        }
        $this->Bold = $bold;
        return $this;
    }
    /**
     * Get Capitalization value
     * @return int|null
     */
    public function getCapitalization()
    {
        return $this->Capitalization;
    }
    /**
     * Set Capitalization value
     * @param int $capitalization
     * @return \StructType\CharacterStyle
     */
    public function setCapitalization($capitalization = null)
    {
        // validation for constraint: int
        if (!is_null($capitalization) && !(is_int($capitalization) || ctype_digit($capitalization))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($capitalization, true), gettype($capitalization)), __LINE__);
        }
        $this->Capitalization = $capitalization;
        return $this;
    }
    /**
     * Get Color value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getColor()
    {
        return isset($this->Color) ? $this->Color : null;
    }
    /**
     * Set Color value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $color
     * @return \StructType\CharacterStyle
     */
    public function setColor($color = null)
    {
        // validation for constraint: string
        if (!is_null($color) && !is_string($color)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($color, true), gettype($color)), __LINE__);
        }
        if (is_null($color) || (is_array($color) && empty($color))) {
            unset($this->Color);
        } else {
            $this->Color = $color;
        }
        return $this;
    }
    /**
     * Get FontFamily value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFontFamily()
    {
        return isset($this->FontFamily) ? $this->FontFamily : null;
    }
    /**
     * Set FontFamily value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fontFamily
     * @return \StructType\CharacterStyle
     */
    public function setFontFamily($fontFamily = null)
    {
        // validation for constraint: string
        if (!is_null($fontFamily) && !is_string($fontFamily)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fontFamily, true), gettype($fontFamily)), __LINE__);
        }
        if (is_null($fontFamily) || (is_array($fontFamily) && empty($fontFamily))) {
            unset($this->FontFamily);
        } else {
            $this->FontFamily = $fontFamily;
        }
        return $this;
    }
    /**
     * Get FontStyleName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFontStyleName()
    {
        return isset($this->FontStyleName) ? $this->FontStyleName : null;
    }
    /**
     * Set FontStyleName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fontStyleName
     * @return \StructType\CharacterStyle
     */
    public function setFontStyleName($fontStyleName = null)
    {
        // validation for constraint: string
        if (!is_null($fontStyleName) && !is_string($fontStyleName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fontStyleName, true), gettype($fontStyleName)), __LINE__);
        }
        if (is_null($fontStyleName) || (is_array($fontStyleName) && empty($fontStyleName))) {
            unset($this->FontStyleName);
        } else {
            $this->FontStyleName = $fontStyleName;
        }
        return $this;
    }
    /**
     * Get InddFontName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInddFontName()
    {
        return isset($this->InddFontName) ? $this->InddFontName : null;
    }
    /**
     * Set InddFontName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inddFontName
     * @return \StructType\CharacterStyle
     */
    public function setInddFontName($inddFontName = null)
    {
        // validation for constraint: string
        if (!is_null($inddFontName) && !is_string($inddFontName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inddFontName, true), gettype($inddFontName)), __LINE__);
        }
        if (is_null($inddFontName) || (is_array($inddFontName) && empty($inddFontName))) {
            unset($this->InddFontName);
        } else {
            $this->InddFontName = $inddFontName;
        }
        return $this;
    }
    /**
     * Get Italics value
     * @return bool|null
     */
    public function getItalics()
    {
        return $this->Italics;
    }
    /**
     * Set Italics value
     * @param bool $italics
     * @return \StructType\CharacterStyle
     */
    public function setItalics($italics = null)
    {
        // validation for constraint: boolean
        if (!is_null($italics) && !is_bool($italics)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($italics, true), gettype($italics)), __LINE__);
        }
        $this->Italics = $italics;
        return $this;
    }
    /**
     * Get Kerning value
     * @return bool|null
     */
    public function getKerning()
    {
        return $this->Kerning;
    }
    /**
     * Set Kerning value
     * @param bool $kerning
     * @return \StructType\CharacterStyle
     */
    public function setKerning($kerning = null)
    {
        // validation for constraint: boolean
        if (!is_null($kerning) && !is_bool($kerning)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($kerning, true), gettype($kerning)), __LINE__);
        }
        $this->Kerning = $kerning;
        return $this;
    }
    /**
     * Get Leading value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Space|null
     */
    public function getLeading()
    {
        return isset($this->Leading) ? $this->Leading : null;
    }
    /**
     * Set Leading value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Space $leading
     * @return \StructType\CharacterStyle
     */
    public function setLeading(\StructType\Space $leading = null)
    {
        if (is_null($leading) || (is_array($leading) && empty($leading))) {
            unset($this->Leading);
        } else {
            $this->Leading = $leading;
        }
        return $this;
    }
    /**
     * Get Name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName()
    {
        return isset($this->Name) ? $this->Name : null;
    }
    /**
     * Set Name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\CharacterStyle
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->Name);
        } else {
            $this->Name = $name;
        }
        return $this;
    }
    /**
     * Get Position value
     * @return int|null
     */
    public function getPosition()
    {
        return $this->Position;
    }
    /**
     * Set Position value
     * @param int $position
     * @return \StructType\CharacterStyle
     */
    public function setPosition($position = null)
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->Position = $position;
        return $this;
    }
    /**
     * Get SetWidth value
     * @return int|null
     */
    public function getSetWidth()
    {
        return $this->SetWidth;
    }
    /**
     * Set SetWidth value
     * @param int $setWidth
     * @return \StructType\CharacterStyle
     */
    public function setSetWidth($setWidth = null)
    {
        // validation for constraint: int
        if (!is_null($setWidth) && !(is_int($setWidth) || ctype_digit($setWidth))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($setWidth, true), gettype($setWidth)), __LINE__);
        }
        $this->SetWidth = $setWidth;
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
     * @return \StructType\CharacterStyle
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
     * Get SmallCaps value
     * @return bool|null
     */
    public function getSmallCaps()
    {
        return $this->SmallCaps;
    }
    /**
     * Set SmallCaps value
     * @param bool $smallCaps
     * @return \StructType\CharacterStyle
     */
    public function setSmallCaps($smallCaps = null)
    {
        // validation for constraint: boolean
        if (!is_null($smallCaps) && !is_bool($smallCaps)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($smallCaps, true), gettype($smallCaps)), __LINE__);
        }
        $this->SmallCaps = $smallCaps;
        return $this;
    }
    /**
     * Get StrikeThrough value
     * @return bool|null
     */
    public function getStrikeThrough()
    {
        return $this->StrikeThrough;
    }
    /**
     * Set StrikeThrough value
     * @param bool $strikeThrough
     * @return \StructType\CharacterStyle
     */
    public function setStrikeThrough($strikeThrough = null)
    {
        // validation for constraint: boolean
        if (!is_null($strikeThrough) && !is_bool($strikeThrough)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($strikeThrough, true), gettype($strikeThrough)), __LINE__);
        }
        $this->StrikeThrough = $strikeThrough;
        return $this;
    }
    /**
     * Get SubScript value
     * @return bool|null
     */
    public function getSubScript()
    {
        return $this->SubScript;
    }
    /**
     * Set SubScript value
     * @param bool $subScript
     * @return \StructType\CharacterStyle
     */
    public function setSubScript($subScript = null)
    {
        // validation for constraint: boolean
        if (!is_null($subScript) && !is_bool($subScript)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($subScript, true), gettype($subScript)), __LINE__);
        }
        $this->SubScript = $subScript;
        return $this;
    }
    /**
     * Get SuperScript value
     * @return bool|null
     */
    public function getSuperScript()
    {
        return $this->SuperScript;
    }
    /**
     * Set SuperScript value
     * @param bool $superScript
     * @return \StructType\CharacterStyle
     */
    public function setSuperScript($superScript = null)
    {
        // validation for constraint: boolean
        if (!is_null($superScript) && !is_bool($superScript)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($superScript, true), gettype($superScript)), __LINE__);
        }
        $this->SuperScript = $superScript;
        return $this;
    }
    /**
     * Get SupersubFontRatio value
     * @return int|null
     */
    public function getSupersubFontRatio()
    {
        return $this->SupersubFontRatio;
    }
    /**
     * Set SupersubFontRatio value
     * @param int $supersubFontRatio
     * @return \StructType\CharacterStyle
     */
    public function setSupersubFontRatio($supersubFontRatio = null)
    {
        // validation for constraint: int
        if (!is_null($supersubFontRatio) && !(is_int($supersubFontRatio) || ctype_digit($supersubFontRatio))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($supersubFontRatio, true), gettype($supersubFontRatio)), __LINE__);
        }
        $this->SupersubFontRatio = $supersubFontRatio;
        return $this;
    }
    /**
     * Get SupersubOffsetRatio value
     * @return int|null
     */
    public function getSupersubOffsetRatio()
    {
        return $this->SupersubOffsetRatio;
    }
    /**
     * Set SupersubOffsetRatio value
     * @param int $supersubOffsetRatio
     * @return \StructType\CharacterStyle
     */
    public function setSupersubOffsetRatio($supersubOffsetRatio = null)
    {
        // validation for constraint: int
        if (!is_null($supersubOffsetRatio) && !(is_int($supersubOffsetRatio) || ctype_digit($supersubOffsetRatio))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($supersubOffsetRatio, true), gettype($supersubOffsetRatio)), __LINE__);
        }
        $this->SupersubOffsetRatio = $supersubOffsetRatio;
        return $this;
    }
    /**
     * Get Tint value
     * @return float|null
     */
    public function getTint()
    {
        return $this->Tint;
    }
    /**
     * Set Tint value
     * @param float $tint
     * @return \StructType\CharacterStyle
     */
    public function setTint($tint = null)
    {
        // validation for constraint: float
        if (!is_null($tint) && !(is_float($tint) || is_numeric($tint))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($tint, true), gettype($tint)), __LINE__);
        }
        $this->Tint = $tint;
        return $this;
    }
    /**
     * Get TypeSize value
     * @return int|null
     */
    public function getTypeSize()
    {
        return $this->TypeSize;
    }
    /**
     * Set TypeSize value
     * @param int $typeSize
     * @return \StructType\CharacterStyle
     */
    public function setTypeSize($typeSize = null)
    {
        // validation for constraint: int
        if (!is_null($typeSize) && !(is_int($typeSize) || ctype_digit($typeSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($typeSize, true), gettype($typeSize)), __LINE__);
        }
        $this->TypeSize = $typeSize;
        return $this;
    }
    /**
     * Get Underline value
     * @return bool|null
     */
    public function getUnderline()
    {
        return $this->Underline;
    }
    /**
     * Set Underline value
     * @param bool $underline
     * @return \StructType\CharacterStyle
     */
    public function setUnderline($underline = null)
    {
        // validation for constraint: boolean
        if (!is_null($underline) && !is_bool($underline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($underline, true), gettype($underline)), __LINE__);
        }
        $this->Underline = $underline;
        return $this;
    }
}
