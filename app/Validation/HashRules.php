<?php namespace App\Validation;

/**
 * Class HashRules
 * @package App\Validation
 */
class HashRules
{
    /**
     * Input two dates with same format are equal
     *  Or not
     * @param string $str
     * @param $params1
     * @param $params2
     * @return void
     */
    public function same_date(string $str = null, $params1, $params2)
    {
        dd([$str, $params1, $params2]);
        /*return (bool)preg_match('/' . TEXT_EXP . '/i', $str);*/
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
        return (bool)preg_match('/' . USERNAME_EXP . '/', $str);
    }

    //-----------------------------------------------------------------------
}

