<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmailConfigurationResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetEmailConfigurationResponse
 * @subpackage Structs
 */
class GetEmailConfigurationResponse extends AbstractStructBase
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
     * The GetEmailConfigurationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GetEmailConfigurationResponse
     */
    public $GetEmailConfigurationResult;
    /**
     * Constructor method for GetEmailConfigurationResponse
     * @uses GetEmailConfigurationResponse::setConfig()
     * @uses GetEmailConfigurationResponse::setGetEmailConfigurationResult()
     * @param \StructType\EmailConfiguration $config
     * @param \StructType\GetEmailConfigurationResponse $getEmailConfigurationResult
     */
    public function __construct(\StructType\EmailConfiguration $config = null, \StructType\GetEmailConfigurationResponse $getEmailConfigurationResult = null)
    {
        $this
            ->setConfig($config)
            ->setGetEmailConfigurationResult($getEmailConfigurationResult);
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
     * @return \StructType\GetEmailConfigurationResponse
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
     * Get GetEmailConfigurationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GetEmailConfigurationResponse|null
     */
    public function getGetEmailConfigurationResult()
    {
        return isset($this->GetEmailConfigurationResult) ? $this->GetEmailConfigurationResult : null;
    }
    /**
     * Set GetEmailConfigurationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\GetEmailConfigurationResponse $getEmailConfigurationResult
     * @return \StructType\GetEmailConfigurationResponse
     */
    public function setGetEmailConfigurationResult(\StructType\GetEmailConfigurationResponse $getEmailConfigurationResult = null)
    {
        if (is_null($getEmailConfigurationResult) || (is_array($getEmailConfigurationResult) && empty($getEmailConfigurationResult))) {
            unset($this->GetEmailConfigurationResult);
        } else {
            $this->GetEmailConfigurationResult = $getEmailConfigurationResult;
        }
        return $this;
    }
}
