<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueueCompositionFromSessionResponse StructType
 * @subpackage Structs
 */
class QueueCompositionFromSessionResponse extends AbstractStructBase
{
    /**
     * The QueueCompositionFromSessionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\StartCompositionResponse
     */
    public $QueueCompositionFromSessionResult;
    /**
     * Constructor method for QueueCompositionFromSessionResponse
     * @uses QueueCompositionFromSessionResponse::setQueueCompositionFromSessionResult()
     * @param \StructType\StartCompositionResponse $queueCompositionFromSessionResult
     */
    public function __construct(\StructType\StartCompositionResponse $queueCompositionFromSessionResult = null)
    {
        $this
            ->setQueueCompositionFromSessionResult($queueCompositionFromSessionResult);
    }
    /**
     * Get QueueCompositionFromSessionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\StartCompositionResponse|null
     */
    public function getQueueCompositionFromSessionResult()
    {
        return isset($this->QueueCompositionFromSessionResult) ? $this->QueueCompositionFromSessionResult : null;
    }
    /**
     * Set QueueCompositionFromSessionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\StartCompositionResponse $queueCompositionFromSessionResult
     * @return \StructType\QueueCompositionFromSessionResponse
     */
    public function setQueueCompositionFromSessionResult(\StructType\StartCompositionResponse $queueCompositionFromSessionResult = null)
    {
        if (is_null($queueCompositionFromSessionResult) || (is_array($queueCompositionFromSessionResult) && empty($queueCompositionFromSessionResult))) {
            unset($this->QueueCompositionFromSessionResult);
        } else {
            $this->QueueCompositionFromSessionResult = $queueCompositionFromSessionResult;
        }
        return $this;
    }
}
