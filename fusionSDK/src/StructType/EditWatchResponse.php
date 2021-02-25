<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EditWatchResponse StructType
 * @subpackage Structs
 */
class EditWatchResponse extends AbstractStructBase
{
    /**
     * The EditWatchResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WatchResponse
     */
    public $EditWatchResult;
    /**
     * Constructor method for EditWatchResponse
     * @uses EditWatchResponse::setEditWatchResult()
     * @param \StructType\WatchResponse $editWatchResult
     */
    public function __construct(\StructType\WatchResponse $editWatchResult = null)
    {
        $this
            ->setEditWatchResult($editWatchResult);
    }
    /**
     * Get EditWatchResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WatchResponse|null
     */
    public function getEditWatchResult()
    {
        return isset($this->EditWatchResult) ? $this->EditWatchResult : null;
    }
    /**
     * Set EditWatchResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WatchResponse $editWatchResult
     * @return \StructType\EditWatchResponse
     */
    public function setEditWatchResult(\StructType\WatchResponse $editWatchResult = null)
    {
        if (is_null($editWatchResult) || (is_array($editWatchResult) && empty($editWatchResult))) {
            unset($this->EditWatchResult);
        } else {
            $this->EditWatchResult = $editWatchResult;
        }
        return $this;
    }
}
