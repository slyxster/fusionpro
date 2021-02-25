<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateFileURLResponse StructType
 * @subpackage Structs
 */
class GetTemplateFileURLResponse extends AbstractStructBase
{
    /**
     * The GetTemplateFileURLResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateResponse
     */
    public $GetTemplateFileURLResult;
    /**
     * Constructor method for GetTemplateFileURLResponse
     * @uses GetTemplateFileURLResponse::setGetTemplateFileURLResult()
     * @param \StructType\TemplateResponse $getTemplateFileURLResult
     */
    public function __construct(\StructType\TemplateResponse $getTemplateFileURLResult = null)
    {
        $this
            ->setGetTemplateFileURLResult($getTemplateFileURLResult);
    }
    /**
     * Get GetTemplateFileURLResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateResponse|null
     */
    public function getGetTemplateFileURLResult()
    {
        return isset($this->GetTemplateFileURLResult) ? $this->GetTemplateFileURLResult : null;
    }
    /**
     * Set GetTemplateFileURLResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateResponse $getTemplateFileURLResult
     * @return \StructType\GetTemplateFileURLResponse
     */
    public function setGetTemplateFileURLResult(\StructType\TemplateResponse $getTemplateFileURLResult = null)
    {
        if (is_null($getTemplateFileURLResult) || (is_array($getTemplateFileURLResult) && empty($getTemplateFileURLResult))) {
            unset($this->GetTemplateFileURLResult);
        } else {
            $this->GetTemplateFileURLResult = $getTemplateFileURLResult;
        }
        return $this;
    }
}
