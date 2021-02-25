<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTemplate ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTemplate
 * @subpackage Arrays
 */
class ArrayOfTemplate extends AbstractStructArrayBase
{
    /**
     * The Template
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Template[]
     */
    public $Template;
    /**
     * Constructor method for ArrayOfTemplate
     * @uses ArrayOfTemplate::setTemplate()
     * @param \StructType\Template[] $template
     */
    public function __construct(array $template = array())
    {
        $this
            ->setTemplate($template);
    }
    /**
     * Get Template value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Template[]|null
     */
    public function getTemplate()
    {
        return isset($this->Template) ? $this->Template : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTemplate method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTemplate method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTemplateForArrayConstraintsFromSetTemplate(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTemplateTemplateItem) {
            // validation for constraint: itemType
            if (!$arrayOfTemplateTemplateItem instanceof \StructType\Template) {
                $invalidValues[] = is_object($arrayOfTemplateTemplateItem) ? get_class($arrayOfTemplateTemplateItem) : sprintf('%s(%s)', gettype($arrayOfTemplateTemplateItem), var_export($arrayOfTemplateTemplateItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Template property can only contain items of type \StructType\Template, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Template value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \StructType\Template[] $template
     * @return \ArrayType\ArrayOfTemplate
     */
    public function setTemplate(array $template = array())
    {
        // validation for constraint: array
        if ('' !== ($templateArrayErrorMessage = self::validateTemplateForArrayConstraintsFromSetTemplate($template))) {
            throw new \InvalidArgumentException($templateArrayErrorMessage, __LINE__);
        }
        if (is_null($template) || (is_array($template) && empty($template))) {
            unset($this->Template);
        } else {
            $this->Template = $template;
        }
        return $this;
    }
    /**
     * Add item to Template value
     * @throws \InvalidArgumentException
     * @param \StructType\Template $item
     * @return \ArrayType\ArrayOfTemplate
     */
    public function addToTemplate(\StructType\Template $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Template) {
            throw new \InvalidArgumentException(sprintf('The Template property can only contain items of type \StructType\Template, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Template[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Template|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Template|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Template|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Template|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Template|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Template
     */
    public function getAttributeName()
    {
        return 'Template';
    }
}
