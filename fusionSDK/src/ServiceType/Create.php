<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Create ServiceType
 * @subpackage Services
 */
class Create extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CreateCompositionSession
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateCompositionSession $parameters
     * @return \StructType\CreateCompositionSessionResponse|bool
     */
    public function CreateCompositionSession(\StructType\CreateCompositionSession $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateCompositionSession($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CreateOnDemandCompositionSession
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CreateOnDemandCompositionSession $parameters
     * @return \StructType\CreateOnDemandCompositionSessionResponse|bool
     */
    public function CreateOnDemandCompositionSession(\StructType\CreateOnDemandCompositionSession $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CreateOnDemandCompositionSession($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\CreateCompositionSessionResponse|\StructType\CreateOnDemandCompositionSessionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
