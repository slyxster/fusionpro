<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateOnDemandCompositionSessionResponse StructType
 * @subpackage Structs
 */
class CreateOnDemandCompositionSessionResponse extends AbstractStructBase
{
    /**
     * The CreateOnDemandCompositionSessionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CreateCompositionResponse
     */
    public $CreateOnDemandCompositionSessionResult;
    /**
     * Constructor method for CreateOnDemandCompositionSessionResponse
     * @uses CreateOnDemandCompositionSessionResponse::setCreateOnDemandCompositionSessionResult()
     * @param \StructType\CreateCompositionResponse $createOnDemandCompositionSessionResult
     */
    public function __construct(\StructType\CreateCompositionResponse $createOnDemandCompositionSessionResult = null)
    {
        $this
            ->setCreateOnDemandCompositionSessionResult($createOnDemandCompositionSessionResult);
    }
    /**
     * Get CreateOnDemandCompositionSessionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CreateCompositionResponse|null
     */
    public function getCreateOnDemandCompositionSessionResult()
    {
        return isset($this->CreateOnDemandCompositionSessionResult) ? $this->CreateOnDemandCompositionSessionResult : null;
    }
    /**
     * Set CreateOnDemandCompositionSessionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CreateCompositionResponse $createOnDemandCompositionSessionResult
     * @return \StructType\CreateOnDemandCompositionSessionResponse
     */
    public function setCreateOnDemandCompositionSessionResult(\StructType\CreateCompositionResponse $createOnDemandCompositionSessionResult = null)
    {
        if (is_null($createOnDemandCompositionSessionResult) || (is_array($createOnDemandCompositionSessionResult) && empty($createOnDemandCompositionSessionResult))) {
            unset($this->CreateOnDemandCompositionSessionResult);
        } else {
            $this->CreateOnDemandCompositionSessionResult = $createOnDemandCompositionSessionResult;
        }
        return $this;
    }
}
