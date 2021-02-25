<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfKeyValueOfstringWatchFolderSettingsckesQ5Bp
 * ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfKeyValueOfstringWatchFolderSettingsckesQ5Bp
 * @subpackage Arrays
 */
class ArrayOfKeyValueOfstringWatchFolderSettingsckesQ5Bp extends AbstractStructArrayBase
{
    /**
     * The KeyValueOfstringWatchFolderSettingsckesQ5Bp
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp[]
     */
    public $KeyValueOfstringWatchFolderSettingsckesQ5Bp;
    /**
     * Constructor method for ArrayOfKeyValueOfstringWatchFolderSettingsckesQ5Bp
     * @uses ArrayOfKeyValueOfstringWatchFolderSettingsckesQ5Bp::setKeyValueOfstringWatchFolderSettingsckesQ5Bp()
     * @param \StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp[] $keyValueOfstringWatchFolderSettingsckesQ5Bp
     */
    public function __construct(array $keyValueOfstringWatchFolderSettingsckesQ5Bp = array())
    {
        $this
            ->setKeyValueOfstringWatchFolderSettingsckesQ5Bp($keyValueOfstringWatchFolderSettingsckesQ5Bp);
    }
    /**
     * Get KeyValueOfstringWatchFolderSettingsckesQ5Bp value
     * @return \StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp[]|null
     */
    public function getKeyValueOfstringWatchFolderSettingsckesQ5Bp()
    {
        return $this->KeyValueOfstringWatchFolderSettingsckesQ5Bp;
    }
    /**
     * This method is responsible for validating the values passed to the setKeyValueOfstringWatchFolderSettingsckesQ5Bp method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKeyValueOfstringWatchFolderSettingsckesQ5Bp method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKeyValueOfstringWatchFolderSettingsckesQ5BpForArrayConstraintsFromSetKeyValueOfstringWatchFolderSettingsckesQ5Bp(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfKeyValueOfstringWatchFolderSettingsckesQ5BpKeyValueOfstringWatchFolderSettingsckesQ5BpItem) {
            // validation for constraint: itemType
            if (!$arrayOfKeyValueOfstringWatchFolderSettingsckesQ5BpKeyValueOfstringWatchFolderSettingsckesQ5BpItem instanceof \StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp) {
                $invalidValues[] = is_object($arrayOfKeyValueOfstringWatchFolderSettingsckesQ5BpKeyValueOfstringWatchFolderSettingsckesQ5BpItem) ? get_class($arrayOfKeyValueOfstringWatchFolderSettingsckesQ5BpKeyValueOfstringWatchFolderSettingsckesQ5BpItem) : sprintf('%s(%s)', gettype($arrayOfKeyValueOfstringWatchFolderSettingsckesQ5BpKeyValueOfstringWatchFolderSettingsckesQ5BpItem), var_export($arrayOfKeyValueOfstringWatchFolderSettingsckesQ5BpKeyValueOfstringWatchFolderSettingsckesQ5BpItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The KeyValueOfstringWatchFolderSettingsckesQ5Bp property can only contain items of type \StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set KeyValueOfstringWatchFolderSettingsckesQ5Bp value
     * @throws \InvalidArgumentException
     * @param \StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp[] $keyValueOfstringWatchFolderSettingsckesQ5Bp
     * @return \ArrayType\ArrayOfKeyValueOfstringWatchFolderSettingsckesQ5Bp
     */
    public function setKeyValueOfstringWatchFolderSettingsckesQ5Bp(array $keyValueOfstringWatchFolderSettingsckesQ5Bp = array())
    {
        // validation for constraint: array
        if ('' !== ($keyValueOfstringWatchFolderSettingsckesQ5BpArrayErrorMessage = self::validateKeyValueOfstringWatchFolderSettingsckesQ5BpForArrayConstraintsFromSetKeyValueOfstringWatchFolderSettingsckesQ5Bp($keyValueOfstringWatchFolderSettingsckesQ5Bp))) {
            throw new \InvalidArgumentException($keyValueOfstringWatchFolderSettingsckesQ5BpArrayErrorMessage, __LINE__);
        }
        $this->KeyValueOfstringWatchFolderSettingsckesQ5Bp = $keyValueOfstringWatchFolderSettingsckesQ5Bp;
        return $this;
    }
    /**
     * Add item to KeyValueOfstringWatchFolderSettingsckesQ5Bp value
     * @throws \InvalidArgumentException
     * @param \StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp $item
     * @return \ArrayType\ArrayOfKeyValueOfstringWatchFolderSettingsckesQ5Bp
     */
    public function addToKeyValueOfstringWatchFolderSettingsckesQ5Bp(\StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp) {
            throw new \InvalidArgumentException(sprintf('The KeyValueOfstringWatchFolderSettingsckesQ5Bp property can only contain items of type \StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->KeyValueOfstringWatchFolderSettingsckesQ5Bp[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\KeyValueOfstringWatchFolderSettingsckesQ5Bp|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeyValueOfstringWatchFolderSettingsckesQ5Bp
     */
    public function getAttributeName()
    {
        return 'KeyValueOfstringWatchFolderSettingsckesQ5Bp';
    }
}
