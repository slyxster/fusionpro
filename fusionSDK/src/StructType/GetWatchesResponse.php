<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWatchesResponse StructType
 * @subpackage Structs
 */
class GetWatchesResponse extends AbstractStructBase
{
    /**
     * The GetWatchesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GetWatchersResponse
     */
    public $GetWatchesResult;
    /**
     * Constructor method for GetWatchesResponse
     * @uses GetWatchesResponse::setGetWatchesResult()
     * @param \StructType\GetWatchersResponse $getWatchesResult
     */
    public function __construct(\StructType\GetWatchersResponse $getWatchesResult = null)
    {
        $this
            ->setGetWatchesResult($getWatchesResult);
    }
    /**
     * Get GetWatchesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GetWatchersResponse|null
     */
    public function getGetWatchesResult()
    {
        return isset($this->GetWatchesResult) ? $this->GetWatchesResult : null;
    }
    /**
     * Set GetWatchesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\GetWatchersResponse $getWatchesResult
     * @return \StructType\GetWatchesResponse
     */
    public function setGetWatchesResult(\StructType\GetWatchersResponse $getWatchesResult = null)
    {
        if (is_null($getWatchesResult) || (is_array($getWatchesResult) && empty($getWatchesResult))) {
            unset($this->GetWatchesResult);
        } else {
            $this->GetWatchesResult = $getWatchesResult;
        }
        return $this;
    }
}
