<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWatchResponse StructType
 * @subpackage Structs
 */
class GetWatchResponse extends AbstractStructBase
{
    /**
     * The GetWatchResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GetWatcherResponse
     */
    public $GetWatchResult;
    /**
     * Constructor method for GetWatchResponse
     * @uses GetWatchResponse::setGetWatchResult()
     * @param \StructType\GetWatcherResponse $getWatchResult
     */
    public function __construct(\StructType\GetWatcherResponse $getWatchResult = null)
    {
        $this
            ->setGetWatchResult($getWatchResult);
    }
    /**
     * Get GetWatchResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GetWatcherResponse|null
     */
    public function getGetWatchResult()
    {
        return isset($this->GetWatchResult) ? $this->GetWatchResult : null;
    }
    /**
     * Set GetWatchResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\GetWatcherResponse $getWatchResult
     * @return \StructType\GetWatchResponse
     */
    public function setGetWatchResult(\StructType\GetWatcherResponse $getWatchResult = null)
    {
        if (is_null($getWatchResult) || (is_array($getWatchResult) && empty($getWatchResult))) {
            unset($this->GetWatchResult);
        } else {
            $this->GetWatchResult = $getWatchResult;
        }
        return $this;
    }
}
