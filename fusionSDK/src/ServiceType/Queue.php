<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Queue ServiceType
 * @subpackage Services
 */
class Queue extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named QueueCompositionFromSession
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\QueueCompositionFromSession $parameters
     * @return \StructType\QueueCompositionFromSessionResponse|bool
     */
    public function QueueCompositionFromSession(\StructType\QueueCompositionFromSession $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->QueueCompositionFromSession($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\QueueCompositionFromSessionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
