<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QueueCompositionRequest StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:QueueCompositionRequest
 * @subpackage Structs
 */
class QueueCompositionRequest extends AbstractStructBase
{
    /**
     * The OnDemand
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $OnDemand;
    /**
     * The OnDemandComp
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\OnDemandComponents
     */
    public $OnDemandComp;
    /**
     * The StartRequest
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\StartCompositionRequest
     */
    public $StartRequest;
    /**
     * The WorkingFolder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string
     */
    public $WorkingFolder;
    /**
     * Constructor method for QueueCompositionRequest
     * @uses QueueCompositionRequest::setOnDemand()
     * @uses QueueCompositionRequest::setOnDemandComp()
     * @uses QueueCompositionRequest::setStartRequest()
     * @uses QueueCompositionRequest::setWorkingFolder()
     * @param bool $onDemand
     * @param \StructType\OnDemandComponents $onDemandComp
     * @param \StructType\StartCompositionRequest $startRequest
     * @param string $workingFolder
     */
    public function __construct($onDemand = null, \StructType\OnDemandComponents $onDemandComp = null, \StructType\StartCompositionRequest $startRequest = null, $workingFolder = null)
    {
        $this
            ->setOnDemand($onDemand)
            ->setOnDemandComp($onDemandComp)
            ->setStartRequest($startRequest)
            ->setWorkingFolder($workingFolder);
    }
    /**
     * Get OnDemand value
     * @return bool|null
     */
    public function getOnDemand()
    {
        return $this->OnDemand;
    }
    /**
     * Set OnDemand value
     * @param bool $onDemand
     * @return \StructType\QueueCompositionRequest
     */
    public function setOnDemand($onDemand = null)
    {
        // validation for constraint: boolean
        if (!is_null($onDemand) && !is_bool($onDemand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onDemand, true), gettype($onDemand)), __LINE__);
        }
        $this->OnDemand = $onDemand;
        return $this;
    }
    /**
     * Get OnDemandComp value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\OnDemandComponents|null
     */
    public function getOnDemandComp()
    {
        return isset($this->OnDemandComp) ? $this->OnDemandComp : null;
    }
    /**
     * Set OnDemandComp value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\OnDemandComponents $onDemandComp
     * @return \StructType\QueueCompositionRequest
     */
    public function setOnDemandComp(\StructType\OnDemandComponents $onDemandComp = null)
    {
        if (is_null($onDemandComp) || (is_array($onDemandComp) && empty($onDemandComp))) {
            unset($this->OnDemandComp);
        } else {
            $this->OnDemandComp = $onDemandComp;
        }
        return $this;
    }
    /**
     * Get StartRequest value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\StartCompositionRequest|null
     */
    public function getStartRequest()
    {
        return isset($this->StartRequest) ? $this->StartRequest : null;
    }
    /**
     * Set StartRequest value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\StartCompositionRequest $startRequest
     * @return \StructType\QueueCompositionRequest
     */
    public function setStartRequest(\StructType\StartCompositionRequest $startRequest = null)
    {
        if (is_null($startRequest) || (is_array($startRequest) && empty($startRequest))) {
            unset($this->StartRequest);
        } else {
            $this->StartRequest = $startRequest;
        }
        return $this;
    }
    /**
     * Get WorkingFolder value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getWorkingFolder()
    {
        return isset($this->WorkingFolder) ? $this->WorkingFolder : null;
    }
    /**
     * Set WorkingFolder value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $workingFolder
     * @return \StructType\QueueCompositionRequest
     */
    public function setWorkingFolder($workingFolder = null)
    {
        // validation for constraint: string
        if (!is_null($workingFolder) && !is_string($workingFolder)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workingFolder, true), gettype($workingFolder)), __LINE__);
        }
        if (is_null($workingFolder) || (is_array($workingFolder) && empty($workingFolder))) {
            unset($this->WorkingFolder);
        } else {
            $this->WorkingFolder = $workingFolder;
        }
        return $this;
    }
}
