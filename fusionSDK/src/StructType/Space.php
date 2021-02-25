<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Space StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Space
 * @subpackage Structs
 */
class Space extends AbstractStructBase
{
    /**
     * The HundredthsOfPoints
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $HundredthsOfPoints;
    /**
     * Constructor method for Space
     * @uses Space::setHundredthsOfPoints()
     * @param int $hundredthsOfPoints
     */
    public function __construct($hundredthsOfPoints = null)
    {
        $this
            ->setHundredthsOfPoints($hundredthsOfPoints);
    }
    /**
     * Get HundredthsOfPoints value
     * @return int|null
     */
    public function getHundredthsOfPoints()
    {
        return $this->HundredthsOfPoints;
    }
    /**
     * Set HundredthsOfPoints value
     * @param int $hundredthsOfPoints
     * @return \StructType\Space
     */
    public function setHundredthsOfPoints($hundredthsOfPoints = null)
    {
        // validation for constraint: int
        if (!is_null($hundredthsOfPoints) && !(is_int($hundredthsOfPoints) || ctype_digit($hundredthsOfPoints))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($hundredthsOfPoints, true), gettype($hundredthsOfPoints)), __LINE__);
        }
        $this->HundredthsOfPoints = $hundredthsOfPoints;
        return $this;
    }
}
