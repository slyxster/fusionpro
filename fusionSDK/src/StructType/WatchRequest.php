<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WatchRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WatchRequest
 * @subpackage Structs
 */
class WatchRequest extends AbstractStructBase
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
     * The Settings
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WatchFolderSettings
     */
    public $Settings;
    /**
     * Constructor method for WatchRequest
     * @uses WatchRequest::setFolder()
     * @uses WatchRequest::setSettings()
     * @param string $folder
     * @param \StructType\WatchFolderSettings $settings
     */
    public function __construct($folder = null, \StructType\WatchFolderSettings $settings = null)
    {
        $this
            ->setFolder($folder)
            ->setSettings($settings);
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
     * @return \StructType\WatchRequest
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
     * Get Settings value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WatchFolderSettings|null
     */
    public function getSettings()
    {
        return isset($this->Settings) ? $this->Settings : null;
    }
    /**
     * Set Settings value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WatchFolderSettings $settings
     * @return \StructType\WatchRequest
     */
    public function setSettings(\StructType\WatchFolderSettings $settings = null)
    {
        if (is_null($settings) || (is_array($settings) && empty($settings))) {
            unset($this->Settings);
        } else {
            $this->Settings = $settings;
        }
        return $this;
    }
}
