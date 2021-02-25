<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPreviewJPEG_PathResponse StructType
 * @subpackage Structs
 */
class GetPreviewJPEG_PathResponse extends AbstractStructBase
{
    /**
     * The GetPreviewJPEG_PathResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CompositionFilePathURLResponse
     */
    public $GetPreviewJPEG_PathResult;
    /**
     * Constructor method for GetPreviewJPEG_PathResponse
     * @uses GetPreviewJPEG_PathResponse::setGetPreviewJPEG_PathResult()
     * @param \StructType\CompositionFilePathURLResponse $getPreviewJPEG_PathResult
     */
    public function __construct(\StructType\CompositionFilePathURLResponse $getPreviewJPEG_PathResult = null)
    {
        $this
            ->setGetPreviewJPEG_PathResult($getPreviewJPEG_PathResult);
    }
    /**
     * Get GetPreviewJPEG_PathResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CompositionFilePathURLResponse|null
     */
    public function getGetPreviewJPEG_PathResult()
    {
        return isset($this->GetPreviewJPEG_PathResult) ? $this->GetPreviewJPEG_PathResult : null;
    }
    /**
     * Set GetPreviewJPEG_PathResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\CompositionFilePathURLResponse $getPreviewJPEG_PathResult
     * @return \StructType\GetPreviewJPEG_PathResponse
     */
    public function setGetPreviewJPEG_PathResult(\StructType\CompositionFilePathURLResponse $getPreviewJPEG_PathResult = null)
    {
        if (is_null($getPreviewJPEG_PathResult) || (is_array($getPreviewJPEG_PathResult) && empty($getPreviewJPEG_PathResult))) {
            unset($this->GetPreviewJPEG_PathResult);
        } else {
            $this->GetPreviewJPEG_PathResult = $getPreviewJPEG_PathResult;
        }
        return $this;
    }
}
