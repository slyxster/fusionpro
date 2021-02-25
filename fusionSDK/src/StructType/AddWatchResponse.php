<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddWatchResponse StructType
 * @subpackage Structs
 */
class AddWatchResponse extends AbstractStructBase
{
    /**
     * The AddWatchResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WatchResponse
     */
    public $AddWatchResult;
    /**
     * Constructor method for AddWatchResponse
     * @uses AddWatchResponse::setAddWatchResult()
     * @param \StructType\WatchResponse $addWatchResult
     */
    public function __construct(\StructType\WatchResponse $addWatchResult = null)
    {
        $this
            ->setAddWatchResult($addWatchResult);
    }
    /**
     * Get AddWatchResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WatchResponse|null
     */
    public function getAddWatchResult()
    {
        return isset($this->AddWatchResult) ? $this->AddWatchResult : null;
    }
    /**
     * Set AddWatchResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WatchResponse $addWatchResult
     * @return \StructType\AddWatchResponse
     */
    public function setAddWatchResult(\StructType\WatchResponse $addWatchResult = null)
    {
        if (is_null($addWatchResult) || (is_array($addWatchResult) && empty($addWatchResult))) {
            unset($this->AddWatchResult);
        } else {
            $this->AddWatchResult = $addWatchResult;
        }
        return $this;
    }
}
