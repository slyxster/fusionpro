<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplatePagesAndRecordsResponse StructType
 * @subpackage Structs
 */
class GetTemplatePagesAndRecordsResponse extends AbstractStructBase
{
    /**
     * The GetTemplatePagesAndRecordsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Template
     */
    public $GetTemplatePagesAndRecordsResult;
    /**
     * Constructor method for GetTemplatePagesAndRecordsResponse
     * @uses GetTemplatePagesAndRecordsResponse::setGetTemplatePagesAndRecordsResult()
     * @param \StructType\Template $getTemplatePagesAndRecordsResult
     */
    public function __construct(\StructType\Template $getTemplatePagesAndRecordsResult = null)
    {
        $this
            ->setGetTemplatePagesAndRecordsResult($getTemplatePagesAndRecordsResult);
    }
    /**
     * Get GetTemplatePagesAndRecordsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Template|null
     */
    public function getGetTemplatePagesAndRecordsResult()
    {
        return isset($this->GetTemplatePagesAndRecordsResult) ? $this->GetTemplatePagesAndRecordsResult : null;
    }
    /**
     * Set GetTemplatePagesAndRecordsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Template $getTemplatePagesAndRecordsResult
     * @return \StructType\GetTemplatePagesAndRecordsResponse
     */
    public function setGetTemplatePagesAndRecordsResult(\StructType\Template $getTemplatePagesAndRecordsResult = null)
    {
        if (is_null($getTemplatePagesAndRecordsResult) || (is_array($getTemplatePagesAndRecordsResult) && empty($getTemplatePagesAndRecordsResult))) {
            unset($this->GetTemplatePagesAndRecordsResult);
        } else {
            $this->GetTemplatePagesAndRecordsResult = $getTemplatePagesAndRecordsResult;
        }
        return $this;
    }
}
