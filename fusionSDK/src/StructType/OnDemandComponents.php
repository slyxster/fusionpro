<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OnDemandComponents StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OnDemandComponents
 * @subpackage Structs
 */
class OnDemandComponents extends AbstractStructBase
{
    /**
     * The CompositionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CompositionID;
    /**
     * The ConfigFile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ConfigFile;
    /**
     * The FormatFile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $FormatFile;
    /**
     * The InstanceFile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InstanceFile;
    /**
     * The OutputFile
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OutputFile;
    /**
     * Constructor method for OnDemandComponents
     * @uses OnDemandComponents::setCompositionID()
     * @uses OnDemandComponents::setConfigFile()
     * @uses OnDemandComponents::setFormatFile()
     * @uses OnDemandComponents::setInstanceFile()
     * @uses OnDemandComponents::setOutputFile()
     * @param int $compositionID
     * @param string $configFile
     * @param string $formatFile
     * @param string $instanceFile
     * @param string $outputFile
     */
    public function __construct($compositionID = null, $configFile = null, $formatFile = null, $instanceFile = null, $outputFile = null)
    {
        $this
            ->setCompositionID($compositionID)
            ->setConfigFile($configFile)
            ->setFormatFile($formatFile)
            ->setInstanceFile($instanceFile)
            ->setOutputFile($outputFile);
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
     * @return \StructType\OnDemandComponents
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
     * Get ConfigFile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getConfigFile()
    {
        return isset($this->ConfigFile) ? $this->ConfigFile : null;
    }
    /**
     * Set ConfigFile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $configFile
     * @return \StructType\OnDemandComponents
     */
    public function setConfigFile($configFile = null)
    {
        // validation for constraint: string
        if (!is_null($configFile) && !is_string($configFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($configFile, true), gettype($configFile)), __LINE__);
        }
        if (is_null($configFile) || (is_array($configFile) && empty($configFile))) {
            unset($this->ConfigFile);
        } else {
            $this->ConfigFile = $configFile;
        }
        return $this;
    }
    /**
     * Get FormatFile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFormatFile()
    {
        return isset($this->FormatFile) ? $this->FormatFile : null;
    }
    /**
     * Set FormatFile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $formatFile
     * @return \StructType\OnDemandComponents
     */
    public function setFormatFile($formatFile = null)
    {
        // validation for constraint: string
        if (!is_null($formatFile) && !is_string($formatFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($formatFile, true), gettype($formatFile)), __LINE__);
        }
        if (is_null($formatFile) || (is_array($formatFile) && empty($formatFile))) {
            unset($this->FormatFile);
        } else {
            $this->FormatFile = $formatFile;
        }
        return $this;
    }
    /**
     * Get InstanceFile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInstanceFile()
    {
        return isset($this->InstanceFile) ? $this->InstanceFile : null;
    }
    /**
     * Set InstanceFile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $instanceFile
     * @return \StructType\OnDemandComponents
     */
    public function setInstanceFile($instanceFile = null)
    {
        // validation for constraint: string
        if (!is_null($instanceFile) && !is_string($instanceFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($instanceFile, true), gettype($instanceFile)), __LINE__);
        }
        if (is_null($instanceFile) || (is_array($instanceFile) && empty($instanceFile))) {
            unset($this->InstanceFile);
        } else {
            $this->InstanceFile = $instanceFile;
        }
        return $this;
    }
    /**
     * Get OutputFile value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOutputFile()
    {
        return isset($this->OutputFile) ? $this->OutputFile : null;
    }
    /**
     * Set OutputFile value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $outputFile
     * @return \StructType\OnDemandComponents
     */
    public function setOutputFile($outputFile = null)
    {
        // validation for constraint: string
        if (!is_null($outputFile) && !is_string($outputFile)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputFile, true), gettype($outputFile)), __LINE__);
        }
        if (is_null($outputFile) || (is_array($outputFile) && empty($outputFile))) {
            unset($this->OutputFile);
        } else {
            $this->OutputFile = $outputFile;
        }
        return $this;
    }
}
