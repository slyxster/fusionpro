<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListGroupsResponse StructType
 * @subpackage Structs
 */
class ListGroupsResponse extends AbstractStructBase
{
    /**
     * The ListGroupsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateCollectionResponse
     */
    public $ListGroupsResult;
    /**
     * Constructor method for ListGroupsResponse
     * @uses ListGroupsResponse::setListGroupsResult()
     * @param \StructType\TemplateCollectionResponse $listGroupsResult
     */
    public function __construct(\StructType\TemplateCollectionResponse $listGroupsResult = null)
    {
        $this
            ->setListGroupsResult($listGroupsResult);
    }
    /**
     * Get ListGroupsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateCollectionResponse|null
     */
    public function getListGroupsResult()
    {
        return isset($this->ListGroupsResult) ? $this->ListGroupsResult : null;
    }
    /**
     * Set ListGroupsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateCollectionResponse $listGroupsResult
     * @return \StructType\ListGroupsResponse
     */
    public function setListGroupsResult(\StructType\TemplateCollectionResponse $listGroupsResult = null)
    {
        if (is_null($listGroupsResult) || (is_array($listGroupsResult) && empty($listGroupsResult))) {
            unset($this->ListGroupsResult);
        } else {
            $this->ListGroupsResult = $listGroupsResult;
        }
        return $this;
    }
}
