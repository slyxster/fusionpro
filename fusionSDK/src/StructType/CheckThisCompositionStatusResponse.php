<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckThisCompositionStatusResponse StructType
 * @subpackage Structs
 */
class CheckThisCompositionStatusResponse extends AbstractStructBase
{
    /**
     * The CheckThisCompositionStatusResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionStatus
     */
    public $CheckThisCompositionStatusResult;
    /**
     * Constructor method for CheckThisCompositionStatusResponse
     * @uses CheckThisCompositionStatusResponse::setCheckThisCompositionStatusResult()
     * @param \StructType\CompositionStatus $checkThisCompositionStatusResult
     */
    public function __construct(\StructType\CompositionStatus $checkThisCompositionStatusResult = null)
    {
        $this
            ->setCheckThisCompositionStatusResult($checkThisCompositionStatusResult);
    }
    /**
     * Get CheckThisCompositionStatusResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionStatus|null
     */
    public function getCheckThisCompositionStatusResult()
    {
        return isset($this->CheckThisCompositionStatusResult) ? $this->CheckThisCompositionStatusResult : null;
    }
    /**
     * Set CheckThisCompositionStatusResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionStatus $checkThisCompositionStatusResult
     * @return \StructType\CheckThisCompositionStatusResponse
     */
    public function setCheckThisCompositionStatusResult(\StructType\CompositionStatus $checkThisCompositionStatusResult = null)
    {
        if (is_null($checkThisCompositionStatusResult) || (is_array($checkThisCompositionStatusResult) && empty($checkThisCompositionStatusResult))) {
            unset($this->CheckThisCompositionStatusResult);
        } else {
            $this->CheckThisCompositionStatusResult = $checkThisCompositionStatusResult;
        }
        return $this;
    }
}
