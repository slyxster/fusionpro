<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JPEG_Options StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:JPEG_Options
 * @subpackage Structs
 */
class JPEG_Options extends AbstractStructBase
{
    /**
     * The BaseFileName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $BaseFileName;
    /**
     * The JPEGEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $JPEGEnabled;
    /**
     * The MaxHeight
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxHeight;
    /**
     * The MaxWidth
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxWidth;
    /**
     * The NumberOfPages
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $NumberOfPages;
    /**
     * The PDFBoundingBox
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PDFBoundingBox;
    /**
     * The QualityPercent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $QualityPercent;
    /**
     * The ResolutionDPI
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ResolutionDPI;
    /**
     * The ScalingPercent
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ScalingPercent;
    /**
     * The StartPage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StartPage;
    /**
     * Constructor method for JPEG_Options
     * @uses JPEG_Options::setBaseFileName()
     * @uses JPEG_Options::setJPEGEnabled()
     * @uses JPEG_Options::setMaxHeight()
     * @uses JPEG_Options::setMaxWidth()
     * @uses JPEG_Options::setNumberOfPages()
     * @uses JPEG_Options::setPDFBoundingBox()
     * @uses JPEG_Options::setQualityPercent()
     * @uses JPEG_Options::setResolutionDPI()
     * @uses JPEG_Options::setScalingPercent()
     * @uses JPEG_Options::setStartPage()
     * @param string $baseFileName
     * @param bool $jPEGEnabled
     * @param int $maxHeight
     * @param int $maxWidth
     * @param int $numberOfPages
     * @param string $pDFBoundingBox
     * @param int $qualityPercent
     * @param int $resolutionDPI
     * @param int $scalingPercent
     * @param int $startPage
     */
    public function __construct($baseFileName = null, $jPEGEnabled = null, $maxHeight = null, $maxWidth = null, $numberOfPages = null, $pDFBoundingBox = null, $qualityPercent = null, $resolutionDPI = null, $scalingPercent = null, $startPage = null)
    {
        $this
            ->setBaseFileName($baseFileName)
            ->setJPEGEnabled($jPEGEnabled)
            ->setMaxHeight($maxHeight)
            ->setMaxWidth($maxWidth)
            ->setNumberOfPages($numberOfPages)
            ->setPDFBoundingBox($pDFBoundingBox)
            ->setQualityPercent($qualityPercent)
            ->setResolutionDPI($resolutionDPI)
            ->setScalingPercent($scalingPercent)
            ->setStartPage($startPage);
    }
    /**
     * Get BaseFileName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getBaseFileName()
    {
        return isset($this->BaseFileName) ? $this->BaseFileName : null;
    }
    /**
     * Set BaseFileName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $baseFileName
     * @return \StructType\JPEG_Options
     */
    public function setBaseFileName($baseFileName = null)
    {
        // validation for constraint: string
        if (!is_null($baseFileName) && !is_string($baseFileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseFileName, true), gettype($baseFileName)), __LINE__);
        }
        if (is_null($baseFileName) || (is_array($baseFileName) && empty($baseFileName))) {
            unset($this->BaseFileName);
        } else {
            $this->BaseFileName = $baseFileName;
        }
        return $this;
    }
    /**
     * Get JPEGEnabled value
     * @return bool|null
     */
    public function getJPEGEnabled()
    {
        return $this->JPEGEnabled;
    }
    /**
     * Set JPEGEnabled value
     * @param bool $jPEGEnabled
     * @return \StructType\JPEG_Options
     */
    public function setJPEGEnabled($jPEGEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($jPEGEnabled) && !is_bool($jPEGEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($jPEGEnabled, true), gettype($jPEGEnabled)), __LINE__);
        }
        $this->JPEGEnabled = $jPEGEnabled;
        return $this;
    }
    /**
     * Get MaxHeight value
     * @return int|null
     */
    public function getMaxHeight()
    {
        return $this->MaxHeight;
    }
    /**
     * Set MaxHeight value
     * @param int $maxHeight
     * @return \StructType\JPEG_Options
     */
    public function setMaxHeight($maxHeight = null)
    {
        // validation for constraint: int
        if (!is_null($maxHeight) && !(is_int($maxHeight) || ctype_digit($maxHeight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxHeight, true), gettype($maxHeight)), __LINE__);
        }
        $this->MaxHeight = $maxHeight;
        return $this;
    }
    /**
     * Get MaxWidth value
     * @return int|null
     */
    public function getMaxWidth()
    {
        return $this->MaxWidth;
    }
    /**
     * Set MaxWidth value
     * @param int $maxWidth
     * @return \StructType\JPEG_Options
     */
    public function setMaxWidth($maxWidth = null)
    {
        // validation for constraint: int
        if (!is_null($maxWidth) && !(is_int($maxWidth) || ctype_digit($maxWidth))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxWidth, true), gettype($maxWidth)), __LINE__);
        }
        $this->MaxWidth = $maxWidth;
        return $this;
    }
    /**
     * Get NumberOfPages value
     * @return int|null
     */
    public function getNumberOfPages()
    {
        return $this->NumberOfPages;
    }
    /**
     * Set NumberOfPages value
     * @param int $numberOfPages
     * @return \StructType\JPEG_Options
     */
    public function setNumberOfPages($numberOfPages = null)
    {
        // validation for constraint: int
        if (!is_null($numberOfPages) && !(is_int($numberOfPages) || ctype_digit($numberOfPages))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfPages, true), gettype($numberOfPages)), __LINE__);
        }
        $this->NumberOfPages = $numberOfPages;
        return $this;
    }
    /**
     * Get PDFBoundingBox value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPDFBoundingBox()
    {
        return isset($this->PDFBoundingBox) ? $this->PDFBoundingBox : null;
    }
    /**
     * Set PDFBoundingBox value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pDFBoundingBox
     * @return \StructType\JPEG_Options
     */
    public function setPDFBoundingBox($pDFBoundingBox = null)
    {
        // validation for constraint: string
        if (!is_null($pDFBoundingBox) && !is_string($pDFBoundingBox)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pDFBoundingBox, true), gettype($pDFBoundingBox)), __LINE__);
        }
        if (is_null($pDFBoundingBox) || (is_array($pDFBoundingBox) && empty($pDFBoundingBox))) {
            unset($this->PDFBoundingBox);
        } else {
            $this->PDFBoundingBox = $pDFBoundingBox;
        }
        return $this;
    }
    /**
     * Get QualityPercent value
     * @return int|null
     */
    public function getQualityPercent()
    {
        return $this->QualityPercent;
    }
    /**
     * Set QualityPercent value
     * @param int $qualityPercent
     * @return \StructType\JPEG_Options
     */
    public function setQualityPercent($qualityPercent = null)
    {
        // validation for constraint: int
        if (!is_null($qualityPercent) && !(is_int($qualityPercent) || ctype_digit($qualityPercent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($qualityPercent, true), gettype($qualityPercent)), __LINE__);
        }
        $this->QualityPercent = $qualityPercent;
        return $this;
    }
    /**
     * Get ResolutionDPI value
     * @return int|null
     */
    public function getResolutionDPI()
    {
        return $this->ResolutionDPI;
    }
    /**
     * Set ResolutionDPI value
     * @param int $resolutionDPI
     * @return \StructType\JPEG_Options
     */
    public function setResolutionDPI($resolutionDPI = null)
    {
        // validation for constraint: int
        if (!is_null($resolutionDPI) && !(is_int($resolutionDPI) || ctype_digit($resolutionDPI))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($resolutionDPI, true), gettype($resolutionDPI)), __LINE__);
        }
        $this->ResolutionDPI = $resolutionDPI;
        return $this;
    }
    /**
     * Get ScalingPercent value
     * @return int|null
     */
    public function getScalingPercent()
    {
        return $this->ScalingPercent;
    }
    /**
     * Set ScalingPercent value
     * @param int $scalingPercent
     * @return \StructType\JPEG_Options
     */
    public function setScalingPercent($scalingPercent = null)
    {
        // validation for constraint: int
        if (!is_null($scalingPercent) && !(is_int($scalingPercent) || ctype_digit($scalingPercent))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($scalingPercent, true), gettype($scalingPercent)), __LINE__);
        }
        $this->ScalingPercent = $scalingPercent;
        return $this;
    }
    /**
     * Get StartPage value
     * @return int|null
     */
    public function getStartPage()
    {
        return $this->StartPage;
    }
    /**
     * Set StartPage value
     * @param int $startPage
     * @return \StructType\JPEG_Options
     */
    public function setStartPage($startPage = null)
    {
        // validation for constraint: int
        if (!is_null($startPage) && !(is_int($startPage) || ctype_digit($startPage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startPage, true), gettype($startPage)), __LINE__);
        }
        $this->StartPage = $startPage;
        return $this;
    }
}
