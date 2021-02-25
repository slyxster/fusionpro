<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Report ServiceType
 * @subpackage Services
 */
class Report extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ReportBackToScheduler
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ReportBackToScheduler $parameters
     * @return \StructType\ReportBackToSchedulerResponse|bool
     */
    public function ReportBackToScheduler(\StructType\ReportBackToScheduler $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ReportBackToScheduler($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ReportBackToSchedulerResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
