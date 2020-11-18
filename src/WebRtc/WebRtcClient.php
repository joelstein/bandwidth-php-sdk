<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BandwidthLib\WebRtc;

use BandwidthLib\WebRtc\Controllers;

/**
 * BandwidthLib client class
 */
class WebRtcClient
{
    private $config;
    public function __construct($config)
    {
        $this->config = $config;
    }


    private $client;

    /**
     * Provides access to API controller
     * @return Controllers\APIController
     */
    public function getClient()
    {
        if ($this->client == null) {
            $this->client = new Controllers\APIController($this->config);
        }
        return $this->client;
    }
}