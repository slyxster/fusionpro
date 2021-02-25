<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Duplicate ServiceType
 * @subpackage Services
 */
class Duplicate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named DuplicateTemplate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DuplicateTemplate $parameters
     * @return \StructType\DuplicateTemplateResponse|bool
     */
    public function DuplicateTemplate(\StructType\DuplicateTemplate $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DuplicateTemplate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\DuplicateTemplateResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
