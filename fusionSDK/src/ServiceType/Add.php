<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AddTemplateFromFile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddTemplateFromFile $parameters
     * @return \StructType\AddTemplateFromFileResponse|bool
     */
    public function AddTemplateFromFile(\StructType\AddTemplateFromFile $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AddTemplateFromFile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddTemplateFromBytes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddTemplateFromBytes $parameters
     * @return \StructType\AddTemplateFromBytesResponse|bool
     */
    public function AddTemplateFromBytes(\StructType\AddTemplateFromBytes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AddTemplateFromBytes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddCompositionFile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddCompositionFile $parameters
     * @return \StructType\AddCompositionFileResponse|bool
     */
    public function AddCompositionFile(\StructType\AddCompositionFile $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AddCompositionFile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddCompositionResource
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddCompositionResource $parameters
     * @return \StructType\AddCompositionResourceResponse|bool
     */
    public function AddCompositionResource(\StructType\AddCompositionResource $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AddCompositionResource($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddEmailConfiguration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddEmailConfiguration $parameters
     * @return \StructType\AddEmailConfigurationResponse|bool
     */
    public function AddEmailConfiguration(\StructType\AddEmailConfiguration $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AddEmailConfiguration($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddWatch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddWatch $parameters
     * @return \StructType\AddWatchResponse|bool
     */
    public function AddWatch(\StructType\AddWatch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AddWatch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddWatchCondition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddWatchCondition $parameters
     * @return \StructType\AddWatchConditionResponse|bool
     */
    public function AddWatchCondition(\StructType\AddWatchCondition $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AddWatchCondition($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddWatchTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddWatchTask $parameters
     * @return \StructType\AddWatchTaskResponse|bool
     */
    public function AddWatchTask(\StructType\AddWatchTask $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->AddWatchTask($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\AddCompositionFileResponse|\StructType\AddCompositionResourceResponse|\StructType\AddEmailConfigurationResponse|\StructType\AddTemplateFromBytesResponse|\StructType\AddTemplateFromFileResponse|\StructType\AddWatchConditionResponse|\StructType\AddWatchResponse|\StructType\AddWatchTaskResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
