<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Start ServiceType
 * @subpackage Services
 */
class Start extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named StartComposition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\StartComposition $parameters
     * @return \StructType\StartCompositionResponse|bool
     */
    public function StartComposition(\StructType\StartComposition $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->StartComposition($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named StartCompositionFromSession
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\StartCompositionFromSession $parameters
     * @return \StructType\StartCompositionFromSessionResponse|bool
     */
    public function StartCompositionFromSession(\StructType\StartCompositionFromSession $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->StartCompositionFromSession($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\StartCompositionFromSessionResponse|\StructType\StartCompositionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
