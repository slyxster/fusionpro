<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Edit ServiceType
 * @subpackage Services
 */
class Edit extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named EditWatch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\EditWatch $parameters
     * @return \StructType\EditWatchResponse|bool
     */
    public function EditWatch(\StructType\EditWatch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->EditWatch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\EditWatchResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
