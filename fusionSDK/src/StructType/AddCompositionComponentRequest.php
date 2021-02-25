<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddCompositionComponentRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AddCompositionComponentRequest
 * @subpackage Structs
 */
class AddCompositionComponentRequest extends AbstractStructBase
{
    /**
     * The ComponentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ComponentType;
    /**
     * The CompositionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CompositionID;
    /**
     * The FileContentsAsString
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FileContentsAsString;
    /**
     * The FileContentsInBytes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FileContentsInBytes;
    /**
     * The KeepFileName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $KeepFileName;
    /**
     * The RemoteFilePath
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $RemoteFilePath;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Type;
    /**
     * Constructor method for AddCompositionComponentRequest
     * @uses AddCompositionComponentRequest::setComponentType()
     * @uses AddCompositionComponentRequest::setCompositionID()
     * @uses AddCompositionComponentRequest::setFileContentsAsString()
     * @uses AddCompositionComponentRequest::setFileContentsInBytes()
     * @uses AddCompositionComponentRequest::setKeepFileName()
     * @uses AddCompositionComponentRequest::setRemoteFilePath()
     * @uses AddCompositionComponentRequest::setType()
     * @param string $componentType
     * @param int $compositionID
     * @param string $fileContentsAsString
     * @param string $fileContentsInBytes
     * @param bool $keepFileName
     * @param string $remoteFilePath
     * @param string $type
     */
    public function __construct($componentType = null, $compositionID = null, $fileContentsAsString = null, $fileContentsInBytes = null, $keepFileName = null, $remoteFilePath = null, $type = null)
    {
        $this
            ->setComponentType($componentType)
            ->setCompositionID($compositionID)
            ->setFileContentsAsString($fileContentsAsString)
            ->setFileContentsInBytes($fileContentsInBytes)
            ->setKeepFileName($keepFileName)
            ->setRemoteFilePath($remoteFilePath)
            ->setType($type);
    }
    /**
     * Get ComponentType value
     * @return string|null
     */
    public function getComponentType()
    {
        return $this->ComponentType;
    }
    /**
     * Set ComponentType value
     * @uses \EnumType\FPCompositionComponentType::valueIsValid()
     * @uses \EnumType\FPCompositionComponentType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $componentType
     * @return \StructType\AddCompositionComponentRequest
     */
    public function setComponentType($componentType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FPCompositionComponentType::valueIsValid($componentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FPCompositionComponentType', is_array($componentType) ? implode(', ', $componentType) : var_export($componentType, true), implode(', ', \EnumType\FPCompositionComponentType::getValidValues())), __LINE__);
        }
        $this->ComponentType = $componentType;
        return $this;
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
     * @return \StructType\AddCompositionComponentRequest
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
     * Get FileContentsAsString value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFileContentsAsString()
    {
        return isset($this->FileContentsAsString) ? $this->FileContentsAsString : null;
    }
    /**
     * Set FileContentsAsString value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fileContentsAsString
     * @return \StructType\AddCompositionComponentRequest
     */
    public function setFileContentsAsString($fileContentsAsString = null)
    {
        // validation for constraint: string
        if (!is_null($fileContentsAsString) && !is_string($fileContentsAsString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileContentsAsString, true), gettype($fileContentsAsString)), __LINE__);
        }
        if (is_null($fileContentsAsString) || (is_array($fileContentsAsString) && empty($fileContentsAsString))) {
            unset($this->FileContentsAsString);
        } else {
            $this->FileContentsAsString = $fileContentsAsString;
        }
        return $this;
    }
    /**
     * Get FileContentsInBytes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFileContentsInBytes()
    {
        return isset($this->FileContentsInBytes) ? $this->FileContentsInBytes : null;
    }
    /**
     * Set FileContentsInBytes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fileContentsInBytes
     * @return \StructType\AddCompositionComponentRequest
     */
    public function setFileContentsInBytes($fileContentsInBytes = null)
    {
        // validation for constraint: string
        if (!is_null($fileContentsInBytes) && !is_string($fileContentsInBytes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileContentsInBytes, true), gettype($fileContentsInBytes)), __LINE__);
        }
        if (is_null($fileContentsInBytes) || (is_array($fileContentsInBytes) && empty($fileContentsInBytes))) {
            unset($this->FileContentsInBytes);
        } else {
            $this->FileContentsInBytes = $fileContentsInBytes;
        }
        return $this;
    }
    /**
     * Get KeepFileName value
     * @return bool|null
     */
    public function getKeepFileName()
    {
        return $this->KeepFileName;
    }
    /**
     * Set KeepFileName value
     * @param bool $keepFileName
     * @return \StructType\AddCompositionComponentRequest
     */
    public function setKeepFileName($keepFileName = null)
    {
        // validation for constraint: boolean
        if (!is_null($keepFileName) && !is_bool($keepFileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keepFileName, true), gettype($keepFileName)), __LINE__);
        }
        $this->KeepFileName = $keepFileName;
        return $this;
    }
    /**
     * Get RemoteFilePath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getRemoteFilePath()
    {
        return isset($this->RemoteFilePath) ? $this->RemoteFilePath : null;
    }
    /**
     * Set RemoteFilePath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $remoteFilePath
     * @return \StructType\AddCompositionComponentRequest
     */
    public function setRemoteFilePath($remoteFilePath = null)
    {
        // validation for constraint: string
        if (!is_null($remoteFilePath) && !is_string($remoteFilePath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remoteFilePath, true), gettype($remoteFilePath)), __LINE__);
        }
        if (is_null($remoteFilePath) || (is_array($remoteFilePath) && empty($remoteFilePath))) {
            unset($this->RemoteFilePath);
        } else {
            $this->RemoteFilePath = $remoteFilePath;
        }
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
     * @return \StructType\AddCompositionComponentRequest
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
}
