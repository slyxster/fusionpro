<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for List ServiceType
 * @subpackage Services
 */
class _List extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ListGroups
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ListGroups $parameters
     * @return \StructType\ListGroupsResponse|bool
     */
    public function ListGroups(\StructType\ListGroups $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ListGroups($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ListTemplates
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ListTemplates $parameters
     * @return \StructType\ListTemplatesResponse|bool
     */
    public function ListTemplates(\StructType\ListTemplates $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ListTemplates($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ListCompositionSessions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ListCompositionSessions $parameters
     * @return \StructType\ListCompositionSessionsResponse|bool
     */
    public function ListCompositionSessions(\StructType\ListCompositionSessions $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->ListCompositionSessions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ListCompositionSessionsResponse|\StructType\ListGroupsResponse|\StructType\ListTemplatesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
