<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFusionProStatusResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetFusionProStatusResponse
 * @subpackage Structs
 */
class GetFusionProStatusResponse extends AbstractStructBase
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
     * The iOutput
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $iOutput;
    /**
     * The GetFusionProStatusResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\GetFusionProStatusResponse
     */
    public $GetFusionProStatusResult;
    /**
     * Constructor method for GetFusionProStatusResponse
     * @uses GetFusionProStatusResponse::setMessage()
     * @uses GetFusionProStatusResponse::setIOutput()
     * @uses GetFusionProStatusResponse::setGetFusionProStatusResult()
     * @param string $message
     * @param int $iOutput
     * @param \StructType\GetFusionProStatusResponse $getFusionProStatusResult
     */
    public function __construct($message = null, $iOutput = null, \StructType\GetFusionProStatusResponse $getFusionProStatusResult = null)
    {
        $this
            ->setMessage($message)
            ->setIOutput($iOutput)
            ->setGetFusionProStatusResult($getFusionProStatusResult);
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
     * @return \StructType\GetFusionProStatusResponse
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
     * Get iOutput value
     * @return int|null
     */
    public function getIOutput()
    {
        return $this->iOutput;
    }
    /**
     * Set iOutput value
     * @param int $iOutput
     * @return \StructType\GetFusionProStatusResponse
     */
    public function setIOutput($iOutput = null)
    {
        // validation for constraint: int
        if (!is_null($iOutput) && !(is_int($iOutput) || ctype_digit($iOutput))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($iOutput, true), gettype($iOutput)), __LINE__);
        }
        $this->iOutput = $iOutput;
        return $this;
    }
    /**
     * Get GetFusionProStatusResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\GetFusionProStatusResponse|null
     */
    public function getGetFusionProStatusResult()
    {
        return isset($this->GetFusionProStatusResult) ? $this->GetFusionProStatusResult : null;
    }
    /**
     * Set GetFusionProStatusResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\GetFusionProStatusResponse $getFusionProStatusResult
     * @return \StructType\GetFusionProStatusResponse
     */
    public function setGetFusionProStatusResult(\StructType\GetFusionProStatusResponse $getFusionProStatusResult = null)
    {
        if (is_null($getFusionProStatusResult) || (is_array($getFusionProStatusResult) && empty($getFusionProStatusResult))) {
            unset($this->GetFusionProStatusResult);
        } else {
            $this->GetFusionProStatusResult = $getFusionProStatusResult;
        }
        return $this;
    }
}
