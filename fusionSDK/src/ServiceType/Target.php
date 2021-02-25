<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Target ServiceType
 * @subpackage Services
 */
class Target extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named TargetCheck
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\TargetCheck $parameters
     * @return \StructType\TargetCheckResponse|bool
     */
    public function TargetCheck(\StructType\TargetCheck $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->TargetCheck($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\TargetCheckResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
