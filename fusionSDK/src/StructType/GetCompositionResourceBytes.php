<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCompositionResourceBytes StructType
 * @subpackage Structs
 */
class GetCompositionResourceBytes extends AbstractStructBase
{
    /**
     * The request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLRequest
     */
    public $request;
    /**
     * Constructor method for GetCompositionResourceBytes
     * @uses GetCompositionResourceBytes::setRequest()
     * @param \StructType\CompositionFilePathURLRequest $request
     */
    public function __construct(\StructType\CompositionFilePathURLRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLRequest|null
     */
    public function getRequest()
    {
        return isset($this->request) ? $this->request : null;
    }
    /**
     * Set request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLRequest $request
     * @return \StructType\GetCompositionResourceBytes
     */
    public function setRequest(\StructType\CompositionFilePathURLRequest $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->request);
        } else {
            $this->request = $request;
        }
        return $this;
    }
}
