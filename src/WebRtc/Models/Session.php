<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BandwidthLib\WebRtc\Models;

/**
 *A session object
 */
class Session implements \JsonSerializable
{
    /**
     * Unique id of the session
     * @var string|null $id public property
     */
    public $id;

    /**
     * User defined tag to associate with the session
     * @var string|null $tag public property
     */
    public $tag;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->id  = func_get_arg(0);
            $this->tag = func_get_arg(1);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']  = $this->id;
        $json['tag'] = $this->tag;

        return array_filter($json);
    }
}