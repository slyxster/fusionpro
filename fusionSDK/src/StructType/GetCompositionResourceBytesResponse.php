<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCompositionResourceBytesResponse StructType
 * @subpackage Structs
 */
class GetCompositionResourceBytesResponse extends AbstractStructBase
{
    /**
     * The GetCompositionResourceBytesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLResponse
     */
    public $GetCompositionResourceBytesResult;
    /**
     * Constructor method for GetCompositionResourceBytesResponse
     * @uses GetCompositionResourceBytesResponse::setGetCompositionResourceBytesResult()
     * @param \StructType\CompositionFilePathURLResponse $getCompositionResourceBytesResult
     */
    public function __construct(\StructType\CompositionFilePathURLResponse $getCompositionResourceBytesResult = null)
    {
        $this
            ->setGetCompositionResourceBytesResult($getCompositionResourceBytesResult);
    }
    /**
     * Get GetCompositionResourceBytesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLResponse|null
     */
    public function getGetCompositionResourceBytesResult()
    {
        return isset($this->GetCompositionResourceBytesResult) ? $this->GetCompositionResourceBytesResult : null;
    }
    /**
     * Set GetCompositionResourceBytesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLResponse $getCompositionResourceBytesResult
     * @return \StructType\GetCompositionResourceBytesResponse
     */
    public function setGetCompositionResourceBytesResult(\StructType\CompositionFilePathURLResponse $getCompositionResourceBytesResult = null)
    {
        if (is_null($getCompositionResourceBytesResult) || (is_array($getCompositionResourceBytesResult) && empty($getCompositionResourceBytesResult))) {
            unset($this->GetCompositionResourceBytesResult);
        } else {
            $this->GetCompositionResourceBytesResult = $getCompositionResourceBytesResult;
        }
        return $this;
    }
}
