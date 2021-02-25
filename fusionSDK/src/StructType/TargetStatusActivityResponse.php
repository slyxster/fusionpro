<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TargetStatusActivityResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TargetStatusActivityResponse
 * @subpackage Structs
 */
class TargetStatusActivityResponse extends AbstractStructBase
{
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Message;
    /**
     * The Targets
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfServerStatus
     */
    public $Targets;
    /**
     * Constructor method for TargetStatusActivityResponse
     * @uses TargetStatusActivityResponse::setMessage()
     * @uses TargetStatusActivityResponse::setTargets()
     * @param string $message
     * @param \ArrayType\ArrayOfServerStatus $targets
     */
    public function __construct($message = null, \ArrayType\ArrayOfServerStatus $targets = null)
    {
        $this
            ->setMessage($message)
            ->setTargets($targets);
    }
    /**
     * Get Message value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getMessage()
    {
        return isset($this->Message) ? $this->Message : null;
    }
    /**
     * Set Message value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $message
     * @return \StructType\TargetStatusActivityResponse
     */
    public function setMessage($message = null)
    {
        // validation for constraint: string
        if (!is_null($message) && !is_string($message)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($message, true), gettype($message)), __LINE__);
        }
        if (is_null($message) || (is_array($message) && empty($message))) {
            unset($this->Message);
        } else {
            $this->Message = $message;
        }
        return $this;
    }
    /**
     * Get Targets value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfServerStatus|null
     */
    public function getTargets()
    {
        return isset($this->Targets) ? $this->Targets : null;
    }
    /**
     * Set Targets value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfServerStatus $targets
     * @return \StructType\TargetStatusActivityResponse
     */
    public function setTargets(\ArrayType\ArrayOfServerStatus $targets = null)
    {
        if (is_null($targets) || (is_array($targets) && empty($targets))) {
            unset($this->Targets);
        } else {
            $this->Targets = $targets;
        }
        return $this;
    }
}
