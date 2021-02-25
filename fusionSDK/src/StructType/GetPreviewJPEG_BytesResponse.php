<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPreviewJPEG_BytesResponse StructType
 * @subpackage Structs
 */
class GetPreviewJPEG_BytesResponse extends AbstractStructBase
{
    /**
     * The GetPreviewJPEG_BytesResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLResponse
     */
    public $GetPreviewJPEG_BytesResult;
    /**
     * Constructor method for GetPreviewJPEG_BytesResponse
     * @uses GetPreviewJPEG_BytesResponse::setGetPreviewJPEG_BytesResult()
     * @param \StructType\CompositionFilePathURLResponse $getPreviewJPEG_BytesResult
     */
    public function __construct(\StructType\CompositionFilePathURLResponse $getPreviewJPEG_BytesResult = null)
    {
        $this
            ->setGetPreviewJPEG_BytesResult($getPreviewJPEG_BytesResult);
    }
    /**
     * Get GetPreviewJPEG_BytesResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLResponse|null
     */
    public function getGetPreviewJPEG_BytesResult()
    {
        return isset($this->GetPreviewJPEG_BytesResult) ? $this->GetPreviewJPEG_BytesResult : null;
    }
    /**
     * Set GetPreviewJPEG_BytesResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLResponse $getPreviewJPEG_BytesResult
     * @return \StructType\GetPreviewJPEG_BytesResponse
     */
    public function setGetPreviewJPEG_BytesResult(\StructType\CompositionFilePathURLResponse $getPreviewJPEG_BytesResult = null)
    {
        if (is_null($getPreviewJPEG_BytesResult) || (is_array($getPreviewJPEG_BytesResult) && empty($getPreviewJPEG_BytesResult))) {
            unset($this->GetPreviewJPEG_BytesResult);
        } else {
            $this->GetPreviewJPEG_BytesResult = $getPreviewJPEG_BytesResult;
        }
        return $this;
    }
}
