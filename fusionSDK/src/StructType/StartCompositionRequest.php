<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartCompositionRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:StartCompositionRequest
 * @subpackage Structs
 */
class StartCompositionRequest extends AbstractStructBase
{
    /**
     * The CompositionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CompositionID;
    /**
     * The Priority
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Priority;
    /**
     * The requeue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $requeue;
    /**
     * Constructor method for StartCompositionRequest
     * @uses StartCompositionRequest::setCompositionID()
     * @uses StartCompositionRequest::setPriority()
     * @uses StartCompositionRequest::setRequeue()
     * @param int $compositionID
     * @param int $priority
     * @param bool $requeue
     */
    public function __construct($compositionID = null, $priority = null, $requeue = null)
    {
        $this
            ->setCompositionID($compositionID)
            ->setPriority($priority)
            ->setRequeue($requeue);
    }
    /**
     * Get CompositionID value
     * @return int|null
     */
    public function getCompositionID()
    {
        return $this->CompositionID;
    }
    /**
     * Set CompositionID value
     * @param int $compositionID
     * @return \StructType\StartCompositionRequest
     */
    public function setCompositionID($compositionID = null)
    {
        // validation for constraint: int
        if (!is_null($compositionID) && !(is_int($compositionID) || ctype_digit($compositionID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($compositionID, true), gettype($compositionID)), __LINE__);
        }
        $this->CompositionID = $compositionID;
        return $this;
    }
    /**
     * Get Priority value
     * @return int|null
     */
    public function getPriority()
    {
        return $this->Priority;
    }
    /**
     * Set Priority value
     * @param int $priority
     * @return \StructType\StartCompositionRequest
     */
    public function setPriority($priority = null)
    {
        // validation for constraint: int
        if (!is_null($priority) && !(is_int($priority) || ctype_digit($priority))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($priority, true), gettype($priority)), __LINE__);
        }
        $this->Priority = $priority;
        return $this;
    }
    /**
     * Get requeue value
     * @return bool|null
     */
    public function getRequeue()
    {
        return $this->requeue;
    }
    /**
     * Set requeue value
     * @param bool $requeue
     * @return \StructType\StartCompositionRequest
     */
    public function setRequeue($requeue = null)
    {
        // validation for constraint: boolean
        if (!is_null($requeue) && !is_bool($requeue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($requeue, true), gettype($requeue)), __LINE__);
        }
        $this->requeue = $requeue;
        return $this;
    }
}
