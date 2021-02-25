<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteWatchConditionResponse StructType
 * @subpackage Structs
 */
class DeleteWatchConditionResponse extends AbstractStructBase
{
    /**
     * The DeleteWatchConditionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WatchResponse
     */
    public $DeleteWatchConditionResult;
    /**
     * Constructor method for DeleteWatchConditionResponse
     * @uses DeleteWatchConditionResponse::setDeleteWatchConditionResult()
     * @param \StructType\WatchResponse $deleteWatchConditionResult
     */
    public function __construct(\StructType\WatchResponse $deleteWatchConditionResult = null)
    {
        $this
            ->setDeleteWatchConditionResult($deleteWatchConditionResult);
    }
    /**
     * Get DeleteWatchConditionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WatchResponse|null
     */
    public function getDeleteWatchConditionResult()
    {
        return isset($this->DeleteWatchConditionResult) ? $this->DeleteWatchConditionResult : null;
    }
    /**
     * Set DeleteWatchConditionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WatchResponse $deleteWatchConditionResult
     * @return \StructType\DeleteWatchConditionResponse
     */
    public function setDeleteWatchConditionResult(\StructType\WatchResponse $deleteWatchConditionResult = null)
    {
        if (is_null($deleteWatchConditionResult) || (is_array($deleteWatchConditionResult) && empty($deleteWatchConditionResult))) {
            unset($this->DeleteWatchConditionResult);
        } else {
            $this->DeleteWatchConditionResult = $deleteWatchConditionResult;
        }
        return $this;
    }
}
