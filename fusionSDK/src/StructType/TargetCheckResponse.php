<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TargetCheckResponse StructType
 * @subpackage Structs
 */
class TargetCheckResponse extends AbstractStructBase
{
    /**
     * The TargetCheckResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TargetStatusResponse
     */
    public $TargetCheckResult;
    /**
     * Constructor method for TargetCheckResponse
     * @uses TargetCheckResponse::setTargetCheckResult()
     * @param \StructType\TargetStatusResponse $targetCheckResult
     */
    public function __construct(\StructType\TargetStatusResponse $targetCheckResult = null)
    {
        $this
            ->setTargetCheckResult($targetCheckResult);
    }
    /**
     * Get TargetCheckResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TargetStatusResponse|null
     */
    public function getTargetCheckResult()
    {
        return isset($this->TargetCheckResult) ? $this->TargetCheckResult : null;
    }
    /**
     * Set TargetCheckResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TargetStatusResponse $targetCheckResult
     * @return \StructType\TargetCheckResponse
     */
    public function setTargetCheckResult(\StructType\TargetStatusResponse $targetCheckResult = null)
    {
        if (is_null($targetCheckResult) || (is_array($targetCheckResult) && empty($targetCheckResult))) {
            unset($this->TargetCheckResult);
        } else {
            $this->TargetCheckResult = $targetCheckResult;
        }
        return $this;
    }
}
