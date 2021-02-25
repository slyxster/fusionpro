<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Format_GetTextFrameNamesOnPage StructType
 * @subpackage Structs
 */
class Format_GetTextFrameNamesOnPage extends AbstractStructBase
{
    /**
     * The CompositionID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $CompositionID;
    /**
     * The Page
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int
     */
    public $Page;
    /**
     * Constructor method for Format_GetTextFrameNamesOnPage
     * @uses Format_GetTextFrameNamesOnPage::setCompositionID()
     * @uses Format_GetTextFrameNamesOnPage::setPage()
     * @param int $compositionID
     * @param int $page
     */
    public function __construct($compositionID = null, $page = null)
    {
        $this
            ->setCompositionID($compositionID)
            ->setPage($page);
    }
    /**
     * Get CompositionID value
     * @return int|null
     */
    public function getCompositionID()
    {
        return $this->CompositionID;
    }
    /**
     * Set CompositionID value
     * @param int $compositionID
     * @return \StructType\Format_GetTextFrameNamesOnPage
     */
    public function setCompositionID($compositionID = null)
    {
        // validation for constraint: int
        if (!is_null($compositionID) && !(is_int($compositionID) || ctype_digit($compositionID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($compositionID, true), gettype($compositionID)), __LINE__);
        }
        $this->CompositionID = $compositionID;
        return $this;
    }
    /**
     * Get Page value
     * @return int|null
     */
    public function getPage()
    {
        return $this->Page;
    }
    /**
     * Set Page value
     * @param int $page
     * @return \StructType\Format_GetTextFrameNamesOnPage
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !(is_int($page) || ctype_digit($page))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($page, true), gettype($page)), __LINE__);
        }
        $this->Page = $page;
        return $this;
    }
}
