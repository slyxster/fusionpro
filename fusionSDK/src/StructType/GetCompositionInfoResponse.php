<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCompositionInfoResponse StructType
 * @subpackage Structs
 */
class GetCompositionInfoResponse extends AbstractStructBase
{
    /**
     * The GetCompositionInfoResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionInfo
     */
    public $GetCompositionInfoResult;
    /**
     * Constructor method for GetCompositionInfoResponse
     * @uses GetCompositionInfoResponse::setGetCompositionInfoResult()
     * @param \StructType\CompositionInfo $getCompositionInfoResult
     */
    public function __construct(\StructType\CompositionInfo $getCompositionInfoResult = null)
    {
        $this
            ->setGetCompositionInfoResult($getCompositionInfoResult);
    }
    /**
     * Get GetCompositionInfoResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionInfo|null
     */
    public function getGetCompositionInfoResult()
    {
        return isset($this->GetCompositionInfoResult) ? $this->GetCompositionInfoResult : null;
    }
    /**
     * Set GetCompositionInfoResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionInfo $getCompositionInfoResult
     * @return \StructType\GetCompositionInfoResponse
     */
    public function setGetCompositionInfoResult(\StructType\CompositionInfo $getCompositionInfoResult = null)
    {
        if (is_null($getCompositionInfoResult) || (is_array($getCompositionInfoResult) && empty($getCompositionInfoResult))) {
            unset($this->GetCompositionInfoResult);
        } else {
            $this->GetCompositionInfoResult = $getCompositionInfoResult;
        }
        return $this;
    }
}
