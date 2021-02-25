<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddWatchConditionResponse StructType
 * @subpackage Structs
 */
class AddWatchConditionResponse extends AbstractStructBase
{
    /**
     * The AddWatchConditionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WatchResponse
     */
    public $AddWatchConditionResult;
    /**
     * Constructor method for AddWatchConditionResponse
     * @uses AddWatchConditionResponse::setAddWatchConditionResult()
     * @param \StructType\WatchResponse $addWatchConditionResult
     */
    public function __construct(\StructType\WatchResponse $addWatchConditionResult = null)
    {
        $this
            ->setAddWatchConditionResult($addWatchConditionResult);
    }
    /**
     * Get AddWatchConditionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WatchResponse|null
     */
    public function getAddWatchConditionResult()
    {
        return isset($this->AddWatchConditionResult) ? $this->AddWatchConditionResult : null;
    }
    /**
     * Set AddWatchConditionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WatchResponse $addWatchConditionResult
     * @return \StructType\AddWatchConditionResponse
     */
    public function setAddWatchConditionResult(\StructType\WatchResponse $addWatchConditionResult = null)
    {
        if (is_null($addWatchConditionResult) || (is_array($addWatchConditionResult) && empty($addWatchConditionResult))) {
            unset($this->AddWatchConditionResult);
        } else {
            $this->AddWatchConditionResult = $addWatchConditionResult;
        }
        return $this;
    }
}
