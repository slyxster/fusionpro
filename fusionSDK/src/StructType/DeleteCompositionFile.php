<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteCompositionFile StructType
 * @subpackage Structs
 */
class DeleteCompositionFile extends AbstractStructBase
{
    /**
     * The Request
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLRequest
     */
    public $Request;
    /**
     * Constructor method for DeleteCompositionFile
     * @uses DeleteCompositionFile::setRequest()
     * @param \StructType\CompositionFilePathURLRequest $request
     */
    public function __construct(\StructType\CompositionFilePathURLRequest $request = null)
    {
        $this
            ->setRequest($request);
    }
    /**
     * Get Request value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLRequest|null
     */
    public function getRequest()
    {
        return isset($this->Request) ? $this->Request : null;
    }
    /**
     * Set Request value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLRequest $request
     * @return \StructType\DeleteCompositionFile
     */
    public function setRequest(\StructType\CompositionFilePathURLRequest $request = null)
    {
        if (is_null($request) || (is_array($request) && empty($request))) {
            unset($this->Request);
        } else {
            $this->Request = $request;
        }
        return $this;
    }
}
