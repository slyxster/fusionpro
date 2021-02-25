<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCompositionResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CreateCompositionResponse
 * @subpackage Structs
 */
class CreateCompositionResponse extends AbstractStructBase
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
     * The WorkingFolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WorkingFolder;
    /**
     * Constructor method for CreateCompositionResponse
     * @uses CreateCompositionResponse::setCompositionID()
     * @uses CreateCompositionResponse::setMessage()
     * @uses CreateCompositionResponse::setWorkingFolder()
     * @param int $compositionID
     * @param string $message
     * @param string $workingFolder
     */
    public function __construct($compositionID = null, $message = null, $workingFolder = null)
    {
        $this
            ->setCompositionID($compositionID)
            ->setMessage($message)
            ->setWorkingFolder($workingFolder);
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
     * @return \StructType\CreateCompositionResponse
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
     * @return \StructType\CreateCompositionResponse
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
     * Get WorkingFolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWorkingFolder()
    {
        return isset($this->WorkingFolder) ? $this->WorkingFolder : null;
    }
    /**
     * Set WorkingFolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $workingFolder
     * @return \StructType\CreateCompositionResponse
     */
    public function setWorkingFolder($workingFolder = null)
    {
        // validation for constraint: string
        if (!is_null($workingFolder) && !is_string($workingFolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workingFolder, true), gettype($workingFolder)), __LINE__);
        }
        if (is_null($workingFolder) || (is_array($workingFolder) && empty($workingFolder))) {
            unset($this->WorkingFolder);
        } else {
            $this->WorkingFolder = $workingFolder;
        }
        return $this;
    }
}
