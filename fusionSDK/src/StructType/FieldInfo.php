<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FieldInfo StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FieldInfo
 * @subpackage Structs
 */
class FieldInfo extends AbstractStructBase
{
    /**
     * The Children
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $Children;
    /**
     * The DataPattern
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $DataPattern;
    /**
     * The Default
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Default;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Description;
    /**
     * The HTMLFieldName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $HTMLFieldName;
    /**
     * The HTMLParent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $HTMLParent;
    /**
     * The IsGraphic
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsGraphic;
    /**
     * The LimitMax
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $LimitMax;
    /**
     * The LimitMin
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $LimitMin;
    /**
     * The MultiLineCharacterLimit
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MultiLineCharacterLimit;
    /**
     * The MultiLineNumEditLines
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MultiLineNumEditLines;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The OriginalValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OriginalValue;
    /**
     * The Parent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Parent;
    /**
     * The PickListDisplay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PickListDisplay;
    /**
     * The PickListItems
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfKeyValue
     */
    public $PickListItems;
    /**
     * The Prompt
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Prompt;
    /**
     * The ReadOnly
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ReadOnly;
    /**
     * The RegExPattern
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RegExPattern;
    /**
     * The Required
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Required;
    /**
     * The SingleLineFilter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $SingleLineFilter;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The UseLimits
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $UseLimits;
    /**
     * The Visible
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Visible;
    /**
     * The YesNoCheckBox
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $YesNoCheckBox;
    /**
     * The YesNoStorage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $YesNoStorage;
    /**
     * Constructor method for FieldInfo
     * @uses FieldInfo::setChildren()
     * @uses FieldInfo::setDataPattern()
     * @uses FieldInfo::setDefault()
     * @uses FieldInfo::setDescription()
     * @uses FieldInfo::setHTMLFieldName()
     * @uses FieldInfo::setHTMLParent()
     * @uses FieldInfo::setIsGraphic()
     * @uses FieldInfo::setLimitMax()
     * @uses FieldInfo::setLimitMin()
     * @uses FieldInfo::setMultiLineCharacterLimit()
     * @uses FieldInfo::setMultiLineNumEditLines()
     * @uses FieldInfo::setName()
     * @uses FieldInfo::setOriginalValue()
     * @uses FieldInfo::setParent()
     * @uses FieldInfo::setPickListDisplay()
     * @uses FieldInfo::setPickListItems()
     * @uses FieldInfo::setPrompt()
     * @uses FieldInfo::setReadOnly()
     * @uses FieldInfo::setRegExPattern()
     * @uses FieldInfo::setRequired()
     * @uses FieldInfo::setSingleLineFilter()
     * @uses FieldInfo::setType()
     * @uses FieldInfo::setUseLimits()
     * @uses FieldInfo::setVisible()
     * @uses FieldInfo::setYesNoCheckBox()
     * @uses FieldInfo::setYesNoStorage()
     * @param \ArrayType\ArrayOfstring $children
     * @param string $dataPattern
     * @param string $default
     * @param string $description
     * @param string $hTMLFieldName
     * @param string $hTMLParent
     * @param bool $isGraphic
     * @param float $limitMax
     * @param float $limitMin
     * @param int $multiLineCharacterLimit
     * @param int $multiLineNumEditLines
     * @param string $name
     * @param string $originalValue
     * @param string $parent
     * @param string $pickListDisplay
     * @param \ArrayType\ArrayOfKeyValue $pickListItems
     * @param string $prompt
     * @param bool $readOnly
     * @param string $regExPattern
     * @param bool $required
     * @param string $singleLineFilter
     * @param string $type
     * @param bool $useLimits
     * @param bool $visible
     * @param bool $yesNoCheckBox
     * @param string $yesNoStorage
     */
    public function __construct(\ArrayType\ArrayOfstring $children = null, $dataPattern = null, $default = null, $description = null, $hTMLFieldName = null, $hTMLParent = null, $isGraphic = null, $limitMax = null, $limitMin = null, $multiLineCharacterLimit = null, $multiLineNumEditLines = null, $name = null, $originalValue = null, $parent = null, $pickListDisplay = null, \ArrayType\ArrayOfKeyValue $pickListItems = null, $prompt = null, $readOnly = null, $regExPattern = null, $required = null, $singleLineFilter = null, $type = null, $useLimits = null, $visible = null, $yesNoCheckBox = null, $yesNoStorage = null)
    {
        $this
            ->setChildren($children)
            ->setDataPattern($dataPattern)
            ->setDefault($default)
            ->setDescription($description)
            ->setHTMLFieldName($hTMLFieldName)
            ->setHTMLParent($hTMLParent)
            ->setIsGraphic($isGraphic)
            ->setLimitMax($limitMax)
            ->setLimitMin($limitMin)
            ->setMultiLineCharacterLimit($multiLineCharacterLimit)
            ->setMultiLineNumEditLines($multiLineNumEditLines)
            ->setName($name)
            ->setOriginalValue($originalValue)
            ->setParent($parent)
            ->setPickListDisplay($pickListDisplay)
            ->setPickListItems($pickListItems)
            ->setPrompt($prompt)
            ->setReadOnly($readOnly)
            ->setRegExPattern($regExPattern)
            ->setRequired($required)
            ->setSingleLineFilter($singleLineFilter)
            ->setType($type)
            ->setUseLimits($useLimits)
            ->setVisible($visible)
            ->setYesNoCheckBox($yesNoCheckBox)
            ->setYesNoStorage($yesNoStorage);
    }
    /**
     * Get Children value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getChildren()
    {
        return isset($this->Children) ? $this->Children : null;
    }
    /**
     * Set Children value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $children
     * @return \StructType\FieldInfo
     */
    public function setChildren(\ArrayType\ArrayOfstring $children = null)
    {
        if (is_null($children) || (is_array($children) && empty($children))) {
            unset($this->Children);
        } else {
            $this->Children = $children;
        }
        return $this;
    }
    /**
     * Get DataPattern value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDataPattern()
    {
        return isset($this->DataPattern) ? $this->DataPattern : null;
    }
    /**
     * Set DataPattern value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $dataPattern
     * @return \StructType\FieldInfo
     */
    public function setDataPattern($dataPattern = null)
    {
        // validation for constraint: string
        if (!is_null($dataPattern) && !is_string($dataPattern)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dataPattern, true), gettype($dataPattern)), __LINE__);
        }
        if (is_null($dataPattern) || (is_array($dataPattern) && empty($dataPattern))) {
            unset($this->DataPattern);
        } else {
            $this->DataPattern = $dataPattern;
        }
        return $this;
    }
    /**
     * Get Default value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDefault()
    {
        return isset($this->Default) ? $this->Default : null;
    }
    /**
     * Set Default value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $default
     * @return \StructType\FieldInfo
     */
    public function setDefault($default = null)
    {
        // validation for constraint: string
        if (!is_null($default) && !is_string($default)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($default, true), gettype($default)), __LINE__);
        }
        if (is_null($default) || (is_array($default) && empty($default))) {
            unset($this->Default);
        } else {
            $this->Default = $default;
        }
        return $this;
    }
    /**
     * Get Description value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDescription()
    {
        return isset($this->Description) ? $this->Description : null;
    }
    /**
     * Set Description value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $description
     * @return \StructType\FieldInfo
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        if (is_null($description) || (is_array($description) && empty($description))) {
            unset($this->Description);
        } else {
            $this->Description = $description;
        }
        return $this;
    }
    /**
     * Get HTMLFieldName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHTMLFieldName()
    {
        return isset($this->HTMLFieldName) ? $this->HTMLFieldName : null;
    }
    /**
     * Set HTMLFieldName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $hTMLFieldName
     * @return \StructType\FieldInfo
     */
    public function setHTMLFieldName($hTMLFieldName = null)
    {
        // validation for constraint: string
        if (!is_null($hTMLFieldName) && !is_string($hTMLFieldName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hTMLFieldName, true), gettype($hTMLFieldName)), __LINE__);
        }
        if (is_null($hTMLFieldName) || (is_array($hTMLFieldName) && empty($hTMLFieldName))) {
            unset($this->HTMLFieldName);
        } else {
            $this->HTMLFieldName = $hTMLFieldName;
        }
        return $this;
    }
    /**
     * Get HTMLParent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHTMLParent()
    {
        return isset($this->HTMLParent) ? $this->HTMLParent : null;
    }
    /**
     * Set HTMLParent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $hTMLParent
     * @return \StructType\FieldInfo
     */
    public function setHTMLParent($hTMLParent = null)
    {
        // validation for constraint: string
        if (!is_null($hTMLParent) && !is_string($hTMLParent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hTMLParent, true), gettype($hTMLParent)), __LINE__);
        }
        if (is_null($hTMLParent) || (is_array($hTMLParent) && empty($hTMLParent))) {
            unset($this->HTMLParent);
        } else {
            $this->HTMLParent = $hTMLParent;
        }
        return $this;
    }
    /**
     * Get IsGraphic value
     * @return bool|null
     */
    public function getIsGraphic()
    {
        return $this->IsGraphic;
    }
    /**
     * Set IsGraphic value
     * @param bool $isGraphic
     * @return \StructType\FieldInfo
     */
    public function setIsGraphic($isGraphic = null)
    {
        // validation for constraint: boolean
        if (!is_null($isGraphic) && !is_bool($isGraphic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGraphic, true), gettype($isGraphic)), __LINE__);
        }
        $this->IsGraphic = $isGraphic;
        return $this;
    }
    /**
     * Get LimitMax value
     * @return float|null
     */
    public function getLimitMax()
    {
        return $this->LimitMax;
    }
    /**
     * Set LimitMax value
     * @param float $limitMax
     * @return \StructType\FieldInfo
     */
    public function setLimitMax($limitMax = null)
    {
        // validation for constraint: float
        if (!is_null($limitMax) && !(is_float($limitMax) || is_numeric($limitMax))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($limitMax, true), gettype($limitMax)), __LINE__);
        }
        $this->LimitMax = $limitMax;
        return $this;
    }
    /**
     * Get LimitMin value
     * @return float|null
     */
    public function getLimitMin()
    {
        return $this->LimitMin;
    }
    /**
     * Set LimitMin value
     * @param float $limitMin
     * @return \StructType\FieldInfo
     */
    public function setLimitMin($limitMin = null)
    {
        // validation for constraint: float
        if (!is_null($limitMin) && !(is_float($limitMin) || is_numeric($limitMin))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($limitMin, true), gettype($limitMin)), __LINE__);
        }
        $this->LimitMin = $limitMin;
        return $this;
    }
    /**
     * Get MultiLineCharacterLimit value
     * @return int|null
     */
    public function getMultiLineCharacterLimit()
    {
        return $this->MultiLineCharacterLimit;
    }
    /**
     * Set MultiLineCharacterLimit value
     * @param int $multiLineCharacterLimit
     * @return \StructType\FieldInfo
     */
    public function setMultiLineCharacterLimit($multiLineCharacterLimit = null)
    {
        // validation for constraint: int
        if (!is_null($multiLineCharacterLimit) && !(is_int($multiLineCharacterLimit) || ctype_digit($multiLineCharacterLimit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($multiLineCharacterLimit, true), gettype($multiLineCharacterLimit)), __LINE__);
        }
        $this->MultiLineCharacterLimit = $multiLineCharacterLimit;
        return $this;
    }
    /**
     * Get MultiLineNumEditLines value
     * @return int|null
     */
    public function getMultiLineNumEditLines()
    {
        return $this->MultiLineNumEditLines;
    }
    /**
     * Set MultiLineNumEditLines value
     * @param int $multiLineNumEditLines
     * @return \StructType\FieldInfo
     */
    public function setMultiLineNumEditLines($multiLineNumEditLines = null)
    {
        // validation for constraint: int
        if (!is_null($multiLineNumEditLines) && !(is_int($multiLineNumEditLines) || ctype_digit($multiLineNumEditLines))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($multiLineNumEditLines, true), gettype($multiLineNumEditLines)), __LINE__);
        }
        $this->MultiLineNumEditLines = $multiLineNumEditLines;
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
     * @return \StructType\FieldInfo
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
     * Get OriginalValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOriginalValue()
    {
        return isset($this->OriginalValue) ? $this->OriginalValue : null;
    }
    /**
     * Set OriginalValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $originalValue
     * @return \StructType\FieldInfo
     */
    public function setOriginalValue($originalValue = null)
    {
        // validation for constraint: string
        if (!is_null($originalValue) && !is_string($originalValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalValue, true), gettype($originalValue)), __LINE__);
        }
        if (is_null($originalValue) || (is_array($originalValue) && empty($originalValue))) {
            unset($this->OriginalValue);
        } else {
            $this->OriginalValue = $originalValue;
        }
        return $this;
    }
    /**
     * Get Parent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParent()
    {
        return isset($this->Parent) ? $this->Parent : null;
    }
    /**
     * Set Parent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parent
     * @return \StructType\FieldInfo
     */
    public function setParent($parent = null)
    {
        // validation for constraint: string
        if (!is_null($parent) && !is_string($parent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parent, true), gettype($parent)), __LINE__);
        }
        if (is_null($parent) || (is_array($parent) && empty($parent))) {
            unset($this->Parent);
        } else {
            $this->Parent = $parent;
        }
        return $this;
    }
    /**
     * Get PickListDisplay value
     * @return string|null
     */
    public function getPickListDisplay()
    {
        return $this->PickListDisplay;
    }
    /**
     * Set PickListDisplay value
     * @uses \EnumType\FieldPickListDisplay::valueIsValid()
     * @uses \EnumType\FieldPickListDisplay::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pickListDisplay
     * @return \StructType\FieldInfo
     */
    public function setPickListDisplay($pickListDisplay = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FieldPickListDisplay::valueIsValid($pickListDisplay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FieldPickListDisplay', is_array($pickListDisplay) ? implode(', ', $pickListDisplay) : var_export($pickListDisplay, true), implode(', ', \EnumType\FieldPickListDisplay::getValidValues())), __LINE__);
        }
        $this->PickListDisplay = $pickListDisplay;
        return $this;
    }
    /**
     * Get PickListItems value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfKeyValue|null
     */
    public function getPickListItems()
    {
        return isset($this->PickListItems) ? $this->PickListItems : null;
    }
    /**
     * Set PickListItems value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfKeyValue $pickListItems
     * @return \StructType\FieldInfo
     */
    public function setPickListItems(\ArrayType\ArrayOfKeyValue $pickListItems = null)
    {
        if (is_null($pickListItems) || (is_array($pickListItems) && empty($pickListItems))) {
            unset($this->PickListItems);
        } else {
            $this->PickListItems = $pickListItems;
        }
        return $this;
    }
    /**
     * Get Prompt value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPrompt()
    {
        return isset($this->Prompt) ? $this->Prompt : null;
    }
    /**
     * Set Prompt value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $prompt
     * @return \StructType\FieldInfo
     */
    public function setPrompt($prompt = null)
    {
        // validation for constraint: string
        if (!is_null($prompt) && !is_string($prompt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prompt, true), gettype($prompt)), __LINE__);
        }
        if (is_null($prompt) || (is_array($prompt) && empty($prompt))) {
            unset($this->Prompt);
        } else {
            $this->Prompt = $prompt;
        }
        return $this;
    }
    /**
     * Get ReadOnly value
     * @return bool|null
     */
    public function getReadOnly()
    {
        return $this->ReadOnly;
    }
    /**
     * Set ReadOnly value
     * @param bool $readOnly
     * @return \StructType\FieldInfo
     */
    public function setReadOnly($readOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($readOnly) && !is_bool($readOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($readOnly, true), gettype($readOnly)), __LINE__);
        }
        $this->ReadOnly = $readOnly;
        return $this;
    }
    /**
     * Get RegExPattern value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRegExPattern()
    {
        return isset($this->RegExPattern) ? $this->RegExPattern : null;
    }
    /**
     * Set RegExPattern value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $regExPattern
     * @return \StructType\FieldInfo
     */
    public function setRegExPattern($regExPattern = null)
    {
        // validation for constraint: string
        if (!is_null($regExPattern) && !is_string($regExPattern)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regExPattern, true), gettype($regExPattern)), __LINE__);
        }
        if (is_null($regExPattern) || (is_array($regExPattern) && empty($regExPattern))) {
            unset($this->RegExPattern);
        } else {
            $this->RegExPattern = $regExPattern;
        }
        return $this;
    }
    /**
     * Get Required value
     * @return bool|null
     */
    public function getRequired()
    {
        return $this->Required;
    }
    /**
     * Set Required value
     * @param bool $required
     * @return \StructType\FieldInfo
     */
    public function setRequired($required = null)
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->Required = $required;
        return $this;
    }
    /**
     * Get SingleLineFilter value
     * @return string|null
     */
    public function getSingleLineFilter()
    {
        return $this->SingleLineFilter;
    }
    /**
     * Set SingleLineFilter value
     * @uses \EnumType\FieldSingleLineFilter::valueIsValid()
     * @uses \EnumType\FieldSingleLineFilter::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $singleLineFilter
     * @return \StructType\FieldInfo
     */
    public function setSingleLineFilter($singleLineFilter = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FieldSingleLineFilter::valueIsValid($singleLineFilter)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FieldSingleLineFilter', is_array($singleLineFilter) ? implode(', ', $singleLineFilter) : var_export($singleLineFilter, true), implode(', ', \EnumType\FieldSingleLineFilter::getValidValues())), __LINE__);
        }
        $this->SingleLineFilter = $singleLineFilter;
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType()
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\FieldType::valueIsValid()
     * @uses \EnumType\FieldType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\FieldInfo
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FieldType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FieldType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\FieldType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get UseLimits value
     * @return bool|null
     */
    public function getUseLimits()
    {
        return $this->UseLimits;
    }
    /**
     * Set UseLimits value
     * @param bool $useLimits
     * @return \StructType\FieldInfo
     */
    public function setUseLimits($useLimits = null)
    {
        // validation for constraint: boolean
        if (!is_null($useLimits) && !is_bool($useLimits)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useLimits, true), gettype($useLimits)), __LINE__);
        }
        $this->UseLimits = $useLimits;
        return $this;
    }
    /**
     * Get Visible value
     * @return bool|null
     */
    public function getVisible()
    {
        return $this->Visible;
    }
    /**
     * Set Visible value
     * @param bool $visible
     * @return \StructType\FieldInfo
     */
    public function setVisible($visible = null)
    {
        // validation for constraint: boolean
        if (!is_null($visible) && !is_bool($visible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($visible, true), gettype($visible)), __LINE__);
        }
        $this->Visible = $visible;
        return $this;
    }
    /**
     * Get YesNoCheckBox value
     * @return bool|null
     */
    public function getYesNoCheckBox()
    {
        return $this->YesNoCheckBox;
    }
    /**
     * Set YesNoCheckBox value
     * @param bool $yesNoCheckBox
     * @return \StructType\FieldInfo
     */
    public function setYesNoCheckBox($yesNoCheckBox = null)
    {
        // validation for constraint: boolean
        if (!is_null($yesNoCheckBox) && !is_bool($yesNoCheckBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($yesNoCheckBox, true), gettype($yesNoCheckBox)), __LINE__);
        }
        $this->YesNoCheckBox = $yesNoCheckBox;
        return $this;
    }
    /**
     * Get YesNoStorage value
     * @return string|null
     */
    public function getYesNoStorage()
    {
        return $this->YesNoStorage;
    }
    /**
     * Set YesNoStorage value
     * @uses \EnumType\FieldYesNoStorage::valueIsValid()
     * @uses \EnumType\FieldYesNoStorage::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $yesNoStorage
     * @return \StructType\FieldInfo
     */
    public function setYesNoStorage($yesNoStorage = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FieldYesNoStorage::valueIsValid($yesNoStorage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FieldYesNoStorage', is_array($yesNoStorage) ? implode(', ', $yesNoStorage) : var_export($yesNoStorage, true), implode(', ', \EnumType\FieldYesNoStorage::getValidValues())), __LINE__);
        }
        $this->YesNoStorage = $yesNoStorage;
        return $this;
    }
}
