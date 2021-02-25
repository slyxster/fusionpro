<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelThisCompositionResponse StructType
 * @subpackage Structs
 */
class CancelThisCompositionResponse extends AbstractStructBase
{
    /**
     * The CancelThisCompositionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLResponse
     */
    public $CancelThisCompositionResult;
    /**
     * Constructor method for CancelThisCompositionResponse
     * @uses CancelThisCompositionResponse::setCancelThisCompositionResult()
     * @param \StructType\CompositionFilePathURLResponse $cancelThisCompositionResult
     */
    public function __construct(\StructType\CompositionFilePathURLResponse $cancelThisCompositionResult = null)
    {
        $this
            ->setCancelThisCompositionResult($cancelThisCompositionResult);
    }
    /**
     * Get CancelThisCompositionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLResponse|null
     */
    public function getCancelThisCompositionResult()
    {
        return isset($this->CancelThisCompositionResult) ? $this->CancelThisCompositionResult : null;
    }
    /**
     * Set CancelThisCompositionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLResponse $cancelThisCompositionResult
     * @return \StructType\CancelThisCompositionResponse
     */
    public function setCancelThisCompositionResult(\StructType\CompositionFilePathURLResponse $cancelThisCompositionResult = null)
    {
        if (is_null($cancelThisCompositionResult) || (is_array($cancelThisCompositionResult) && empty($cancelThisCompositionResult))) {
            unset($this->CancelThisCompositionResult);
        } else {
            $this->CancelThisCompositionResult = $cancelThisCompositionResult;
        }
        return $this;
    }
}
