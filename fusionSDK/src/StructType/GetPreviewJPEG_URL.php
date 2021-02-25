<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPreviewJPEG_URL StructType
 * @subpackage Structs
 */
class GetPreviewJPEG_URL extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Preview
     */
    public $Request;
    /**
     * Constructor method for GetPreviewJPEG_URL
     * @uses GetPreviewJPEG_URL::setRequest()
     * @param \StructType\Preview $request
     */
    public function __construct(\StructType\Preview $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Preview|null
     */
    public function getRequest()
    {
        return isset($this->Request) ? $this->Request : null;
    }
    /**
     * Set Request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\Preview $request
     * @return \StructType\GetPreviewJPEG_URL
     */
    public function setRequest(\StructType\Preview $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->Request);
        } else {
            $this->Request = $request;
        }
        return $this;
    }
}
