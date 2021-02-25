<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelCompositionResponse StructType
 * @subpackage Structs
 */
class CancelCompositionResponse extends AbstractStructBase
{
    /**
     * The CancelCompositionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLResponse
     */
    public $CancelCompositionResult;
    /**
     * Constructor method for CancelCompositionResponse
     * @uses CancelCompositionResponse::setCancelCompositionResult()
     * @param \StructType\CompositionFilePathURLResponse $cancelCompositionResult
     */
    public function __construct(\StructType\CompositionFilePathURLResponse $cancelCompositionResult = null)
    {
        $this
            ->setCancelCompositionResult($cancelCompositionResult);
    }
    /**
     * Get CancelCompositionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLResponse|null
     */
    public function getCancelCompositionResult()
    {
        return isset($this->CancelCompositionResult) ? $this->CancelCompositionResult : null;
    }
    /**
     * Set CancelCompositionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLResponse $cancelCompositionResult
     * @return \StructType\CancelCompositionResponse
     */
    public function setCancelCompositionResult(\StructType\CompositionFilePathURLResponse $cancelCompositionResult = null)
    {
        if (is_null($cancelCompositionResult) || (is_array($cancelCompositionResult) && empty($cancelCompositionResult))) {
            unset($this->CancelCompositionResult);
        } else {
            $this->CancelCompositionResult = $cancelCompositionResult;
        }
        return $this;
    }
}
