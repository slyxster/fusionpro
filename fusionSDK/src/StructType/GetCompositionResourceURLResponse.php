<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCompositionResourceURLResponse StructType
 * @subpackage Structs
 */
class GetCompositionResourceURLResponse extends AbstractStructBase
{
    /**
     * The GetCompositionResourceURLResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLResponse
     */
    public $GetCompositionResourceURLResult;
    /**
     * Constructor method for GetCompositionResourceURLResponse
     * @uses GetCompositionResourceURLResponse::setGetCompositionResourceURLResult()
     * @param \StructType\CompositionFilePathURLResponse $getCompositionResourceURLResult
     */
    public function __construct(\StructType\CompositionFilePathURLResponse $getCompositionResourceURLResult = null)
    {
        $this
            ->setGetCompositionResourceURLResult($getCompositionResourceURLResult);
    }
    /**
     * Get GetCompositionResourceURLResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLResponse|null
     */
    public function getGetCompositionResourceURLResult()
    {
        return isset($this->GetCompositionResourceURLResult) ? $this->GetCompositionResourceURLResult : null;
    }
    /**
     * Set GetCompositionResourceURLResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLResponse $getCompositionResourceURLResult
     * @return \StructType\GetCompositionResourceURLResponse
     */
    public function setGetCompositionResourceURLResult(\StructType\CompositionFilePathURLResponse $getCompositionResourceURLResult = null)
    {
        if (is_null($getCompositionResourceURLResult) || (is_array($getCompositionResourceURLResult) && empty($getCompositionResourceURLResult))) {
            unset($this->GetCompositionResourceURLResult);
        } else {
            $this->GetCompositionResourceURLResult = $getCompositionResourceURLResult;
        }
        return $this;
    }
}
