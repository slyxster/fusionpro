<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TargetStatusRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TargetStatusRequest
 * @subpackage Structs
 */
class TargetStatusRequest extends AbstractStructBase
{
    /**
     * The iCurrentState
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iCurrentState;
    /**
     * Constructor method for TargetStatusRequest
     * @uses TargetStatusRequest::setICurrentState()
     * @param int $iCurrentState
     */
    public function __construct($iCurrentState = null)
    {
        $this
            ->setICurrentState($iCurrentState);
    }
    /**
     * Get iCurrentState value
     * @return int|null
     */
    public function getICurrentState()
    {
        return $this->iCurrentState;
    }
    /**
     * Set iCurrentState value
     * @param int $iCurrentState
     * @return \StructType\TargetStatusRequest
     */
    public function setICurrentState($iCurrentState = null)
    {
        // validation for constraint: int
        if (!is_null($iCurrentState) && !(is_int($iCurrentState) || ctype_digit($iCurrentState))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iCurrentState, true), gettype($iCurrentState)), __LINE__);
        }
        $this->iCurrentState = $iCurrentState;
        return $this;
    }
}
