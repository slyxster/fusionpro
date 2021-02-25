<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddWatchTask StructType
 * @subpackage Structs
 */
class AddWatchTask extends AbstractStructBase
{
    /**
     * The req
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WatchTaskRequest
     */
    public $req;
    /**
     * Constructor method for AddWatchTask
     * @uses AddWatchTask::setReq()
     * @param \StructType\WatchTaskRequest $req
     */
    public function __construct(\StructType\WatchTaskRequest $req = null)
    {
        $this
            ->setReq($req);
    }
    /**
     * Get req value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WatchTaskRequest|null
     */
    public function getReq()
    {
        return isset($this->req) ? $this->req : null;
    }
    /**
     * Set req value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WatchTaskRequest $req
     * @return \StructType\AddWatchTask
     */
    public function setReq(\StructType\WatchTaskRequest $req = null)
    {
        if (is_null($req) || (is_array($req) && empty($req))) {
            unset($this->req);
        } else {
            $this->req = $req;
        }
        return $this;
    }
}
