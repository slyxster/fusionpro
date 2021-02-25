<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCompositionSessionResponse StructType
 * @subpackage Structs
 */
class DeleteCompositionSessionResponse extends AbstractStructBase
{
    /**
     * The DeleteCompositionSessionResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLResponse
     */
    public $DeleteCompositionSessionResult;
    /**
     * Constructor method for DeleteCompositionSessionResponse
     * @uses DeleteCompositionSessionResponse::setDeleteCompositionSessionResult()
     * @param \StructType\CompositionFilePathURLResponse $deleteCompositionSessionResult
     */
    public function __construct(\StructType\CompositionFilePathURLResponse $deleteCompositionSessionResult = null)
    {
        $this
            ->setDeleteCompositionSessionResult($deleteCompositionSessionResult);
    }
    /**
     * Get DeleteCompositionSessionResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLResponse|null
     */
    public function getDeleteCompositionSessionResult()
    {
        return isset($this->DeleteCompositionSessionResult) ? $this->DeleteCompositionSessionResult : null;
    }
    /**
     * Set DeleteCompositionSessionResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLResponse $deleteCompositionSessionResult
     * @return \StructType\DeleteCompositionSessionResponse
     */
    public function setDeleteCompositionSessionResult(\StructType\CompositionFilePathURLResponse $deleteCompositionSessionResult = null)
    {
        if (is_null($deleteCompositionSessionResult) || (is_array($deleteCompositionSessionResult) && empty($deleteCompositionSessionResult))) {
            unset($this->DeleteCompositionSessionResult);
        } else {
            $this->DeleteCompositionSessionResult = $deleteCompositionSessionResult;
        }
        return $this;
    }
}
