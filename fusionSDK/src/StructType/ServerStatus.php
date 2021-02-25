<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServerStatus StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ServerStatus
 * @subpackage Structs
 */
class ServerStatus extends AbstractStructBase
{
    /**
     * The Active
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Active;
    /**
     * The AvailableInstances
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $AvailableInstances;
    /**
     * The DefinedMaxLoad
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $DefinedMaxLoad;
    /**
     * The MaxLoad
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $MaxLoad;
    /**
     * The PortNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $PortNumber;
    /**
     * The Server
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Server;
    /**
     * The ServerURI
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ServerURI;
    /**
     * The StatusTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $StatusTime;
    /**
     * The Unlimited
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $Unlimited;
    /**
     * The WebServiceVersion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WebServiceVersion;
    /**
     * Constructor method for ServerStatus
     * @uses ServerStatus::setActive()
     * @uses ServerStatus::setAvailableInstances()
     * @uses ServerStatus::setDefinedMaxLoad()
     * @uses ServerStatus::setMaxLoad()
     * @uses ServerStatus::setPortNumber()
     * @uses ServerStatus::setServer()
     * @uses ServerStatus::setServerURI()
     * @uses ServerStatus::setStatusTime()
     * @uses ServerStatus::setUnlimited()
     * @uses ServerStatus::setWebServiceVersion()
     * @param bool $active
     * @param int $availableInstances
     * @param int $definedMaxLoad
     * @param int $maxLoad
     * @param int $portNumber
     * @param string $server
     * @param string $serverURI
     * @param string $statusTime
     * @param bool $unlimited
     * @param string $webServiceVersion
     */
    public function __construct($active = null, $availableInstances = null, $definedMaxLoad = null, $maxLoad = null, $portNumber = null, $server = null, $serverURI = null, $statusTime = null, $unlimited = null, $webServiceVersion = null)
    {
        $this
            ->setActive($active)
            ->setAvailableInstances($availableInstances)
            ->setDefinedMaxLoad($definedMaxLoad)
            ->setMaxLoad($maxLoad)
            ->setPortNumber($portNumber)
            ->setServer($server)
            ->setServerURI($serverURI)
            ->setStatusTime($statusTime)
            ->setUnlimited($unlimited)
            ->setWebServiceVersion($webServiceVersion);
    }
    /**
     * Get Active value
     * @return bool|null
     */
    public function getActive()
    {
        return $this->Active;
    }
    /**
     * Set Active value
     * @param bool $active
     * @return \StructType\ServerStatus
     */
    public function setActive($active = null)
    {
        // validation for constraint: boolean
        if (!is_null($active) && !is_bool($active)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($active, true), gettype($active)), __LINE__);
        }
        $this->Active = $active;
        return $this;
    }
    /**
     * Get AvailableInstances value
     * @return int|null
     */
    public function getAvailableInstances()
    {
        return $this->AvailableInstances;
    }
    /**
     * Set AvailableInstances value
     * @param int $availableInstances
     * @return \StructType\ServerStatus
     */
    public function setAvailableInstances($availableInstances = null)
    {
        // validation for constraint: int
        if (!is_null($availableInstances) && !(is_int($availableInstances) || ctype_digit($availableInstances))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($availableInstances, true), gettype($availableInstances)), __LINE__);
        }
        $this->AvailableInstances = $availableInstances;
        return $this;
    }
    /**
     * Get DefinedMaxLoad value
     * @return int|null
     */
    public function getDefinedMaxLoad()
    {
        return $this->DefinedMaxLoad;
    }
    /**
     * Set DefinedMaxLoad value
     * @param int $definedMaxLoad
     * @return \StructType\ServerStatus
     */
    public function setDefinedMaxLoad($definedMaxLoad = null)
    {
        // validation for constraint: int
        if (!is_null($definedMaxLoad) && !(is_int($definedMaxLoad) || ctype_digit($definedMaxLoad))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($definedMaxLoad, true), gettype($definedMaxLoad)), __LINE__);
        }
        $this->DefinedMaxLoad = $definedMaxLoad;
        return $this;
    }
    /**
     * Get MaxLoad value
     * @return int|null
     */
    public function getMaxLoad()
    {
        return $this->MaxLoad;
    }
    /**
     * Set MaxLoad value
     * @param int $maxLoad
     * @return \StructType\ServerStatus
     */
    public function setMaxLoad($maxLoad = null)
    {
        // validation for constraint: int
        if (!is_null($maxLoad) && !(is_int($maxLoad) || ctype_digit($maxLoad))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxLoad, true), gettype($maxLoad)), __LINE__);
        }
        $this->MaxLoad = $maxLoad;
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
     * @return \StructType\ServerStatus
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
     * Get Server value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getServer()
    {
        return isset($this->Server) ? $this->Server : null;
    }
    /**
     * Set Server value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $server
     * @return \StructType\ServerStatus
     */
    public function setServer($server = null)
    {
        // validation for constraint: string
        if (!is_null($server) && !is_string($server)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($server, true), gettype($server)), __LINE__);
        }
        if (is_null($server) || (is_array($server) && empty($server))) {
            unset($this->Server);
        } else {
            $this->Server = $server;
        }
        return $this;
    }
    /**
     * Get ServerURI value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getServerURI()
    {
        return isset($this->ServerURI) ? $this->ServerURI : null;
    }
    /**
     * Set ServerURI value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $serverURI
     * @return \StructType\ServerStatus
     */
    public function setServerURI($serverURI = null)
    {
        // validation for constraint: string
        if (!is_null($serverURI) && !is_string($serverURI)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($serverURI, true), gettype($serverURI)), __LINE__);
        }
        if (is_null($serverURI) || (is_array($serverURI) && empty($serverURI))) {
            unset($this->ServerURI);
        } else {
            $this->ServerURI = $serverURI;
        }
        return $this;
    }
    /**
     * Get StatusTime value
     * @return string|null
     */
    public function getStatusTime()
    {
        return $this->StatusTime;
    }
    /**
     * Set StatusTime value
     * @param string $statusTime
     * @return \StructType\ServerStatus
     */
    public function setStatusTime($statusTime = null)
    {
        // validation for constraint: string
        if (!is_null($statusTime) && !is_string($statusTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusTime, true), gettype($statusTime)), __LINE__);
        }
        $this->StatusTime = $statusTime;
        return $this;
    }
    /**
     * Get Unlimited value
     * @return bool|null
     */
    public function getUnlimited()
    {
        return $this->Unlimited;
    }
    /**
     * Set Unlimited value
     * @param bool $unlimited
     * @return \StructType\ServerStatus
     */
    public function setUnlimited($unlimited = null)
    {
        // validation for constraint: boolean
        if (!is_null($unlimited) && !is_bool($unlimited)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($unlimited, true), gettype($unlimited)), __LINE__);
        }
        $this->Unlimited = $unlimited;
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
     * @return \StructType\ServerStatus
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
}
