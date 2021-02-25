<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TargetInitResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TargetInitResponse
 * @subpackage Structs
 */
class TargetInitResponse extends AbstractStructBase
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
     * The PortNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PortNumber;
    /**
     * The WebServiceVersion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WebServiceVersion;
    /**
     * The bActive
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bActive;
    /**
     * The iLicensesAvailable
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iLicensesAvailable;
    /**
     * The iMaximumLoad
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iMaximumLoad;
    /**
     * Constructor method for TargetInitResponse
     * @uses TargetInitResponse::setMessage()
     * @uses TargetInitResponse::setPortNumber()
     * @uses TargetInitResponse::setWebServiceVersion()
     * @uses TargetInitResponse::setBActive()
     * @uses TargetInitResponse::setILicensesAvailable()
     * @uses TargetInitResponse::setIMaximumLoad()
     * @param string $message
     * @param int $portNumber
     * @param string $webServiceVersion
     * @param bool $bActive
     * @param int $iLicensesAvailable
     * @param int $iMaximumLoad
     */
    public function __construct($message = null, $portNumber = null, $webServiceVersion = null, $bActive = null, $iLicensesAvailable = null, $iMaximumLoad = null)
    {
        $this
            ->setMessage($message)
            ->setPortNumber($portNumber)
            ->setWebServiceVersion($webServiceVersion)
            ->setBActive($bActive)
            ->setILicensesAvailable($iLicensesAvailable)
            ->setIMaximumLoad($iMaximumLoad);
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
     * @return \StructType\TargetInitResponse
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
     * Get PortNumber value
     * @return int|null
     */
    public function getPortNumber()
    {
        return $this->PortNumber;
    }
    /**
     * Set PortNumber value
     * @param int $portNumber
     * @return \StructType\TargetInitResponse
     */
    public function setPortNumber($portNumber = null)
    {
        // validation for constraint: int
        if (!is_null($portNumber) && !(is_int($portNumber) || ctype_digit($portNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($portNumber, true), gettype($portNumber)), __LINE__);
        }
        $this->PortNumber = $portNumber;
        return $this;
    }
    /**
     * Get WebServiceVersion value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWebServiceVersion()
    {
        return isset($this->WebServiceVersion) ? $this->WebServiceVersion : null;
    }
    /**
     * Set WebServiceVersion value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $webServiceVersion
     * @return \StructType\TargetInitResponse
     */
    public function setWebServiceVersion($webServiceVersion = null)
    {
        // validation for constraint: string
        if (!is_null($webServiceVersion) && !is_string($webServiceVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($webServiceVersion, true), gettype($webServiceVersion)), __LINE__);
        }
        if (is_null($webServiceVersion) || (is_array($webServiceVersion) && empty($webServiceVersion))) {
            unset($this->WebServiceVersion);
        } else {
            $this->WebServiceVersion = $webServiceVersion;
        }
        return $this;
    }
    /**
     * Get bActive value
     * @return bool|null
     */
    public function getBActive()
    {
        return $this->bActive;
    }
    /**
     * Set bActive value
     * @param bool $bActive
     * @return \StructType\TargetInitResponse
     */
    public function setBActive($bActive = null)
    {
        // validation for constraint: boolean
        if (!is_null($bActive) && !is_bool($bActive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bActive, true), gettype($bActive)), __LINE__);
        }
        $this->bActive = $bActive;
        return $this;
    }
    /**
     * Get iLicensesAvailable value
     * @return int|null
     */
    public function getILicensesAvailable()
    {
        return $this->iLicensesAvailable;
    }
    /**
     * Set iLicensesAvailable value
     * @param int $iLicensesAvailable
     * @return \StructType\TargetInitResponse
     */
    public function setILicensesAvailable($iLicensesAvailable = null)
    {
        // validation for constraint: int
        if (!is_null($iLicensesAvailable) && !(is_int($iLicensesAvailable) || ctype_digit($iLicensesAvailable))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iLicensesAvailable, true), gettype($iLicensesAvailable)), __LINE__);
        }
        $this->iLicensesAvailable = $iLicensesAvailable;
        return $this;
    }
    /**
     * Get iMaximumLoad value
     * @return int|null
     */
    public function getIMaximumLoad()
    {
        return $this->iMaximumLoad;
    }
    /**
     * Set iMaximumLoad value
     * @param int $iMaximumLoad
     * @return \StructType\TargetInitResponse
     */
    public function setIMaximumLoad($iMaximumLoad = null)
    {
        // validation for constraint: int
        if (!is_null($iMaximumLoad) && !(is_int($iMaximumLoad) || ctype_digit($iMaximumLoad))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iMaximumLoad, true), gettype($iMaximumLoad)), __LINE__);
        }
        $this->iMaximumLoad = $iMaximumLoad;
        return $this;
    }
}
