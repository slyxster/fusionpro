<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named DeleteTemplate
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteTemplate $parameters
     * @return \StructType\DeleteTemplateResponse|bool
     */
    public function DeleteTemplate(\StructType\DeleteTemplate $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteTemplate($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteGroup
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteGroup $parameters
     * @return \StructType\DeleteGroupResponse|bool
     */
    public function DeleteGroup(\StructType\DeleteGroup $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteGroup($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteCompositionFile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteCompositionFile $parameters
     * @return \StructType\DeleteCompositionFileResponse|bool
     */
    public function DeleteCompositionFile(\StructType\DeleteCompositionFile $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteCompositionFile($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteCompositionSession
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteCompositionSession $parameters
     * @return \StructType\DeleteCompositionSessionResponse|bool
     */
    public function DeleteCompositionSession(\StructType\DeleteCompositionSession $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteCompositionSession($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteThisComposition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteThisComposition $parameters
     * @return \StructType\DeleteThisCompositionResponse|bool
     */
    public function DeleteThisComposition(\StructType\DeleteThisComposition $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteThisComposition($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteWatch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteWatch $parameters
     * @return \StructType\DeleteWatchResponse|bool
     */
    public function DeleteWatch(\StructType\DeleteWatch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteWatch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteWatchCondition
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteWatchCondition $parameters
     * @return \StructType\DeleteWatchConditionResponse|bool
     */
    public function DeleteWatchCondition(\StructType\DeleteWatchCondition $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteWatchCondition($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named DeleteWatchTask
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\DeleteWatchTask $parameters
     * @return \StructType\DeleteWatchTaskResponse|bool
     */
    public function DeleteWatchTask(\StructType\DeleteWatchTask $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->DeleteWatchTask($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\DeleteCompositionFileResponse|\StructType\DeleteCompositionSessionResponse|\StructType\DeleteGroupResponse|\StructType\DeleteTemplateResponse|\StructType\DeleteThisCompositionResponse|\StructType\DeleteWatchConditionResponse|\StructType\DeleteWatchResponse|\StructType\DeleteWatchTaskResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
