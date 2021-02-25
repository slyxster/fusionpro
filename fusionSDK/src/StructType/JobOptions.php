<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for JobOptions StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:JobOptions
 * @subpackage Structs
 */
class JobOptions extends AbstractStructBase
{
    /**
     * The DisallowChunking
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $DisallowChunking;
    /**
     * The DisallowOutputFileRelocate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $DisallowOutputFileRelocate;
    /**
     * The DisallowOutputFileRename
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $DisallowOutputFileRename;
    /**
     * The JPEGOptions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\JPEG_Options
     */
    public $JPEGOptions;
    /**
     * The NamedSettings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfKeyValue
     */
    public $NamedSettings;
    /**
     * The OutputFileBaseName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OutputFileBaseName;
    /**
     * The OutputFileName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OutputFileName;
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
     * The RecordsToCompose
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $RecordsToCompose;
    /**
     * The StartRecordNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $StartRecordNumber;
    /**
     * The SuppressBackground
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $SuppressBackground;
    /**
     * The UseImposition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $UseImposition;
    /**
     * The sMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sMessage;
    /**
     * Constructor method for JobOptions
     * @uses JobOptions::setDisallowChunking()
     * @uses JobOptions::setDisallowOutputFileRelocate()
     * @uses JobOptions::setDisallowOutputFileRename()
     * @uses JobOptions::setJPEGOptions()
     * @uses JobOptions::setNamedSettings()
     * @uses JobOptions::setOutputFileBaseName()
     * @uses JobOptions::setOutputFileName()
     * @uses JobOptions::setOutputFolder()
     * @uses JobOptions::setOutputFormat()
     * @uses JobOptions::setRecordsToCompose()
     * @uses JobOptions::setStartRecordNumber()
     * @uses JobOptions::setSuppressBackground()
     * @uses JobOptions::setUseImposition()
     * @uses JobOptions::setSMessage()
     * @param bool $disallowChunking
     * @param bool $disallowOutputFileRelocate
     * @param bool $disallowOutputFileRename
     * @param \StructType\JPEG_Options $jPEGOptions
     * @param \ArrayType\ArrayOfKeyValue $namedSettings
     * @param string $outputFileBaseName
     * @param string $outputFileName
     * @param string $outputFolder
     * @param string $outputFormat
     * @param int $recordsToCompose
     * @param int $startRecordNumber
     * @param bool $suppressBackground
     * @param bool $useImposition
     * @param string $sMessage
     */
    public function __construct($disallowChunking = null, $disallowOutputFileRelocate = null, $disallowOutputFileRename = null, \StructType\JPEG_Options $jPEGOptions = null, \ArrayType\ArrayOfKeyValue $namedSettings = null, $outputFileBaseName = null, $outputFileName = null, $outputFolder = null, $outputFormat = null, $recordsToCompose = null, $startRecordNumber = null, $suppressBackground = null, $useImposition = null, $sMessage = null)
    {
        $this
            ->setDisallowChunking($disallowChunking)
            ->setDisallowOutputFileRelocate($disallowOutputFileRelocate)
            ->setDisallowOutputFileRename($disallowOutputFileRename)
            ->setJPEGOptions($jPEGOptions)
            ->setNamedSettings($namedSettings)
            ->setOutputFileBaseName($outputFileBaseName)
            ->setOutputFileName($outputFileName)
            ->setOutputFolder($outputFolder)
            ->setOutputFormat($outputFormat)
            ->setRecordsToCompose($recordsToCompose)
            ->setStartRecordNumber($startRecordNumber)
            ->setSuppressBackground($suppressBackground)
            ->setUseImposition($useImposition)
            ->setSMessage($sMessage);
    }
    /**
     * Get DisallowChunking value
     * @return bool|null
     */
    public function getDisallowChunking()
    {
        return $this->DisallowChunking;
    }
    /**
     * Set DisallowChunking value
     * @param bool $disallowChunking
     * @return \StructType\JobOptions
     */
    public function setDisallowChunking($disallowChunking = null)
    {
        // validation for constraint: boolean
        if (!is_null($disallowChunking) && !is_bool($disallowChunking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($disallowChunking, true), gettype($disallowChunking)), __LINE__);
        }
        $this->DisallowChunking = $disallowChunking;
        return $this;
    }
    /**
     * Get DisallowOutputFileRelocate value
     * @return bool|null
     */
    public function getDisallowOutputFileRelocate()
    {
        return $this->DisallowOutputFileRelocate;
    }
    /**
     * Set DisallowOutputFileRelocate value
     * @param bool $disallowOutputFileRelocate
     * @return \StructType\JobOptions
     */
    public function setDisallowOutputFileRelocate($disallowOutputFileRelocate = null)
    {
        // validation for constraint: boolean
        if (!is_null($disallowOutputFileRelocate) && !is_bool($disallowOutputFileRelocate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($disallowOutputFileRelocate, true), gettype($disallowOutputFileRelocate)), __LINE__);
        }
        $this->DisallowOutputFileRelocate = $disallowOutputFileRelocate;
        return $this;
    }
    /**
     * Get DisallowOutputFileRename value
     * @return bool|null
     */
    public function getDisallowOutputFileRename()
    {
        return $this->DisallowOutputFileRename;
    }
    /**
     * Set DisallowOutputFileRename value
     * @param bool $disallowOutputFileRename
     * @return \StructType\JobOptions
     */
    public function setDisallowOutputFileRename($disallowOutputFileRename = null)
    {
        // validation for constraint: boolean
        if (!is_null($disallowOutputFileRename) && !is_bool($disallowOutputFileRename)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($disallowOutputFileRename, true), gettype($disallowOutputFileRename)), __LINE__);
        }
        $this->DisallowOutputFileRename = $disallowOutputFileRename;
        return $this;
    }
    /**
     * Get JPEGOptions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\JPEG_Options|null
     */
    public function getJPEGOptions()
    {
        return isset($this->JPEGOptions) ? $this->JPEGOptions : null;
    }
    /**
     * Set JPEGOptions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\JPEG_Options $jPEGOptions
     * @return \StructType\JobOptions
     */
    public function setJPEGOptions(\StructType\JPEG_Options $jPEGOptions = null)
    {
        if (is_null($jPEGOptions) || (is_array($jPEGOptions) && empty($jPEGOptions))) {
            unset($this->JPEGOptions);
        } else {
            $this->JPEGOptions = $jPEGOptions;
        }
        return $this;
    }
    /**
     * Get NamedSettings value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfKeyValue|null
     */
    public function getNamedSettings()
    {
        return isset($this->NamedSettings) ? $this->NamedSettings : null;
    }
    /**
     * Set NamedSettings value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfKeyValue $namedSettings
     * @return \StructType\JobOptions
     */
    public function setNamedSettings(\ArrayType\ArrayOfKeyValue $namedSettings = null)
    {
        if (is_null($namedSettings) || (is_array($namedSettings) && empty($namedSettings))) {
            unset($this->NamedSettings);
        } else {
            $this->NamedSettings = $namedSettings;
        }
        return $this;
    }
    /**
     * Get OutputFileBaseName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOutputFileBaseName()
    {
        return isset($this->OutputFileBaseName) ? $this->OutputFileBaseName : null;
    }
    /**
     * Set OutputFileBaseName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $outputFileBaseName
     * @return \StructType\JobOptions
     */
    public function setOutputFileBaseName($outputFileBaseName = null)
    {
        // validation for constraint: string
        if (!is_null($outputFileBaseName) && !is_string($outputFileBaseName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputFileBaseName, true), gettype($outputFileBaseName)), __LINE__);
        }
        if (is_null($outputFileBaseName) || (is_array($outputFileBaseName) && empty($outputFileBaseName))) {
            unset($this->OutputFileBaseName);
        } else {
            $this->OutputFileBaseName = $outputFileBaseName;
        }
        return $this;
    }
    /**
     * Get OutputFileName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOutputFileName()
    {
        return isset($this->OutputFileName) ? $this->OutputFileName : null;
    }
    /**
     * Set OutputFileName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $outputFileName
     * @return \StructType\JobOptions
     */
    public function setOutputFileName($outputFileName = null)
    {
        // validation for constraint: string
        if (!is_null($outputFileName) && !is_string($outputFileName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputFileName, true), gettype($outputFileName)), __LINE__);
        }
        if (is_null($outputFileName) || (is_array($outputFileName) && empty($outputFileName))) {
            unset($this->OutputFileName);
        } else {
            $this->OutputFileName = $outputFileName;
        }
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
     * @return \StructType\JobOptions
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
     * @return \StructType\JobOptions
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
     * Get RecordsToCompose value
     * @return int|null
     */
    public function getRecordsToCompose()
    {
        return $this->RecordsToCompose;
    }
    /**
     * Set RecordsToCompose value
     * @param int $recordsToCompose
     * @return \StructType\JobOptions
     */
    public function setRecordsToCompose($recordsToCompose = null)
    {
        // validation for constraint: int
        if (!is_null($recordsToCompose) && !(is_int($recordsToCompose) || ctype_digit($recordsToCompose))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($recordsToCompose, true), gettype($recordsToCompose)), __LINE__);
        }
        $this->RecordsToCompose = $recordsToCompose;
        return $this;
    }
    /**
     * Get StartRecordNumber value
     * @return int|null
     */
    public function getStartRecordNumber()
    {
        return $this->StartRecordNumber;
    }
    /**
     * Set StartRecordNumber value
     * @param int $startRecordNumber
     * @return \StructType\JobOptions
     */
    public function setStartRecordNumber($startRecordNumber = null)
    {
        // validation for constraint: int
        if (!is_null($startRecordNumber) && !(is_int($startRecordNumber) || ctype_digit($startRecordNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($startRecordNumber, true), gettype($startRecordNumber)), __LINE__);
        }
        $this->StartRecordNumber = $startRecordNumber;
        return $this;
    }
    /**
     * Get SuppressBackground value
     * @return bool|null
     */
    public function getSuppressBackground()
    {
        return $this->SuppressBackground;
    }
    /**
     * Set SuppressBackground value
     * @param bool $suppressBackground
     * @return \StructType\JobOptions
     */
    public function setSuppressBackground($suppressBackground = null)
    {
        // validation for constraint: boolean
        if (!is_null($suppressBackground) && !is_bool($suppressBackground)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($suppressBackground, true), gettype($suppressBackground)), __LINE__);
        }
        $this->SuppressBackground = $suppressBackground;
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
     * @return \StructType\JobOptions
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
     * Get sMessage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSMessage()
    {
        return isset($this->sMessage) ? $this->sMessage : null;
    }
    /**
     * Set sMessage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sMessage
     * @return \StructType\JobOptions
     */
    public function setSMessage($sMessage = null)
    {
        // validation for constraint: string
        if (!is_null($sMessage) && !is_string($sMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sMessage, true), gettype($sMessage)), __LINE__);
        }
        if (is_null($sMessage) || (is_array($sMessage) && empty($sMessage))) {
            unset($this->sMessage);
        } else {
            $this->sMessage = $sMessage;
        }
        return $this;
    }
}
