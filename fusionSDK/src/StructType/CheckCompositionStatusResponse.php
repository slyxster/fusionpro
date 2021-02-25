<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckCompositionStatusResponse StructType
 * @subpackage Structs
 */
class CheckCompositionStatusResponse extends AbstractStructBase
{
    /**
     * The CheckCompositionStatusResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionStatus
     */
    public $CheckCompositionStatusResult;
    /**
     * Constructor method for CheckCompositionStatusResponse
     * @uses CheckCompositionStatusResponse::setCheckCompositionStatusResult()
     * @param \StructType\CompositionStatus $checkCompositionStatusResult
     */
    public function __construct(\StructType\CompositionStatus $checkCompositionStatusResult = null)
    {
        $this
            ->setCheckCompositionStatusResult($checkCompositionStatusResult);
    }
    /**
     * Get CheckCompositionStatusResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionStatus|null
     */
    public function getCheckCompositionStatusResult()
    {
        return isset($this->CheckCompositionStatusResult) ? $this->CheckCompositionStatusResult : null;
    }
    /**
     * Set CheckCompositionStatusResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionStatus $checkCompositionStatusResult
     * @return \StructType\CheckCompositionStatusResponse
     */
    public function setCheckCompositionStatusResult(\StructType\CompositionStatus $checkCompositionStatusResult = null)
    {
        if (is_null($checkCompositionStatusResult) || (is_array($checkCompositionStatusResult) && empty($checkCompositionStatusResult))) {
            unset($this->CheckCompositionStatusResult);
        } else {
            $this->CheckCompositionStatusResult = $checkCompositionStatusResult;
        }
        return $this;
    }
}
