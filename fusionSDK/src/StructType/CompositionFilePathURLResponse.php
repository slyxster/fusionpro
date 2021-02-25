<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CompositionFilePathURLResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CompositionFilePathURLResponse
 * @subpackage Structs
 */
class CompositionFilePathURLResponse extends AbstractStructBase
{
    /**
     * The CompositionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CompositionID;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Message;
    /**
     * The Output
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Output;
    /**
     * The OutputFileInBytes
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $OutputFileInBytes;
    /**
     * Constructor method for CompositionFilePathURLResponse
     * @uses CompositionFilePathURLResponse::setCompositionID()
     * @uses CompositionFilePathURLResponse::setMessage()
     * @uses CompositionFilePathURLResponse::setOutput()
     * @uses CompositionFilePathURLResponse::setOutputFileInBytes()
     * @param int $compositionID
     * @param string $message
     * @param string $output
     * @param string $outputFileInBytes
     */
    public function __construct($compositionID = null, $message = null, $output = null, $outputFileInBytes = null)
    {
        $this
            ->setCompositionID($compositionID)
            ->setMessage($message)
            ->setOutput($output)
            ->setOutputFileInBytes($outputFileInBytes);
    }
    /**
     * Get CompositionID value
     * @return int|null
     */
    public function getCompositionID()
    {
        return $this->CompositionID;
    }
    /**
     * Set CompositionID value
     * @param int $compositionID
     * @return \StructType\CompositionFilePathURLResponse
     */
    public function setCompositionID($compositionID = null)
    {
        // validation for constraint: int
        if (!is_null($compositionID) && !(is_int($compositionID) || ctype_digit($compositionID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($compositionID, true), gettype($compositionID)), __LINE__);
        }
        $this->CompositionID = $compositionID;
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
     * @return \StructType\CompositionFilePathURLResponse
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
     * Get Output value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOutput()
    {
        return isset($this->Output) ? $this->Output : null;
    }
    /**
     * Set Output value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $output
     * @return \StructType\CompositionFilePathURLResponse
     */
    public function setOutput($output = null)
    {
        // validation for constraint: string
        if (!is_null($output) && !is_string($output)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($output, true), gettype($output)), __LINE__);
        }
        if (is_null($output) || (is_array($output) && empty($output))) {
            unset($this->Output);
        } else {
            $this->Output = $output;
        }
        return $this;
    }
    /**
     * Get OutputFileInBytes value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getOutputFileInBytes()
    {
        return isset($this->OutputFileInBytes) ? $this->OutputFileInBytes : null;
    }
    /**
     * Set OutputFileInBytes value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $outputFileInBytes
     * @return \StructType\CompositionFilePathURLResponse
     */
    public function setOutputFileInBytes($outputFileInBytes = null)
    {
        // validation for constraint: string
        if (!is_null($outputFileInBytes) && !is_string($outputFileInBytes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputFileInBytes, true), gettype($outputFileInBytes)), __LINE__);
        }
        if (is_null($outputFileInBytes) || (is_array($outputFileInBytes) && empty($outputFileInBytes))) {
            unset($this->OutputFileInBytes);
        } else {
            $this->OutputFileInBytes = $outputFileInBytes;
        }
        return $this;
    }
}
