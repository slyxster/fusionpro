<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddCompositionResourceResponse StructType
 * @subpackage Structs
 */
class AddCompositionResourceResponse extends AbstractStructBase
{
    /**
     * The AddCompositionResourceResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AddCompositionComponentResponse
     */
    public $AddCompositionResourceResult;
    /**
     * Constructor method for AddCompositionResourceResponse
     * @uses AddCompositionResourceResponse::setAddCompositionResourceResult()
     * @param \StructType\AddCompositionComponentResponse $addCompositionResourceResult
     */
    public function __construct(\StructType\AddCompositionComponentResponse $addCompositionResourceResult = null)
    {
        $this
            ->setAddCompositionResourceResult($addCompositionResourceResult);
    }
    /**
     * Get AddCompositionResourceResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AddCompositionComponentResponse|null
     */
    public function getAddCompositionResourceResult()
    {
        return isset($this->AddCompositionResourceResult) ? $this->AddCompositionResourceResult : null;
    }
    /**
     * Set AddCompositionResourceResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AddCompositionComponentResponse $addCompositionResourceResult
     * @return \StructType\AddCompositionResourceResponse
     */
    public function setAddCompositionResourceResult(\StructType\AddCompositionComponentResponse $addCompositionResourceResult = null)
    {
        if (is_null($addCompositionResourceResult) || (is_array($addCompositionResourceResult) && empty($addCompositionResourceResult))) {
            unset($this->AddCompositionResourceResult);
        } else {
            $this->AddCompositionResourceResult = $addCompositionResourceResult;
        }
        return $this;
    }
}
