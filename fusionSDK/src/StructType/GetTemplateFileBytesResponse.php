<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateFileBytesResponse StructType
 * @subpackage Structs
 */
class GetTemplateFileBytesResponse extends AbstractStructBase
{
    /**
     * The GetTemplateFileBytesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateResponse
     */
    public $GetTemplateFileBytesResult;
    /**
     * Constructor method for GetTemplateFileBytesResponse
     * @uses GetTemplateFileBytesResponse::setGetTemplateFileBytesResult()
     * @param \StructType\TemplateResponse $getTemplateFileBytesResult
     */
    public function __construct(\StructType\TemplateResponse $getTemplateFileBytesResult = null)
    {
        $this
            ->setGetTemplateFileBytesResult($getTemplateFileBytesResult);
    }
    /**
     * Get GetTemplateFileBytesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateResponse|null
     */
    public function getGetTemplateFileBytesResult()
    {
        return isset($this->GetTemplateFileBytesResult) ? $this->GetTemplateFileBytesResult : null;
    }
    /**
     * Set GetTemplateFileBytesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateResponse $getTemplateFileBytesResult
     * @return \StructType\GetTemplateFileBytesResponse
     */
    public function setGetTemplateFileBytesResult(\StructType\TemplateResponse $getTemplateFileBytesResult = null)
    {
        if (is_null($getTemplateFileBytesResult) || (is_array($getTemplateFileBytesResult) && empty($getTemplateFileBytesResult))) {
            unset($this->GetTemplateFileBytesResult);
        } else {
            $this->GetTemplateFileBytesResult = $getTemplateFileBytesResult;
        }
        return $this;
    }
}
