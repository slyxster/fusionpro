<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RenameTemplateResponse StructType
 * @subpackage Structs
 */
class RenameTemplateResponse extends AbstractStructBase
{
    /**
     * The RenameTemplateResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateResponse
     */
    public $RenameTemplateResult;
    /**
     * Constructor method for RenameTemplateResponse
     * @uses RenameTemplateResponse::setRenameTemplateResult()
     * @param \StructType\TemplateResponse $renameTemplateResult
     */
    public function __construct(\StructType\TemplateResponse $renameTemplateResult = null)
    {
        $this
            ->setRenameTemplateResult($renameTemplateResult);
    }
    /**
     * Get RenameTemplateResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateResponse|null
     */
    public function getRenameTemplateResult()
    {
        return isset($this->RenameTemplateResult) ? $this->RenameTemplateResult : null;
    }
    /**
     * Set RenameTemplateResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateResponse $renameTemplateResult
     * @return \StructType\RenameTemplateResponse
     */
    public function setRenameTemplateResult(\StructType\TemplateResponse $renameTemplateResult = null)
    {
        if (is_null($renameTemplateResult) || (is_array($renameTemplateResult) && empty($renameTemplateResult))) {
            unset($this->RenameTemplateResult);
        } else {
            $this->RenameTemplateResult = $renameTemplateResult;
        }
        return $this;
    }
}
