<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCompositionFileResponse StructType
 * @subpackage Structs
 */
class DeleteCompositionFileResponse extends AbstractStructBase
{
    /**
     * The DeleteCompositionFileResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLResponse
     */
    public $DeleteCompositionFileResult;
    /**
     * Constructor method for DeleteCompositionFileResponse
     * @uses DeleteCompositionFileResponse::setDeleteCompositionFileResult()
     * @param \StructType\CompositionFilePathURLResponse $deleteCompositionFileResult
     */
    public function __construct(\StructType\CompositionFilePathURLResponse $deleteCompositionFileResult = null)
    {
        $this
            ->setDeleteCompositionFileResult($deleteCompositionFileResult);
    }
    /**
     * Get DeleteCompositionFileResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLResponse|null
     */
    public function getDeleteCompositionFileResult()
    {
        return isset($this->DeleteCompositionFileResult) ? $this->DeleteCompositionFileResult : null;
    }
    /**
     * Set DeleteCompositionFileResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLResponse $deleteCompositionFileResult
     * @return \StructType\DeleteCompositionFileResponse
     */
    public function setDeleteCompositionFileResult(\StructType\CompositionFilePathURLResponse $deleteCompositionFileResult = null)
    {
        if (is_null($deleteCompositionFileResult) || (is_array($deleteCompositionFileResult) && empty($deleteCompositionFileResult))) {
            unset($this->DeleteCompositionFileResult);
        } else {
            $this->DeleteCompositionFileResult = $deleteCompositionFileResult;
        }
        return $this;
    }
}
