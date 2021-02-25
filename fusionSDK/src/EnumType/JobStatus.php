<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for JobStatus EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:JobStatus
 * @subpackage Enumerations
 */
class JobStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Done'
     * @return string 'Done'
     */
    const VALUE_DONE = 'Done';
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Failed'
     * @return string 'Failed'
     */
    const VALUE_FAILED = 'Failed';
    /**
     * Constant for value 'InProcess'
     * @return string 'InProcess'
     */
    const VALUE_IN_PROCESS = 'InProcess';
    /**
     * Constant for value 'Queueing'
     * @return string 'Queueing'
     */
    const VALUE_QUEUEING = 'Queueing';
    /**
     * Constant for value 'Cancelled'
     * @return string 'Cancelled'
     */
    const VALUE_CANCELLED = 'Cancelled';
    /**
     * Return allowed values
     * @uses self::VALUE_DONE
     * @uses self::VALUE_NONE
     * @uses self::VALUE_FAILED
     * @uses self::VALUE_IN_PROCESS
     * @uses self::VALUE_QUEUEING
     * @uses self::VALUE_CANCELLED
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_DONE,
            self::VALUE_NONE,
            self::VALUE_FAILED,
            self::VALUE_IN_PROCESS,
            self::VALUE_QUEUEING,
            self::VALUE_CANCELLED,
        );
    }
}
