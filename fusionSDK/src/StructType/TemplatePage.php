<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TemplatePage StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TemplatePage
 * @subpackage Structs
 */
class TemplatePage extends AbstractStructBase
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
     * The GraphicRuleNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $GraphicRuleNames;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Message;
    /**
     * The PageID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $PageID;
    /**
     * The TemplatePageType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $TemplatePageType;
    /**
     * The TextRuleNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $TextRuleNames;
    /**
     * The ThumbnailURL
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ThumbnailURL;
    /**
     * The graphicFrames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfGraphicFrame
     */
    public $graphicFrames;
    /**
     * The textFrames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfTextFrame
     */
    public $textFrames;
    /**
     * Constructor method for TemplatePage
     * @uses TemplatePage::setFieldInfo()
     * @uses TemplatePage::setFieldNames()
     * @uses TemplatePage::setGraphicRuleNames()
     * @uses TemplatePage::setMessage()
     * @uses TemplatePage::setPageID()
     * @uses TemplatePage::setTemplatePageType()
     * @uses TemplatePage::setTextRuleNames()
     * @uses TemplatePage::setThumbnailURL()
     * @uses TemplatePage::setGraphicFrames()
     * @uses TemplatePage::setTextFrames()
     * @param \ArrayType\ArrayOfFieldInfo $fieldInfo
     * @param \ArrayType\ArrayOfstring $fieldNames
     * @param \ArrayType\ArrayOfstring $graphicRuleNames
     * @param string $message
     * @param string $pageID
     * @param bool $templatePageType
     * @param \ArrayType\ArrayOfstring $textRuleNames
     * @param string $thumbnailURL
     * @param \ArrayType\ArrayOfGraphicFrame $graphicFrames
     * @param \ArrayType\ArrayOfTextFrame $textFrames
     */
    public function __construct(\ArrayType\ArrayOfFieldInfo $fieldInfo = null, \ArrayType\ArrayOfstring $fieldNames = null, \ArrayType\ArrayOfstring $graphicRuleNames = null, $message = null, $pageID = null, $templatePageType = null, \ArrayType\ArrayOfstring $textRuleNames = null, $thumbnailURL = null, \ArrayType\ArrayOfGraphicFrame $graphicFrames = null, \ArrayType\ArrayOfTextFrame $textFrames = null)
    {
        $this
            ->setFieldInfo($fieldInfo)
            ->setFieldNames($fieldNames)
            ->setGraphicRuleNames($graphicRuleNames)
            ->setMessage($message)
            ->setPageID($pageID)
            ->setTemplatePageType($templatePageType)
            ->setTextRuleNames($textRuleNames)
            ->setThumbnailURL($thumbnailURL)
            ->setGraphicFrames($graphicFrames)
            ->setTextFrames($textFrames);
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
     * @return \StructType\TemplatePage
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
     * @return \StructType\TemplatePage
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
     * @return \StructType\TemplatePage
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
     * @return \StructType\TemplatePage
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
     * Get PageID value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPageID()
    {
        return isset($this->PageID) ? $this->PageID : null;
    }
    /**
     * Set PageID value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $pageID
     * @return \StructType\TemplatePage
     */
    public function setPageID($pageID = null)
    {
        // validation for constraint: string
        if (!is_null($pageID) && !is_string($pageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pageID, true), gettype($pageID)), __LINE__);
        }
        if (is_null($pageID) || (is_array($pageID) && empty($pageID))) {
            unset($this->PageID);
        } else {
            $this->PageID = $pageID;
        }
        return $this;
    }
    /**
     * Get TemplatePageType value
     * @return bool|null
     */
    public function getTemplatePageType()
    {
        return $this->TemplatePageType;
    }
    /**
     * Set TemplatePageType value
     * @param bool $templatePageType
     * @return \StructType\TemplatePage
     */
    public function setTemplatePageType($templatePageType = null)
    {
        // validation for constraint: boolean
        if (!is_null($templatePageType) && !is_bool($templatePageType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($templatePageType, true), gettype($templatePageType)), __LINE__);
        }
        $this->TemplatePageType = $templatePageType;
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
     * @return \StructType\TemplatePage
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
    /**
     * Get ThumbnailURL value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getThumbnailURL()
    {
        return isset($this->ThumbnailURL) ? $this->ThumbnailURL : null;
    }
    /**
     * Set ThumbnailURL value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $thumbnailURL
     * @return \StructType\TemplatePage
     */
    public function setThumbnailURL($thumbnailURL = null)
    {
        // validation for constraint: string
        if (!is_null($thumbnailURL) && !is_string($thumbnailURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($thumbnailURL, true), gettype($thumbnailURL)), __LINE__);
        }
        if (is_null($thumbnailURL) || (is_array($thumbnailURL) && empty($thumbnailURL))) {
            unset($this->ThumbnailURL);
        } else {
            $this->ThumbnailURL = $thumbnailURL;
        }
        return $this;
    }
    /**
     * Get graphicFrames value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfGraphicFrame|null
     */
    public function getGraphicFrames()
    {
        return isset($this->graphicFrames) ? $this->graphicFrames : null;
    }
    /**
     * Set graphicFrames value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfGraphicFrame $graphicFrames
     * @return \StructType\TemplatePage
     */
    public function setGraphicFrames(\ArrayType\ArrayOfGraphicFrame $graphicFrames = null)
    {
        if (is_null($graphicFrames) || (is_array($graphicFrames) && empty($graphicFrames))) {
            unset($this->graphicFrames);
        } else {
            $this->graphicFrames = $graphicFrames;
        }
        return $this;
    }
    /**
     * Get textFrames value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfTextFrame|null
     */
    public function getTextFrames()
    {
        return isset($this->textFrames) ? $this->textFrames : null;
    }
    /**
     * Set textFrames value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfTextFrame $textFrames
     * @return \StructType\TemplatePage
     */
    public function setTextFrames(\ArrayType\ArrayOfTextFrame $textFrames = null)
    {
        if (is_null($textFrames) || (is_array($textFrames) && empty($textFrames))) {
            unset($this->textFrames);
        } else {
            $this->textFrames = $textFrames;
        }
        return $this;
    }
}
