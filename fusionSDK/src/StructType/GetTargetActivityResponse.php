<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTargetActivityResponse StructType
 * @subpackage Structs
 */
class GetTargetActivityResponse extends AbstractStructBase
{
    /**
     * The GetTargetActivityResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TargetStatusActivityResponse
     */
    public $GetTargetActivityResult;
    /**
     * Constructor method for GetTargetActivityResponse
     * @uses GetTargetActivityResponse::setGetTargetActivityResult()
     * @param \StructType\TargetStatusActivityResponse $getTargetActivityResult
     */
    public function __construct(\StructType\TargetStatusActivityResponse $getTargetActivityResult = null)
    {
        $this
            ->setGetTargetActivityResult($getTargetActivityResult);
    }
    /**
     * Get GetTargetActivityResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TargetStatusActivityResponse|null
     */
    public function getGetTargetActivityResult()
    {
        return isset($this->GetTargetActivityResult) ? $this->GetTargetActivityResult : null;
    }
    /**
     * Set GetTargetActivityResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TargetStatusActivityResponse $getTargetActivityResult
     * @return \StructType\GetTargetActivityResponse
     */
    public function setGetTargetActivityResult(\StructType\TargetStatusActivityResponse $getTargetActivityResult = null)
    {
        if (is_null($getTargetActivityResult) || (is_array($getTargetActivityResult) && empty($getTargetActivityResult))) {
            unset($this->GetTargetActivityResult);
        } else {
            $this->GetTargetActivityResult = $getTargetActivityResult;
        }
        return $this;
    }
}
