<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateRulesAndResourcesResponse StructType
 * @subpackage Structs
 */
class GetTemplateRulesAndResourcesResponse extends AbstractStructBase
{
    /**
     * The GetTemplateRulesAndResourcesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateFieldResponse
     */
    public $GetTemplateRulesAndResourcesResult;
    /**
     * Constructor method for GetTemplateRulesAndResourcesResponse
     * @uses GetTemplateRulesAndResourcesResponse::setGetTemplateRulesAndResourcesResult()
     * @param \StructType\TemplateFieldResponse $getTemplateRulesAndResourcesResult
     */
    public function __construct(\StructType\TemplateFieldResponse $getTemplateRulesAndResourcesResult = null)
    {
        $this
            ->setGetTemplateRulesAndResourcesResult($getTemplateRulesAndResourcesResult);
    }
    /**
     * Get GetTemplateRulesAndResourcesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateFieldResponse|null
     */
    public function getGetTemplateRulesAndResourcesResult()
    {
        return isset($this->GetTemplateRulesAndResourcesResult) ? $this->GetTemplateRulesAndResourcesResult : null;
    }
    /**
     * Set GetTemplateRulesAndResourcesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateFieldResponse $getTemplateRulesAndResourcesResult
     * @return \StructType\GetTemplateRulesAndResourcesResponse
     */
    public function setGetTemplateRulesAndResourcesResult(\StructType\TemplateFieldResponse $getTemplateRulesAndResourcesResult = null)
    {
        if (is_null($getTemplateRulesAndResourcesResult) || (is_array($getTemplateRulesAndResourcesResult) && empty($getTemplateRulesAndResourcesResult))) {
            unset($this->GetTemplateRulesAndResourcesResult);
        } else {
            $this->GetTemplateRulesAndResourcesResult = $getTemplateRulesAndResourcesResult;
        }
        return $this;
    }
}
