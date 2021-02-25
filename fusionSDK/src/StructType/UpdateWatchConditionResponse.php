<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateWatchConditionResponse StructType
 * @subpackage Structs
 */
class UpdateWatchConditionResponse extends AbstractStructBase
{
    /**
     * The UpdateWatchConditionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WatchResponse
     */
    public $UpdateWatchConditionResult;
    /**
     * Constructor method for UpdateWatchConditionResponse
     * @uses UpdateWatchConditionResponse::setUpdateWatchConditionResult()
     * @param \StructType\WatchResponse $updateWatchConditionResult
     */
    public function __construct(\StructType\WatchResponse $updateWatchConditionResult = null)
    {
        $this
            ->setUpdateWatchConditionResult($updateWatchConditionResult);
    }
    /**
     * Get UpdateWatchConditionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WatchResponse|null
     */
    public function getUpdateWatchConditionResult()
    {
        return isset($this->UpdateWatchConditionResult) ? $this->UpdateWatchConditionResult : null;
    }
    /**
     * Set UpdateWatchConditionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WatchResponse $updateWatchConditionResult
     * @return \StructType\UpdateWatchConditionResponse
     */
    public function setUpdateWatchConditionResult(\StructType\WatchResponse $updateWatchConditionResult = null)
    {
        if (is_null($updateWatchConditionResult) || (is_array($updateWatchConditionResult) && empty($updateWatchConditionResult))) {
            unset($this->UpdateWatchConditionResult);
        } else {
            $this->UpdateWatchConditionResult = $updateWatchConditionResult;
        }
        return $this;
    }
}
