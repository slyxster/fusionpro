<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateInfoResponse StructType
 * @subpackage Structs
 */
class GetTemplateInfoResponse extends AbstractStructBase
{
    /**
     * The GetTemplateInfoResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Template
     */
    public $GetTemplateInfoResult;
    /**
     * Constructor method for GetTemplateInfoResponse
     * @uses GetTemplateInfoResponse::setGetTemplateInfoResult()
     * @param \StructType\Template $getTemplateInfoResult
     */
    public function __construct(\StructType\Template $getTemplateInfoResult = null)
    {
        $this
            ->setGetTemplateInfoResult($getTemplateInfoResult);
    }
    /**
     * Get GetTemplateInfoResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Template|null
     */
    public function getGetTemplateInfoResult()
    {
        return isset($this->GetTemplateInfoResult) ? $this->GetTemplateInfoResult : null;
    }
    /**
     * Set GetTemplateInfoResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Template $getTemplateInfoResult
     * @return \StructType\GetTemplateInfoResponse
     */
    public function setGetTemplateInfoResult(\StructType\Template $getTemplateInfoResult = null)
    {
        if (is_null($getTemplateInfoResult) || (is_array($getTemplateInfoResult) && empty($getTemplateInfoResult))) {
            unset($this->GetTemplateInfoResult);
        } else {
            $this->GetTemplateInfoResult = $getTemplateInfoResult;
        }
        return $this;
    }
}
