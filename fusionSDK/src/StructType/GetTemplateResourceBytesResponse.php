<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateResourceBytesResponse StructType
 * @subpackage Structs
 */
class GetTemplateResourceBytesResponse extends AbstractStructBase
{
    /**
     * The GetTemplateResourceBytesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateResponse
     */
    public $GetTemplateResourceBytesResult;
    /**
     * Constructor method for GetTemplateResourceBytesResponse
     * @uses GetTemplateResourceBytesResponse::setGetTemplateResourceBytesResult()
     * @param \StructType\TemplateResponse $getTemplateResourceBytesResult
     */
    public function __construct(\StructType\TemplateResponse $getTemplateResourceBytesResult = null)
    {
        $this
            ->setGetTemplateResourceBytesResult($getTemplateResourceBytesResult);
    }
    /**
     * Get GetTemplateResourceBytesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateResponse|null
     */
    public function getGetTemplateResourceBytesResult()
    {
        return isset($this->GetTemplateResourceBytesResult) ? $this->GetTemplateResourceBytesResult : null;
    }
    /**
     * Set GetTemplateResourceBytesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateResponse $getTemplateResourceBytesResult
     * @return \StructType\GetTemplateResourceBytesResponse
     */
    public function setGetTemplateResourceBytesResult(\StructType\TemplateResponse $getTemplateResourceBytesResult = null)
    {
        if (is_null($getTemplateResourceBytesResult) || (is_array($getTemplateResourceBytesResult) && empty($getTemplateResourceBytesResult))) {
            unset($this->GetTemplateResourceBytesResult);
        } else {
            $this->GetTemplateResourceBytesResult = $getTemplateResourceBytesResult;
        }
        return $this;
    }
}
