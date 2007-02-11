<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * PEAR::Net_DNSBL
 *
 * This class acts as interface to generic Realtime Blocking Lists
 * (RBL)
 *
 * PHP versions 4 and 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * Net_DNSBL looks up an supplied host if it's listed in 1-n supplied
 * Blacklists
 *
 * @category   Net
 * @package    DNSBL
 * @author     Sebastian Nohn <sebastian@nohn.net>
 * @author     Ammar Ibrahim <fixxme@fixme.com>
 * @copyright  2004-2007 Sebastian Nohn <sebastian@nohn.net>
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    CVS: $Id: DNSBL.php,v 1.4 2006/12/25 10:40:59 nohn Exp $
 * @link       http://pear.php.net/package/Net_DNSBL
 * @see        Net_DNS
 * @since      File available since Release 1.0.0
 */

require_once 'Net/CheckIP.php';
require_once 'Net/DNS.php';

class Net_DNSBL {

    /**     
     * Array of blacklists.
     *
     * Must have one or more elements.
     *
     * @var    array
     * @access protected
     */
    var $blacklists = array('sbl-xbl.spamhaus.org',
                            'bl.spamcop.net');

    /**     
     * Array of Results
     *
     * @var    array
     * @access protected
     */
    var $results    = array();

    /**
     * Set the blacklist to a desired blacklist.
     *
     * @param  array Array of blacklists to use. May contain only one element.
     * @access public
     * @return bool true if the operation was successful
     */
    function setBlacklists($blacklists)
    {
        if (is_array($blacklists)) {
            $this->blacklists = $blacklists;
            return true;
        } else {
            return false;
        } // if
    } // function

    /**
     * Get the blacklists.
     *
     * @access public
     * @return array Currently set blacklists.
     */
    function getBlacklists()
    {
        return $this->blacklists;
    }

    /** 
     * Returns Blacklist and Reply from the Blacklist, a host is listed in.
     *
     * @param  string Host to check
     * @access public
     * @return array result. $result['dnsbl'] contains DNSBL,
     *               $result['record'] contains returned DNS record.
     */
    function getDetails($host)
    {
        if (isset($this->results[$host]['dnsbl'])) {
            return $this->results[$host];
        } else {
            return false;
        }
    } // function

    /**
     * Returns Blacklist, host is listed in.
     *
     * @param  string Host to check
     * @access public
     * @return bl, a host is listed in or false
     */
    function getListingBl($host)
    {
        if (isset($this->results[$host]['dnsbl'])) {
            return $this->results[$host]['dnsbl'];
        } else {
            return false;
        }
    } // function

    /**
     * Returns result, when a host is listed.
     *
     * @param  string Host to check
     * @access public
     * @return bl, a host is listed in or false
     */
    function getListingRecord($host)
    {
        if (isset($this->results[$host]['record'])) {
            return $this->results[$host]['record'];
        } else {
            return false;
        }
    } // function

    /**
     * Returns TXT-Records, when a host is listed.
     *
     * @param  string Host to check
     * @access public
     * @return array TXT-Records for this host
     */
    function getTxt($host)
    {
        if (isset($this->results[$host]['txt'])) {
            return $this->results[$host]['txt'];
        } else {
            return false;
        }
    } // function

    /** 
     * Checks if the supplied Host is listed in one or more of the
     * RBLs.
     *
     * @param  string Host to check for being listed.
     * @access public
     * @return boolean true if the checked host is listed in a blacklist.
     */
    function isListed($host)
    {
        $isListed = false;
        $resolver = new Net_DNS_Resolver;

        foreach ($this->blacklists as $blacklist) {
            $response = $resolver->query($this->getHostForLookup($host, $blacklist));
            if ($response) {
                $isListed = true;
                $this->results[$host]['dnsbl']  = $blacklist;
                $this->results[$host]['record'] = $response->answer[0]->address;
                $response_txt = $resolver->query($this->getHostForLookup($host, $blacklist), 'TXT');
                foreach ($response_txt->answer as $txt) {
                    $this->results[$host]['txt'][] = $txt->text[0];
                }
                //if the Host was listed we don't need to check other RBLs,
                break;
                
            } // if
        } // foreach
        
        return $isListed;
    } // function

    /** 
     * Get host to lookup. Lookup a host if neccessary and get the
     * complete FQDN to lookup.
     *
     * @param  string Host OR IP to use for building the lookup.
     * @param  string Blacklist to use for building the lookup.
     * @access protected
     * @return string Ready to use host to lookup
     */    
    function getHostForLookup($host, $blacklist) 
    {
        // Currently only works for v4 addresses.
        if (!Net_CheckIP::check_ip($host)) {
            $resolver = new Net_DNS_Resolver;
            $response = $resolver->query($host);
            $ip = $response->answer[0]->address;
        } else {
            $ip = $host;
        }

        return $this->buildLookUpHost($ip, $blacklist);
    } // function

    /**
     * Build the host to lookup from an IP.
     *
     * @param  string IP to use for building the lookup.
     * @param  string Blacklist to use for building the lookup.
     * @access protected
     * @return string Ready to use host to lookup
     */    
    function buildLookUpHost($ip, $blacklist)
    {
        return $this->reverseIp($ip).'.'.$blacklist;        
    } // function

    /**
     * Reverse the order of an IP. 127.0.0.1 -> 1.0.0.127. Currently
     * only works for v4-adresses
     *
     * @param  string IP to reverse.
     * @access protected
     * @return string Reversed IP
     */    
    function reverseIp($ip) 
    {        
        return implode('.', array_reverse(explode('.', $ip)));        
    } // function

} // class
?>