<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace BandwidthLib\MultiFactorAuth\Models;

/**
 * @todo Write general description for this model
 */
class TwoFactorVerifyCodeResponse implements \JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var bool|null $valid public property
     */
    public $valid;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->valid = func_get_arg(0);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['valid'] = $this->valid;

        return array_filter($json);
    }
}