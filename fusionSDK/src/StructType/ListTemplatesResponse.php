<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListTemplatesResponse StructType
 * @subpackage Structs
 */
class ListTemplatesResponse extends AbstractStructBase
{
    /**
     * The ListTemplatesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateCollectionResponse
     */
    public $ListTemplatesResult;
    /**
     * Constructor method for ListTemplatesResponse
     * @uses ListTemplatesResponse::setListTemplatesResult()
     * @param \StructType\TemplateCollectionResponse $listTemplatesResult
     */
    public function __construct(\StructType\TemplateCollectionResponse $listTemplatesResult = null)
    {
        $this
            ->setListTemplatesResult($listTemplatesResult);
    }
    /**
     * Get ListTemplatesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateCollectionResponse|null
     */
    public function getListTemplatesResult()
    {
        return isset($this->ListTemplatesResult) ? $this->ListTemplatesResult : null;
    }
    /**
     * Set ListTemplatesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateCollectionResponse $listTemplatesResult
     * @return \StructType\ListTemplatesResponse
     */
    public function setListTemplatesResult(\StructType\TemplateCollectionResponse $listTemplatesResult = null)
    {
        if (is_null($listTemplatesResult) || (is_array($listTemplatesResult) && empty($listTemplatesResult))) {
            unset($this->ListTemplatesResult);
        } else {
            $this->ListTemplatesResult = $listTemplatesResult;
        }
        return $this;
    }
}
