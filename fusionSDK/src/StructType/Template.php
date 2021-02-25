<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Template StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Template
 * @subpackage Structs
 */
class Template extends AbstractStructBase
{
    /**
     * The ColorList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ColorList;
    /**
     * The ColorLookup
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfKeyValue
     */
    public $ColorLookup;
    /**
     * The CompositionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CompositionID;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Description;
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
     * The FontImports
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $FontImports;
    /**
     * The FontList
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FontList;
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
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
    /**
     * The Pages
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfTemplatePage
     */
    public $Pages;
    /**
     * The TemplatePageNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $TemplatePageNames;
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
     * The TotalPages
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalPages;
    /**
     * The TotalRecords
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $TotalRecords;
    /**
     * The WebFontNames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfstring
     */
    public $WebFontNames;
    /**
     * The bAdd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bAdd;
    /**
     * The bDelete
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bDelete;
    /**
     * The bMove
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bMove;
    /**
     * The bResize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bResize;
    /**
     * The bVariableRuleInsert
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bVariableRuleInsert;
    /**
     * The graphicFrames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfGraphicFrame
     */
    public $graphicFrames;
    /**
     * The sRemoveToolbarButtons
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sRemoveToolbarButtons;
    /**
     * The textFrames
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfTextFrame
     */
    public $textFrames;
    /**
     * Constructor method for Template
     * @uses Template::setColorList()
     * @uses Template::setColorLookup()
     * @uses Template::setCompositionID()
     * @uses Template::setDescription()
     * @uses Template::setFieldInfo()
     * @uses Template::setFieldNames()
     * @uses Template::setFontCSSURL()
     * @uses Template::setFontImports()
     * @uses Template::setFontList()
     * @uses Template::setGraphicResourceNames()
     * @uses Template::setGraphicRuleNames()
     * @uses Template::setHTMLFormFilePath()
     * @uses Template::setMessage()
     * @uses Template::setName()
     * @uses Template::setPages()
     * @uses Template::setTemplatePageNames()
     * @uses Template::setTextRuleNames()
     * @uses Template::setThumbnailURL()
     * @uses Template::setTotalPages()
     * @uses Template::setTotalRecords()
     * @uses Template::setWebFontNames()
     * @uses Template::setBAdd()
     * @uses Template::setBDelete()
     * @uses Template::setBMove()
     * @uses Template::setBResize()
     * @uses Template::setBVariableRuleInsert()
     * @uses Template::setGraphicFrames()
     * @uses Template::setSRemoveToolbarButtons()
     * @uses Template::setTextFrames()
     * @param string $colorList
     * @param \ArrayType\ArrayOfKeyValue $colorLookup
     * @param int $compositionID
     * @param string $description
     * @param \ArrayType\ArrayOfFieldInfo $fieldInfo
     * @param \ArrayType\ArrayOfstring $fieldNames
     * @param string $fontCSSURL
     * @param \ArrayType\ArrayOfstring $fontImports
     * @param string $fontList
     * @param \ArrayType\ArrayOfstring $graphicResourceNames
     * @param \ArrayType\ArrayOfstring $graphicRuleNames
     * @param string $hTMLFormFilePath
     * @param string $message
     * @param string $name
     * @param \ArrayType\ArrayOfTemplatePage $pages
     * @param \ArrayType\ArrayOfstring $templatePageNames
     * @param \ArrayType\ArrayOfstring $textRuleNames
     * @param string $thumbnailURL
     * @param int $totalPages
     * @param int $totalRecords
     * @param \ArrayType\ArrayOfstring $webFontNames
     * @param bool $bAdd
     * @param bool $bDelete
     * @param bool $bMove
     * @param bool $bResize
     * @param bool $bVariableRuleInsert
     * @param \ArrayType\ArrayOfGraphicFrame $graphicFrames
     * @param string $sRemoveToolbarButtons
     * @param \ArrayType\ArrayOfTextFrame $textFrames
     */
    public function __construct($colorList = null, \ArrayType\ArrayOfKeyValue $colorLookup = null, $compositionID = null, $description = null, \ArrayType\ArrayOfFieldInfo $fieldInfo = null, \ArrayType\ArrayOfstring $fieldNames = null, $fontCSSURL = null, \ArrayType\ArrayOfstring $fontImports = null, $fontList = null, \ArrayType\ArrayOfstring $graphicResourceNames = null, \ArrayType\ArrayOfstring $graphicRuleNames = null, $hTMLFormFilePath = null, $message = null, $name = null, \ArrayType\ArrayOfTemplatePage $pages = null, \ArrayType\ArrayOfstring $templatePageNames = null, \ArrayType\ArrayOfstring $textRuleNames = null, $thumbnailURL = null, $totalPages = null, $totalRecords = null, \ArrayType\ArrayOfstring $webFontNames = null, $bAdd = null, $bDelete = null, $bMove = null, $bResize = null, $bVariableRuleInsert = null, \ArrayType\ArrayOfGraphicFrame $graphicFrames = null, $sRemoveToolbarButtons = null, \ArrayType\ArrayOfTextFrame $textFrames = null)
    {
        $this
            ->setColorList($colorList)
            ->setColorLookup($colorLookup)
            ->setCompositionID($compositionID)
            ->setDescription($description)
            ->setFieldInfo($fieldInfo)
            ->setFieldNames($fieldNames)
            ->setFontCSSURL($fontCSSURL)
            ->setFontImports($fontImports)
            ->setFontList($fontList)
            ->setGraphicResourceNames($graphicResourceNames)
            ->setGraphicRuleNames($graphicRuleNames)
            ->setHTMLFormFilePath($hTMLFormFilePath)
            ->setMessage($message)
            ->setName($name)
            ->setPages($pages)
            ->setTemplatePageNames($templatePageNames)
            ->setTextRuleNames($textRuleNames)
            ->setThumbnailURL($thumbnailURL)
            ->setTotalPages($totalPages)
            ->setTotalRecords($totalRecords)
            ->setWebFontNames($webFontNames)
            ->setBAdd($bAdd)
            ->setBDelete($bDelete)
            ->setBMove($bMove)
            ->setBResize($bResize)
            ->setBVariableRuleInsert($bVariableRuleInsert)
            ->setGraphicFrames($graphicFrames)
            ->setSRemoveToolbarButtons($sRemoveToolbarButtons)
            ->setTextFrames($textFrames);
    }
    /**
     * Get ColorList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getColorList()
    {
        return isset($this->ColorList) ? $this->ColorList : null;
    }
    /**
     * Set ColorList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $colorList
     * @return \StructType\Template
     */
    public function setColorList($colorList = null)
    {
        // validation for constraint: string
        if (!is_null($colorList) && !is_string($colorList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($colorList, true), gettype($colorList)), __LINE__);
        }
        if (is_null($colorList) || (is_array($colorList) && empty($colorList))) {
            unset($this->ColorList);
        } else {
            $this->ColorList = $colorList;
        }
        return $this;
    }
    /**
     * Get ColorLookup value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfKeyValue|null
     */
    public function getColorLookup()
    {
        return isset($this->ColorLookup) ? $this->ColorLookup : null;
    }
    /**
     * Set ColorLookup value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfKeyValue $colorLookup
     * @return \StructType\Template
     */
    public function setColorLookup(\ArrayType\ArrayOfKeyValue $colorLookup = null)
    {
        if (is_null($colorLookup) || (is_array($colorLookup) && empty($colorLookup))) {
            unset($this->ColorLookup);
        } else {
            $this->ColorLookup = $colorLookup;
        }
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
     * @return \StructType\Template
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
     * @return \StructType\Template
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
     * @return \StructType\Template
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
     * @return \StructType\Template
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
     * @return \StructType\Template
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
     * Get FontImports value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getFontImports()
    {
        return isset($this->FontImports) ? $this->FontImports : null;
    }
    /**
     * Set FontImports value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $fontImports
     * @return \StructType\Template
     */
    public function setFontImports(\ArrayType\ArrayOfstring $fontImports = null)
    {
        if (is_null($fontImports) || (is_array($fontImports) && empty($fontImports))) {
            unset($this->FontImports);
        } else {
            $this->FontImports = $fontImports;
        }
        return $this;
    }
    /**
     * Get FontList value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFontList()
    {
        return isset($this->FontList) ? $this->FontList : null;
    }
    /**
     * Set FontList value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $fontList
     * @return \StructType\Template
     */
    public function setFontList($fontList = null)
    {
        // validation for constraint: string
        if (!is_null($fontList) && !is_string($fontList)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fontList, true), gettype($fontList)), __LINE__);
        }
        if (is_null($fontList) || (is_array($fontList) && empty($fontList))) {
            unset($this->FontList);
        } else {
            $this->FontList = $fontList;
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
     * @return \StructType\Template
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
     * @return \StructType\Template
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
     * @return \StructType\Template
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
     * @return \StructType\Template
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
     * @return \StructType\Template
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
     * Get Pages value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfTemplatePage|null
     */
    public function getPages()
    {
        return isset($this->Pages) ? $this->Pages : null;
    }
    /**
     * Set Pages value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfTemplatePage $pages
     * @return \StructType\Template
     */
    public function setPages(\ArrayType\ArrayOfTemplatePage $pages = null)
    {
        if (is_null($pages) || (is_array($pages) && empty($pages))) {
            unset($this->Pages);
        } else {
            $this->Pages = $pages;
        }
        return $this;
    }
    /**
     * Get TemplatePageNames value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getTemplatePageNames()
    {
        return isset($this->TemplatePageNames) ? $this->TemplatePageNames : null;
    }
    /**
     * Set TemplatePageNames value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $templatePageNames
     * @return \StructType\Template
     */
    public function setTemplatePageNames(\ArrayType\ArrayOfstring $templatePageNames = null)
    {
        if (is_null($templatePageNames) || (is_array($templatePageNames) && empty($templatePageNames))) {
            unset($this->TemplatePageNames);
        } else {
            $this->TemplatePageNames = $templatePageNames;
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
     * @return \StructType\Template
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
     * @return \StructType\Template
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
     * Get TotalPages value
     * @return int|null
     */
    public function getTotalPages()
    {
        return $this->TotalPages;
    }
    /**
     * Set TotalPages value
     * @param int $totalPages
     * @return \StructType\Template
     */
    public function setTotalPages($totalPages = null)
    {
        // validation for constraint: int
        if (!is_null($totalPages) && !(is_int($totalPages) || ctype_digit($totalPages))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalPages, true), gettype($totalPages)), __LINE__);
        }
        $this->TotalPages = $totalPages;
        return $this;
    }
    /**
     * Get TotalRecords value
     * @return int|null
     */
    public function getTotalRecords()
    {
        return $this->TotalRecords;
    }
    /**
     * Set TotalRecords value
     * @param int $totalRecords
     * @return \StructType\Template
     */
    public function setTotalRecords($totalRecords = null)
    {
        // validation for constraint: int
        if (!is_null($totalRecords) && !(is_int($totalRecords) || ctype_digit($totalRecords))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalRecords, true), gettype($totalRecords)), __LINE__);
        }
        $this->TotalRecords = $totalRecords;
        return $this;
    }
    /**
     * Get WebFontNames value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfstring|null
     */
    public function getWebFontNames()
    {
        return isset($this->WebFontNames) ? $this->WebFontNames : null;
    }
    /**
     * Set WebFontNames value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfstring $webFontNames
     * @return \StructType\Template
     */
    public function setWebFontNames(\ArrayType\ArrayOfstring $webFontNames = null)
    {
        if (is_null($webFontNames) || (is_array($webFontNames) && empty($webFontNames))) {
            unset($this->WebFontNames);
        } else {
            $this->WebFontNames = $webFontNames;
        }
        return $this;
    }
    /**
     * Get bAdd value
     * @return bool|null
     */
    public function getBAdd()
    {
        return $this->bAdd;
    }
    /**
     * Set bAdd value
     * @param bool $bAdd
     * @return \StructType\Template
     */
    public function setBAdd($bAdd = null)
    {
        // validation for constraint: boolean
        if (!is_null($bAdd) && !is_bool($bAdd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bAdd, true), gettype($bAdd)), __LINE__);
        }
        $this->bAdd = $bAdd;
        return $this;
    }
    /**
     * Get bDelete value
     * @return bool|null
     */
    public function getBDelete()
    {
        return $this->bDelete;
    }
    /**
     * Set bDelete value
     * @param bool $bDelete
     * @return \StructType\Template
     */
    public function setBDelete($bDelete = null)
    {
        // validation for constraint: boolean
        if (!is_null($bDelete) && !is_bool($bDelete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bDelete, true), gettype($bDelete)), __LINE__);
        }
        $this->bDelete = $bDelete;
        return $this;
    }
    /**
     * Get bMove value
     * @return bool|null
     */
    public function getBMove()
    {
        return $this->bMove;
    }
    /**
     * Set bMove value
     * @param bool $bMove
     * @return \StructType\Template
     */
    public function setBMove($bMove = null)
    {
        // validation for constraint: boolean
        if (!is_null($bMove) && !is_bool($bMove)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bMove, true), gettype($bMove)), __LINE__);
        }
        $this->bMove = $bMove;
        return $this;
    }
    /**
     * Get bResize value
     * @return bool|null
     */
    public function getBResize()
    {
        return $this->bResize;
    }
    /**
     * Set bResize value
     * @param bool $bResize
     * @return \StructType\Template
     */
    public function setBResize($bResize = null)
    {
        // validation for constraint: boolean
        if (!is_null($bResize) && !is_bool($bResize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bResize, true), gettype($bResize)), __LINE__);
        }
        $this->bResize = $bResize;
        return $this;
    }
    /**
     * Get bVariableRuleInsert value
     * @return bool|null
     */
    public function getBVariableRuleInsert()
    {
        return $this->bVariableRuleInsert;
    }
    /**
     * Set bVariableRuleInsert value
     * @param bool $bVariableRuleInsert
     * @return \StructType\Template
     */
    public function setBVariableRuleInsert($bVariableRuleInsert = null)
    {
        // validation for constraint: boolean
        if (!is_null($bVariableRuleInsert) && !is_bool($bVariableRuleInsert)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bVariableRuleInsert, true), gettype($bVariableRuleInsert)), __LINE__);
        }
        $this->bVariableRuleInsert = $bVariableRuleInsert;
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
     * @return \StructType\Template
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
     * Get sRemoveToolbarButtons value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSRemoveToolbarButtons()
    {
        return isset($this->sRemoveToolbarButtons) ? $this->sRemoveToolbarButtons : null;
    }
    /**
     * Set sRemoveToolbarButtons value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sRemoveToolbarButtons
     * @return \StructType\Template
     */
    public function setSRemoveToolbarButtons($sRemoveToolbarButtons = null)
    {
        // validation for constraint: string
        if (!is_null($sRemoveToolbarButtons) && !is_string($sRemoveToolbarButtons)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sRemoveToolbarButtons, true), gettype($sRemoveToolbarButtons)), __LINE__);
        }
        if (is_null($sRemoveToolbarButtons) || (is_array($sRemoveToolbarButtons) && empty($sRemoveToolbarButtons))) {
            unset($this->sRemoveToolbarButtons);
        } else {
            $this->sRemoveToolbarButtons = $sRemoveToolbarButtons;
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
     * @return \StructType\Template
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
