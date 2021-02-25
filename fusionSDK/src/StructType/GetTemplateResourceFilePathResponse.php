<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateResourceFilePathResponse StructType
 * @subpackage Structs
 */
class GetTemplateResourceFilePathResponse extends AbstractStructBase
{
    /**
     * The GetTemplateResourceFilePathResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateResponse
     */
    public $GetTemplateResourceFilePathResult;
    /**
     * Constructor method for GetTemplateResourceFilePathResponse
     * @uses GetTemplateResourceFilePathResponse::setGetTemplateResourceFilePathResult()
     * @param \StructType\TemplateResponse $getTemplateResourceFilePathResult
     */
    public function __construct(\StructType\TemplateResponse $getTemplateResourceFilePathResult = null)
    {
        $this
            ->setGetTemplateResourceFilePathResult($getTemplateResourceFilePathResult);
    }
    /**
     * Get GetTemplateResourceFilePathResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateResponse|null
     */
    public function getGetTemplateResourceFilePathResult()
    {
        return isset($this->GetTemplateResourceFilePathResult) ? $this->GetTemplateResourceFilePathResult : null;
    }
    /**
     * Set GetTemplateResourceFilePathResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateResponse $getTemplateResourceFilePathResult
     * @return \StructType\GetTemplateResourceFilePathResponse
     */
    public function setGetTemplateResourceFilePathResult(\StructType\TemplateResponse $getTemplateResourceFilePathResult = null)
    {
        if (is_null($getTemplateResourceFilePathResult) || (is_array($getTemplateResourceFilePathResult) && empty($getTemplateResourceFilePathResult))) {
            unset($this->GetTemplateResourceFilePathResult);
        } else {
            $this->GetTemplateResourceFilePathResult = $getTemplateResourceFilePathResult;
        }
        return $this;
    }
}
