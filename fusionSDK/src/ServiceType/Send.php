<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Send ServiceType
 * @subpackage Services
 */
class Send extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SendEmail
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SendEmail $parameters
     * @return \StructType\SendEmailResponse|bool
     */
    public function SendEmail(\StructType\SendEmail $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->SendEmail($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\SendEmailResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
