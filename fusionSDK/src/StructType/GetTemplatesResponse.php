<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplatesResponse StructType
 * @subpackage Structs
 */
class GetTemplatesResponse extends AbstractStructBase
{
    /**
     * The GetTemplatesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateCollectionResponse
     */
    public $GetTemplatesResult;
    /**
     * Constructor method for GetTemplatesResponse
     * @uses GetTemplatesResponse::setGetTemplatesResult()
     * @param \StructType\TemplateCollectionResponse $getTemplatesResult
     */
    public function __construct(\StructType\TemplateCollectionResponse $getTemplatesResult = null)
    {
        $this
            ->setGetTemplatesResult($getTemplatesResult);
    }
    /**
     * Get GetTemplatesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateCollectionResponse|null
     */
    public function getGetTemplatesResult()
    {
        return isset($this->GetTemplatesResult) ? $this->GetTemplatesResult : null;
    }
    /**
     * Set GetTemplatesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateCollectionResponse $getTemplatesResult
     * @return \StructType\GetTemplatesResponse
     */
    public function setGetTemplatesResult(\StructType\TemplateCollectionResponse $getTemplatesResult = null)
    {
        if (is_null($getTemplatesResult) || (is_array($getTemplatesResult) && empty($getTemplatesResult))) {
            unset($this->GetTemplatesResult);
        } else {
            $this->GetTemplatesResult = $getTemplatesResult;
        }
        return $this;
    }
}
