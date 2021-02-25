<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFusionProStatus StructType
 * @subpackage Structs
 */
class GetFusionProStatus extends AbstractStructBase
{
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $type;
    /**
     * Constructor method for GetFusionProStatus
     * @uses GetFusionProStatus::setType()
     * @param string $type
     */
    public function __construct($type = null)
    {
        $this
            ->setType($type);
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \EnumType\FPParameterType::valueIsValid()
     * @uses \EnumType\FPParameterType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $type
     * @return \StructType\GetFusionProStatus
     */
    public function setType($type = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\FPParameterType::valueIsValid($type)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\FPParameterType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\FPParameterType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        return $this;
    }
}
