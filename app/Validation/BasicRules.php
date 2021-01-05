<?php namespace App\Validation;

use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\DNSCheckValidation;
use Egulias\EmailValidator\Validation\RFCValidation;

/**
 * Class BasicRules
 * @package App\Validation
 */
class BasicRules
{
    protected $request = null;

    public function __construct()
    {
        $this->request = service('request');
    }

    //-----------------------------------------------------------------------

    /**
     * Alphanumeric, spaces, and a limited set of punctuation characters.
     * Accepted punctuation characters are: ~ tilde, ! exclamation,
     * # number, $ dollar, % percent, & ampersand, * asterisk, - dash,
     * _ underscore, + plus, = equals, | vertical bar, : colon, . period
     * ~ ! # $ % & * - _ + = | : .
     * a-zA-Z0-9 ~!#$%&*\-_+=:\/,._\(\)
     *
     * @param string $str
     *
     * @return boolean
     */
    public function paragraph(string $str = null)
    {
        return (bool)preg_match('/' . TEXT_EXP . '/i', $str);
    }

    //-----------------------------------------------------------------------

    /**
     * Verify Email Address with RFC validation
     * @param string $str
     *
     * @return boolean
     */
    public function rfc_email(string $str = null)
    {
        $validator = new EmailValidator();

        return (bool)$validator->isValid($str, new RFCValidation());
    }

    //-----------------------------------------------------------------------

    /**
     * Verify Email Address with DNS server validation
     * @require internet connection
     *
     * @param string $str
     *
     * @return boolean
     */
    public function dns_email(string $str = null)
    {
        $validator = new EmailValidator();

        return (bool)$validator->isValid($str, new DNSCheckValidation());
    }

    //-----------------------------------------------------------------------

    /**
     * Verify Phone Number with Bangladesh validation
     * Format: 01XXXXXXXXX
     *
     * @param string $str
     *
     * @return boolean
     */
    public function mobile(string $str = null)
    {
        return (bool)preg_match('/' . MOBILE_EXP . '/', $str);
    }

    //-----------------------------------------------------------------------

    /**
     * Verify Universal Username format with github/google/facebook
     * format as validation reference
     *
     * @param string $str
     *
     * @return boolean
     */
    public function username(string $str = null)
    {
        return (bool)preg_match('/' . USERNAME_EXP . '/i', $str);
    }

    //-----------------------------------------------------------------------
}

