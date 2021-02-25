<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetApplicationSettingsResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SetApplicationSettingsResponse
 * @subpackage Structs
 */
class SetApplicationSettingsResponse extends AbstractStructBase
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
     * The SetApplicationSettingsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\SetApplicationSettingsResponse
     */
    public $SetApplicationSettingsResult;
    /**
     * Constructor method for SetApplicationSettingsResponse
     * @uses SetApplicationSettingsResponse::setMessage()
     * @uses SetApplicationSettingsResponse::setSetApplicationSettingsResult()
     * @param string $message
     * @param \StructType\SetApplicationSettingsResponse $setApplicationSettingsResult
     */
    public function __construct($message = null, \StructType\SetApplicationSettingsResponse $setApplicationSettingsResult = null)
    {
        $this
            ->setMessage($message)
            ->setSetApplicationSettingsResult($setApplicationSettingsResult);
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
     * @return \StructType\SetApplicationSettingsResponse
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
     * Get SetApplicationSettingsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\SetApplicationSettingsResponse|null
     */
    public function getSetApplicationSettingsResult()
    {
        return isset($this->SetApplicationSettingsResult) ? $this->SetApplicationSettingsResult : null;
    }
    /**
     * Set SetApplicationSettingsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\SetApplicationSettingsResponse $setApplicationSettingsResult
     * @return \StructType\SetApplicationSettingsResponse
     */
    public function setSetApplicationSettingsResult(\StructType\SetApplicationSettingsResponse $setApplicationSettingsResult = null)
    {
        if (is_null($setApplicationSettingsResult) || (is_array($setApplicationSettingsResult) && empty($setApplicationSettingsResult))) {
            unset($this->SetApplicationSettingsResult);
        } else {
            $this->SetApplicationSettingsResult = $setApplicationSettingsResult;
        }
        return $this;
    }
}
