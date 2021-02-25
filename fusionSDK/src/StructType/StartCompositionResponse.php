<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartCompositionResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:StartCompositionResponse
 * @subpackage Structs
 */
class StartCompositionResponse extends AbstractStructBase
{
    /**
     * The AssignedServer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $AssignedServer;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Message;
    /**
     * The StartCompositionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\StartCompositionResponse
     */
    public $StartCompositionResult;
    /**
     * Constructor method for StartCompositionResponse
     * @uses StartCompositionResponse::setAssignedServer()
     * @uses StartCompositionResponse::setMessage()
     * @uses StartCompositionResponse::setStartCompositionResult()
     * @param string $assignedServer
     * @param string $message
     * @param \StructType\StartCompositionResponse $startCompositionResult
     */
    public function __construct($assignedServer = null, $message = null, \StructType\StartCompositionResponse $startCompositionResult = null)
    {
        $this
            ->setAssignedServer($assignedServer)
            ->setMessage($message)
            ->setStartCompositionResult($startCompositionResult);
    }
    /**
     * Get AssignedServer value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getAssignedServer()
    {
        return isset($this->AssignedServer) ? $this->AssignedServer : null;
    }
    /**
     * Set AssignedServer value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $assignedServer
     * @return \StructType\StartCompositionResponse
     */
    public function setAssignedServer($assignedServer = null)
    {
        // validation for constraint: string
        if (!is_null($assignedServer) && !is_string($assignedServer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($assignedServer, true), gettype($assignedServer)), __LINE__);
        }
        if (is_null($assignedServer) || (is_array($assignedServer) && empty($assignedServer))) {
            unset($this->AssignedServer);
        } else {
            $this->AssignedServer = $assignedServer;
        }
        return $this;
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
     * @return \StructType\StartCompositionResponse
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
     * Get StartCompositionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\StartCompositionResponse|null
     */
    public function getStartCompositionResult()
    {
        return isset($this->StartCompositionResult) ? $this->StartCompositionResult : null;
    }
    /**
     * Set StartCompositionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\StartCompositionResponse $startCompositionResult
     * @return \StructType\StartCompositionResponse
     */
    public function setStartCompositionResult(\StructType\StartCompositionResponse $startCompositionResult = null)
    {
        if (is_null($startCompositionResult) || (is_array($startCompositionResult) && empty($startCompositionResult))) {
            unset($this->StartCompositionResult);
        } else {
            $this->StartCompositionResult = $startCompositionResult;
        }
        return $this;
    }
}
