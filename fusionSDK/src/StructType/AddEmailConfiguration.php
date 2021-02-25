<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEmailConfiguration StructType
 * @subpackage Structs
 */
class AddEmailConfiguration extends AbstractStructBase
{
    /**
     * The req
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AddEmailConfigurationRequest
     */
    public $req;
    /**
     * Constructor method for AddEmailConfiguration
     * @uses AddEmailConfiguration::setReq()
     * @param \StructType\AddEmailConfigurationRequest $req
     */
    public function __construct(\StructType\AddEmailConfigurationRequest $req = null)
    {
        $this
            ->setReq($req);
    }
    /**
     * Get req value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AddEmailConfigurationRequest|null
     */
    public function getReq()
    {
        return isset($this->req) ? $this->req : null;
    }
    /**
     * Set req value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AddEmailConfigurationRequest $req
     * @return \StructType\AddEmailConfiguration
     */
    public function setReq(\StructType\AddEmailConfigurationRequest $req = null)
    {
        if (is_null($req) || (is_array($req) && empty($req))) {
            unset($this->req);
        } else {
            $this->req = $req;
        }
        return $this;
    }
}
