<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Init ServiceType
 * @subpackage Services
 */
class Init extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named InitTargetStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\InitTargetStatus $parameters
     * @return \StructType\InitTargetStatusResponse|bool
     */
    public function InitTargetStatus(\StructType\InitTargetStatus $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->InitTargetStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\InitTargetStatusResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
