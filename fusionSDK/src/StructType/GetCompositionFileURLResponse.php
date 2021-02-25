<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCompositionFileURLResponse StructType
 * @subpackage Structs
 */
class GetCompositionFileURLResponse extends AbstractStructBase
{
    /**
     * The GetCompositionFileURLResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLResponse
     */
    public $GetCompositionFileURLResult;
    /**
     * Constructor method for GetCompositionFileURLResponse
     * @uses GetCompositionFileURLResponse::setGetCompositionFileURLResult()
     * @param \StructType\CompositionFilePathURLResponse $getCompositionFileURLResult
     */
    public function __construct(\StructType\CompositionFilePathURLResponse $getCompositionFileURLResult = null)
    {
        $this
            ->setGetCompositionFileURLResult($getCompositionFileURLResult);
    }
    /**
     * Get GetCompositionFileURLResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLResponse|null
     */
    public function getGetCompositionFileURLResult()
    {
        return isset($this->GetCompositionFileURLResult) ? $this->GetCompositionFileURLResult : null;
    }
    /**
     * Set GetCompositionFileURLResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLResponse $getCompositionFileURLResult
     * @return \StructType\GetCompositionFileURLResponse
     */
    public function setGetCompositionFileURLResult(\StructType\CompositionFilePathURLResponse $getCompositionFileURLResult = null)
    {
        if (is_null($getCompositionFileURLResult) || (is_array($getCompositionFileURLResult) && empty($getCompositionFileURLResult))) {
            unset($this->GetCompositionFileURLResult);
        } else {
            $this->GetCompositionFileURLResult = $getCompositionFileURLResult;
        }
        return $this;
    }
}
