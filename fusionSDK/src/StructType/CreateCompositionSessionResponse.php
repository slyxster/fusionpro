<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateCompositionSessionResponse StructType
 * @subpackage Structs
 */
class CreateCompositionSessionResponse extends AbstractStructBase
{
    /**
     * The CreateCompositionSessionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CreateCompositionResponse
     */
    public $CreateCompositionSessionResult;
    /**
     * Constructor method for CreateCompositionSessionResponse
     * @uses CreateCompositionSessionResponse::setCreateCompositionSessionResult()
     * @param \StructType\CreateCompositionResponse $createCompositionSessionResult
     */
    public function __construct(\StructType\CreateCompositionResponse $createCompositionSessionResult = null)
    {
        $this
            ->setCreateCompositionSessionResult($createCompositionSessionResult);
    }
    /**
     * Get CreateCompositionSessionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CreateCompositionResponse|null
     */
    public function getCreateCompositionSessionResult()
    {
        return isset($this->CreateCompositionSessionResult) ? $this->CreateCompositionSessionResult : null;
    }
    /**
     * Set CreateCompositionSessionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CreateCompositionResponse $createCompositionSessionResult
     * @return \StructType\CreateCompositionSessionResponse
     */
    public function setCreateCompositionSessionResult(\StructType\CreateCompositionResponse $createCompositionSessionResult = null)
    {
        if (is_null($createCompositionSessionResult) || (is_array($createCompositionSessionResult) && empty($createCompositionSessionResult))) {
            unset($this->CreateCompositionSessionResult);
        } else {
            $this->CreateCompositionSessionResult = $createCompositionSessionResult;
        }
        return $this;
    }
}
