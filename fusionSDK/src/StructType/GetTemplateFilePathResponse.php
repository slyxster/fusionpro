<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateFilePathResponse StructType
 * @subpackage Structs
 */
class GetTemplateFilePathResponse extends AbstractStructBase
{
    /**
     * The GetTemplateFilePathResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateResponse
     */
    public $GetTemplateFilePathResult;
    /**
     * Constructor method for GetTemplateFilePathResponse
     * @uses GetTemplateFilePathResponse::setGetTemplateFilePathResult()
     * @param \StructType\TemplateResponse $getTemplateFilePathResult
     */
    public function __construct(\StructType\TemplateResponse $getTemplateFilePathResult = null)
    {
        $this
            ->setGetTemplateFilePathResult($getTemplateFilePathResult);
    }
    /**
     * Get GetTemplateFilePathResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateResponse|null
     */
    public function getGetTemplateFilePathResult()
    {
        return isset($this->GetTemplateFilePathResult) ? $this->GetTemplateFilePathResult : null;
    }
    /**
     * Set GetTemplateFilePathResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateResponse $getTemplateFilePathResult
     * @return \StructType\GetTemplateFilePathResponse
     */
    public function setGetTemplateFilePathResult(\StructType\TemplateResponse $getTemplateFilePathResult = null)
    {
        if (is_null($getTemplateFilePathResult) || (is_array($getTemplateFilePathResult) && empty($getTemplateFilePathResult))) {
            unset($this->GetTemplateFilePathResult);
        } else {
            $this->GetTemplateFilePathResult = $getTemplateFilePathResult;
        }
        return $this;
    }
}
