<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteWatchResponse StructType
 * @subpackage Structs
 */
class DeleteWatchResponse extends AbstractStructBase
{
    /**
     * The DeleteWatchResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WatchResponse
     */
    public $DeleteWatchResult;
    /**
     * Constructor method for DeleteWatchResponse
     * @uses DeleteWatchResponse::setDeleteWatchResult()
     * @param \StructType\WatchResponse $deleteWatchResult
     */
    public function __construct(\StructType\WatchResponse $deleteWatchResult = null)
    {
        $this
            ->setDeleteWatchResult($deleteWatchResult);
    }
    /**
     * Get DeleteWatchResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WatchResponse|null
     */
    public function getDeleteWatchResult()
    {
        return isset($this->DeleteWatchResult) ? $this->DeleteWatchResult : null;
    }
    /**
     * Set DeleteWatchResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WatchResponse $deleteWatchResult
     * @return \StructType\DeleteWatchResponse
     */
    public function setDeleteWatchResult(\StructType\WatchResponse $deleteWatchResult = null)
    {
        if (is_null($deleteWatchResult) || (is_array($deleteWatchResult) && empty($deleteWatchResult))) {
            unset($this->DeleteWatchResult);
        } else {
            $this->DeleteWatchResult = $deleteWatchResult;
        }
        return $this;
    }
}
