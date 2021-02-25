<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Update ServiceType
 * @subpackage Services
 */
class Update extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named UpdateWatchCondition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateWatchCondition $parameters
     * @return \StructType\UpdateWatchConditionResponse|bool
     */
    public function UpdateWatchCondition(\StructType\UpdateWatchCondition $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateWatchCondition($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named UpdateWatchTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UpdateWatchTask $parameters
     * @return \StructType\UpdateWatchTaskResponse|bool
     */
    public function UpdateWatchTask(\StructType\UpdateWatchTask $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->UpdateWatchTask($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\UpdateWatchConditionResponse|\StructType\UpdateWatchTaskResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
