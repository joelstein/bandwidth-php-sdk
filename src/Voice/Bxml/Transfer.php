<?php
/**
 * Transfer.php
 *
 * Implementation of the BXML Transfer tag
 *
 *  * @copyright Bandwidth INC
 */

namespace BandwidthLib\Voice\Bxml;

use DOMDocument;

require_once "Verb.php";

class Transfer extends Verb {
    /**
     * @var string
     */
    private $fallbackPassword;
    /**
     * @var string
     */
    private $fallbackUsername;
    /**
     * @var string
     */
    private $transferCompleteFallbackMethod;
    /**
     * @var string
     */
    private $transferCompleteFallbackUrl;
    private $sipUris;
    private $phoneNumbers;
    /**
     * @var string
     */
    private $diversionReason;
    /**
     * @var string
     */
    private $diversionTreatment;
    /**
     * @var string
     */
    private $tag;
    /**
     * @var int
     */
    private $callTimeout;
    /**
     * @var string
     */
    private $transferCallerId;
    /**
     * @var string
     */
    private $transferCompleteMethod;
    /**
     * @var string
     */
    private $transferCompleteUrl;
    /**
     * @var string
     */
    private $password;
    /**
     * @var string
     */
    private $username;

    /**
     * Sets the username attribute for Transfer
     *
     * @param string $username The username for http authentication on the transfer answered callback url
     */
    public function username(string $username) {
        $this->username = $username;
    }

    /**
     * Sets the password attribute for Transfer
     *
     * @param string $password The password for http authentication on the transfer answered callback url
     */
    public function password(string $password) {
        $this->password = $password;
    }

    /**
     * Sets the transferCompleteUrl attribute for Transfer
     *
     * @param string $transferCompleteUrl The url to receive the transfer answered callback 
     */
    public function transferCompleteUrl(string $transferCompleteUrl) {
        $this->transferCompleteUrl = $transferCompleteUrl;
    }

    /**
     * Sets the transferCompleteMethod attribute for Transfer
     *
     * @param string $transferCompleteMethod The http method to send the transfer answered callback 
     */
    public function transferCompleteMethod(string $transferCompleteMethod) {
        $this->transferCompleteMethod = $transferCompleteMethod;
    }

    /**
     * Sets the transferCallerId attribute for Transfer
     *
     * @param string $transferCallerId The caller id to use when the call is transferred
     */
    public function transferCallerId(string $transferCallerId) {
        $this->transferCallerId = $transferCallerId;
    }

    /**
     * Sets the callTimeout attribute for Transfer
     *
     * @param int $callTimeout The number of seconds to wait before timing out the call
     */
    public function callTimeout(int $callTimeout) {
        $this->callTimeout = $callTimeout;
    }

    /**
     * Sets the tag attribute for Transfer
     *
     * @param string $tag A custom string to be included in callbacks 
     */
    public function tag(string $tag) {
        $this->tag = $tag;
    }

    /**
     * Sets the diversionTreatment attribute for Transfer
     *
     * @param string $diversionTreatment The diversion treatment for the phone call 
     */
    public function diversionTreatment(string $diversionTreatment) {
        $this->diversionTreatment = $diversionTreatment;
    }

    /**
     * Sets the diversionReason attribute for Transfer
     *
     * @param string $diversionReason The diversion treatment for the phone call 
     */
    public function diversionReason(string $diversionReason) {
        $this->diversionReason = $diversionReason;
    }

    /**
     * Sets the PhoneNumber tags to be included in the Transfer
     *
     * @param list<PhoneNumber> $phoneNumbers The list of PhoneNumber tags
     */
    public function phoneNumbers($phoneNumbers) {
        $this->phoneNumbers = $phoneNumbers;
    }

    /**
     * Sets the SipUri tags to be included in the Transfer
     *
     * @param list<SipUri> $sipUris The list of SipUri tags
     */
    public function sipUris($sipUris) {
        $this->sipUris = $sipUris;
    }

    /**
     * Sets the transferCompleteFallbackUrl attribute for Transfer
     *
     * @param string $transferCompleteFallbackUrl Fallback url for transfer complete events 
     */
    public function transferCompleteFallbackUrl(string $transferCompleteFallbackUrl) {
        $this->transferCompleteFallbackUrl = $transferCompleteFallbackUrl;
    }

    /**
     * Sets the transferCompleteFallbackMethod attribute for Transfer
     *
     * @param string $transferCompleteFallbackMethod HTTP method for fallback events
     */
    public function transferCompleteFallbackMethod(string $transferCompleteFallbackMethod) {
        $this->transferCompleteFallbackMethod = $transferCompleteFallbackMethod;
    }

    /**
     * Sets the fallbackUsername attribute for Transfer
     *
     * @param string $fallbackUsername HTTP basic auth username for fallback events 
     */
    public function fallbackUsername(string $fallbackUsername) {
        $this->fallbackUsername = $fallbackUsername;
    }

    /**
     * Sets the fallbackPassword attribute for Transfer
     *
     * @param string $fallbackPassword HTTP basic auth password for fallback events
     */
    public function fallbackPassword(string $fallbackPassword) {
        $this->fallbackPassword = $fallbackPassword;
    }

    public function toBxml(DOMDocument $doc) {
        $element = $doc->createElement("Transfer");

        if(isset($this->username)) {
            $element->setAttribute("username", $this->username);
        }

        if(isset($this->password)) {
            $element->setAttribute("password", $this->password);
        }

        if(isset($this->tag)) {
            $element->setAttribute("tag", $this->tag);
        }

        if(isset($this->transferCompleteUrl)) {
            $element->setAttribute("transferCompleteUrl", $this->transferCompleteUrl);
        }

        if(isset($this->transferCompleteMethod)) {
            $element->setAttribute("transferCompleteMethod", $this->transferCompleteMethod);
        }

        if(isset($this->transferCallerId)) {
            $element->setAttribute("transferCallerId", $this->transferCallerId);
        }

        if(isset($this->callTimeout)) {
            $element->setAttribute("callTimeout", $this->callTimeout);
        }
        
        if(isset($this->diversionTreatment)) {
            $element->setAttribute("diversionTreatment", $this->diversionTreatment);
        }

        if(isset($this->diversionReason)) {
            $element->setAttribute("diversionReason", $this->diversionReason);
        }

        if(isset($this->transferCompleteFallbackUrl)) {
            $element->setAttribute("transferCompleteFallbackUrl", $this->transferCompleteFallbackUrl);
        }

        if(isset($this->transferCompleteFallbackMethod)) {
            $element->setAttribute("transferCompleteFallbackMethod", $this->transferCompleteFallbackMethod);
        }

        if(isset($this->fallbackUsername)) {
            $element->setAttribute("fallbackUsername", $this->fallbackUsername);
        }

        if(isset($this->fallbackPassword)) {
            $element->setAttribute("fallbackPassword", $this->fallbackPassword);
        }

        if(isset($this->phoneNumbers)) {
            foreach ($this->phoneNumbers as $phoneNumber) {
                $element->appendChild($phoneNumber->toBxml($doc));
            }
        }

        if(isset($this->sipUris)) {
            foreach ($this->sipUris as $sipUri) {
                $element->appendChild($sipUri->toBxml($doc));
            }
        }

        return $element;
    }
}
