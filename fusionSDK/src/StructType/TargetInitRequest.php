<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TargetInitRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TargetInitRequest
 * @subpackage Structs
 */
class TargetInitRequest extends AbstractStructBase
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
     * The WorkingFolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WorkingFolder;
    /**
     * The sServerAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $sServerAddress;
    /**
     * Constructor method for TargetInitRequest
     * @uses TargetInitRequest::setMessage()
     * @uses TargetInitRequest::setWorkingFolder()
     * @uses TargetInitRequest::setSServerAddress()
     * @param string $message
     * @param string $workingFolder
     * @param string $sServerAddress
     */
    public function __construct($message = null, $workingFolder = null, $sServerAddress = null)
    {
        $this
            ->setMessage($message)
            ->setWorkingFolder($workingFolder)
            ->setSServerAddress($sServerAddress);
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
     * @return \StructType\TargetInitRequest
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
     * Get WorkingFolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWorkingFolder()
    {
        return isset($this->WorkingFolder) ? $this->WorkingFolder : null;
    }
    /**
     * Set WorkingFolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $workingFolder
     * @return \StructType\TargetInitRequest
     */
    public function setWorkingFolder($workingFolder = null)
    {
        // validation for constraint: string
        if (!is_null($workingFolder) && !is_string($workingFolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workingFolder, true), gettype($workingFolder)), __LINE__);
        }
        if (is_null($workingFolder) || (is_array($workingFolder) && empty($workingFolder))) {
            unset($this->WorkingFolder);
        } else {
            $this->WorkingFolder = $workingFolder;
        }
        return $this;
    }
    /**
     * Get sServerAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSServerAddress()
    {
        return isset($this->sServerAddress) ? $this->sServerAddress : null;
    }
    /**
     * Set sServerAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sServerAddress
     * @return \StructType\TargetInitRequest
     */
    public function setSServerAddress($sServerAddress = null)
    {
        // validation for constraint: string
        if (!is_null($sServerAddress) && !is_string($sServerAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sServerAddress, true), gettype($sServerAddress)), __LINE__);
        }
        if (is_null($sServerAddress) || (is_array($sServerAddress) && empty($sServerAddress))) {
            unset($this->sServerAddress);
        } else {
            $this->sServerAddress = $sServerAddress;
        }
        return $this;
    }
}
