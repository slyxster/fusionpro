<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel ServiceType
 * @subpackage Services
 */
class Cancel extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CancelComposition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CancelComposition $parameters
     * @return \StructType\CancelCompositionResponse|bool
     */
    public function CancelComposition(\StructType\CancelComposition $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CancelComposition($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CancelThisComposition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CancelThisComposition $parameters
     * @return \StructType\CancelThisCompositionResponse|bool
     */
    public function CancelThisComposition(\StructType\CancelThisComposition $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CancelThisComposition($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\CancelCompositionResponse|\StructType\CancelThisCompositionResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
