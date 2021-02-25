<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteThisCompositionResponse StructType
 * @subpackage Structs
 */
class DeleteThisCompositionResponse extends AbstractStructBase
{
    /**
     * The DeleteThisCompositionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLResponse
     */
    public $DeleteThisCompositionResult;
    /**
     * Constructor method for DeleteThisCompositionResponse
     * @uses DeleteThisCompositionResponse::setDeleteThisCompositionResult()
     * @param \StructType\CompositionFilePathURLResponse $deleteThisCompositionResult
     */
    public function __construct(\StructType\CompositionFilePathURLResponse $deleteThisCompositionResult = null)
    {
        $this
            ->setDeleteThisCompositionResult($deleteThisCompositionResult);
    }
    /**
     * Get DeleteThisCompositionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLResponse|null
     */
    public function getDeleteThisCompositionResult()
    {
        return isset($this->DeleteThisCompositionResult) ? $this->DeleteThisCompositionResult : null;
    }
    /**
     * Set DeleteThisCompositionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLResponse $deleteThisCompositionResult
     * @return \StructType\DeleteThisCompositionResponse
     */
    public function setDeleteThisCompositionResult(\StructType\CompositionFilePathURLResponse $deleteThisCompositionResult = null)
    {
        if (is_null($deleteThisCompositionResult) || (is_array($deleteThisCompositionResult) && empty($deleteThisCompositionResult))) {
            unset($this->DeleteThisCompositionResult);
        } else {
            $this->DeleteThisCompositionResult = $deleteThisCompositionResult;
        }
        return $this;
    }
}
