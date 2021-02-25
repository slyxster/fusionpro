<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for End ServiceType
 * @subpackage Services
 */
class End extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named EndCompositionSession
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\EndCompositionSession $parameters
     * @return \StructType\EndCompositionSessionResponse|bool
     */
    public function EndCompositionSession(\StructType\EndCompositionSession $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->EndCompositionSession($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\EndCompositionSessionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
