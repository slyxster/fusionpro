<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteWatchTaskResponse StructType
 * @subpackage Structs
 */
class DeleteWatchTaskResponse extends AbstractStructBase
{
    /**
     * The DeleteWatchTaskResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WatchResponse
     */
    public $DeleteWatchTaskResult;
    /**
     * Constructor method for DeleteWatchTaskResponse
     * @uses DeleteWatchTaskResponse::setDeleteWatchTaskResult()
     * @param \StructType\WatchResponse $deleteWatchTaskResult
     */
    public function __construct(\StructType\WatchResponse $deleteWatchTaskResult = null)
    {
        $this
            ->setDeleteWatchTaskResult($deleteWatchTaskResult);
    }
    /**
     * Get DeleteWatchTaskResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WatchResponse|null
     */
    public function getDeleteWatchTaskResult()
    {
        return isset($this->DeleteWatchTaskResult) ? $this->DeleteWatchTaskResult : null;
    }
    /**
     * Set DeleteWatchTaskResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WatchResponse $deleteWatchTaskResult
     * @return \StructType\DeleteWatchTaskResponse
     */
    public function setDeleteWatchTaskResult(\StructType\WatchResponse $deleteWatchTaskResult = null)
    {
        if (is_null($deleteWatchTaskResult) || (is_array($deleteWatchTaskResult) && empty($deleteWatchTaskResult))) {
            unset($this->DeleteWatchTaskResult);
        } else {
            $this->DeleteWatchTaskResult = $deleteWatchTaskResult;
        }
        return $this;
    }
}
