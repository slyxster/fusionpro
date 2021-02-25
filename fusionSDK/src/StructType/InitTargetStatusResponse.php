<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InitTargetStatusResponse StructType
 * @subpackage Structs
 */
class InitTargetStatusResponse extends AbstractStructBase
{
    /**
     * The InitTargetStatusResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TargetInitResponse
     */
    public $InitTargetStatusResult;
    /**
     * Constructor method for InitTargetStatusResponse
     * @uses InitTargetStatusResponse::setInitTargetStatusResult()
     * @param \StructType\TargetInitResponse $initTargetStatusResult
     */
    public function __construct(\StructType\TargetInitResponse $initTargetStatusResult = null)
    {
        $this
            ->setInitTargetStatusResult($initTargetStatusResult);
    }
    /**
     * Get InitTargetStatusResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TargetInitResponse|null
     */
    public function getInitTargetStatusResult()
    {
        return isset($this->InitTargetStatusResult) ? $this->InitTargetStatusResult : null;
    }
    /**
     * Set InitTargetStatusResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TargetInitResponse $initTargetStatusResult
     * @return \StructType\InitTargetStatusResponse
     */
    public function setInitTargetStatusResult(\StructType\TargetInitResponse $initTargetStatusResult = null)
    {
        if (is_null($initTargetStatusResult) || (is_array($initTargetStatusResult) && empty($initTargetStatusResult))) {
            unset($this->InitTargetStatusResult);
        } else {
            $this->InitTargetStatusResult = $initTargetStatusResult;
        }
        return $this;
    }
}
