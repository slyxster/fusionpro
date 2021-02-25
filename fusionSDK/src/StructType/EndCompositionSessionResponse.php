<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EndCompositionSessionResponse StructType
 * @subpackage Structs
 */
class EndCompositionSessionResponse extends AbstractStructBase
{
    /**
     * The EndCompositionSessionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLResponse
     */
    public $EndCompositionSessionResult;
    /**
     * Constructor method for EndCompositionSessionResponse
     * @uses EndCompositionSessionResponse::setEndCompositionSessionResult()
     * @param \StructType\CompositionFilePathURLResponse $endCompositionSessionResult
     */
    public function __construct(\StructType\CompositionFilePathURLResponse $endCompositionSessionResult = null)
    {
        $this
            ->setEndCompositionSessionResult($endCompositionSessionResult);
    }
    /**
     * Get EndCompositionSessionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLResponse|null
     */
    public function getEndCompositionSessionResult()
    {
        return isset($this->EndCompositionSessionResult) ? $this->EndCompositionSessionResult : null;
    }
    /**
     * Set EndCompositionSessionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLResponse $endCompositionSessionResult
     * @return \StructType\EndCompositionSessionResponse
     */
    public function setEndCompositionSessionResult(\StructType\CompositionFilePathURLResponse $endCompositionSessionResult = null)
    {
        if (is_null($endCompositionSessionResult) || (is_array($endCompositionSessionResult) && empty($endCompositionSessionResult))) {
            unset($this->EndCompositionSessionResult);
        } else {
            $this->EndCompositionSessionResult = $endCompositionSessionResult;
        }
        return $this;
    }
}
