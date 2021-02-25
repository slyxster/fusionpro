<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListCompositionSessions StructType
 * @subpackage Structs
 */
class ListCompositionSessions extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionSessionRequest
     */
    public $request;
    /**
     * Constructor method for ListCompositionSessions
     * @uses ListCompositionSessions::setRequest()
     * @param \StructType\CompositionSessionRequest $request
     */
    public function __construct(\StructType\CompositionSessionRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionSessionRequest|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionSessionRequest $request
     * @return \StructType\ListCompositionSessions
     */
    public function setRequest(\StructType\CompositionSessionRequest $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
}
