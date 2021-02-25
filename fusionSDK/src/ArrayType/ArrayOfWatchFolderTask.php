<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWatchFolderTask ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfWatchFolderTask
 * @subpackage Arrays
 */
class ArrayOfWatchFolderTask extends AbstractStructArrayBase
{
    /**
     * The WatchFolderTask
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WatchFolderTask[]
     */
    public $WatchFolderTask;
    /**
     * Constructor method for ArrayOfWatchFolderTask
     * @uses ArrayOfWatchFolderTask::setWatchFolderTask()
     * @param \StructType\WatchFolderTask[] $watchFolderTask
     */
    public function __construct(array $watchFolderTask = array())
    {
        $this
            ->setWatchFolderTask($watchFolderTask);
    }
    /**
     * Get WatchFolderTask value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WatchFolderTask[]|null
     */
    public function getWatchFolderTask()
    {
        return isset($this->WatchFolderTask) ? $this->WatchFolderTask : null;
    }
    /**
     * This method is responsible for validating the values passed to the setWatchFolderTask method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWatchFolderTask method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWatchFolderTaskForArrayConstraintsFromSetWatchFolderTask(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWatchFolderTaskWatchFolderTaskItem) {
            // validation for constraint: itemType
            if (!$arrayOfWatchFolderTaskWatchFolderTaskItem instanceof \StructType\WatchFolderTask) {
                $invalidValues[] = is_object($arrayOfWatchFolderTaskWatchFolderTaskItem) ? get_class($arrayOfWatchFolderTaskWatchFolderTaskItem) : sprintf('%s(%s)', gettype($arrayOfWatchFolderTaskWatchFolderTaskItem), var_export($arrayOfWatchFolderTaskWatchFolderTaskItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WatchFolderTask property can only contain items of type \StructType\WatchFolderTask, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set WatchFolderTask value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\WatchFolderTask[] $watchFolderTask
     * @return \ArrayType\ArrayOfWatchFolderTask
     */
    public function setWatchFolderTask(array $watchFolderTask = array())
    {
        // validation for constraint: array
        if ('' !== ($watchFolderTaskArrayErrorMessage = self::validateWatchFolderTaskForArrayConstraintsFromSetWatchFolderTask($watchFolderTask))) {
            throw new \InvalidArgumentException($watchFolderTaskArrayErrorMessage, __LINE__);
        }
        if (is_null($watchFolderTask) || (is_array($watchFolderTask) && empty($watchFolderTask))) {
            unset($this->WatchFolderTask);
        } else {
            $this->WatchFolderTask = $watchFolderTask;
        }
        return $this;
    }
    /**
     * Add item to WatchFolderTask value
     * @throws \InvalidArgumentException
     * @param \StructType\WatchFolderTask $item
     * @return \ArrayType\ArrayOfWatchFolderTask
     */
    public function addToWatchFolderTask(\StructType\WatchFolderTask $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WatchFolderTask) {
            throw new \InvalidArgumentException(sprintf('The WatchFolderTask property can only contain items of type \StructType\WatchFolderTask, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->WatchFolderTask[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WatchFolderTask|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WatchFolderTask|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WatchFolderTask|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WatchFolderTask|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WatchFolderTask|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WatchFolderTask
     */
    public function getAttributeName()
    {
        return 'WatchFolderTask';
    }
}
