<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWebConfigureSettingsResponse StructType
 * @subpackage Structs
 */
class GetWebConfigureSettingsResponse extends AbstractStructBase
{
    /**
     * The GetWebConfigureSettingsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateResponse
     */
    public $GetWebConfigureSettingsResult;
    /**
     * Constructor method for GetWebConfigureSettingsResponse
     * @uses GetWebConfigureSettingsResponse::setGetWebConfigureSettingsResult()
     * @param \StructType\TemplateResponse $getWebConfigureSettingsResult
     */
    public function __construct(\StructType\TemplateResponse $getWebConfigureSettingsResult = null)
    {
        $this
            ->setGetWebConfigureSettingsResult($getWebConfigureSettingsResult);
    }
    /**
     * Get GetWebConfigureSettingsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateResponse|null
     */
    public function getGetWebConfigureSettingsResult()
    {
        return isset($this->GetWebConfigureSettingsResult) ? $this->GetWebConfigureSettingsResult : null;
    }
    /**
     * Set GetWebConfigureSettingsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateResponse $getWebConfigureSettingsResult
     * @return \StructType\GetWebConfigureSettingsResponse
     */
    public function setGetWebConfigureSettingsResult(\StructType\TemplateResponse $getWebConfigureSettingsResult = null)
    {
        if (is_null($getWebConfigureSettingsResult) || (is_array($getWebConfigureSettingsResult) && empty($getWebConfigureSettingsResult))) {
            unset($this->GetWebConfigureSettingsResult);
        } else {
            $this->GetWebConfigureSettingsResult = $getWebConfigureSettingsResult;
        }
        return $this;
    }
}
