<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarshalByRefObject StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MarshalByRefObject
 * @subpackage Structs
 */
class MarshalByRefObject extends AbstractStructBase
{
    /**
     * The __identity
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var mixed
     */
    public $__identity;
    /**
     * Constructor method for MarshalByRefObject
     * @uses MarshalByRefObject::set__identity()
     * @param mixed $__identity
     */
    public function __construct($__identity = null)
    {
        $this
            ->set__identity($__identity);
    }
    /**
     * Get __identity value
     * @return mixed|null
     */
    public function get__identity()
    {
        return $this->__identity;
    }
    /**
     * Set __identity value
     * @param mixed $__identity
     * @return \StructType\MarshalByRefObject
     */
    public function set__identity($__identity = null)
    {
        $this->__identity = $__identity;
        return $this;
    }
}
