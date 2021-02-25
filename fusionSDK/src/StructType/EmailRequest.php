<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EmailRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmailRequest
 * @subpackage Structs
 */
class EmailRequest extends AbstractStructBase
{
    /**
     * The Config
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmailConfiguration
     */
    public $Config;
    /**
     * The EmailAddresses
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfKeyValue
     */
    public $EmailAddresses;
    /**
     * The IncludedConfig
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IncludedConfig;
    /**
     * The MessageBody
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MessageBody;
    /**
     * The MessageSubject
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $MessageSubject;
    /**
     * Constructor method for EmailRequest
     * @uses EmailRequest::setConfig()
     * @uses EmailRequest::setEmailAddresses()
     * @uses EmailRequest::setIncludedConfig()
     * @uses EmailRequest::setMessageBody()
     * @uses EmailRequest::setMessageSubject()
     * @param \StructType\EmailConfiguration $config
     * @param \ArrayType\ArrayOfKeyValue $emailAddresses
     * @param bool $includedConfig
     * @param string $messageBody
     * @param string $messageSubject
     */
    public function __construct(\StructType\EmailConfiguration $config = null, \ArrayType\ArrayOfKeyValue $emailAddresses = null, $includedConfig = null, $messageBody = null, $messageSubject = null)
    {
        $this
            ->setConfig($config)
            ->setEmailAddresses($emailAddresses)
            ->setIncludedConfig($includedConfig)
            ->setMessageBody($messageBody)
            ->setMessageSubject($messageSubject);
    }
    /**
     * Get Config value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmailConfiguration|null
     */
    public function getConfig()
    {
        return isset($this->Config) ? $this->Config : null;
    }
    /**
     * Set Config value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\EmailConfiguration $config
     * @return \StructType\EmailRequest
     */
    public function setConfig(\StructType\EmailConfiguration $config = null)
    {
        if (is_null($config) || (is_array($config) && empty($config))) {
            unset($this->Config);
        } else {
            $this->Config = $config;
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
     * @return \StructType\EmailRequest
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
     * Get IncludedConfig value
     * @return bool|null
     */
    public function getIncludedConfig()
    {
        return $this->IncludedConfig;
    }
    /**
     * Set IncludedConfig value
     * @param bool $includedConfig
     * @return \StructType\EmailRequest
     */
    public function setIncludedConfig($includedConfig = null)
    {
        // validation for constraint: boolean
        if (!is_null($includedConfig) && !is_bool($includedConfig)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includedConfig, true), gettype($includedConfig)), __LINE__);
        }
        $this->IncludedConfig = $includedConfig;
        return $this;
    }
    /**
     * Get MessageBody value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessageBody()
    {
        return isset($this->MessageBody) ? $this->MessageBody : null;
    }
    /**
     * Set MessageBody value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $messageBody
     * @return \StructType\EmailRequest
     */
    public function setMessageBody($messageBody = null)
    {
        // validation for constraint: string
        if (!is_null($messageBody) && !is_string($messageBody)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageBody, true), gettype($messageBody)), __LINE__);
        }
        if (is_null($messageBody) || (is_array($messageBody) && empty($messageBody))) {
            unset($this->MessageBody);
        } else {
            $this->MessageBody = $messageBody;
        }
        return $this;
    }
    /**
     * Get MessageSubject value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessageSubject()
    {
        return isset($this->MessageSubject) ? $this->MessageSubject : null;
    }
    /**
     * Set MessageSubject value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $messageSubject
     * @return \StructType\EmailRequest
     */
    public function setMessageSubject($messageSubject = null)
    {
        // validation for constraint: string
        if (!is_null($messageSubject) && !is_string($messageSubject)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageSubject, true), gettype($messageSubject)), __LINE__);
        }
        if (is_null($messageSubject) || (is_array($messageSubject) && empty($messageSubject))) {
            unset($this->MessageSubject);
        } else {
            $this->MessageSubject = $messageSubject;
        }
        return $this;
    }
}
