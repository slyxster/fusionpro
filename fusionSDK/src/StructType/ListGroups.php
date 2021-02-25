<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListGroups StructType
 * @subpackage Structs
 */
class ListGroups extends AbstractStructBase
{
    /**
     * The WebEnabled
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool
     */
    public $WebEnabled;
    /**
     * Constructor method for ListGroups
     * @uses ListGroups::setWebEnabled()
     * @param bool $webEnabled
     */
    public function __construct($webEnabled = null)
    {
        $this
            ->setWebEnabled($webEnabled);
    }
    /**
     * Get WebEnabled value
     * @return bool|null
     */
    public function getWebEnabled()
    {
        return $this->WebEnabled;
    }
    /**
     * Set WebEnabled value
     * @param bool $webEnabled
     * @return \StructType\ListGroups
     */
    public function setWebEnabled($webEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($webEnabled) && !is_bool($webEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($webEnabled, true), gettype($webEnabled)), __LINE__);
        }
        $this->WebEnabled = $webEnabled;
        return $this;
    }
}
