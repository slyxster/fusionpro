<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Rename ServiceType
 * @subpackage Services
 */
class Rename extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named RenameTemplate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\RenameTemplate $parameters
     * @return \StructType\RenameTemplateResponse|bool
     */
    public function RenameTemplate(\StructType\RenameTemplate $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->RenameTemplate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\RenameTemplateResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
