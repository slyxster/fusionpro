<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddTemplateFromFileResponse StructType
 * @subpackage Structs
 */
class AddTemplateFromFileResponse extends AbstractStructBase
{
    /**
     * The AddTemplateFromFileResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateAddResponse
     */
    public $AddTemplateFromFileResult;
    /**
     * Constructor method for AddTemplateFromFileResponse
     * @uses AddTemplateFromFileResponse::setAddTemplateFromFileResult()
     * @param \StructType\TemplateAddResponse $addTemplateFromFileResult
     */
    public function __construct(\StructType\TemplateAddResponse $addTemplateFromFileResult = null)
    {
        $this
            ->setAddTemplateFromFileResult($addTemplateFromFileResult);
    }
    /**
     * Get AddTemplateFromFileResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateAddResponse|null
     */
    public function getAddTemplateFromFileResult()
    {
        return isset($this->AddTemplateFromFileResult) ? $this->AddTemplateFromFileResult : null;
    }
    /**
     * Set AddTemplateFromFileResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateAddResponse $addTemplateFromFileResult
     * @return \StructType\AddTemplateFromFileResponse
     */
    public function setAddTemplateFromFileResult(\StructType\TemplateAddResponse $addTemplateFromFileResult = null)
    {
        if (is_null($addTemplateFromFileResult) || (is_array($addTemplateFromFileResult) && empty($addTemplateFromFileResult))) {
            unset($this->AddTemplateFromFileResult);
        } else {
            $this->AddTemplateFromFileResult = $addTemplateFromFileResult;
        }
        return $this;
    }
}
