<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCompositionFileBytesResponse StructType
 * @subpackage Structs
 */
class GetCompositionFileBytesResponse extends AbstractStructBase
{
    /**
     * The GetCompositionFileBytesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLResponse
     */
    public $GetCompositionFileBytesResult;
    /**
     * Constructor method for GetCompositionFileBytesResponse
     * @uses GetCompositionFileBytesResponse::setGetCompositionFileBytesResult()
     * @param \StructType\CompositionFilePathURLResponse $getCompositionFileBytesResult
     */
    public function __construct(\StructType\CompositionFilePathURLResponse $getCompositionFileBytesResult = null)
    {
        $this
            ->setGetCompositionFileBytesResult($getCompositionFileBytesResult);
    }
    /**
     * Get GetCompositionFileBytesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLResponse|null
     */
    public function getGetCompositionFileBytesResult()
    {
        return isset($this->GetCompositionFileBytesResult) ? $this->GetCompositionFileBytesResult : null;
    }
    /**
     * Set GetCompositionFileBytesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLResponse $getCompositionFileBytesResult
     * @return \StructType\GetCompositionFileBytesResponse
     */
    public function setGetCompositionFileBytesResult(\StructType\CompositionFilePathURLResponse $getCompositionFileBytesResult = null)
    {
        if (is_null($getCompositionFileBytesResult) || (is_array($getCompositionFileBytesResult) && empty($getCompositionFileBytesResult))) {
            unset($this->GetCompositionFileBytesResult);
        } else {
            $this->GetCompositionFileBytesResult = $getCompositionFileBytesResult;
        }
        return $this;
    }
}
