<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCompositionResourceFilePathResponse StructType
 * @subpackage Structs
 */
class GetCompositionResourceFilePathResponse extends AbstractStructBase
{
    /**
     * The GetCompositionResourceFilePathResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLResponse
     */
    public $GetCompositionResourceFilePathResult;
    /**
     * Constructor method for GetCompositionResourceFilePathResponse
     * @uses GetCompositionResourceFilePathResponse::setGetCompositionResourceFilePathResult()
     * @param \StructType\CompositionFilePathURLResponse $getCompositionResourceFilePathResult
     */
    public function __construct(\StructType\CompositionFilePathURLResponse $getCompositionResourceFilePathResult = null)
    {
        $this
            ->setGetCompositionResourceFilePathResult($getCompositionResourceFilePathResult);
    }
    /**
     * Get GetCompositionResourceFilePathResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLResponse|null
     */
    public function getGetCompositionResourceFilePathResult()
    {
        return isset($this->GetCompositionResourceFilePathResult) ? $this->GetCompositionResourceFilePathResult : null;
    }
    /**
     * Set GetCompositionResourceFilePathResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLResponse $getCompositionResourceFilePathResult
     * @return \StructType\GetCompositionResourceFilePathResponse
     */
    public function setGetCompositionResourceFilePathResult(\StructType\CompositionFilePathURLResponse $getCompositionResourceFilePathResult = null)
    {
        if (is_null($getCompositionResourceFilePathResult) || (is_array($getCompositionResourceFilePathResult) && empty($getCompositionResourceFilePathResult))) {
            unset($this->GetCompositionResourceFilePathResult);
        } else {
            $this->GetCompositionResourceFilePathResult = $getCompositionResourceFilePathResult;
        }
        return $this;
    }
}
