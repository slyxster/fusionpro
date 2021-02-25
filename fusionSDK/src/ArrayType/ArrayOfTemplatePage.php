<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTemplatePage ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTemplatePage
 * @subpackage Arrays
 */
class ArrayOfTemplatePage extends AbstractStructArrayBase
{
    /**
     * The TemplatePage
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplatePage[]
     */
    public $TemplatePage;
    /**
     * Constructor method for ArrayOfTemplatePage
     * @uses ArrayOfTemplatePage::setTemplatePage()
     * @param \StructType\TemplatePage[] $templatePage
     */
    public function __construct(array $templatePage = array())
    {
        $this
            ->setTemplatePage($templatePage);
    }
    /**
     * Get TemplatePage value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplatePage[]|null
     */
    public function getTemplatePage()
    {
        return isset($this->TemplatePage) ? $this->TemplatePage : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTemplatePage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTemplatePage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTemplatePageForArrayConstraintsFromSetTemplatePage(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTemplatePageTemplatePageItem) {
            // validation for constraint: itemType
            if (!$arrayOfTemplatePageTemplatePageItem instanceof \StructType\TemplatePage) {
                $invalidValues[] = is_object($arrayOfTemplatePageTemplatePageItem) ? get_class($arrayOfTemplatePageTemplatePageItem) : sprintf('%s(%s)', gettype($arrayOfTemplatePageTemplatePageItem), var_export($arrayOfTemplatePageTemplatePageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TemplatePage property can only contain items of type \StructType\TemplatePage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TemplatePage value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\TemplatePage[] $templatePage
     * @return \ArrayType\ArrayOfTemplatePage
     */
    public function setTemplatePage(array $templatePage = array())
    {
        // validation for constraint: array
        if ('' !== ($templatePageArrayErrorMessage = self::validateTemplatePageForArrayConstraintsFromSetTemplatePage($templatePage))) {
            throw new \InvalidArgumentException($templatePageArrayErrorMessage, __LINE__);
        }
        if (is_null($templatePage) || (is_array($templatePage) && empty($templatePage))) {
            unset($this->TemplatePage);
        } else {
            $this->TemplatePage = $templatePage;
        }
        return $this;
    }
    /**
     * Add item to TemplatePage value
     * @throws \InvalidArgumentException
     * @param \StructType\TemplatePage $item
     * @return \ArrayType\ArrayOfTemplatePage
     */
    public function addToTemplatePage(\StructType\TemplatePage $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TemplatePage) {
            throw new \InvalidArgumentException(sprintf('The TemplatePage property can only contain items of type \StructType\TemplatePage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TemplatePage[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\TemplatePage|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\TemplatePage|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\TemplatePage|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\TemplatePage|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\TemplatePage|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TemplatePage
     */
    public function getAttributeName()
    {
        return 'TemplatePage';
    }
}
