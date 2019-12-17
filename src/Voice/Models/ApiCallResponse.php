<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BandwidthLib\Voice\Models;

use BandwidthLib\Utils\DateTimeHelper;

/**
 * @todo Write general description for this model
 */
class ApiCallResponse implements \JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $callId public property
     */
    public $callId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $applicationId public property
     */
    public $applicationId;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $to public property
     */
    public $to;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $from public property
     */
    public $from;

    /**
     * @todo Write general description for this property
     * @factory \BandwidthLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $startTime public property
     */
    public $startTime;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $callUrl public property
     */
    public $callUrl;

    /**
     * @todo Write general description for this property
     * @var double|null $callTimeout public property
     */
    public $callTimeout;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $answerUrl public property
     */
    public $answerUrl;

    /**
     * @todo Write general description for this property
     * @required
     * @var mixed $answerMethod public property
     */
    public $answerMethod;

    /**
     * @todo Write general description for this property
     * @var string|null $disconnectUrl public property
     */
    public $disconnectUrl;

    /**
     * @todo Write general description for this property
     * @required
     * @var mixed $disconnectMethod public property
     */
    public $disconnectMethod;

    /**
     * @todo Write general description for this property
     * @var string|null $username public property
     */
    public $username;

    /**
     * @todo Write general description for this property
     * @var string|null $password public property
     */
    public $password;

    /**
     * @todo Write general description for this property
     * @var string|null $tag public property
     */
    public $tag;

    /**
     * Constructor to set initial or default values of member properties
     */
    public function __construct()
    {
        if (14 == func_num_args()) {
            $this->callId           = func_get_arg(0);
            $this->applicationId    = func_get_arg(1);
            $this->to               = func_get_arg(2);
            $this->from             = func_get_arg(3);
            $this->startTime        = func_get_arg(4);
            $this->callUrl          = func_get_arg(5);
            $this->callTimeout      = func_get_arg(6);
            $this->answerUrl        = func_get_arg(7);
            $this->answerMethod     = func_get_arg(8);
            $this->disconnectUrl    = func_get_arg(9);
            $this->disconnectMethod = func_get_arg(10);
            $this->username         = func_get_arg(11);
            $this->password         = func_get_arg(12);
            $this->tag              = func_get_arg(13);
        }
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['callId']           = $this->callId;
        $json['applicationId']    = $this->applicationId;
        $json['to']               = $this->to;
        $json['from']             = $this->from;
        $json['startTime']        =
            isset($this->startTime) ?
            DateTimeHelper::toRfc3339DateTime($this->startTime) : null;
        $json['callUrl']          = $this->callUrl;
        $json['callTimeout']      = $this->callTimeout;
        $json['answerUrl']        = $this->answerUrl;
        $json['answerMethod']     = $this->answerMethod;
        $json['disconnectUrl']    = $this->disconnectUrl;
        $json['disconnectMethod'] = $this->disconnectMethod;
        $json['username']         = $this->username;
        $json['password']         = $this->password;
        $json['tag']              = $this->tag;

        return array_filter($json);
    }
}