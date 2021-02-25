<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWatchersRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetWatchersRequest
 * @subpackage Structs
 */
class GetWatchersRequest extends AbstractStructBase
{
    /**
     * The Folder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Folder;
    /**
     * The Message
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $Message;
    /**
     * Constructor method for GetWatchersRequest
     * @uses GetWatchersRequest::setFolder()
     * @uses GetWatchersRequest::setMessage()
     * @param string $folder
     * @param string $message
     */
    public function __construct($folder = null, $message = null)
    {
        $this
            ->setFolder($folder)
            ->setMessage($message);
    }
    /**
     * Get Folder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFolder()
    {
        return isset($this->Folder) ? $this->Folder : null;
    }
    /**
     * Set Folder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $folder
     * @return \StructType\GetWatchersRequest
     */
    public function setFolder($folder = null)
    {
        // validation for constraint: string
        if (!is_null($folder) && !is_string($folder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($folder, true), gettype($folder)), __LINE__);
        }
        if (is_null($folder) || (is_array($folder) && empty($folder))) {
            unset($this->Folder);
        } else {
            $this->Folder = $folder;
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
     * @return \StructType\GetWatchersRequest
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
