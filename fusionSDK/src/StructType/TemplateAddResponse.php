<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TemplateAddResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:TemplateAddResponse
 * @subpackage Structs
 */
class TemplateAddResponse extends AbstractStructBase
{
    /**
     * The ActualTemplateName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $ActualTemplateName;
    /**
     * The InternalTemplateName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $InternalTemplateName;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Message;
    /**
     * Constructor method for TemplateAddResponse
     * @uses TemplateAddResponse::setActualTemplateName()
     * @uses TemplateAddResponse::setInternalTemplateName()
     * @uses TemplateAddResponse::setMessage()
     * @param string $actualTemplateName
     * @param string $internalTemplateName
     * @param string $message
     */
    public function __construct($actualTemplateName = null, $internalTemplateName = null, $message = null)
    {
        $this
            ->setActualTemplateName($actualTemplateName)
            ->setInternalTemplateName($internalTemplateName)
            ->setMessage($message);
    }
    /**
     * Get ActualTemplateName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getActualTemplateName()
    {
        return isset($this->ActualTemplateName) ? $this->ActualTemplateName : null;
    }
    /**
     * Set ActualTemplateName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $actualTemplateName
     * @return \StructType\TemplateAddResponse
     */
    public function setActualTemplateName($actualTemplateName = null)
    {
        // validation for constraint: string
        if (!is_null($actualTemplateName) && !is_string($actualTemplateName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($actualTemplateName, true), gettype($actualTemplateName)), __LINE__);
        }
        if (is_null($actualTemplateName) || (is_array($actualTemplateName) && empty($actualTemplateName))) {
            unset($this->ActualTemplateName);
        } else {
            $this->ActualTemplateName = $actualTemplateName;
        }
        return $this;
    }
    /**
     * Get InternalTemplateName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getInternalTemplateName()
    {
        return isset($this->InternalTemplateName) ? $this->InternalTemplateName : null;
    }
    /**
     * Set InternalTemplateName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $internalTemplateName
     * @return \StructType\TemplateAddResponse
     */
    public function setInternalTemplateName($internalTemplateName = null)
    {
        // validation for constraint: string
        if (!is_null($internalTemplateName) && !is_string($internalTemplateName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internalTemplateName, true), gettype($internalTemplateName)), __LINE__);
        }
        if (is_null($internalTemplateName) || (is_array($internalTemplateName) && empty($internalTemplateName))) {
            unset($this->InternalTemplateName);
        } else {
            $this->InternalTemplateName = $internalTemplateName;
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
     * @return \StructType\TemplateAddResponse
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
}
