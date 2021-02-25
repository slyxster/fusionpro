<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Rectangle StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Rectangle
 * @subpackage Structs
 */
class Rectangle extends AbstractStructBase
{
    /**
     * The Height
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Space
     */
    public $Height;
    /**
     * The Left
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Space
     */
    public $Left;
    /**
     * The RotationAngle
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $RotationAngle;
    /**
     * The Top
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Space
     */
    public $Top;
    /**
     * The Width
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Space
     */
    public $Width;
    /**
     * Constructor method for Rectangle
     * @uses Rectangle::setHeight()
     * @uses Rectangle::setLeft()
     * @uses Rectangle::setRotationAngle()
     * @uses Rectangle::setTop()
     * @uses Rectangle::setWidth()
     * @param \StructType\Space $height
     * @param \StructType\Space $left
     * @param float $rotationAngle
     * @param \StructType\Space $top
     * @param \StructType\Space $width
     */
    public function __construct(\StructType\Space $height = null, \StructType\Space $left = null, $rotationAngle = null, \StructType\Space $top = null, \StructType\Space $width = null)
    {
        $this
            ->setHeight($height)
            ->setLeft($left)
            ->setRotationAngle($rotationAngle)
            ->setTop($top)
            ->setWidth($width);
    }
    /**
     * Get Height value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Space|null
     */
    public function getHeight()
    {
        return isset($this->Height) ? $this->Height : null;
    }
    /**
     * Set Height value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Space $height
     * @return \StructType\Rectangle
     */
    public function setHeight(\StructType\Space $height = null)
    {
        if (is_null($height) || (is_array($height) && empty($height))) {
            unset($this->Height);
        } else {
            $this->Height = $height;
        }
        return $this;
    }
    /**
     * Get Left value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Space|null
     */
    public function getLeft()
    {
        return isset($this->Left) ? $this->Left : null;
    }
    /**
     * Set Left value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Space $left
     * @return \StructType\Rectangle
     */
    public function setLeft(\StructType\Space $left = null)
    {
        if (is_null($left) || (is_array($left) && empty($left))) {
            unset($this->Left);
        } else {
            $this->Left = $left;
        }
        return $this;
    }
    /**
     * Get RotationAngle value
     * @return float|null
     */
    public function getRotationAngle()
    {
        return $this->RotationAngle;
    }
    /**
     * Set RotationAngle value
     * @param float $rotationAngle
     * @return \StructType\Rectangle
     */
    public function setRotationAngle($rotationAngle = null)
    {
        // validation for constraint: float
        if (!is_null($rotationAngle) && !(is_float($rotationAngle) || is_numeric($rotationAngle))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($rotationAngle, true), gettype($rotationAngle)), __LINE__);
        }
        $this->RotationAngle = $rotationAngle;
        return $this;
    }
    /**
     * Get Top value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Space|null
     */
    public function getTop()
    {
        return isset($this->Top) ? $this->Top : null;
    }
    /**
     * Set Top value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Space $top
     * @return \StructType\Rectangle
     */
    public function setTop(\StructType\Space $top = null)
    {
        if (is_null($top) || (is_array($top) && empty($top))) {
            unset($this->Top);
        } else {
            $this->Top = $top;
        }
        return $this;
    }
    /**
     * Get Width value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Space|null
     */
    public function getWidth()
    {
        return isset($this->Width) ? $this->Width : null;
    }
    /**
     * Set Width value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Space $width
     * @return \StructType\Rectangle
     */
    public function setWidth(\StructType\Space $width = null)
    {
        if (is_null($width) || (is_array($width) && empty($width))) {
            unset($this->Width);
        } else {
            $this->Width = $width;
        }
        return $this;
    }
}
