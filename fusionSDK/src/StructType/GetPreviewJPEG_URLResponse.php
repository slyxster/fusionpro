<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPreviewJPEG_URLResponse StructType
 * @subpackage Structs
 */
class GetPreviewJPEG_URLResponse extends AbstractStructBase
{
    /**
     * The GetPreviewJPEG_URLResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLResponse
     */
    public $GetPreviewJPEG_URLResult;
    /**
     * Constructor method for GetPreviewJPEG_URLResponse
     * @uses GetPreviewJPEG_URLResponse::setGetPreviewJPEG_URLResult()
     * @param \StructType\CompositionFilePathURLResponse $getPreviewJPEG_URLResult
     */
    public function __construct(\StructType\CompositionFilePathURLResponse $getPreviewJPEG_URLResult = null)
    {
        $this
            ->setGetPreviewJPEG_URLResult($getPreviewJPEG_URLResult);
    }
    /**
     * Get GetPreviewJPEG_URLResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLResponse|null
     */
    public function getGetPreviewJPEG_URLResult()
    {
        return isset($this->GetPreviewJPEG_URLResult) ? $this->GetPreviewJPEG_URLResult : null;
    }
    /**
     * Set GetPreviewJPEG_URLResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLResponse $getPreviewJPEG_URLResult
     * @return \StructType\GetPreviewJPEG_URLResponse
     */
    public function setGetPreviewJPEG_URLResult(\StructType\CompositionFilePathURLResponse $getPreviewJPEG_URLResult = null)
    {
        if (is_null($getPreviewJPEG_URLResult) || (is_array($getPreviewJPEG_URLResult) && empty($getPreviewJPEG_URLResult))) {
            unset($this->GetPreviewJPEG_URLResult);
        } else {
            $this->GetPreviewJPEG_URLResult = $getPreviewJPEG_URLResult;
        }
        return $this;
    }
}
