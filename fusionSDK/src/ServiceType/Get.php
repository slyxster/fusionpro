<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetTemplateInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTemplateInfo $parameters
     * @return \StructType\GetTemplateInfoResponse|bool
     */
    public function GetTemplateInfo(\StructType\GetTemplateInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTemplateInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTemplatePagesAndRecords
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTemplatePagesAndRecords $parameters
     * @return \StructType\GetTemplatePagesAndRecordsResponse|bool
     */
    public function GetTemplatePagesAndRecords(\StructType\GetTemplatePagesAndRecords $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTemplatePagesAndRecords($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTemplateJobOptions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTemplateJobOptions $parameters
     * @return \StructType\GetTemplateJobOptionsResponse|bool
     */
    public function GetTemplateJobOptions(\StructType\GetTemplateJobOptions $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTemplateJobOptions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTemplates
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTemplates $parameters
     * @return \StructType\GetTemplatesResponse|bool
     */
    public function GetTemplates(\StructType\GetTemplates $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTemplates($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTemplateFileURL
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTemplateFileURL $parameters
     * @return \StructType\GetTemplateFileURLResponse|bool
     */
    public function GetTemplateFileURL(\StructType\GetTemplateFileURL $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTemplateFileURL($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTemplateFilePath
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTemplateFilePath $parameters
     * @return \StructType\GetTemplateFilePathResponse|bool
     */
    public function GetTemplateFilePath(\StructType\GetTemplateFilePath $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTemplateFilePath($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTemplateFileBytes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTemplateFileBytes $parameters
     * @return \StructType\GetTemplateFileBytesResponse|bool
     */
    public function GetTemplateFileBytes(\StructType\GetTemplateFileBytes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTemplateFileBytes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTemplateResourceURL
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTemplateResourceURL $parameters
     * @return \StructType\GetTemplateResourceURLResponse|bool
     */
    public function GetTemplateResourceURL(\StructType\GetTemplateResourceURL $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTemplateResourceURL($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTemplateResourceFilePath
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTemplateResourceFilePath $parameters
     * @return \StructType\GetTemplateResourceFilePathResponse|bool
     */
    public function GetTemplateResourceFilePath(\StructType\GetTemplateResourceFilePath $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTemplateResourceFilePath($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTemplateResourceBytes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTemplateResourceBytes $parameters
     * @return \StructType\GetTemplateResourceBytesResponse|bool
     */
    public function GetTemplateResourceBytes(\StructType\GetTemplateResourceBytes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTemplateResourceBytes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTemplateFormData
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTemplateFormData $parameters
     * @return \StructType\GetTemplateFormDataResponse|bool
     */
    public function GetTemplateFormData(\StructType\GetTemplateFormData $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTemplateFormData($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTemplateFieldNames
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTemplateFieldNames $parameters
     * @return \StructType\GetTemplateFieldNamesResponse|bool
     */
    public function GetTemplateFieldNames(\StructType\GetTemplateFieldNames $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTemplateFieldNames($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTemplateFields
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTemplateFields $parameters
     * @return \StructType\GetTemplateFieldsResponse|bool
     */
    public function GetTemplateFields(\StructType\GetTemplateFields $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTemplateFields($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTemplateRulesAndResources
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTemplateRulesAndResources $parameters
     * @return \StructType\GetTemplateRulesAndResourcesResponse|bool
     */
    public function GetTemplateRulesAndResources(\StructType\GetTemplateRulesAndResources $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTemplateRulesAndResources($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWebConfigureSettings
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWebConfigureSettings $parameters
     * @return \StructType\GetWebConfigureSettingsResponse|bool
     */
    public function GetWebConfigureSettings(\StructType\GetWebConfigureSettings $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetWebConfigureSettings($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCompositionFileURL
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCompositionFileURL $parameters
     * @return \StructType\GetCompositionFileURLResponse|bool
     */
    public function GetCompositionFileURL(\StructType\GetCompositionFileURL $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCompositionFileURL($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCompositionFilePath
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCompositionFilePath $parameters
     * @return \StructType\GetCompositionFilePathResponse|bool
     */
    public function GetCompositionFilePath(\StructType\GetCompositionFilePath $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCompositionFilePath($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCompositionFileBytes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCompositionFileBytes $parameters
     * @return \StructType\GetCompositionFileBytesResponse|bool
     */
    public function GetCompositionFileBytes(\StructType\GetCompositionFileBytes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCompositionFileBytes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCompositionResourceURL
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCompositionResourceURL $parameters
     * @return \StructType\GetCompositionResourceURLResponse|bool
     */
    public function GetCompositionResourceURL(\StructType\GetCompositionResourceURL $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCompositionResourceURL($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCompositionResourceFilePath
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCompositionResourceFilePath $parameters
     * @return \StructType\GetCompositionResourceFilePathResponse|bool
     */
    public function GetCompositionResourceFilePath(\StructType\GetCompositionResourceFilePath $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCompositionResourceFilePath($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCompositionResourceBytes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCompositionResourceBytes $parameters
     * @return \StructType\GetCompositionResourceBytesResponse|bool
     */
    public function GetCompositionResourceBytes(\StructType\GetCompositionResourceBytes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCompositionResourceBytes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPreviewJPEG_URL
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetPreviewJPEG_URL $parameters
     * @return \StructType\GetPreviewJPEG_URLResponse|bool
     */
    public function GetPreviewJPEG_URL(\StructType\GetPreviewJPEG_URL $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetPreviewJPEG_URL($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPreviewJPEG_Path
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetPreviewJPEG_Path $parameters
     * @return \StructType\GetPreviewJPEG_PathResponse|bool
     */
    public function GetPreviewJPEG_Path(\StructType\GetPreviewJPEG_Path $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetPreviewJPEG_Path($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetPreviewJPEG_Bytes
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetPreviewJPEG_Bytes $parameters
     * @return \StructType\GetPreviewJPEG_BytesResponse|bool
     */
    public function GetPreviewJPEG_Bytes(\StructType\GetPreviewJPEG_Bytes $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetPreviewJPEG_Bytes($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFusionProStatus
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFusionProStatus $parameters
     * @return \StructType\GetFusionProStatusResponse|bool
     */
    public function GetFusionProStatus(\StructType\GetFusionProStatus $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetFusionProStatus($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCompositionInfo
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCompositionInfo $parameters
     * @return \StructType\GetCompositionInfoResponse|bool
     */
    public function GetCompositionInfo(\StructType\GetCompositionInfo $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCompositionInfo($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCompositionSessions
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCompositionSessions $parameters
     * @return \StructType\GetCompositionSessionsResponse|bool
     */
    public function GetCompositionSessions(\StructType\GetCompositionSessions $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCompositionSessions($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTargetActivity
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTargetActivity $parameters
     * @return \StructType\GetTargetActivityResponse|bool
     */
    public function GetTargetActivity(\StructType\GetTargetActivity $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTargetActivity($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetEmailConfiguration
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetEmailConfiguration $parameters
     * @return \StructType\GetEmailConfigurationResponse|bool
     */
    public function GetEmailConfiguration(\StructType\GetEmailConfiguration $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetEmailConfiguration($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetApplicationSettings
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetApplicationSettings $parameters
     * @return \StructType\GetApplicationSettingsResponse|bool
     */
    public function GetApplicationSettings(\StructType\GetApplicationSettings $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetApplicationSettings($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWatches
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWatches $parameters
     * @return \StructType\GetWatchesResponse|bool
     */
    public function GetWatches(\StructType\GetWatches $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetWatches($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetWatch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetWatch $parameters
     * @return \StructType\GetWatchResponse|bool
     */
    public function GetWatch(\StructType\GetWatch $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->GetWatch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetApplicationSettingsResponse|\StructType\GetCompositionFileBytesResponse|\StructType\GetCompositionFilePathResponse|\StructType\GetCompositionFileURLResponse|\StructType\GetCompositionInfoResponse|\StructType\GetCompositionResourceBytesResponse|\StructType\GetCompositionResourceFilePathResponse|\StructType\GetCompositionResourceURLResponse|\StructType\GetCompositionSessionsResponse|\StructType\GetEmailConfigurationResponse|\StructType\GetFusionProStatusResponse|\StructType\GetPreviewJPEG_BytesResponse|\StructType\GetPreviewJPEG_PathResponse|\StructType\GetPreviewJPEG_URLResponse|\StructType\GetTargetActivityResponse|\StructType\GetTemplateFieldNamesResponse|\StructType\GetTemplateFieldsResponse|\StructType\GetTemplateFileBytesResponse|\StructType\GetTemplateFilePathResponse|\StructType\GetTemplateFileURLResponse|\StructType\GetTemplateFormDataResponse|\StructType\GetTemplateInfoResponse|\StructType\GetTemplateJobOptionsResponse|\StructType\GetTemplatePagesAndRecordsResponse|\StructType\GetTemplateResourceBytesResponse|\StructType\GetTemplateResourceFilePathResponse|\StructType\GetTemplateResourceURLResponse|\StructType\GetTemplateRulesAndResourcesResponse|\StructType\GetTemplatesResponse|\StructType\GetWatchesResponse|\StructType\GetWatchResponse|\StructType\GetWebConfigureSettingsResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
