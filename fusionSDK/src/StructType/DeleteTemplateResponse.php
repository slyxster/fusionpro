<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTemplateResponse StructType
 * @subpackage Structs
 */
class DeleteTemplateResponse extends AbstractStructBase
{
    /**
     * The DeleteTemplateResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateResponse
     */
    public $DeleteTemplateResult;
    /**
     * Constructor method for DeleteTemplateResponse
     * @uses DeleteTemplateResponse::setDeleteTemplateResult()
     * @param \StructType\TemplateResponse $deleteTemplateResult
     */
    public function __construct(\StructType\TemplateResponse $deleteTemplateResult = null)
    {
        $this
            ->setDeleteTemplateResult($deleteTemplateResult);
    }
    /**
     * Get DeleteTemplateResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateResponse|null
     */
    public function getDeleteTemplateResult()
    {
        return isset($this->DeleteTemplateResult) ? $this->DeleteTemplateResult : null;
    }
    /**
     * Set DeleteTemplateResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateResponse $deleteTemplateResult
     * @return \StructType\DeleteTemplateResponse
     */
    public function setDeleteTemplateResult(\StructType\TemplateResponse $deleteTemplateResult = null)
    {
        if (is_null($deleteTemplateResult) || (is_array($deleteTemplateResult) && empty($deleteTemplateResult))) {
            unset($this->DeleteTemplateResult);
        } else {
            $this->DeleteTemplateResult = $deleteTemplateResult;
        }
        return $this;
    }
}
