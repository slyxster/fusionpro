<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWatcherResponse StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GetWatcherResponse
 * @subpackage Structs
 */
class GetWatcherResponse extends AbstractStructBase
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
     * The watchFolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WatchFolderSettings
     */
    public $watchFolder;
    /**
     * Constructor method for GetWatcherResponse
     * @uses GetWatcherResponse::setMessage()
     * @uses GetWatcherResponse::setWatchFolder()
     * @param string $message
     * @param \StructType\WatchFolderSettings $watchFolder
     */
    public function __construct($message = null, \StructType\WatchFolderSettings $watchFolder = null)
    {
        $this
            ->setMessage($message)
            ->setWatchFolder($watchFolder);
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
     * @return \StructType\GetWatcherResponse
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
     * Get watchFolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WatchFolderSettings|null
     */
    public function getWatchFolder()
    {
        return isset($this->watchFolder) ? $this->watchFolder : null;
    }
    /**
     * Set watchFolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WatchFolderSettings $watchFolder
     * @return \StructType\GetWatcherResponse
     */
    public function setWatchFolder(\StructType\WatchFolderSettings $watchFolder = null)
    {
        if (is_null($watchFolder) || (is_array($watchFolder) && empty($watchFolder))) {
            unset($this->watchFolder);
        } else {
            $this->watchFolder = $watchFolder;
        }
        return $this;
    }
}
