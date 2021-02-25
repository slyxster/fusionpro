<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteGroupResponse StructType
 * @subpackage Structs
 */
class DeleteGroupResponse extends AbstractStructBase
{
    /**
     * The DeleteGroupResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateResponse
     */
    public $DeleteGroupResult;
    /**
     * Constructor method for DeleteGroupResponse
     * @uses DeleteGroupResponse::setDeleteGroupResult()
     * @param \StructType\TemplateResponse $deleteGroupResult
     */
    public function __construct(\StructType\TemplateResponse $deleteGroupResult = null)
    {
        $this
            ->setDeleteGroupResult($deleteGroupResult);
    }
    /**
     * Get DeleteGroupResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateResponse|null
     */
    public function getDeleteGroupResult()
    {
        return isset($this->DeleteGroupResult) ? $this->DeleteGroupResult : null;
    }
    /**
     * Set DeleteGroupResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateResponse $deleteGroupResult
     * @return \StructType\DeleteGroupResponse
     */
    public function setDeleteGroupResult(\StructType\TemplateResponse $deleteGroupResult = null)
    {
        if (is_null($deleteGroupResult) || (is_array($deleteGroupResult) && empty($deleteGroupResult))) {
            unset($this->DeleteGroupResult);
        } else {
            $this->DeleteGroupResult = $deleteGroupResult;
        }
        return $this;
    }
}
