<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateJobOptionsResponse StructType
 * @subpackage Structs
 */
class GetTemplateJobOptionsResponse extends AbstractStructBase
{
    /**
     * The GetTemplateJobOptionsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\JobOptions
     */
    public $GetTemplateJobOptionsResult;
    /**
     * Constructor method for GetTemplateJobOptionsResponse
     * @uses GetTemplateJobOptionsResponse::setGetTemplateJobOptionsResult()
     * @param \StructType\JobOptions $getTemplateJobOptionsResult
     */
    public function __construct(\StructType\JobOptions $getTemplateJobOptionsResult = null)
    {
        $this
            ->setGetTemplateJobOptionsResult($getTemplateJobOptionsResult);
    }
    /**
     * Get GetTemplateJobOptionsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\JobOptions|null
     */
    public function getGetTemplateJobOptionsResult()
    {
        return isset($this->GetTemplateJobOptionsResult) ? $this->GetTemplateJobOptionsResult : null;
    }
    /**
     * Set GetTemplateJobOptionsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\JobOptions $getTemplateJobOptionsResult
     * @return \StructType\GetTemplateJobOptionsResponse
     */
    public function setGetTemplateJobOptionsResult(\StructType\JobOptions $getTemplateJobOptionsResult = null)
    {
        if (is_null($getTemplateJobOptionsResult) || (is_array($getTemplateJobOptionsResult) && empty($getTemplateJobOptionsResult))) {
            unset($this->GetTemplateJobOptionsResult);
        } else {
            $this->GetTemplateJobOptionsResult = $getTemplateJobOptionsResult;
        }
        return $this;
    }
}
