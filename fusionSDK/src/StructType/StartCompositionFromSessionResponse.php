<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StartCompositionFromSessionResponse StructType
 * @subpackage Structs
 */
class StartCompositionFromSessionResponse extends AbstractStructBase
{
    /**
     * The StartCompositionFromSessionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\StartCompositionResponse
     */
    public $StartCompositionFromSessionResult;
    /**
     * Constructor method for StartCompositionFromSessionResponse
     * @uses StartCompositionFromSessionResponse::setStartCompositionFromSessionResult()
     * @param \StructType\StartCompositionResponse $startCompositionFromSessionResult
     */
    public function __construct(\StructType\StartCompositionResponse $startCompositionFromSessionResult = null)
    {
        $this
            ->setStartCompositionFromSessionResult($startCompositionFromSessionResult);
    }
    /**
     * Get StartCompositionFromSessionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\StartCompositionResponse|null
     */
    public function getStartCompositionFromSessionResult()
    {
        return isset($this->StartCompositionFromSessionResult) ? $this->StartCompositionFromSessionResult : null;
    }
    /**
     * Set StartCompositionFromSessionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\StartCompositionResponse $startCompositionFromSessionResult
     * @return \StructType\StartCompositionFromSessionResponse
     */
    public function setStartCompositionFromSessionResult(\StructType\StartCompositionResponse $startCompositionFromSessionResult = null)
    {
        if (is_null($startCompositionFromSessionResult) || (is_array($startCompositionFromSessionResult) && empty($startCompositionFromSessionResult))) {
            unset($this->StartCompositionFromSessionResult);
        } else {
            $this->StartCompositionFromSessionResult = $startCompositionFromSessionResult;
        }
        return $this;
    }
}
