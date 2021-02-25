<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GraphicFrame StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GraphicFrame
 * @subpackage Structs
 */
class GraphicFrame extends AbstractStructBase
{
    /**
     * The AlignHorizontal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AlignHorizontal;
    /**
     * The AlignVertical
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AlignVertical;
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
     * The DeletedFrame
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $DeletedFrame;
    /**
     * The FileName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FileName;
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
     * The ImageContent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ImageContent;
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
     * The Scale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Scale;
    /**
     * The VariableName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $VariableName;
    /**
     * The positionOrSizeChange
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $positionOrSizeChange;
    /**
     * Constructor method for GraphicFrame
     * @uses GraphicFrame::setAlignHorizontal()
     * @uses GraphicFrame::setAlignVertical()
     * @uses GraphicFrame::setBorderColor()
     * @uses GraphicFrame::setBorderThickness()
     * @uses GraphicFrame::setBounds()
     * @uses GraphicFrame::setDeletedFrame()
     * @uses GraphicFrame::setFileName()
     * @uses GraphicFrame::setFillColor()
     * @uses GraphicFrame::setFilled()
     * @uses GraphicFrame::setFilledPercent()
     * @uses GraphicFrame::setID()
     * @uses GraphicFrame::setImageContent()
     * @uses GraphicFrame::setLayer()
     * @uses GraphicFrame::setLockContent()
     * @uses GraphicFrame::setLockPosition()
     * @uses GraphicFrame::setName()
     * @uses GraphicFrame::setNewFrame()
     * @uses GraphicFrame::setPageNumber()
     * @uses GraphicFrame::setScale()
     * @uses GraphicFrame::setVariableName()
     * @uses GraphicFrame::setPositionOrSizeChange()
     * @param int $alignHorizontal
     * @param int $alignVertical
     * @param string $borderColor
     * @param int $borderThickness
     * @param \StructType\Rectangle $bounds
     * @param bool $deletedFrame
     * @param string $fileName
     * @param string $fillColor
     * @param bool $filled
     * @param int $filledPercent
     * @param int $iD
     * @param string $imageContent
     * @param int $layer
     * @param bool $lockContent
     * @param bool $lockPosition
     * @param string $name
     * @param bool $newFrame
     * @param int $pageNumber
     * @param int $scale
     * @param string $variableName
     * @param bool $positionOrSizeChange
     */
    public function __construct($alignHorizontal = null, $alignVertical = null, $borderColor = null, $borderThickness = null, \StructType\Rectangle $bounds = null, $deletedFrame = null, $fileName = null, $fillColor = null, $filled = null, $filledPercent = null, $iD = null, $imageContent = null, $layer = null, $lockContent = null, $lockPosition = null, $name = null, $newFrame = null, $pageNumber = null, $scale = null, $variableName = null, $positionOrSizeChange = null)
    {
        $this
            ->setAlignHorizontal($alignHorizontal)
            ->setAlignVertical($alignVertical)
            ->setBorderColor($borderColor)
            ->setBorderThickness($borderThickness)
            ->setBounds($bounds)
            ->setDeletedFrame($deletedFrame)
            ->setFileName($fileName)
            ->setFillColor($fillColor)
            ->setFilled($filled)
            ->setFilledPercent($filledPercent)
            ->setID($iD)
            ->setImageContent($imageContent)
            ->setLayer($layer)
            ->setLockContent($lockContent)
            ->setLockPosition($lockPosition)
            ->setName($name)
            ->setNewFrame($newFrame)
            ->setPageNumber($pageNumber)
            ->setScale($scale)
            ->setVariableName($variableName)
            ->setPositionOrSizeChange($positionOrSizeChange);
    }
    /**
     * Get AlignHorizontal value
     * @return int|null
     */
    public function getAlignHorizontal()
    {
        return $this->AlignHorizontal;
    }
    /**
     * Set AlignHorizontal value
     * @param int $alignHorizontal
     * @return \StructType\GraphicFrame
     */
    public function setAlignHorizontal($alignHorizontal = null)
    {
        // validation for constraint: int
        if (!is_null($alignHorizontal) && !(is_int($alignHorizontal) || ctype_digit($alignHorizontal))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($alignHorizontal, true), gettype($alignHorizontal)), __LINE__);
        }
        $this->AlignHorizontal = $alignHorizontal;
        return $this;
    }
    /**
     * Get AlignVertical value
     * @return int|null
     */
    public function getAlignVertical()
    {
        return $this->AlignVertical;
    }
    /**
     * Set AlignVertical value
     * @param int $alignVertical
     * @return \StructType\GraphicFrame
     */
    public function setAlignVertical($alignVertical = null)
    {
        // validation for constraint: int
        if (!is_null($alignVertical) && !(is_int($alignVertical) || ctype_digit($alignVertical))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($alignVertical, true), gettype($alignVertical)), __LINE__);
        }
        $this->AlignVertical = $alignVertical;
        return $this;
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
     * @return \StructType\GraphicFrame
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
     * @return \StructType\GraphicFrame
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
     * @return \StructType\GraphicFrame
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
     * @return \StructType\GraphicFrame
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
     * Get FileName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFileName()
    {
        return isset($this->FileName) ? $this->FileName : null;
    }
    /**
     * Set FileName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fileName
     * @return \StructType\GraphicFrame
     */
    public function setFileName($fileName = null)
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        if (is_null($fileName) || (is_array($fileName) && empty($fileName))) {
            unset($this->FileName);
        } else {
            $this->FileName = $fileName;
        }
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
     * @return \StructType\GraphicFrame
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
     * @return \StructType\GraphicFrame
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
     * @return \StructType\GraphicFrame
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
     * @return \StructType\GraphicFrame
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
     * Get ImageContent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getImageContent()
    {
        return isset($this->ImageContent) ? $this->ImageContent : null;
    }
    /**
     * Set ImageContent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $imageContent
     * @return \StructType\GraphicFrame
     */
    public function setImageContent($imageContent = null)
    {
        // validation for constraint: string
        if (!is_null($imageContent) && !is_string($imageContent)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($imageContent, true), gettype($imageContent)), __LINE__);
        }
        if (is_null($imageContent) || (is_array($imageContent) && empty($imageContent))) {
            unset($this->ImageContent);
        } else {
            $this->ImageContent = $imageContent;
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
     * @return \StructType\GraphicFrame
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
     * @return \StructType\GraphicFrame
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
     * @return \StructType\GraphicFrame
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
     * @return \StructType\GraphicFrame
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
     * @return \StructType\GraphicFrame
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
     * @return \StructType\GraphicFrame
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
     * Get Scale value
     * @return int|null
     */
    public function getScale()
    {
        return $this->Scale;
    }
    /**
     * Set Scale value
     * @param int $scale
     * @return \StructType\GraphicFrame
     */
    public function setScale($scale = null)
    {
        // validation for constraint: int
        if (!is_null($scale) && !(is_int($scale) || ctype_digit($scale))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($scale, true), gettype($scale)), __LINE__);
        }
        $this->Scale = $scale;
        return $this;
    }
    /**
     * Get VariableName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getVariableName()
    {
        return isset($this->VariableName) ? $this->VariableName : null;
    }
    /**
     * Set VariableName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $variableName
     * @return \StructType\GraphicFrame
     */
    public function setVariableName($variableName = null)
    {
        // validation for constraint: string
        if (!is_null($variableName) && !is_string($variableName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($variableName, true), gettype($variableName)), __LINE__);
        }
        if (is_null($variableName) || (is_array($variableName) && empty($variableName))) {
            unset($this->VariableName);
        } else {
            $this->VariableName = $variableName;
        }
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
     * @return \StructType\GraphicFrame
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
