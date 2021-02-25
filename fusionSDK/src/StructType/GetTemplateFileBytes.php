<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateFileBytes StructType
 * @subpackage Structs
 */
class GetTemplateFileBytes extends AbstractStructBase
{
    /**
     * The req
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateRequest
     */
    public $req;
    /**
     * Constructor method for GetTemplateFileBytes
     * @uses GetTemplateFileBytes::setReq()
     * @param \StructType\TemplateRequest $req
     */
    public function __construct(\StructType\TemplateRequest $req = null)
    {
        $this
            ->setReq($req);
    }
    /**
     * Get req value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateRequest|null
     */
    public function getReq()
    {
        return isset($this->req) ? $this->req : null;
    }
    /**
     * Set req value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateRequest $req
     * @return \StructType\GetTemplateFileBytes
     */
    public function setReq(\StructType\TemplateRequest $req = null)
    {
        if (is_null($req) || (is_array($req) && empty($req))) {
            unset($this->req);
        } else {
            $this->req = $req;
        }
        return $this;
    }
}
