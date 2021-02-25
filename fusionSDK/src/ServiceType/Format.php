<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Format ServiceType
 * @subpackage Services
 */
class Format extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named Format_GetAllGraphicFrameNames
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_GetAllGraphicFrameNames $parameters
     * @return \StructType\Format_GetAllGraphicFrameNamesResponse|bool
     */
    public function Format_GetAllGraphicFrameNames(\StructType\Format_GetAllGraphicFrameNames $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_GetAllGraphicFrameNames($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_AddGraphicFrame
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_AddGraphicFrame $parameters
     * @return \StructType\Format_AddGraphicFrameResponse|bool
     */
    public function Format_AddGraphicFrame(\StructType\Format_AddGraphicFrame $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_AddGraphicFrame($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_GetFontArray
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ArrayType\Format_GetFontArray $parameters
     * @return \StructType\Format_GetFontArrayResponse|bool
     */
    public function Format_GetFontArray(\ArrayType\Format_GetFontArray $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_GetFontArray($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_GetGraphicFrame
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_GetGraphicFrame $parameters
     * @return \StructType\Format_GetGraphicFrameResponse|bool
     */
    public function Format_GetGraphicFrame(\StructType\Format_GetGraphicFrame $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_GetGraphicFrame($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_UpdateGraphicFrame
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_UpdateGraphicFrame $parameters
     * @return \StructType\Format_UpdateGraphicFrameResponse|bool
     */
    public function Format_UpdateGraphicFrame(\StructType\Format_UpdateGraphicFrame $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_UpdateGraphicFrame($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_DeleteGraphicFrame
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_DeleteGraphicFrame $parameters
     * @return \StructType\Format_DeleteGraphicFrameResponse|bool
     */
    public function Format_DeleteGraphicFrame(\StructType\Format_DeleteGraphicFrame $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_DeleteGraphicFrame($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_GetNumberOfBodyPages
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_GetNumberOfBodyPages $parameters
     * @return \StructType\Format_GetNumberOfBodyPagesResponse|bool
     */
    public function Format_GetNumberOfBodyPages(\StructType\Format_GetNumberOfBodyPages $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_GetNumberOfBodyPages($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_GetTextFramesOnPage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_GetTextFramesOnPage $parameters
     * @return \StructType\Format_GetTextFramesOnPageResponse|bool
     */
    public function Format_GetTextFramesOnPage(\StructType\Format_GetTextFramesOnPage $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_GetTextFramesOnPage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_GetAllTextFrames
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_GetAllTextFrames $parameters
     * @return \StructType\Format_GetAllTextFramesResponse|bool
     */
    public function Format_GetAllTextFrames(\StructType\Format_GetAllTextFrames $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_GetAllTextFrames($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_GetTextFrameNamesOnPage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_GetTextFrameNamesOnPage $parameters
     * @return \StructType\Format_GetTextFrameNamesOnPageResponse|bool
     */
    public function Format_GetTextFrameNamesOnPage(\StructType\Format_GetTextFrameNamesOnPage $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_GetTextFrameNamesOnPage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_GetAllTextFrameNames
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_GetAllTextFrameNames $parameters
     * @return \StructType\Format_GetAllTextFrameNamesResponse|bool
     */
    public function Format_GetAllTextFrameNames(\StructType\Format_GetAllTextFrameNames $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_GetAllTextFrameNames($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_AddTextFrame
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_AddTextFrame $parameters
     * @return \StructType\Format_AddTextFrameResponse|bool
     */
    public function Format_AddTextFrame(\StructType\Format_AddTextFrame $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_AddTextFrame($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_GetTextFrame
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_GetTextFrame $parameters
     * @return \StructType\Format_GetTextFrameResponse|bool
     */
    public function Format_GetTextFrame(\StructType\Format_GetTextFrame $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_GetTextFrame($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_UpdateTextFrame
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_UpdateTextFrame $parameters
     * @return \StructType\Format_UpdateTextFrameResponse|bool
     */
    public function Format_UpdateTextFrame(\StructType\Format_UpdateTextFrame $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_UpdateTextFrame($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_UpdateTextFrames
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_UpdateTextFrames $parameters
     * @return \StructType\Format_UpdateTextFramesResponse|bool
     */
    public function Format_UpdateTextFrames(\StructType\Format_UpdateTextFrames $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_UpdateTextFrames($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_DeleteTextFrame
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_DeleteTextFrame $parameters
     * @return \StructType\Format_DeleteTextFrameResponse|bool
     */
    public function Format_DeleteTextFrame(\StructType\Format_DeleteTextFrame $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_DeleteTextFrame($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_GetGraphicFramesOnPage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_GetGraphicFramesOnPage $parameters
     * @return \StructType\Format_GetGraphicFramesOnPageResponse|bool
     */
    public function Format_GetGraphicFramesOnPage(\StructType\Format_GetGraphicFramesOnPage $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_GetGraphicFramesOnPage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_GetAllGraphicFrames
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_GetAllGraphicFrames $parameters
     * @return \StructType\Format_GetAllGraphicFramesResponse|bool
     */
    public function Format_GetAllGraphicFrames(\StructType\Format_GetAllGraphicFrames $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_GetAllGraphicFrames($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named Format_GetGraphicFrameNamesOnPage
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\Format_GetGraphicFrameNamesOnPage $parameters
     * @return \StructType\Format_GetGraphicFrameNamesOnPageResponse|bool
     */
    public function Format_GetGraphicFrameNamesOnPage(\StructType\Format_GetGraphicFrameNamesOnPage $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Format_GetGraphicFrameNamesOnPage($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\Format_AddGraphicFrameResponse|\StructType\Format_AddTextFrameResponse|\StructType\Format_DeleteGraphicFrameResponse|\StructType\Format_DeleteTextFrameResponse|\StructType\Format_GetAllGraphicFrameNamesResponse|\StructType\Format_GetAllGraphicFramesResponse|\StructType\Format_GetAllTextFrameNamesResponse|\StructType\Format_GetAllTextFramesResponse|\StructType\Format_GetFontArrayResponse|\StructType\Format_GetGraphicFrameNamesOnPageResponse|\StructType\Format_GetGraphicFrameResponse|\StructType\Format_GetGraphicFramesOnPageResponse|\StructType\Format_GetNumberOfBodyPagesResponse|\StructType\Format_GetTextFrameNamesOnPageResponse|\StructType\Format_GetTextFrameResponse|\StructType\Format_GetTextFramesOnPageResponse|\StructType\Format_UpdateGraphicFrameResponse|\StructType\Format_UpdateTextFrameResponse|\StructType\Format_UpdateTextFramesResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
