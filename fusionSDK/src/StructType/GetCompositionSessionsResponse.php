<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCompositionSessionsResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetCompositionSessionsResponse
 * @subpackage Structs
 */
class GetCompositionSessionsResponse extends AbstractStructBase
{
    /**
     * The Compositions
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfCompositionSessionInfo
     */
    public $Compositions;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Message;
    /**
     * The GetCompositionSessionsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GetCompositionSessionsResponse
     */
    public $GetCompositionSessionsResult;
    /**
     * Constructor method for GetCompositionSessionsResponse
     * @uses GetCompositionSessionsResponse::setCompositions()
     * @uses GetCompositionSessionsResponse::setMessage()
     * @uses GetCompositionSessionsResponse::setGetCompositionSessionsResult()
     * @param \ArrayType\ArrayOfCompositionSessionInfo $compositions
     * @param string $message
     * @param \StructType\GetCompositionSessionsResponse $getCompositionSessionsResult
     */
    public function __construct(\ArrayType\ArrayOfCompositionSessionInfo $compositions = null, $message = null, \StructType\GetCompositionSessionsResponse $getCompositionSessionsResult = null)
    {
        $this
            ->setCompositions($compositions)
            ->setMessage($message)
            ->setGetCompositionSessionsResult($getCompositionSessionsResult);
    }
    /**
     * Get Compositions value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfCompositionSessionInfo|null
     */
    public function getCompositions()
    {
        return isset($this->Compositions) ? $this->Compositions : null;
    }
    /**
     * Set Compositions value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfCompositionSessionInfo $compositions
     * @return \StructType\GetCompositionSessionsResponse
     */
    public function setCompositions(\ArrayType\ArrayOfCompositionSessionInfo $compositions = null)
    {
        if (is_null($compositions) || (is_array($compositions) && empty($compositions))) {
            unset($this->Compositions);
        } else {
            $this->Compositions = $compositions;
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
     * @return \StructType\GetCompositionSessionsResponse
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
     * Get GetCompositionSessionsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GetCompositionSessionsResponse|null
     */
    public function getGetCompositionSessionsResult()
    {
        return isset($this->GetCompositionSessionsResult) ? $this->GetCompositionSessionsResult : null;
    }
    /**
     * Set GetCompositionSessionsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\GetCompositionSessionsResponse $getCompositionSessionsResult
     * @return \StructType\GetCompositionSessionsResponse
     */
    public function setGetCompositionSessionsResult(\StructType\GetCompositionSessionsResponse $getCompositionSessionsResult = null)
    {
        if (is_null($getCompositionSessionsResult) || (is_array($getCompositionSessionsResult) && empty($getCompositionSessionsResult))) {
            unset($this->GetCompositionSessionsResult);
        } else {
            $this->GetCompositionSessionsResult = $getCompositionSessionsResult;
        }
        return $this;
    }
}
