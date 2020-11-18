<?php
/*
 * BandwidthLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace BandwidthLib\TwoFactorAuth\Controllers;

use BandwidthLib\APIException;
use BandwidthLib\APIHelper;
use BandwidthLib\TwoFactorAuth\Exceptions;
use BandwidthLib\TwoFactorAuth\Models;
use BandwidthLib\Controllers\BaseController;
use BandwidthLib\Http\ApiResponse;
use BandwidthLib\Http\HttpRequest;
use BandwidthLib\Http\HttpResponse;
use BandwidthLib\Http\HttpMethod;
use BandwidthLib\Http\HttpContext;
use BandwidthLib\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class APIController extends BaseController
{
    public function __construct($config, $httpCallBack = null)
    {
        parent::__construct($config, $httpCallBack);
    }

    /**
     * Two-Factor authentication with Bandwidth Voice services
     *
     * @param string                            $accountId Bandwidth Account ID with Voice service enabled
     * @param Models\TwoFactorCodeRequestSchema $body      TODO: type description here
     * @return ApiResponse response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createVoiceTwoFactor(
        $accountId,
        $body
    ) {

        //prepare query string for API call
        $_queryBuilder = '/accounts/{accountId}/code/voice';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'accountId' => $accountId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($this->config->getBaseUri(Servers::TWOFACTORAUTHDEFAULT) . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //json encode body
        $_bodyJson = Request\Body::Json($body);

        //set HTTP basic auth parameters
        Request::auth($this->config->getTwoFactorAuthBasicAuthUserName(), $this->config->getTwoFactorAuthBasicAuthPassword());

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }
        // Set request timeout
        Request::timeout($this->config->getTimeout());

        // and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\InvalidRequestException('client request error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
        $mapper = $this->getJsonMapper();
        $deserializedResponse = $mapper->mapClass(
            $response->body,
            'BandwidthLib\\TwoFactorAuth\\Models\\TwoFactorVoiceResponse'
        );
        return new ApiResponse($response->code, $response->headers, $deserializedResponse);
    }

    /**
     * Two-Factor authentication with Bandwidth messaging services
     *
     * @param string                            $accountId Bandwidth Account ID with Messaging service enabled
     * @param Models\TwoFactorCodeRequestSchema $body      TODO: type description here
     * @return ApiResponse response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createMessagingTwoFactor(
        $accountId,
        $body
    ) {

        //prepare query string for API call
        $_queryBuilder = '/accounts/{accountId}/code/messaging';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'accountId' => $accountId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($this->config->getBaseUri(Servers::TWOFACTORAUTHDEFAULT) . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //json encode body
        $_bodyJson = Request\Body::Json($body);

        //set HTTP basic auth parameters
        Request::auth($this->config->getTwoFactorAuthBasicAuthUserName(), $this->config->getTwoFactorAuthBasicAuthPassword());

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }
        // Set request timeout
        Request::timeout($this->config->getTimeout());

        // and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\InvalidRequestException('client request error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
        $mapper = $this->getJsonMapper();
        $deserializedResponse = $mapper->mapClass(
            $response->body,
            'BandwidthLib\\TwoFactorAuth\\Models\\TwoFactorMessagingResponse'
        );
        return new ApiResponse($response->code, $response->headers, $deserializedResponse);
    }

    /**
     * Verify a previously sent two-factor authentication code
     *
     * @param string                              $accountId Bandwidth Account ID with Two-Factor enabled
     * @param Models\TwoFactorVerifyRequestSchema $body      TODO: type description here
     * @return ApiResponse response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createVerifyTwoFactor(
        $accountId,
        $body
    ) {

        //prepare query string for API call
        $_queryBuilder = '/accounts/{accountId}/code/verify';

        //process optional query parameters
        $_queryBuilder = APIHelper::appendUrlWithTemplateParameters($_queryBuilder, array (
            'accountId' => $accountId,
            ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($this->config->getBaseUri(Servers::TWOFACTORAUTHDEFAULT) . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //json encode body
        $_bodyJson = Request\Body::Json($body);

        //set HTTP basic auth parameters
        Request::auth($this->config->getTwoFactorAuthBasicAuthUserName(), $this->config->getTwoFactorAuthBasicAuthPassword());

        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);

        //call on-before Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }
        // Set request timeout
        Request::timeout($this->config->getTimeout());

        // and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //Error handling using HTTP status codes
        if ($response->code == 400) {
            throw new Exceptions\InvalidRequestException('client request error', $_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
        $mapper = $this->getJsonMapper();
        $deserializedResponse = $mapper->mapClass(
            $response->body,
            'BandwidthLib\\TwoFactorAuth\\Models\\TwoFactorVerifyCodeResponse'
        );
        return new ApiResponse($response->code, $response->headers, $deserializedResponse);
    }
}