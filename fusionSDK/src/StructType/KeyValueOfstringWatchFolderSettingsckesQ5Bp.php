<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for KeyValueOfstringWatchFolderSettingsckesQ5Bp StructType
 * @subpackage Structs
 */
class KeyValueOfstringWatchFolderSettingsckesQ5Bp extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var string
     */
    public $Key;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - nillable: true
     * @var \StructType\WatchFolderSettings
     */
    public $Value;
    /**
     * Constructor method for KeyValueOfstringWatchFolderSettingsckesQ5Bp
     * @uses KeyValueOfstringWatchFolderSettingsckesQ5Bp::setKey()
     * @uses KeyValueOfstringWatchFolderSettingsckesQ5Bp::setValue()
     * @param string $key
     * @param \StructType\WatchFolderSettings $value
     */
    public function __construct($key = null, \StructType\WatchFolderSettings $value = null)
    {
        $this
            ->setKey($key)
            ->setValue($value);
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey()
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp
     */
    public function setKey($key = null)
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        return $this;
    }
    /**
     * Get Value value
     * @return \StructType\WatchFolderSettings|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param \StructType\WatchFolderSettings $value
     * @return \StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp
     */
    public function setValue(\StructType\WatchFolderSettings $value = null)
    {
        $this->Value = $value;
        return $this;
    }
}
