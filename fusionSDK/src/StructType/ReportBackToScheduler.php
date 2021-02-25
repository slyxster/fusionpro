<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReportBackToScheduler StructType
 * @subpackage Structs
 */
class ReportBackToScheduler extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ReportBackStatusRequest
     */
    public $request;
    /**
     * Constructor method for ReportBackToScheduler
     * @uses ReportBackToScheduler::setRequest()
     * @param \StructType\ReportBackStatusRequest $request
     */
    public function __construct(\StructType\ReportBackStatusRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ReportBackStatusRequest|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\ReportBackStatusRequest $request
     * @return \StructType\ReportBackToScheduler
     */
    public function setRequest(\StructType\ReportBackStatusRequest $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
}
