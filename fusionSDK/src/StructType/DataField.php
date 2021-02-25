<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DataField StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DataField
 * @subpackage Structs
 */
class DataField extends KeyValue
{
    /**
     * The IsGraphic
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $IsGraphic;
    /**
     * Constructor method for DataField
     * @uses DataField::setIsGraphic()
     * @param bool $isGraphic
     */
    public function __construct($isGraphic = null)
    {
        $this
            ->setIsGraphic($isGraphic);
    }
    /**
     * Get IsGraphic value
     * @return bool|null
     */
    public function getIsGraphic()
    {
        return $this->IsGraphic;
    }
    /**
     * Set IsGraphic value
     * @param bool $isGraphic
     * @return \StructType\DataField
     */
    public function setIsGraphic($isGraphic = null)
    {
        // validation for constraint: boolean
        if (!is_null($isGraphic) && !is_bool($isGraphic)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isGraphic, true), gettype($isGraphic)), __LINE__);
        }
        $this->IsGraphic = $isGraphic;
        return $this;
    }
}
