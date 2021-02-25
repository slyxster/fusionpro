<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WatchConditionRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WatchConditionRequest
 * @subpackage Structs
 */
class WatchConditionRequest extends AbstractStructBase
{
    /**
     * The Condition
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WatchFolderCondition
     */
    public $Condition;
    /**
     * The WatchConditionName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WatchConditionName;
    /**
     * The WatchFolderName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WatchFolderName;
    /**
     * Constructor method for WatchConditionRequest
     * @uses WatchConditionRequest::setCondition()
     * @uses WatchConditionRequest::setWatchConditionName()
     * @uses WatchConditionRequest::setWatchFolderName()
     * @param \StructType\WatchFolderCondition $condition
     * @param string $watchConditionName
     * @param string $watchFolderName
     */
    public function __construct(\StructType\WatchFolderCondition $condition = null, $watchConditionName = null, $watchFolderName = null)
    {
        $this
            ->setCondition($condition)
            ->setWatchConditionName($watchConditionName)
            ->setWatchFolderName($watchFolderName);
    }
    /**
     * Get Condition value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WatchFolderCondition|null
     */
    public function getCondition()
    {
        return isset($this->Condition) ? $this->Condition : null;
    }
    /**
     * Set Condition value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WatchFolderCondition $condition
     * @return \StructType\WatchConditionRequest
     */
    public function setCondition(\StructType\WatchFolderCondition $condition = null)
    {
        if (is_null($condition) || (is_array($condition) && empty($condition))) {
            unset($this->Condition);
        } else {
            $this->Condition = $condition;
        }
        return $this;
    }
    /**
     * Get WatchConditionName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWatchConditionName()
    {
        return isset($this->WatchConditionName) ? $this->WatchConditionName : null;
    }
    /**
     * Set WatchConditionName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $watchConditionName
     * @return \StructType\WatchConditionRequest
     */
    public function setWatchConditionName($watchConditionName = null)
    {
        // validation for constraint: string
        if (!is_null($watchConditionName) && !is_string($watchConditionName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($watchConditionName, true), gettype($watchConditionName)), __LINE__);
        }
        if (is_null($watchConditionName) || (is_array($watchConditionName) && empty($watchConditionName))) {
            unset($this->WatchConditionName);
        } else {
            $this->WatchConditionName = $watchConditionName;
        }
        return $this;
    }
    /**
     * Get WatchFolderName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWatchFolderName()
    {
        return isset($this->WatchFolderName) ? $this->WatchFolderName : null;
    }
    /**
     * Set WatchFolderName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $watchFolderName
     * @return \StructType\WatchConditionRequest
     */
    public function setWatchFolderName($watchFolderName = null)
    {
        // validation for constraint: string
        if (!is_null($watchFolderName) && !is_string($watchFolderName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($watchFolderName, true), gettype($watchFolderName)), __LINE__);
        }
        if (is_null($watchFolderName) || (is_array($watchFolderName) && empty($watchFolderName))) {
            unset($this->WatchFolderName);
        } else {
            $this->WatchFolderName = $watchFolderName;
        }
        return $this;
    }
}
