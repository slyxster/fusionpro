<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCompositionFilePathResponse StructType
 * @subpackage Structs
 */
class GetCompositionFilePathResponse extends AbstractStructBase
{
    /**
     * The GetCompositionFilePathResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLResponse
     */
    public $GetCompositionFilePathResult;
    /**
     * Constructor method for GetCompositionFilePathResponse
     * @uses GetCompositionFilePathResponse::setGetCompositionFilePathResult()
     * @param \StructType\CompositionFilePathURLResponse $getCompositionFilePathResult
     */
    public function __construct(\StructType\CompositionFilePathURLResponse $getCompositionFilePathResult = null)
    {
        $this
            ->setGetCompositionFilePathResult($getCompositionFilePathResult);
    }
    /**
     * Get GetCompositionFilePathResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLResponse|null
     */
    public function getGetCompositionFilePathResult()
    {
        return isset($this->GetCompositionFilePathResult) ? $this->GetCompositionFilePathResult : null;
    }
    /**
     * Set GetCompositionFilePathResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLResponse $getCompositionFilePathResult
     * @return \StructType\GetCompositionFilePathResponse
     */
    public function setGetCompositionFilePathResult(\StructType\CompositionFilePathURLResponse $getCompositionFilePathResult = null)
    {
        if (is_null($getCompositionFilePathResult) || (is_array($getCompositionFilePathResult) && empty($getCompositionFilePathResult))) {
            unset($this->GetCompositionFilePathResult);
        } else {
            $this->GetCompositionFilePathResult = $getCompositionFilePathResult;
        }
        return $this;
    }
}
