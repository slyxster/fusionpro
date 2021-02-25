<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListCompositionSessionsResponse StructType
 * @subpackage Structs
 */
class ListCompositionSessionsResponse extends AbstractStructBase
{
    /**
     * The ListCompositionSessionsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfint
     */
    public $ListCompositionSessionsResult;
    /**
     * Constructor method for ListCompositionSessionsResponse
     * @uses ListCompositionSessionsResponse::setListCompositionSessionsResult()
     * @param \ArrayType\ArrayOfint $listCompositionSessionsResult
     */
    public function __construct(\ArrayType\ArrayOfint $listCompositionSessionsResult = null)
    {
        $this
            ->setListCompositionSessionsResult($listCompositionSessionsResult);
    }
    /**
     * Get ListCompositionSessionsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfint|null
     */
    public function getListCompositionSessionsResult()
    {
        return isset($this->ListCompositionSessionsResult) ? $this->ListCompositionSessionsResult : null;
    }
    /**
     * Set ListCompositionSessionsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfint $listCompositionSessionsResult
     * @return \StructType\ListCompositionSessionsResponse
     */
    public function setListCompositionSessionsResult(\ArrayType\ArrayOfint $listCompositionSessionsResult = null)
    {
        if (is_null($listCompositionSessionsResult) || (is_array($listCompositionSessionsResult) && empty($listCompositionSessionsResult))) {
            unset($this->ListCompositionSessionsResult);
        } else {
            $this->ListCompositionSessionsResult = $listCompositionSessionsResult;
        }
        return $this;
    }
}
