<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateTemplate StructType
 * @subpackage Structs
 */
class DuplicateTemplate extends AbstractStructBase
{
    /**
     * The req
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateDuplicateRequest
     */
    public $req;
    /**
     * Constructor method for DuplicateTemplate
     * @uses DuplicateTemplate::setReq()
     * @param \StructType\TemplateDuplicateRequest $req
     */
    public function __construct(\StructType\TemplateDuplicateRequest $req = null)
    {
        $this
            ->setReq($req);
    }
    /**
     * Get req value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateDuplicateRequest|null
     */
    public function getReq()
    {
        return isset($this->req) ? $this->req : null;
    }
    /**
     * Set req value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateDuplicateRequest $req
     * @return \StructType\DuplicateTemplate
     */
    public function setReq(\StructType\TemplateDuplicateRequest $req = null)
    {
        if (is_null($req) || (is_array($req) && empty($req))) {
            unset($this->req);
        } else {
            $this->req = $req;
        }
        return $this;
    }
}
