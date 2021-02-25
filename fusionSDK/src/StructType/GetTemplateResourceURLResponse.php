<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateResourceURLResponse StructType
 * @subpackage Structs
 */
class GetTemplateResourceURLResponse extends AbstractStructBase
{
    /**
     * The GetTemplateResourceURLResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateResponse
     */
    public $GetTemplateResourceURLResult;
    /**
     * Constructor method for GetTemplateResourceURLResponse
     * @uses GetTemplateResourceURLResponse::setGetTemplateResourceURLResult()
     * @param \StructType\TemplateResponse $getTemplateResourceURLResult
     */
    public function __construct(\StructType\TemplateResponse $getTemplateResourceURLResult = null)
    {
        $this
            ->setGetTemplateResourceURLResult($getTemplateResourceURLResult);
    }
    /**
     * Get GetTemplateResourceURLResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateResponse|null
     */
    public function getGetTemplateResourceURLResult()
    {
        return isset($this->GetTemplateResourceURLResult) ? $this->GetTemplateResourceURLResult : null;
    }
    /**
     * Set GetTemplateResourceURLResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateResponse $getTemplateResourceURLResult
     * @return \StructType\GetTemplateResourceURLResponse
     */
    public function setGetTemplateResourceURLResult(\StructType\TemplateResponse $getTemplateResourceURLResult = null)
    {
        if (is_null($getTemplateResourceURLResult) || (is_array($getTemplateResourceURLResult) && empty($getTemplateResourceURLResult))) {
            unset($this->GetTemplateResourceURLResult);
        } else {
            $this->GetTemplateResourceURLResult = $getTemplateResourceURLResult;
        }
        return $this;
    }
}
