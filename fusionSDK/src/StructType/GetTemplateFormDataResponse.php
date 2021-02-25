<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateFormDataResponse StructType
 * @subpackage Structs
 */
class GetTemplateFormDataResponse extends AbstractStructBase
{
    /**
     * The GetTemplateFormDataResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateResponse
     */
    public $GetTemplateFormDataResult;
    /**
     * Constructor method for GetTemplateFormDataResponse
     * @uses GetTemplateFormDataResponse::setGetTemplateFormDataResult()
     * @param \StructType\TemplateResponse $getTemplateFormDataResult
     */
    public function __construct(\StructType\TemplateResponse $getTemplateFormDataResult = null)
    {
        $this
            ->setGetTemplateFormDataResult($getTemplateFormDataResult);
    }
    /**
     * Get GetTemplateFormDataResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateResponse|null
     */
    public function getGetTemplateFormDataResult()
    {
        return isset($this->GetTemplateFormDataResult) ? $this->GetTemplateFormDataResult : null;
    }
    /**
     * Set GetTemplateFormDataResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateResponse $getTemplateFormDataResult
     * @return \StructType\GetTemplateFormDataResponse
     */
    public function setGetTemplateFormDataResult(\StructType\TemplateResponse $getTemplateFormDataResult = null)
    {
        if (is_null($getTemplateFormDataResult) || (is_array($getTemplateFormDataResult) && empty($getTemplateFormDataResult))) {
            unset($this->GetTemplateFormDataResult);
        } else {
            $this->GetTemplateFormDataResult = $getTemplateFormDataResult;
        }
        return $this;
    }
}
