<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TemplateFieldResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TemplateFieldResponse
 * @subpackage Structs
 */
class TemplateFieldResponse extends AbstractStructBase
{
    /**
     * The FieldInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfFieldInfo
     */
    public $FieldInfo;
    /**
     * The FieldNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $FieldNames;
    /**
     * The FontCSSURL
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FontCSSURL;
    /**
     * The GraphicResourceNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $GraphicResourceNames;
    /**
     * The GraphicRuleNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $GraphicRuleNames;
    /**
     * The HTMLFormFilePath
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $HTMLFormFilePath;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Message;
    /**
     * The TextRuleNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $TextRuleNames;
    /**
     * Constructor method for TemplateFieldResponse
     * @uses TemplateFieldResponse::setFieldInfo()
     * @uses TemplateFieldResponse::setFieldNames()
     * @uses TemplateFieldResponse::setFontCSSURL()
     * @uses TemplateFieldResponse::setGraphicResourceNames()
     * @uses TemplateFieldResponse::setGraphicRuleNames()
     * @uses TemplateFieldResponse::setHTMLFormFilePath()
     * @uses TemplateFieldResponse::setMessage()
     * @uses TemplateFieldResponse::setTextRuleNames()
     * @param \ArrayType\ArrayOfFieldInfo $fieldInfo
     * @param \ArrayType\ArrayOfstring $fieldNames
     * @param string $fontCSSURL
     * @param \ArrayType\ArrayOfstring $graphicResourceNames
     * @param \ArrayType\ArrayOfstring $graphicRuleNames
     * @param string $hTMLFormFilePath
     * @param string $message
     * @param \ArrayType\ArrayOfstring $textRuleNames
     */
    public function __construct(\ArrayType\ArrayOfFieldInfo $fieldInfo = null, \ArrayType\ArrayOfstring $fieldNames = null, $fontCSSURL = null, \ArrayType\ArrayOfstring $graphicResourceNames = null, \ArrayType\ArrayOfstring $graphicRuleNames = null, $hTMLFormFilePath = null, $message = null, \ArrayType\ArrayOfstring $textRuleNames = null)
    {
        $this
            ->setFieldInfo($fieldInfo)
            ->setFieldNames($fieldNames)
            ->setFontCSSURL($fontCSSURL)
            ->setGraphicResourceNames($graphicResourceNames)
            ->setGraphicRuleNames($graphicRuleNames)
            ->setHTMLFormFilePath($hTMLFormFilePath)
            ->setMessage($message)
            ->setTextRuleNames($textRuleNames);
    }
    /**
     * Get FieldInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfFieldInfo|null
     */
    public function getFieldInfo()
    {
        return isset($this->FieldInfo) ? $this->FieldInfo : null;
    }
    /**
     * Set FieldInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfFieldInfo $fieldInfo
     * @return \StructType\TemplateFieldResponse
     */
    public function setFieldInfo(\ArrayType\ArrayOfFieldInfo $fieldInfo = null)
    {
        if (is_null($fieldInfo) || (is_array($fieldInfo) && empty($fieldInfo))) {
            unset($this->FieldInfo);
        } else {
            $this->FieldInfo = $fieldInfo;
        }
        return $this;
    }
    /**
     * Get FieldNames value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getFieldNames()
    {
        return isset($this->FieldNames) ? $this->FieldNames : null;
    }
    /**
     * Set FieldNames value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $fieldNames
     * @return \StructType\TemplateFieldResponse
     */
    public function setFieldNames(\ArrayType\ArrayOfstring $fieldNames = null)
    {
        if (is_null($fieldNames) || (is_array($fieldNames) && empty($fieldNames))) {
            unset($this->FieldNames);
        } else {
            $this->FieldNames = $fieldNames;
        }
        return $this;
    }
    /**
     * Get FontCSSURL value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFontCSSURL()
    {
        return isset($this->FontCSSURL) ? $this->FontCSSURL : null;
    }
    /**
     * Set FontCSSURL value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fontCSSURL
     * @return \StructType\TemplateFieldResponse
     */
    public function setFontCSSURL($fontCSSURL = null)
    {
        // validation for constraint: string
        if (!is_null($fontCSSURL) && !is_string($fontCSSURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fontCSSURL, true), gettype($fontCSSURL)), __LINE__);
        }
        if (is_null($fontCSSURL) || (is_array($fontCSSURL) && empty($fontCSSURL))) {
            unset($this->FontCSSURL);
        } else {
            $this->FontCSSURL = $fontCSSURL;
        }
        return $this;
    }
    /**
     * Get GraphicResourceNames value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getGraphicResourceNames()
    {
        return isset($this->GraphicResourceNames) ? $this->GraphicResourceNames : null;
    }
    /**
     * Set GraphicResourceNames value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $graphicResourceNames
     * @return \StructType\TemplateFieldResponse
     */
    public function setGraphicResourceNames(\ArrayType\ArrayOfstring $graphicResourceNames = null)
    {
        if (is_null($graphicResourceNames) || (is_array($graphicResourceNames) && empty($graphicResourceNames))) {
            unset($this->GraphicResourceNames);
        } else {
            $this->GraphicResourceNames = $graphicResourceNames;
        }
        return $this;
    }
    /**
     * Get GraphicRuleNames value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getGraphicRuleNames()
    {
        return isset($this->GraphicRuleNames) ? $this->GraphicRuleNames : null;
    }
    /**
     * Set GraphicRuleNames value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $graphicRuleNames
     * @return \StructType\TemplateFieldResponse
     */
    public function setGraphicRuleNames(\ArrayType\ArrayOfstring $graphicRuleNames = null)
    {
        if (is_null($graphicRuleNames) || (is_array($graphicRuleNames) && empty($graphicRuleNames))) {
            unset($this->GraphicRuleNames);
        } else {
            $this->GraphicRuleNames = $graphicRuleNames;
        }
        return $this;
    }
    /**
     * Get HTMLFormFilePath value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getHTMLFormFilePath()
    {
        return isset($this->HTMLFormFilePath) ? $this->HTMLFormFilePath : null;
    }
    /**
     * Set HTMLFormFilePath value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $hTMLFormFilePath
     * @return \StructType\TemplateFieldResponse
     */
    public function setHTMLFormFilePath($hTMLFormFilePath = null)
    {
        // validation for constraint: string
        if (!is_null($hTMLFormFilePath) && !is_string($hTMLFormFilePath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hTMLFormFilePath, true), gettype($hTMLFormFilePath)), __LINE__);
        }
        if (is_null($hTMLFormFilePath) || (is_array($hTMLFormFilePath) && empty($hTMLFormFilePath))) {
            unset($this->HTMLFormFilePath);
        } else {
            $this->HTMLFormFilePath = $hTMLFormFilePath;
        }
        return $this;
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
     * @return \StructType\TemplateFieldResponse
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
     * Get TextRuleNames value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getTextRuleNames()
    {
        return isset($this->TextRuleNames) ? $this->TextRuleNames : null;
    }
    /**
     * Set TextRuleNames value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $textRuleNames
     * @return \StructType\TemplateFieldResponse
     */
    public function setTextRuleNames(\ArrayType\ArrayOfstring $textRuleNames = null)
    {
        if (is_null($textRuleNames) || (is_array($textRuleNames) && empty($textRuleNames))) {
            unset($this->TextRuleNames);
        } else {
            $this->TextRuleNames = $textRuleNames;
        }
        return $this;
    }
}
