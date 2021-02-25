<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddTemplateFromBytesResponse StructType
 * @subpackage Structs
 */
class AddTemplateFromBytesResponse extends AbstractStructBase
{
    /**
     * The AddTemplateFromBytesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateAddResponse
     */
    public $AddTemplateFromBytesResult;
    /**
     * Constructor method for AddTemplateFromBytesResponse
     * @uses AddTemplateFromBytesResponse::setAddTemplateFromBytesResult()
     * @param \StructType\TemplateAddResponse $addTemplateFromBytesResult
     */
    public function __construct(\StructType\TemplateAddResponse $addTemplateFromBytesResult = null)
    {
        $this
            ->setAddTemplateFromBytesResult($addTemplateFromBytesResult);
    }
    /**
     * Get AddTemplateFromBytesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateAddResponse|null
     */
    public function getAddTemplateFromBytesResult()
    {
        return isset($this->AddTemplateFromBytesResult) ? $this->AddTemplateFromBytesResult : null;
    }
    /**
     * Set AddTemplateFromBytesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateAddResponse $addTemplateFromBytesResult
     * @return \StructType\AddTemplateFromBytesResponse
     */
    public function setAddTemplateFromBytesResult(\StructType\TemplateAddResponse $addTemplateFromBytesResult = null)
    {
        if (is_null($addTemplateFromBytesResult) || (is_array($addTemplateFromBytesResult) && empty($addTemplateFromBytesResult))) {
            unset($this->AddTemplateFromBytesResult);
        } else {
            $this->AddTemplateFromBytesResult = $addTemplateFromBytesResult;
        }
        return $this;
    }
}
