<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WatchTaskRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WatchTaskRequest
 * @subpackage Structs
 */
class WatchTaskRequest extends AbstractStructBase
{
    /**
     * The Task
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WatchFolderTask
     */
    public $Task;
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
     * The WatchTaskName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WatchTaskName;
    /**
     * Constructor method for WatchTaskRequest
     * @uses WatchTaskRequest::setTask()
     * @uses WatchTaskRequest::setWatchConditionName()
     * @uses WatchTaskRequest::setWatchFolderName()
     * @uses WatchTaskRequest::setWatchTaskName()
     * @param \StructType\WatchFolderTask $task
     * @param string $watchConditionName
     * @param string $watchFolderName
     * @param string $watchTaskName
     */
    public function __construct(\StructType\WatchFolderTask $task = null, $watchConditionName = null, $watchFolderName = null, $watchTaskName = null)
    {
        $this
            ->setTask($task)
            ->setWatchConditionName($watchConditionName)
            ->setWatchFolderName($watchFolderName)
            ->setWatchTaskName($watchTaskName);
    }
    /**
     * Get Task value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WatchFolderTask|null
     */
    public function getTask()
    {
        return isset($this->Task) ? $this->Task : null;
    }
    /**
     * Set Task value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\WatchFolderTask $task
     * @return \StructType\WatchTaskRequest
     */
    public function setTask(\StructType\WatchFolderTask $task = null)
    {
        if (is_null($task) || (is_array($task) && empty($task))) {
            unset($this->Task);
        } else {
            $this->Task = $task;
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
     * @return \StructType\WatchTaskRequest
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
     * @return \StructType\WatchTaskRequest
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
    /**
     * Get WatchTaskName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWatchTaskName()
    {
        return isset($this->WatchTaskName) ? $this->WatchTaskName : null;
    }
    /**
     * Set WatchTaskName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $watchTaskName
     * @return \StructType\WatchTaskRequest
     */
    public function setWatchTaskName($watchTaskName = null)
    {
        // validation for constraint: string
        if (!is_null($watchTaskName) && !is_string($watchTaskName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($watchTaskName, true), gettype($watchTaskName)), __LINE__);
        }
        if (is_null($watchTaskName) || (is_array($watchTaskName) && empty($watchTaskName))) {
            unset($this->WatchTaskName);
        } else {
            $this->WatchTaskName = $watchTaskName;
        }
        return $this;
    }
}
