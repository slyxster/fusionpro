<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfApplicationSetting ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfApplicationSetting
 * @subpackage Arrays
 */
class ArrayOfApplicationSetting extends AbstractStructArrayBase
{
    /**
     * The ApplicationSetting
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ApplicationSetting[]
     */
    public $ApplicationSetting;
    /**
     * Constructor method for ArrayOfApplicationSetting
     * @uses ArrayOfApplicationSetting::setApplicationSetting()
     * @param \StructType\ApplicationSetting[] $applicationSetting
     */
    public function __construct(array $applicationSetting = array())
    {
        $this
            ->setApplicationSetting($applicationSetting);
    }
    /**
     * Get ApplicationSetting value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ApplicationSetting[]|null
     */
    public function getApplicationSetting()
    {
        return isset($this->ApplicationSetting) ? $this->ApplicationSetting : null;
    }
    /**
     * This method is responsible for validating the values passed to the setApplicationSetting method
     * This method is willingly generated in order to preserve the one-line inline validation within the setApplicationSetting method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateApplicationSettingForArrayConstraintsFromSetApplicationSetting(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfApplicationSettingApplicationSettingItem) {
            // validation for constraint: itemType
            if (!$arrayOfApplicationSettingApplicationSettingItem instanceof \StructType\ApplicationSetting) {
                $invalidValues[] = is_object($arrayOfApplicationSettingApplicationSettingItem) ? get_class($arrayOfApplicationSettingApplicationSettingItem) : sprintf('%s(%s)', gettype($arrayOfApplicationSettingApplicationSettingItem), var_export($arrayOfApplicationSettingApplicationSettingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ApplicationSetting property can only contain items of type \StructType\ApplicationSetting, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ApplicationSetting value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\ApplicationSetting[] $applicationSetting
     * @return \ArrayType\ArrayOfApplicationSetting
     */
    public function setApplicationSetting(array $applicationSetting = array())
    {
        // validation for constraint: array
        if ('' !== ($applicationSettingArrayErrorMessage = self::validateApplicationSettingForArrayConstraintsFromSetApplicationSetting($applicationSetting))) {
            throw new \InvalidArgumentException($applicationSettingArrayErrorMessage, __LINE__);
        }
        if (is_null($applicationSetting) || (is_array($applicationSetting) && empty($applicationSetting))) {
            unset($this->ApplicationSetting);
        } else {
            $this->ApplicationSetting = $applicationSetting;
        }
        return $this;
    }
    /**
     * Add item to ApplicationSetting value
     * @throws \InvalidArgumentException
     * @param \StructType\ApplicationSetting $item
     * @return \ArrayType\ArrayOfApplicationSetting
     */
    public function addToApplicationSetting(\StructType\ApplicationSetting $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ApplicationSetting) {
            throw new \InvalidArgumentException(sprintf('The ApplicationSetting property can only contain items of type \StructType\ApplicationSetting, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ApplicationSetting[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ApplicationSetting|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ApplicationSetting|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ApplicationSetting|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ApplicationSetting|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ApplicationSetting|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ApplicationSetting
     */
    public function getAttributeName()
    {
        return 'ApplicationSetting';
    }
}
