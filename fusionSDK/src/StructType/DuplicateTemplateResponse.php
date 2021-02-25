<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateTemplateResponse StructType
 * @subpackage Structs
 */
class DuplicateTemplateResponse extends AbstractStructBase
{
    /**
     * The DuplicateTemplateResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateAddResponse
     */
    public $DuplicateTemplateResult;
    /**
     * Constructor method for DuplicateTemplateResponse
     * @uses DuplicateTemplateResponse::setDuplicateTemplateResult()
     * @param \StructType\TemplateAddResponse $duplicateTemplateResult
     */
    public function __construct(\StructType\TemplateAddResponse $duplicateTemplateResult = null)
    {
        $this
            ->setDuplicateTemplateResult($duplicateTemplateResult);
    }
    /**
     * Get DuplicateTemplateResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateAddResponse|null
     */
    public function getDuplicateTemplateResult()
    {
        return isset($this->DuplicateTemplateResult) ? $this->DuplicateTemplateResult : null;
    }
    /**
     * Set DuplicateTemplateResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateAddResponse $duplicateTemplateResult
     * @return \StructType\DuplicateTemplateResponse
     */
    public function setDuplicateTemplateResult(\StructType\TemplateAddResponse $duplicateTemplateResult = null)
    {
        if (is_null($duplicateTemplateResult) || (is_array($duplicateTemplateResult) && empty($duplicateTemplateResult))) {
            unset($this->DuplicateTemplateResult);
        } else {
            $this->DuplicateTemplateResult = $duplicateTemplateResult;
        }
        return $this;
    }
}
