<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TargetStatusResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TargetStatusResponse
 * @subpackage Structs
 */
class TargetStatusResponse extends AbstractStructBase
{
    /**
     * The bAlive
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $bAlive;
    /**
     * Constructor method for TargetStatusResponse
     * @uses TargetStatusResponse::setBAlive()
     * @param bool $bAlive
     */
    public function __construct($bAlive = null)
    {
        $this
            ->setBAlive($bAlive);
    }
    /**
     * Get bAlive value
     * @return bool|null
     */
    public function getBAlive()
    {
        return $this->bAlive;
    }
    /**
     * Set bAlive value
     * @param bool $bAlive
     * @return \StructType\TargetStatusResponse
     */
    public function setBAlive($bAlive = null)
    {
        // validation for constraint: boolean
        if (!is_null($bAlive) && !is_bool($bAlive)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bAlive, true), gettype($bAlive)), __LINE__);
        }
        $this->bAlive = $bAlive;
        return $this;
    }
}
