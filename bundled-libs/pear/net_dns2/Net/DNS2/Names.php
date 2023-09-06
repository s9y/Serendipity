<?php

/**
 * DNS Library for handling lookups and updates. 
 *
 * Copyright (c) 2022, Mike Pultz <mike@mikepultz.com>. All rights reserved.
 *
 * See LICENSE for more details.
 *
 * @category  Networking
 * @package   Net_DNS2
 * @author    Mike Pultz <mike@mikepultz.com>
 * @copyright 2022 Mike Pultz <mike@mikepultz.com>
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link      https://netdns2.com/
 * @since     File available since Release 1.5.3
 *
 */

/**
 * text compression/expansion and labeling class
 *
 */
class Net_DNS2_Names
{
    /**
     * pack a text string
     *
     * @param string $name a name to be packed
     *
     * @return string
     * @access public
     *
     */
    public static function pack($name)
    {
        return (is_null($name) == true) ? null : pack('Ca*', strlen($name), $name);
    }

    /**
     * parses a domain string into a single string
     *
     * @param Net_DNS2_Packet &$packet the DNS packet to look in for the domain name
     * @param integer         &$offset the offset into the given packet object
     *
     * @return mixed either a name string or null if it's not found.
     * @access public
     *
     */
    public static function unpack($rdata, &$offset)
    {
        $name = '';

        if (strlen($rdata) < ($offset + 1))
        {
            return null;
        }

        $xlen = ord($rdata[$offset]);
        ++$offset;

        if (($xlen + $offset) > strlen($rdata)) {

            $name = substr($rdata, $offset);
            $offset = strlen($rdata);
        } else {

            $name = substr($rdata, $offset, $xlen);
            $offset += $xlen;
        }

        return trim($name, '.');
    }
}
