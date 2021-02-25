<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddEmailConfigurationResponse StructType
 * @subpackage Structs
 */
class AddEmailConfigurationResponse extends AbstractStructBase
{
    /**
     * The AddEmailConfigurationResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmailResponse
     */
    public $AddEmailConfigurationResult;
    /**
     * Constructor method for AddEmailConfigurationResponse
     * @uses AddEmailConfigurationResponse::setAddEmailConfigurationResult()
     * @param \StructType\EmailResponse $addEmailConfigurationResult
     */
    public function __construct(\StructType\EmailResponse $addEmailConfigurationResult = null)
    {
        $this
            ->setAddEmailConfigurationResult($addEmailConfigurationResult);
    }
    /**
     * Get AddEmailConfigurationResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmailResponse|null
     */
    public function getAddEmailConfigurationResult()
    {
        return isset($this->AddEmailConfigurationResult) ? $this->AddEmailConfigurationResult : null;
    }
    /**
     * Set AddEmailConfigurationResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\EmailResponse $addEmailConfigurationResult
     * @return \StructType\AddEmailConfigurationResponse
     */
    public function setAddEmailConfigurationResult(\StructType\EmailResponse $addEmailConfigurationResult = null)
    {
        if (is_null($addEmailConfigurationResult) || (is_array($addEmailConfigurationResult) && empty($addEmailConfigurationResult))) {
            unset($this->AddEmailConfigurationResult);
        } else {
            $this->AddEmailConfigurationResult = $addEmailConfigurationResult;
        }
        return $this;
    }
}
