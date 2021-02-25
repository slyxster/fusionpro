<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompositionFilePathURLRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CompositionFilePathURLRequest
 * @subpackage Structs
 */
class CompositionFilePathURLRequest extends AbstractStructBase
{
    /**
     * The CompositionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CompositionID;
    /**
     * The FileName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FileName;
    /**
     * The PageOrChunkNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PageOrChunkNumber;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * The bSwitch
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bSwitch;
    /**
     * Constructor method for CompositionFilePathURLRequest
     * @uses CompositionFilePathURLRequest::setCompositionID()
     * @uses CompositionFilePathURLRequest::setFileName()
     * @uses CompositionFilePathURLRequest::setPageOrChunkNumber()
     * @uses CompositionFilePathURLRequest::setType()
     * @uses CompositionFilePathURLRequest::setBSwitch()
     * @param int $compositionID
     * @param string $fileName
     * @param int $pageOrChunkNumber
     * @param string $type
     * @param bool $bSwitch
     */
    public function __construct($compositionID = null, $fileName = null, $pageOrChunkNumber = null, $type = null, $bSwitch = null)
    {
        $this
            ->setCompositionID($compositionID)
            ->setFileName($fileName)
            ->setPageOrChunkNumber($pageOrChunkNumber)
            ->setType($type)
            ->setBSwitch($bSwitch);
    }
    /**
     * Get CompositionID value
     * @return int|null
     */
    public function getCompositionID()
    {
        return $this->CompositionID;
    }
    /**
     * Set CompositionID value
     * @param int $compositionID
     * @return \StructType\CompositionFilePathURLRequest
     */
    public function setCompositionID($compositionID = null)
    {
        // validation for constraint: int
        if (!is_null($compositionID) && !(is_int($compositionID) || ctype_digit($compositionID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($compositionID, true), gettype($compositionID)), __LINE__);
        }
        $this->CompositionID = $compositionID;
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
     * @return \StructType\CompositionFilePathURLRequest
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
     * Get PageOrChunkNumber value
     * @return int|null
     */
    public function getPageOrChunkNumber()
    {
        return $this->PageOrChunkNumber;
    }
    /**
     * Set PageOrChunkNumber value
     * @param int $pageOrChunkNumber
     * @return \StructType\CompositionFilePathURLRequest
     */
    public function setPageOrChunkNumber($pageOrChunkNumber = null)
    {
        // validation for constraint: int
        if (!is_null($pageOrChunkNumber) && !(is_int($pageOrChunkNumber) || ctype_digit($pageOrChunkNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageOrChunkNumber, true), gettype($pageOrChunkNumber)), __LINE__);
        }
        $this->PageOrChunkNumber = $pageOrChunkNumber;
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
     * @uses \EnumType\FileType::valueIsValid()
     * @uses \EnumType\FileType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\CompositionFilePathURLRequest
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FileType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FileType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\FileType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        return $this;
    }
    /**
     * Get bSwitch value
     * @return bool|null
     */
    public function getBSwitch()
    {
        return $this->bSwitch;
    }
    /**
     * Set bSwitch value
     * @param bool $bSwitch
     * @return \StructType\CompositionFilePathURLRequest
     */
    public function setBSwitch($bSwitch = null)
    {
        // validation for constraint: boolean
        if (!is_null($bSwitch) && !is_bool($bSwitch)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bSwitch, true), gettype($bSwitch)), __LINE__);
        }
        $this->bSwitch = $bSwitch;
        return $this;
    }
}
