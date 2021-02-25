<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateFieldsResponse StructType
 * @subpackage Structs
 */
class GetTemplateFieldsResponse extends AbstractStructBase
{
    /**
     * The GetTemplateFieldsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateFieldResponse
     */
    public $GetTemplateFieldsResult;
    /**
     * Constructor method for GetTemplateFieldsResponse
     * @uses GetTemplateFieldsResponse::setGetTemplateFieldsResult()
     * @param \StructType\TemplateFieldResponse $getTemplateFieldsResult
     */
    public function __construct(\StructType\TemplateFieldResponse $getTemplateFieldsResult = null)
    {
        $this
            ->setGetTemplateFieldsResult($getTemplateFieldsResult);
    }
    /**
     * Get GetTemplateFieldsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateFieldResponse|null
     */
    public function getGetTemplateFieldsResult()
    {
        return isset($this->GetTemplateFieldsResult) ? $this->GetTemplateFieldsResult : null;
    }
    /**
     * Set GetTemplateFieldsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateFieldResponse $getTemplateFieldsResult
     * @return \StructType\GetTemplateFieldsResponse
     */
    public function setGetTemplateFieldsResult(\StructType\TemplateFieldResponse $getTemplateFieldsResult = null)
    {
        if (is_null($getTemplateFieldsResult) || (is_array($getTemplateFieldsResult) && empty($getTemplateFieldsResult))) {
            unset($this->GetTemplateFieldsResult);
        } else {
            $this->GetTemplateFieldsResult = $getTemplateFieldsResult;
        }
        return $this;
    }
}
