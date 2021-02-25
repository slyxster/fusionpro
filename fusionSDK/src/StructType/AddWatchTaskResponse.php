<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddWatchTaskResponse StructType
 * @subpackage Structs
 */
class AddWatchTaskResponse extends AbstractStructBase
{
    /**
     * The AddWatchTaskResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WatchResponse
     */
    public $AddWatchTaskResult;
    /**
     * Constructor method for AddWatchTaskResponse
     * @uses AddWatchTaskResponse::setAddWatchTaskResult()
     * @param \StructType\WatchResponse $addWatchTaskResult
     */
    public function __construct(\StructType\WatchResponse $addWatchTaskResult = null)
    {
        $this
            ->setAddWatchTaskResult($addWatchTaskResult);
    }
    /**
     * Get AddWatchTaskResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WatchResponse|null
     */
    public function getAddWatchTaskResult()
    {
        return isset($this->AddWatchTaskResult) ? $this->AddWatchTaskResult : null;
    }
    /**
     * Set AddWatchTaskResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WatchResponse $addWatchTaskResult
     * @return \StructType\AddWatchTaskResponse
     */
    public function setAddWatchTaskResult(\StructType\WatchResponse $addWatchTaskResult = null)
    {
        if (is_null($addWatchTaskResult) || (is_array($addWatchTaskResult) && empty($addWatchTaskResult))) {
            unset($this->AddWatchTaskResult);
        } else {
            $this->AddWatchTaskResult = $addWatchTaskResult;
        }
        return $this;
    }
}
