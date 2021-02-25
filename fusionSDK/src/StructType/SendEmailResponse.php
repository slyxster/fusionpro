<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SendEmailResponse StructType
 * @subpackage Structs
 */
class SendEmailResponse extends AbstractStructBase
{
    /**
     * The SendEmailResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmailResponse
     */
    public $SendEmailResult;
    /**
     * Constructor method for SendEmailResponse
     * @uses SendEmailResponse::setSendEmailResult()
     * @param \StructType\EmailResponse $sendEmailResult
     */
    public function __construct(\StructType\EmailResponse $sendEmailResult = null)
    {
        $this
            ->setSendEmailResult($sendEmailResult);
    }
    /**
     * Get SendEmailResult value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmailResponse|null
     */
    public function getSendEmailResult()
    {
        return isset($this->SendEmailResult) ? $this->SendEmailResult : null;
    }
    /**
     * Set SendEmailResult value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\EmailResponse $sendEmailResult
     * @return \StructType\SendEmailResponse
     */
    public function setSendEmailResult(\StructType\EmailResponse $sendEmailResult = null)
    {
        if (is_null($sendEmailResult) || (is_array($sendEmailResult) && empty($sendEmailResult))) {
            unset($this->SendEmailResult);
        } else {
            $this->SendEmailResult = $sendEmailResult;
        }
        return $this;
    }
}
