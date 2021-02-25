<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TextFrame StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TextFrame
 * @subpackage Structs
 */
class TextFrame extends AbstractStructBase
{
    /**
     * The BorderColor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BorderColor;
    /**
     * The BorderThickness
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $BorderThickness;
    /**
     * The Bounds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Rectangle
     */
    public $Bounds;
    /**
     * The CornerRadius
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CornerRadius;
    /**
     * The DeletedFrame
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $DeletedFrame;
    /**
     * The FillColor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FillColor;
    /**
     * The Filled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Filled;
    /**
     * The FilledPercent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $FilledPercent;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ID;
    /**
     * The InitialCharStyle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CharacterStyle
     */
    public $InitialCharStyle;
    /**
     * The InitialParaStyle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ParagraphStyle
     */
    public $InitialParaStyle;
    /**
     * The InitialStyleTags
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InitialStyleTags;
    /**
     * The Layer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Layer;
    /**
     * The LockContent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $LockContent;
    /**
     * The LockPosition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $LockPosition;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The NewFrame
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $NewFrame;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The TextContents
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TextContents;
    /**
     * The contentChanged
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $contentChanged;
    /**
     * The positionOrSizeChange
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $positionOrSizeChange;
    /**
     * Constructor method for TextFrame
     * @uses TextFrame::setBorderColor()
     * @uses TextFrame::setBorderThickness()
     * @uses TextFrame::setBounds()
     * @uses TextFrame::setCornerRadius()
     * @uses TextFrame::setDeletedFrame()
     * @uses TextFrame::setFillColor()
     * @uses TextFrame::setFilled()
     * @uses TextFrame::setFilledPercent()
     * @uses TextFrame::setID()
     * @uses TextFrame::setInitialCharStyle()
     * @uses TextFrame::setInitialParaStyle()
     * @uses TextFrame::setInitialStyleTags()
     * @uses TextFrame::setLayer()
     * @uses TextFrame::setLockContent()
     * @uses TextFrame::setLockPosition()
     * @uses TextFrame::setName()
     * @uses TextFrame::setNewFrame()
     * @uses TextFrame::setPageNumber()
     * @uses TextFrame::setTextContents()
     * @uses TextFrame::setContentChanged()
     * @uses TextFrame::setPositionOrSizeChange()
     * @param string $borderColor
     * @param int $borderThickness
     * @param \StructType\Rectangle $bounds
     * @param int $cornerRadius
     * @param bool $deletedFrame
     * @param string $fillColor
     * @param bool $filled
     * @param int $filledPercent
     * @param int $iD
     * @param \StructType\CharacterStyle $initialCharStyle
     * @param \StructType\ParagraphStyle $initialParaStyle
     * @param string $initialStyleTags
     * @param int $layer
     * @param bool $lockContent
     * @param bool $lockPosition
     * @param string $name
     * @param bool $newFrame
     * @param int $pageNumber
     * @param string $textContents
     * @param bool $contentChanged
     * @param bool $positionOrSizeChange
     */
    public function __construct($borderColor = null, $borderThickness = null, \StructType\Rectangle $bounds = null, $cornerRadius = null, $deletedFrame = null, $fillColor = null, $filled = null, $filledPercent = null, $iD = null, \StructType\CharacterStyle $initialCharStyle = null, \StructType\ParagraphStyle $initialParaStyle = null, $initialStyleTags = null, $layer = null, $lockContent = null, $lockPosition = null, $name = null, $newFrame = null, $pageNumber = null, $textContents = null, $contentChanged = null, $positionOrSizeChange = null)
    {
        $this
            ->setBorderColor($borderColor)
            ->setBorderThickness($borderThickness)
            ->setBounds($bounds)
            ->setCornerRadius($cornerRadius)
            ->setDeletedFrame($deletedFrame)
            ->setFillColor($fillColor)
            ->setFilled($filled)
            ->setFilledPercent($filledPercent)
            ->setID($iD)
            ->setInitialCharStyle($initialCharStyle)
            ->setInitialParaStyle($initialParaStyle)
            ->setInitialStyleTags($initialStyleTags)
            ->setLayer($layer)
            ->setLockContent($lockContent)
            ->setLockPosition($lockPosition)
            ->setName($name)
            ->setNewFrame($newFrame)
            ->setPageNumber($pageNumber)
            ->setTextContents($textContents)
            ->setContentChanged($contentChanged)
            ->setPositionOrSizeChange($positionOrSizeChange);
    }
    /**
     * Get BorderColor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBorderColor()
    {
        return isset($this->BorderColor) ? $this->BorderColor : null;
    }
    /**
     * Set BorderColor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $borderColor
     * @return \StructType\TextFrame
     */
    public function setBorderColor($borderColor = null)
    {
        // validation for constraint: string
        if (!is_null($borderColor) && !is_string($borderColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($borderColor, true), gettype($borderColor)), __LINE__);
        }
        if (is_null($borderColor) || (is_array($borderColor) && empty($borderColor))) {
            unset($this->BorderColor);
        } else {
            $this->BorderColor = $borderColor;
        }
        return $this;
    }
    /**
     * Get BorderThickness value
     * @return int|null
     */
    public function getBorderThickness()
    {
        return $this->BorderThickness;
    }
    /**
     * Set BorderThickness value
     * @param int $borderThickness
     * @return \StructType\TextFrame
     */
    public function setBorderThickness($borderThickness = null)
    {
        // validation for constraint: int
        if (!is_null($borderThickness) && !(is_int($borderThickness) || ctype_digit($borderThickness))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($borderThickness, true), gettype($borderThickness)), __LINE__);
        }
        $this->BorderThickness = $borderThickness;
        return $this;
    }
    /**
     * Get Bounds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Rectangle|null
     */
    public function getBounds()
    {
        return isset($this->Bounds) ? $this->Bounds : null;
    }
    /**
     * Set Bounds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Rectangle $bounds
     * @return \StructType\TextFrame
     */
    public function setBounds(\StructType\Rectangle $bounds = null)
    {
        if (is_null($bounds) || (is_array($bounds) && empty($bounds))) {
            unset($this->Bounds);
        } else {
            $this->Bounds = $bounds;
        }
        return $this;
    }
    /**
     * Get CornerRadius value
     * @return int|null
     */
    public function getCornerRadius()
    {
        return $this->CornerRadius;
    }
    /**
     * Set CornerRadius value
     * @param int $cornerRadius
     * @return \StructType\TextFrame
     */
    public function setCornerRadius($cornerRadius = null)
    {
        // validation for constraint: int
        if (!is_null($cornerRadius) && !(is_int($cornerRadius) || ctype_digit($cornerRadius))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cornerRadius, true), gettype($cornerRadius)), __LINE__);
        }
        $this->CornerRadius = $cornerRadius;
        return $this;
    }
    /**
     * Get DeletedFrame value
     * @return bool|null
     */
    public function getDeletedFrame()
    {
        return $this->DeletedFrame;
    }
    /**
     * Set DeletedFrame value
     * @param bool $deletedFrame
     * @return \StructType\TextFrame
     */
    public function setDeletedFrame($deletedFrame = null)
    {
        // validation for constraint: boolean
        if (!is_null($deletedFrame) && !is_bool($deletedFrame)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deletedFrame, true), gettype($deletedFrame)), __LINE__);
        }
        $this->DeletedFrame = $deletedFrame;
        return $this;
    }
    /**
     * Get FillColor value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFillColor()
    {
        return isset($this->FillColor) ? $this->FillColor : null;
    }
    /**
     * Set FillColor value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fillColor
     * @return \StructType\TextFrame
     */
    public function setFillColor($fillColor = null)
    {
        // validation for constraint: string
        if (!is_null($fillColor) && !is_string($fillColor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fillColor, true), gettype($fillColor)), __LINE__);
        }
        if (is_null($fillColor) || (is_array($fillColor) && empty($fillColor))) {
            unset($this->FillColor);
        } else {
            $this->FillColor = $fillColor;
        }
        return $this;
    }
    /**
     * Get Filled value
     * @return bool|null
     */
    public function getFilled()
    {
        return $this->Filled;
    }
    /**
     * Set Filled value
     * @param bool $filled
     * @return \StructType\TextFrame
     */
    public function setFilled($filled = null)
    {
        // validation for constraint: boolean
        if (!is_null($filled) && !is_bool($filled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($filled, true), gettype($filled)), __LINE__);
        }
        $this->Filled = $filled;
        return $this;
    }
    /**
     * Get FilledPercent value
     * @return int|null
     */
    public function getFilledPercent()
    {
        return $this->FilledPercent;
    }
    /**
     * Set FilledPercent value
     * @param int $filledPercent
     * @return \StructType\TextFrame
     */
    public function setFilledPercent($filledPercent = null)
    {
        // validation for constraint: int
        if (!is_null($filledPercent) && !(is_int($filledPercent) || ctype_digit($filledPercent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($filledPercent, true), gettype($filledPercent)), __LINE__);
        }
        $this->FilledPercent = $filledPercent;
        return $this;
    }
    /**
     * Get ID value
     * @return int|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param int $iD
     * @return \StructType\TextFrame
     */
    public function setID($iD = null)
    {
        // validation for constraint: int
        if (!is_null($iD) && !(is_int($iD) || ctype_digit($iD))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
    /**
     * Get InitialCharStyle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CharacterStyle|null
     */
    public function getInitialCharStyle()
    {
        return isset($this->InitialCharStyle) ? $this->InitialCharStyle : null;
    }
    /**
     * Set InitialCharStyle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CharacterStyle $initialCharStyle
     * @return \StructType\TextFrame
     */
    public function setInitialCharStyle(\StructType\CharacterStyle $initialCharStyle = null)
    {
        if (is_null($initialCharStyle) || (is_array($initialCharStyle) && empty($initialCharStyle))) {
            unset($this->InitialCharStyle);
        } else {
            $this->InitialCharStyle = $initialCharStyle;
        }
        return $this;
    }
    /**
     * Get InitialParaStyle value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ParagraphStyle|null
     */
    public function getInitialParaStyle()
    {
        return isset($this->InitialParaStyle) ? $this->InitialParaStyle : null;
    }
    /**
     * Set InitialParaStyle value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ParagraphStyle $initialParaStyle
     * @return \StructType\TextFrame
     */
    public function setInitialParaStyle(\StructType\ParagraphStyle $initialParaStyle = null)
    {
        if (is_null($initialParaStyle) || (is_array($initialParaStyle) && empty($initialParaStyle))) {
            unset($this->InitialParaStyle);
        } else {
            $this->InitialParaStyle = $initialParaStyle;
        }
        return $this;
    }
    /**
     * Get InitialStyleTags value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInitialStyleTags()
    {
        return isset($this->InitialStyleTags) ? $this->InitialStyleTags : null;
    }
    /**
     * Set InitialStyleTags value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $initialStyleTags
     * @return \StructType\TextFrame
     */
    public function setInitialStyleTags($initialStyleTags = null)
    {
        // validation for constraint: string
        if (!is_null($initialStyleTags) && !is_string($initialStyleTags)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($initialStyleTags, true), gettype($initialStyleTags)), __LINE__);
        }
        if (is_null($initialStyleTags) || (is_array($initialStyleTags) && empty($initialStyleTags))) {
            unset($this->InitialStyleTags);
        } else {
            $this->InitialStyleTags = $initialStyleTags;
        }
        return $this;
    }
    /**
     * Get Layer value
     * @return int|null
     */
    public function getLayer()
    {
        return $this->Layer;
    }
    /**
     * Set Layer value
     * @param int $layer
     * @return \StructType\TextFrame
     */
    public function setLayer($layer = null)
    {
        // validation for constraint: int
        if (!is_null($layer) && !(is_int($layer) || ctype_digit($layer))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($layer, true), gettype($layer)), __LINE__);
        }
        $this->Layer = $layer;
        return $this;
    }
    /**
     * Get LockContent value
     * @return bool|null
     */
    public function getLockContent()
    {
        return $this->LockContent;
    }
    /**
     * Set LockContent value
     * @param bool $lockContent
     * @return \StructType\TextFrame
     */
    public function setLockContent($lockContent = null)
    {
        // validation for constraint: boolean
        if (!is_null($lockContent) && !is_bool($lockContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lockContent, true), gettype($lockContent)), __LINE__);
        }
        $this->LockContent = $lockContent;
        return $this;
    }
    /**
     * Get LockPosition value
     * @return bool|null
     */
    public function getLockPosition()
    {
        return $this->LockPosition;
    }
    /**
     * Set LockPosition value
     * @param bool $lockPosition
     * @return \StructType\TextFrame
     */
    public function setLockPosition($lockPosition = null)
    {
        // validation for constraint: boolean
        if (!is_null($lockPosition) && !is_bool($lockPosition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($lockPosition, true), gettype($lockPosition)), __LINE__);
        }
        $this->LockPosition = $lockPosition;
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
     * @return \StructType\TextFrame
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
     * Get NewFrame value
     * @return bool|null
     */
    public function getNewFrame()
    {
        return $this->NewFrame;
    }
    /**
     * Set NewFrame value
     * @param bool $newFrame
     * @return \StructType\TextFrame
     */
    public function setNewFrame($newFrame = null)
    {
        // validation for constraint: boolean
        if (!is_null($newFrame) && !is_bool($newFrame)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($newFrame, true), gettype($newFrame)), __LINE__);
        }
        $this->NewFrame = $newFrame;
        return $this;
    }
    /**
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \StructType\TextFrame
     */
    public function setPageNumber($pageNumber = null)
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !(is_int($pageNumber) || ctype_digit($pageNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNumber, true), gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
        return $this;
    }
    /**
     * Get TextContents value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTextContents()
    {
        return isset($this->TextContents) ? $this->TextContents : null;
    }
    /**
     * Set TextContents value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $textContents
     * @return \StructType\TextFrame
     */
    public function setTextContents($textContents = null)
    {
        // validation for constraint: string
        if (!is_null($textContents) && !is_string($textContents)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($textContents, true), gettype($textContents)), __LINE__);
        }
        if (is_null($textContents) || (is_array($textContents) && empty($textContents))) {
            unset($this->TextContents);
        } else {
            $this->TextContents = $textContents;
        }
        return $this;
    }
    /**
     * Get contentChanged value
     * @return bool|null
     */
    public function getContentChanged()
    {
        return $this->contentChanged;
    }
    /**
     * Set contentChanged value
     * @param bool $contentChanged
     * @return \StructType\TextFrame
     */
    public function setContentChanged($contentChanged = null)
    {
        // validation for constraint: boolean
        if (!is_null($contentChanged) && !is_bool($contentChanged)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($contentChanged, true), gettype($contentChanged)), __LINE__);
        }
        $this->contentChanged = $contentChanged;
        return $this;
    }
    /**
     * Get positionOrSizeChange value
     * @return bool|null
     */
    public function getPositionOrSizeChange()
    {
        return $this->positionOrSizeChange;
    }
    /**
     * Set positionOrSizeChange value
     * @param bool $positionOrSizeChange
     * @return \StructType\TextFrame
     */
    public function setPositionOrSizeChange($positionOrSizeChange = null)
    {
        // validation for constraint: boolean
        if (!is_null($positionOrSizeChange) && !is_bool($positionOrSizeChange)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($positionOrSizeChange, true), gettype($positionOrSizeChange)), __LINE__);
        }
        $this->positionOrSizeChange = $positionOrSizeChange;
        return $this;
    }
}
