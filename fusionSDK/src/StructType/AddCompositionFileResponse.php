<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddCompositionFileResponse StructType
 * @subpackage Structs
 */
class AddCompositionFileResponse extends AbstractStructBase
{
    /**
     * The AddCompositionFileResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AddCompositionComponentResponse
     */
    public $AddCompositionFileResult;
    /**
     * Constructor method for AddCompositionFileResponse
     * @uses AddCompositionFileResponse::setAddCompositionFileResult()
     * @param \StructType\AddCompositionComponentResponse $addCompositionFileResult
     */
    public function __construct(\StructType\AddCompositionComponentResponse $addCompositionFileResult = null)
    {
        $this
            ->setAddCompositionFileResult($addCompositionFileResult);
    }
    /**
     * Get AddCompositionFileResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AddCompositionComponentResponse|null
     */
    public function getAddCompositionFileResult()
    {
        return isset($this->AddCompositionFileResult) ? $this->AddCompositionFileResult : null;
    }
    /**
     * Set AddCompositionFileResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\AddCompositionComponentResponse $addCompositionFileResult
     * @return \StructType\AddCompositionFileResponse
     */
    public function setAddCompositionFileResult(\StructType\AddCompositionComponentResponse $addCompositionFileResult = null)
    {
        if (is_null($addCompositionFileResult) || (is_array($addCompositionFileResult) && empty($addCompositionFileResult))) {
            unset($this->AddCompositionFileResult);
        } else {
            $this->AddCompositionFileResult = $addCompositionFileResult;
        }
        return $this;
    }
}
