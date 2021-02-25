<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WatchFolderSettings StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WatchFolderSettings
 * @subpackage Structs
 */
class WatchFolderSettings extends AbstractStructBase
{
    /**
     * The DeleteInputFile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $DeleteInputFile;
    /**
     * The Enabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Enabled;
    /**
     * The InputWatchFolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InputWatchFolder;
    /**
     * The OutputFileNameSource
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OutputFileNameSource;
    /**
     * The OutputFolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OutputFolder;
    /**
     * The OutputFormat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OutputFormat;
    /**
     * The UseImposition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $UseImposition;
    /**
     * The WatchConditions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfWatchFolderCondition
     */
    public $WatchConditions;
    /**
     * The WatchName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WatchName;
    /**
     * Constructor method for WatchFolderSettings
     * @uses WatchFolderSettings::setDeleteInputFile()
     * @uses WatchFolderSettings::setEnabled()
     * @uses WatchFolderSettings::setInputWatchFolder()
     * @uses WatchFolderSettings::setOutputFileNameSource()
     * @uses WatchFolderSettings::setOutputFolder()
     * @uses WatchFolderSettings::setOutputFormat()
     * @uses WatchFolderSettings::setUseImposition()
     * @uses WatchFolderSettings::setWatchConditions()
     * @uses WatchFolderSettings::setWatchName()
     * @param bool $deleteInputFile
     * @param bool $enabled
     * @param string $inputWatchFolder
     * @param string $outputFileNameSource
     * @param string $outputFolder
     * @param string $outputFormat
     * @param bool $useImposition
     * @param \ArrayType\ArrayOfWatchFolderCondition $watchConditions
     * @param string $watchName
     */
    public function __construct($deleteInputFile = null, $enabled = null, $inputWatchFolder = null, $outputFileNameSource = null, $outputFolder = null, $outputFormat = null, $useImposition = null, \ArrayType\ArrayOfWatchFolderCondition $watchConditions = null, $watchName = null)
    {
        $this
            ->setDeleteInputFile($deleteInputFile)
            ->setEnabled($enabled)
            ->setInputWatchFolder($inputWatchFolder)
            ->setOutputFileNameSource($outputFileNameSource)
            ->setOutputFolder($outputFolder)
            ->setOutputFormat($outputFormat)
            ->setUseImposition($useImposition)
            ->setWatchConditions($watchConditions)
            ->setWatchName($watchName);
    }
    /**
     * Get DeleteInputFile value
     * @return bool|null
     */
    public function getDeleteInputFile()
    {
        return $this->DeleteInputFile;
    }
    /**
     * Set DeleteInputFile value
     * @param bool $deleteInputFile
     * @return \StructType\WatchFolderSettings
     */
    public function setDeleteInputFile($deleteInputFile = null)
    {
        // validation for constraint: boolean
        if (!is_null($deleteInputFile) && !is_bool($deleteInputFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deleteInputFile, true), gettype($deleteInputFile)), __LINE__);
        }
        $this->DeleteInputFile = $deleteInputFile;
        return $this;
    }
    /**
     * Get Enabled value
     * @return bool|null
     */
    public function getEnabled()
    {
        return $this->Enabled;
    }
    /**
     * Set Enabled value
     * @param bool $enabled
     * @return \StructType\WatchFolderSettings
     */
    public function setEnabled($enabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($enabled) && !is_bool($enabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($enabled, true), gettype($enabled)), __LINE__);
        }
        $this->Enabled = $enabled;
        return $this;
    }
    /**
     * Get InputWatchFolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInputWatchFolder()
    {
        return isset($this->InputWatchFolder) ? $this->InputWatchFolder : null;
    }
    /**
     * Set InputWatchFolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $inputWatchFolder
     * @return \StructType\WatchFolderSettings
     */
    public function setInputWatchFolder($inputWatchFolder = null)
    {
        // validation for constraint: string
        if (!is_null($inputWatchFolder) && !is_string($inputWatchFolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inputWatchFolder, true), gettype($inputWatchFolder)), __LINE__);
        }
        if (is_null($inputWatchFolder) || (is_array($inputWatchFolder) && empty($inputWatchFolder))) {
            unset($this->InputWatchFolder);
        } else {
            $this->InputWatchFolder = $inputWatchFolder;
        }
        return $this;
    }
    /**
     * Get OutputFileNameSource value
     * @return string|null
     */
    public function getOutputFileNameSource()
    {
        return $this->OutputFileNameSource;
    }
    /**
     * Set OutputFileNameSource value
     * @uses \EnumType\OutputFileNameSource::valueIsValid()
     * @uses \EnumType\OutputFileNameSource::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $outputFileNameSource
     * @return \StructType\WatchFolderSettings
     */
    public function setOutputFileNameSource($outputFileNameSource = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\OutputFileNameSource::valueIsValid($outputFileNameSource)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\OutputFileNameSource', is_array($outputFileNameSource) ? implode(', ', $outputFileNameSource) : var_export($outputFileNameSource, true), implode(', ', \EnumType\OutputFileNameSource::getValidValues())), __LINE__);
        }
        $this->OutputFileNameSource = $outputFileNameSource;
        return $this;
    }
    /**
     * Get OutputFolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOutputFolder()
    {
        return isset($this->OutputFolder) ? $this->OutputFolder : null;
    }
    /**
     * Set OutputFolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $outputFolder
     * @return \StructType\WatchFolderSettings
     */
    public function setOutputFolder($outputFolder = null)
    {
        // validation for constraint: string
        if (!is_null($outputFolder) && !is_string($outputFolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputFolder, true), gettype($outputFolder)), __LINE__);
        }
        if (is_null($outputFolder) || (is_array($outputFolder) && empty($outputFolder))) {
            unset($this->OutputFolder);
        } else {
            $this->OutputFolder = $outputFolder;
        }
        return $this;
    }
    /**
     * Get OutputFormat value
     * @return string|null
     */
    public function getOutputFormat()
    {
        return $this->OutputFormat;
    }
    /**
     * Set OutputFormat value
     * @uses \EnumType\OutputFormat::valueIsValid()
     * @uses \EnumType\OutputFormat::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $outputFormat
     * @return \StructType\WatchFolderSettings
     */
    public function setOutputFormat($outputFormat = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\OutputFormat::valueIsValid($outputFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\OutputFormat', is_array($outputFormat) ? implode(', ', $outputFormat) : var_export($outputFormat, true), implode(', ', \EnumType\OutputFormat::getValidValues())), __LINE__);
        }
        $this->OutputFormat = $outputFormat;
        return $this;
    }
    /**
     * Get UseImposition value
     * @return bool|null
     */
    public function getUseImposition()
    {
        return $this->UseImposition;
    }
    /**
     * Set UseImposition value
     * @param bool $useImposition
     * @return \StructType\WatchFolderSettings
     */
    public function setUseImposition($useImposition = null)
    {
        // validation for constraint: boolean
        if (!is_null($useImposition) && !is_bool($useImposition)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useImposition, true), gettype($useImposition)), __LINE__);
        }
        $this->UseImposition = $useImposition;
        return $this;
    }
    /**
     * Get WatchConditions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfWatchFolderCondition|null
     */
    public function getWatchConditions()
    {
        return isset($this->WatchConditions) ? $this->WatchConditions : null;
    }
    /**
     * Set WatchConditions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfWatchFolderCondition $watchConditions
     * @return \StructType\WatchFolderSettings
     */
    public function setWatchConditions(\ArrayType\ArrayOfWatchFolderCondition $watchConditions = null)
    {
        if (is_null($watchConditions) || (is_array($watchConditions) && empty($watchConditions))) {
            unset($this->WatchConditions);
        } else {
            $this->WatchConditions = $watchConditions;
        }
        return $this;
    }
    /**
     * Get WatchName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWatchName()
    {
        return isset($this->WatchName) ? $this->WatchName : null;
    }
    /**
     * Set WatchName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $watchName
     * @return \StructType\WatchFolderSettings
     */
    public function setWatchName($watchName = null)
    {
        // validation for constraint: string
        if (!is_null($watchName) && !is_string($watchName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($watchName, true), gettype($watchName)), __LINE__);
        }
        if (is_null($watchName) || (is_array($watchName) && empty($watchName))) {
            unset($this->WatchName);
        } else {
            $this->WatchName = $watchName;
        }
        return $this;
    }
}
