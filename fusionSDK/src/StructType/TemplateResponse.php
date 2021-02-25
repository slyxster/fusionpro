<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TemplateResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TemplateResponse
 * @subpackage Structs
 */
class TemplateResponse extends AbstractStructBase
{
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Message;
    /**
     * The TemplateData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDataRecord
     */
    public $TemplateData;
    /**
     * The TemplateFileInBytes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TemplateFileInBytes;
    /**
     * The TemplateFileStream
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Stream
     */
    public $TemplateFileStream;
    /**
     * The TemplatePathURLFormData
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $TemplatePathURLFormData;
    /**
     * The TemplateWebConfig
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfKeyValue
     */
    public $TemplateWebConfig;
    /**
     * The WebEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $WebEnabled;
    /**
     * The WebFontCaps
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $WebFontCaps;
    /**
     * Constructor method for TemplateResponse
     * @uses TemplateResponse::setMessage()
     * @uses TemplateResponse::setTemplateData()
     * @uses TemplateResponse::setTemplateFileInBytes()
     * @uses TemplateResponse::setTemplateFileStream()
     * @uses TemplateResponse::setTemplatePathURLFormData()
     * @uses TemplateResponse::setTemplateWebConfig()
     * @uses TemplateResponse::setWebEnabled()
     * @uses TemplateResponse::setWebFontCaps()
     * @param string $message
     * @param \ArrayType\ArrayOfDataRecord $templateData
     * @param string $templateFileInBytes
     * @param \StructType\Stream $templateFileStream
     * @param string $templatePathURLFormData
     * @param \ArrayType\ArrayOfKeyValue $templateWebConfig
     * @param bool $webEnabled
     * @param string $webFontCaps
     */
    public function __construct($message = null, \ArrayType\ArrayOfDataRecord $templateData = null, $templateFileInBytes = null, \StructType\Stream $templateFileStream = null, $templatePathURLFormData = null, \ArrayType\ArrayOfKeyValue $templateWebConfig = null, $webEnabled = null, $webFontCaps = null)
    {
        $this
            ->setMessage($message)
            ->setTemplateData($templateData)
            ->setTemplateFileInBytes($templateFileInBytes)
            ->setTemplateFileStream($templateFileStream)
            ->setTemplatePathURLFormData($templatePathURLFormData)
            ->setTemplateWebConfig($templateWebConfig)
            ->setWebEnabled($webEnabled)
            ->setWebFontCaps($webFontCaps);
    }
    /**
     * Get Message value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessage()
    {
        return isset($this->Message) ? $this->Message : null;
    }
    /**
     * Set Message value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $message
     * @return \StructType\TemplateResponse
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        if (is_null($message) || (is_array($message) && empty($message))) {
            unset($this->Message);
        } else {
            $this->Message = $message;
        }
        return $this;
    }
    /**
     * Get TemplateData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDataRecord|null
     */
    public function getTemplateData()
    {
        return isset($this->TemplateData) ? $this->TemplateData : null;
    }
    /**
     * Set TemplateData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDataRecord $templateData
     * @return \StructType\TemplateResponse
     */
    public function setTemplateData(\ArrayType\ArrayOfDataRecord $templateData = null)
    {
        if (is_null($templateData) || (is_array($templateData) && empty($templateData))) {
            unset($this->TemplateData);
        } else {
            $this->TemplateData = $templateData;
        }
        return $this;
    }
    /**
     * Get TemplateFileInBytes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTemplateFileInBytes()
    {
        return isset($this->TemplateFileInBytes) ? $this->TemplateFileInBytes : null;
    }
    /**
     * Set TemplateFileInBytes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $templateFileInBytes
     * @return \StructType\TemplateResponse
     */
    public function setTemplateFileInBytes($templateFileInBytes = null)
    {
        // validation for constraint: string
        if (!is_null($templateFileInBytes) && !is_string($templateFileInBytes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateFileInBytes, true), gettype($templateFileInBytes)), __LINE__);
        }
        if (is_null($templateFileInBytes) || (is_array($templateFileInBytes) && empty($templateFileInBytes))) {
            unset($this->TemplateFileInBytes);
        } else {
            $this->TemplateFileInBytes = $templateFileInBytes;
        }
        return $this;
    }
    /**
     * Get TemplateFileStream value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Stream|null
     */
    public function getTemplateFileStream()
    {
        return isset($this->TemplateFileStream) ? $this->TemplateFileStream : null;
    }
    /**
     * Set TemplateFileStream value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Stream $templateFileStream
     * @return \StructType\TemplateResponse
     */
    public function setTemplateFileStream(\StructType\Stream $templateFileStream = null)
    {
        if (is_null($templateFileStream) || (is_array($templateFileStream) && empty($templateFileStream))) {
            unset($this->TemplateFileStream);
        } else {
            $this->TemplateFileStream = $templateFileStream;
        }
        return $this;
    }
    /**
     * Get TemplatePathURLFormData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getTemplatePathURLFormData()
    {
        return isset($this->TemplatePathURLFormData) ? $this->TemplatePathURLFormData : null;
    }
    /**
     * Set TemplatePathURLFormData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $templatePathURLFormData
     * @return \StructType\TemplateResponse
     */
    public function setTemplatePathURLFormData($templatePathURLFormData = null)
    {
        // validation for constraint: string
        if (!is_null($templatePathURLFormData) && !is_string($templatePathURLFormData)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templatePathURLFormData, true), gettype($templatePathURLFormData)), __LINE__);
        }
        if (is_null($templatePathURLFormData) || (is_array($templatePathURLFormData) && empty($templatePathURLFormData))) {
            unset($this->TemplatePathURLFormData);
        } else {
            $this->TemplatePathURLFormData = $templatePathURLFormData;
        }
        return $this;
    }
    /**
     * Get TemplateWebConfig value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfKeyValue|null
     */
    public function getTemplateWebConfig()
    {
        return isset($this->TemplateWebConfig) ? $this->TemplateWebConfig : null;
    }
    /**
     * Set TemplateWebConfig value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfKeyValue $templateWebConfig
     * @return \StructType\TemplateResponse
     */
    public function setTemplateWebConfig(\ArrayType\ArrayOfKeyValue $templateWebConfig = null)
    {
        if (is_null($templateWebConfig) || (is_array($templateWebConfig) && empty($templateWebConfig))) {
            unset($this->TemplateWebConfig);
        } else {
            $this->TemplateWebConfig = $templateWebConfig;
        }
        return $this;
    }
    /**
     * Get WebEnabled value
     * @return bool|null
     */
    public function getWebEnabled()
    {
        return $this->WebEnabled;
    }
    /**
     * Set WebEnabled value
     * @param bool $webEnabled
     * @return \StructType\TemplateResponse
     */
    public function setWebEnabled($webEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($webEnabled) && !is_bool($webEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($webEnabled, true), gettype($webEnabled)), __LINE__);
        }
        $this->WebEnabled = $webEnabled;
        return $this;
    }
    /**
     * Get WebFontCaps value
     * @return string|null
     */
    public function getWebFontCaps()
    {
        return $this->WebFontCaps;
    }
    /**
     * Set WebFontCaps value
     * @uses \EnumType\FPWebFontCapability::valueIsValid()
     * @uses \EnumType\FPWebFontCapability::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $webFontCaps
     * @return \StructType\TemplateResponse
     */
    public function setWebFontCaps($webFontCaps = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FPWebFontCapability::valueIsValid($webFontCaps)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FPWebFontCapability', is_array($webFontCaps) ? implode(', ', $webFontCaps) : var_export($webFontCaps, true), implode(', ', \EnumType\FPWebFontCapability::getValidValues())), __LINE__);
        }
        $this->WebFontCaps = $webFontCaps;
        return $this;
    }
}
