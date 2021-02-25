<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailConfiguration StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmailConfiguration
 * @subpackage Structs
 */
class EmailConfiguration extends AbstractStructBase
{
    /**
     * The EmailAddress
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $EmailAddress;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Password;
    /**
     * The SMTPPort
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $SMTPPort;
    /**
     * The SMTPServer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $SMTPServer;
    /**
     * The UseSSL
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $UseSSL;
    /**
     * The UseTLS
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $UseTLS;
    /**
     * The UserName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $UserName;
    /**
     * Constructor method for EmailConfiguration
     * @uses EmailConfiguration::setEmailAddress()
     * @uses EmailConfiguration::setPassword()
     * @uses EmailConfiguration::setSMTPPort()
     * @uses EmailConfiguration::setSMTPServer()
     * @uses EmailConfiguration::setUseSSL()
     * @uses EmailConfiguration::setUseTLS()
     * @uses EmailConfiguration::setUserName()
     * @param string $emailAddress
     * @param string $password
     * @param int $sMTPPort
     * @param string $sMTPServer
     * @param bool $useSSL
     * @param bool $useTLS
     * @param string $userName
     */
    public function __construct($emailAddress = null, $password = null, $sMTPPort = null, $sMTPServer = null, $useSSL = null, $useTLS = null, $userName = null)
    {
        $this
            ->setEmailAddress($emailAddress)
            ->setPassword($password)
            ->setSMTPPort($sMTPPort)
            ->setSMTPServer($sMTPServer)
            ->setUseSSL($useSSL)
            ->setUseTLS($useTLS)
            ->setUserName($userName);
    }
    /**
     * Get EmailAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmailAddress()
    {
        return isset($this->EmailAddress) ? $this->EmailAddress : null;
    }
    /**
     * Set EmailAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $emailAddress
     * @return \StructType\EmailConfiguration
     */
    public function setEmailAddress($emailAddress = null)
    {
        // validation for constraint: string
        if (!is_null($emailAddress) && !is_string($emailAddress)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailAddress, true), gettype($emailAddress)), __LINE__);
        }
        if (is_null($emailAddress) || (is_array($emailAddress) && empty($emailAddress))) {
            unset($this->EmailAddress);
        } else {
            $this->EmailAddress = $emailAddress;
        }
        return $this;
    }
    /**
     * Get Password value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPassword()
    {
        return isset($this->Password) ? $this->Password : null;
    }
    /**
     * Set Password value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $password
     * @return \StructType\EmailConfiguration
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        if (is_null($password) || (is_array($password) && empty($password))) {
            unset($this->Password);
        } else {
            $this->Password = $password;
        }
        return $this;
    }
    /**
     * Get SMTPPort value
     * @return int|null
     */
    public function getSMTPPort()
    {
        return $this->SMTPPort;
    }
    /**
     * Set SMTPPort value
     * @param int $sMTPPort
     * @return \StructType\EmailConfiguration
     */
    public function setSMTPPort($sMTPPort = null)
    {
        // validation for constraint: int
        if (!is_null($sMTPPort) && !(is_int($sMTPPort) || ctype_digit($sMTPPort))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sMTPPort, true), gettype($sMTPPort)), __LINE__);
        }
        $this->SMTPPort = $sMTPPort;
        return $this;
    }
    /**
     * Get SMTPServer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSMTPServer()
    {
        return isset($this->SMTPServer) ? $this->SMTPServer : null;
    }
    /**
     * Set SMTPServer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $sMTPServer
     * @return \StructType\EmailConfiguration
     */
    public function setSMTPServer($sMTPServer = null)
    {
        // validation for constraint: string
        if (!is_null($sMTPServer) && !is_string($sMTPServer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sMTPServer, true), gettype($sMTPServer)), __LINE__);
        }
        if (is_null($sMTPServer) || (is_array($sMTPServer) && empty($sMTPServer))) {
            unset($this->SMTPServer);
        } else {
            $this->SMTPServer = $sMTPServer;
        }
        return $this;
    }
    /**
     * Get UseSSL value
     * @return bool|null
     */
    public function getUseSSL()
    {
        return $this->UseSSL;
    }
    /**
     * Set UseSSL value
     * @param bool $useSSL
     * @return \StructType\EmailConfiguration
     */
    public function setUseSSL($useSSL = null)
    {
        // validation for constraint: boolean
        if (!is_null($useSSL) && !is_bool($useSSL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useSSL, true), gettype($useSSL)), __LINE__);
        }
        $this->UseSSL = $useSSL;
        return $this;
    }
    /**
     * Get UseTLS value
     * @return bool|null
     */
    public function getUseTLS()
    {
        return $this->UseTLS;
    }
    /**
     * Set UseTLS value
     * @param bool $useTLS
     * @return \StructType\EmailConfiguration
     */
    public function setUseTLS($useTLS = null)
    {
        // validation for constraint: boolean
        if (!is_null($useTLS) && !is_bool($useTLS)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useTLS, true), gettype($useTLS)), __LINE__);
        }
        $this->UseTLS = $useTLS;
        return $this;
    }
    /**
     * Get UserName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getUserName()
    {
        return isset($this->UserName) ? $this->UserName : null;
    }
    /**
     * Set UserName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $userName
     * @return \StructType\EmailConfiguration
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        if (is_null($userName) || (is_array($userName) && empty($userName))) {
            unset($this->UserName);
        } else {
            $this->UserName = $userName;
        }
        return $this;
    }
}
