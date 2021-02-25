<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DataRecord StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DataRecord
 * @subpackage Structs
 */
class DataRecord extends AbstractStructBase
{
    /**
     * The Fields
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDataField
     */
    public $Fields;
    /**
     * Constructor method for DataRecord
     * @uses DataRecord::setFields()
     * @param \ArrayType\ArrayOfDataField $fields
     */
    public function __construct(\ArrayType\ArrayOfDataField $fields = null)
    {
        $this
            ->setFields($fields);
    }
    /**
     * Get Fields value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDataField|null
     */
    public function getFields()
    {
        return isset($this->Fields) ? $this->Fields : null;
    }
    /**
     * Set Fields value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDataField $fields
     * @return \StructType\DataRecord
     */
    public function setFields(\ArrayType\ArrayOfDataField $fields = null)
    {
        if (is_null($fields) || (is_array($fields) && empty($fields))) {
            unset($this->Fields);
        } else {
            $this->Fields = $fields;
        }
        return $this;
    }
}
