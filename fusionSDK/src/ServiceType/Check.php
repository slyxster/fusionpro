<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Check ServiceType
 * @subpackage Services
 */
class Check extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CheckCompositionStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CheckCompositionStatus $parameters
     * @return \StructType\CheckCompositionStatusResponse|bool
     */
    public function CheckCompositionStatus(\StructType\CheckCompositionStatus $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CheckCompositionStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named CheckThisCompositionStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\CheckThisCompositionStatus $parameters
     * @return \StructType\CheckThisCompositionStatusResponse|bool
     */
    public function CheckThisCompositionStatus(\StructType\CheckThisCompositionStatus $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->CheckThisCompositionStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\CheckCompositionStatusResponse|\StructType\CheckThisCompositionStatusResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
