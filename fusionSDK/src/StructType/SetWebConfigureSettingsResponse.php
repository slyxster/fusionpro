<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetWebConfigureSettingsResponse StructType
 * @subpackage Structs
 */
class SetWebConfigureSettingsResponse extends AbstractStructBase
{
    /**
     * The SetWebConfigureSettingsResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TemplateResponse
     */
    public $SetWebConfigureSettingsResult;
    /**
     * Constructor method for SetWebConfigureSettingsResponse
     * @uses SetWebConfigureSettingsResponse::setSetWebConfigureSettingsResult()
     * @param \StructType\TemplateResponse $setWebConfigureSettingsResult
     */
    public function __construct(\StructType\TemplateResponse $setWebConfigureSettingsResult = null)
    {
        $this
            ->setSetWebConfigureSettingsResult($setWebConfigureSettingsResult);
    }
    /**
     * Get SetWebConfigureSettingsResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TemplateResponse|null
     */
    public function getSetWebConfigureSettingsResult()
    {
        return isset($this->SetWebConfigureSettingsResult) ? $this->SetWebConfigureSettingsResult : null;
    }
    /**
     * Set SetWebConfigureSettingsResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\TemplateResponse $setWebConfigureSettingsResult
     * @return \StructType\SetWebConfigureSettingsResponse
     */
    public function setSetWebConfigureSettingsResult(\StructType\TemplateResponse $setWebConfigureSettingsResult = null)
    {
        if (is_null($setWebConfigureSettingsResult) || (is_array($setWebConfigureSettingsResult) && empty($setWebConfigureSettingsResult))) {
            unset($this->SetWebConfigureSettingsResult);
        } else {
            $this->SetWebConfigureSettingsResult = $setWebConfigureSettingsResult;
        }
        return $this;
    }
}
