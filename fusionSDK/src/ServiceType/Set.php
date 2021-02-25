<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType
 * @subpackage Services
 */
class Set extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SetWebConfigureSettings
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetWebConfigureSettings $parameters
     * @return \StructType\SetWebConfigureSettingsResponse|bool
     */
    public function SetWebConfigureSettings(\StructType\SetWebConfigureSettings $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SetWebConfigureSettings($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetApplicationSettings
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetApplicationSettings $parameters
     * @return \StructType\SetApplicationSettingsResponse|bool
     */
    public function SetApplicationSettings(\StructType\SetApplicationSettings $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SetApplicationSettings($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\SetApplicationSettingsResponse|\StructType\SetWebConfigureSettingsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
