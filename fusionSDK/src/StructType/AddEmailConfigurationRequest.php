<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEmailConfigurationRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AddEmailConfigurationRequest
 * @subpackage Structs
 */
class AddEmailConfigurationRequest extends AbstractStructBase
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
     * Constructor method for AddEmailConfigurationRequest
     * @uses AddEmailConfigurationRequest::setConfig()
     * @param \StructType\EmailConfiguration $config
     */
    public function __construct(\StructType\EmailConfiguration $config = null)
    {
        $this
            ->setConfig($config);
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
     * @return \StructType\AddEmailConfigurationRequest
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
}
