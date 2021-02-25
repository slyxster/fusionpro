<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateWatchTaskResponse StructType
 * @subpackage Structs
 */
class UpdateWatchTaskResponse extends AbstractStructBase
{
    /**
     * The UpdateWatchTaskResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WatchResponse
     */
    public $UpdateWatchTaskResult;
    /**
     * Constructor method for UpdateWatchTaskResponse
     * @uses UpdateWatchTaskResponse::setUpdateWatchTaskResult()
     * @param \StructType\WatchResponse $updateWatchTaskResult
     */
    public function __construct(\StructType\WatchResponse $updateWatchTaskResult = null)
    {
        $this
            ->setUpdateWatchTaskResult($updateWatchTaskResult);
    }
    /**
     * Get UpdateWatchTaskResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WatchResponse|null
     */
    public function getUpdateWatchTaskResult()
    {
        return isset($this->UpdateWatchTaskResult) ? $this->UpdateWatchTaskResult : null;
    }
    /**
     * Set UpdateWatchTaskResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WatchResponse $updateWatchTaskResult
     * @return \StructType\UpdateWatchTaskResponse
     */
    public function setUpdateWatchTaskResult(\StructType\WatchResponse $updateWatchTaskResult = null)
    {
        if (is_null($updateWatchTaskResult) || (is_array($updateWatchTaskResult) && empty($updateWatchTaskResult))) {
            unset($this->UpdateWatchTaskResult);
        } else {
            $this->UpdateWatchTaskResult = $updateWatchTaskResult;
        }
        return $this;
    }
}
