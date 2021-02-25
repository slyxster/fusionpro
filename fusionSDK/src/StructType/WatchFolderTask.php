<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WatchFolderTask StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WatchFolderTask
 * @subpackage Structs
 */
class WatchFolderTask extends AbstractStructBase
{
    /**
     * The Chunking
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Chunking;
    /**
     * The ChunkingDifferentFirstFileSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $ChunkingDifferentFirstFileSize;
    /**
     * The ChunkingFirstFileSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ChunkingFirstFileSize;
    /**
     * The ChunkingSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $ChunkingSize;
    /**
     * The ConfigItems
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfKeyValue
     */
    public $ConfigItems;
    /**
     * The EmailAddresses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfKeyValue
     */
    public $EmailAddresses;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Name;
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
     * Constructor method for WatchFolderTask
     * @uses WatchFolderTask::setChunking()
     * @uses WatchFolderTask::setChunkingDifferentFirstFileSize()
     * @uses WatchFolderTask::setChunkingFirstFileSize()
     * @uses WatchFolderTask::setChunkingSize()
     * @uses WatchFolderTask::setConfigItems()
     * @uses WatchFolderTask::setEmailAddresses()
     * @uses WatchFolderTask::setName()
     * @uses WatchFolderTask::setOutputFileNameSource()
     * @uses WatchFolderTask::setOutputFolder()
     * @uses WatchFolderTask::setOutputFormat()
     * @uses WatchFolderTask::setUseImposition()
     * @param bool $chunking
     * @param bool $chunkingDifferentFirstFileSize
     * @param int $chunkingFirstFileSize
     * @param int $chunkingSize
     * @param \ArrayType\ArrayOfKeyValue $configItems
     * @param \ArrayType\ArrayOfKeyValue $emailAddresses
     * @param string $name
     * @param string $outputFileNameSource
     * @param string $outputFolder
     * @param string $outputFormat
     * @param bool $useImposition
     */
    public function __construct($chunking = null, $chunkingDifferentFirstFileSize = null, $chunkingFirstFileSize = null, $chunkingSize = null, \ArrayType\ArrayOfKeyValue $configItems = null, \ArrayType\ArrayOfKeyValue $emailAddresses = null, $name = null, $outputFileNameSource = null, $outputFolder = null, $outputFormat = null, $useImposition = null)
    {
        $this
            ->setChunking($chunking)
            ->setChunkingDifferentFirstFileSize($chunkingDifferentFirstFileSize)
            ->setChunkingFirstFileSize($chunkingFirstFileSize)
            ->setChunkingSize($chunkingSize)
            ->setConfigItems($configItems)
            ->setEmailAddresses($emailAddresses)
            ->setName($name)
            ->setOutputFileNameSource($outputFileNameSource)
            ->setOutputFolder($outputFolder)
            ->setOutputFormat($outputFormat)
            ->setUseImposition($useImposition);
    }
    /**
     * Get Chunking value
     * @return bool|null
     */
    public function getChunking()
    {
        return $this->Chunking;
    }
    /**
     * Set Chunking value
     * @param bool $chunking
     * @return \StructType\WatchFolderTask
     */
    public function setChunking($chunking = null)
    {
        // validation for constraint: boolean
        if (!is_null($chunking) && !is_bool($chunking)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($chunking, true), gettype($chunking)), __LINE__);
        }
        $this->Chunking = $chunking;
        return $this;
    }
    /**
     * Get ChunkingDifferentFirstFileSize value
     * @return bool|null
     */
    public function getChunkingDifferentFirstFileSize()
    {
        return $this->ChunkingDifferentFirstFileSize;
    }
    /**
     * Set ChunkingDifferentFirstFileSize value
     * @param bool $chunkingDifferentFirstFileSize
     * @return \StructType\WatchFolderTask
     */
    public function setChunkingDifferentFirstFileSize($chunkingDifferentFirstFileSize = null)
    {
        // validation for constraint: boolean
        if (!is_null($chunkingDifferentFirstFileSize) && !is_bool($chunkingDifferentFirstFileSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($chunkingDifferentFirstFileSize, true), gettype($chunkingDifferentFirstFileSize)), __LINE__);
        }
        $this->ChunkingDifferentFirstFileSize = $chunkingDifferentFirstFileSize;
        return $this;
    }
    /**
     * Get ChunkingFirstFileSize value
     * @return int|null
     */
    public function getChunkingFirstFileSize()
    {
        return $this->ChunkingFirstFileSize;
    }
    /**
     * Set ChunkingFirstFileSize value
     * @param int $chunkingFirstFileSize
     * @return \StructType\WatchFolderTask
     */
    public function setChunkingFirstFileSize($chunkingFirstFileSize = null)
    {
        // validation for constraint: int
        if (!is_null($chunkingFirstFileSize) && !(is_int($chunkingFirstFileSize) || ctype_digit($chunkingFirstFileSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($chunkingFirstFileSize, true), gettype($chunkingFirstFileSize)), __LINE__);
        }
        $this->ChunkingFirstFileSize = $chunkingFirstFileSize;
        return $this;
    }
    /**
     * Get ChunkingSize value
     * @return int|null
     */
    public function getChunkingSize()
    {
        return $this->ChunkingSize;
    }
    /**
     * Set ChunkingSize value
     * @param int $chunkingSize
     * @return \StructType\WatchFolderTask
     */
    public function setChunkingSize($chunkingSize = null)
    {
        // validation for constraint: int
        if (!is_null($chunkingSize) && !(is_int($chunkingSize) || ctype_digit($chunkingSize))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($chunkingSize, true), gettype($chunkingSize)), __LINE__);
        }
        $this->ChunkingSize = $chunkingSize;
        return $this;
    }
    /**
     * Get ConfigItems value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfKeyValue|null
     */
    public function getConfigItems()
    {
        return isset($this->ConfigItems) ? $this->ConfigItems : null;
    }
    /**
     * Set ConfigItems value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfKeyValue $configItems
     * @return \StructType\WatchFolderTask
     */
    public function setConfigItems(\ArrayType\ArrayOfKeyValue $configItems = null)
    {
        if (is_null($configItems) || (is_array($configItems) && empty($configItems))) {
            unset($this->ConfigItems);
        } else {
            $this->ConfigItems = $configItems;
        }
        return $this;
    }
    /**
     * Get EmailAddresses value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfKeyValue|null
     */
    public function getEmailAddresses()
    {
        return isset($this->EmailAddresses) ? $this->EmailAddresses : null;
    }
    /**
     * Set EmailAddresses value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfKeyValue $emailAddresses
     * @return \StructType\WatchFolderTask
     */
    public function setEmailAddresses(\ArrayType\ArrayOfKeyValue $emailAddresses = null)
    {
        if (is_null($emailAddresses) || (is_array($emailAddresses) && empty($emailAddresses))) {
            unset($this->EmailAddresses);
        } else {
            $this->EmailAddresses = $emailAddresses;
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
     * @return \StructType\WatchFolderTask
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
     * @return \StructType\WatchFolderTask
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
     * @return \StructType\WatchFolderTask
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
     * @return \StructType\WatchFolderTask
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
     * @return \StructType\WatchFolderTask
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
}
