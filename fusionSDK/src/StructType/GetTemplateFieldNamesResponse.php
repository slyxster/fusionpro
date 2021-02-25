<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateFieldNamesResponse StructType
 * @subpackage Structs
 */
class GetTemplateFieldNamesResponse extends AbstractStructBase
{
    /**
     * The GetTemplateFieldNamesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateFieldResponse
     */
    public $GetTemplateFieldNamesResult;
    /**
     * Constructor method for GetTemplateFieldNamesResponse
     * @uses GetTemplateFieldNamesResponse::setGetTemplateFieldNamesResult()
     * @param \StructType\TemplateFieldResponse $getTemplateFieldNamesResult
     */
    public function __construct(\StructType\TemplateFieldResponse $getTemplateFieldNamesResult = null)
    {
        $this
            ->setGetTemplateFieldNamesResult($getTemplateFieldNamesResult);
    }
    /**
     * Get GetTemplateFieldNamesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateFieldResponse|null
     */
    public function getGetTemplateFieldNamesResult()
    {
        return isset($this->GetTemplateFieldNamesResult) ? $this->GetTemplateFieldNamesResult : null;
    }
    /**
     * Set GetTemplateFieldNamesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateFieldResponse $getTemplateFieldNamesResult
     * @return \StructType\GetTemplateFieldNamesResponse
     */
    public function setGetTemplateFieldNamesResult(\StructType\TemplateFieldResponse $getTemplateFieldNamesResult = null)
    {
        if (is_null($getTemplateFieldNamesResult) || (is_array($getTemplateFieldNamesResult) && empty($getTemplateFieldNamesResult))) {
            unset($this->GetTemplateFieldNamesResult);
        } else {
            $this->GetTemplateFieldNamesResult = $getTemplateFieldNamesResult;
        }
        return $this;
    }
}
