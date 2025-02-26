<?php
# $Id: functions.inc.php 114 2005-05-22 15:37:11Z garvinhicking $
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details

if (IN_serendipity !== true) {
    die ("Don't hack!");
}

if (defined('S9Y_FRAMEWORK_CALENDARS')) {
    return;
}
@define('S9Y_FRAMEWORK_CALENDARS', true);

/**
 * Gregorian to Persian Converter
 *
 * @author farsiweb.info
 * @access public
 * @param   int year
 * @param   int month
 * @param   int day
 * @return  array   converted time
 */
function g2p($g_y, $g_m, $g_d){
    $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);

    $gy = $g_y-1600;
    $gm = $g_m-1;
    $gd = $g_d-1;

    $g_day_no = 365*$gy+floor(($gy+3)/4)-floor(($gy+99)/100)+floor(($gy+399)/400);

    for ($i=0; $i < $gm; ++$i){
        $g_day_no += $g_days_in_month[$i];
    }

    if ($gm>1 && (($gy%4==0 && $gy%100!=0) || ($gy%400==0))){
        /* leap and after Feb */
        ++$g_day_no;
    }

    $g_day_no += $gd;
    $j_day_no = $g_day_no-79;
    $j_np = floor($j_day_no/12053);
    $j_day_no %= 12053;
    $jy = 979+33*$j_np+4*floor($j_day_no/1461);
    $j_day_no %= 1461;

    if ($j_day_no >= 366) {
        $jy += floor(($j_day_no-1)/365);
        $j_day_no = ($j_day_no-1)%365;
    }
    $j_all_days = $j_day_no+1;

    for ($i = 0; $i < 11 && $j_day_no >= $j_days_in_month[$i]; ++$i) {
        $j_day_no -= $j_days_in_month[$i];
    }

    $jm = $i+1;
    $jd = $j_day_no+1;

    return array($jy, $jm, $jd, $j_all_days);
}

/**
 * Persian to Gregorian Converter
 *
 * @author farsiweb.info
 * @access public
 * @param   int year
 * @param   int month
 * @param   int day
 * @return  array   converted time
 */
function p2g($j_y, $j_m, $j_d){
    $g_days_in_month = array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
    $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);
    $jy = $j_y-979;
    $jm = $j_m-1;
    $jd = $j_d-1;
    $j_day_no = 365*$jy + floor($jy/33)*8 + floor(($jy%33+3)/4);
    for ($i=0; $i < $jm; ++$i){
        $j_day_no += $j_days_in_month[$i];
    }
    $j_day_no += $jd;
    $g_day_no = $j_day_no+79;
    $gy = 1600 + 400*floor($g_day_no/146097);
    $g_day_no = $g_day_no % 146097;
    $leap = true;
    if ($g_day_no >= 36525){
        $g_day_no--;
        $gy += 100*floor($g_day_no/36524);
        $g_day_no = $g_day_no % 36524;
        if ($g_day_no >= 365){
            $g_day_no++;
        }else{
            $leap = false;
        }
    }
    $gy += 4*floor($g_day_no/1461);
    $g_day_no %= 1461;
    if ($g_day_no >= 366){
        $leap = false;
        $g_day_no--;
        $gy += floor($g_day_no/365);
        $g_day_no = $g_day_no % 365;
    }
    for ($i = 0; $g_day_no >= $g_days_in_month[$i] + ($i == 1 && $leap); $i++){
        $g_day_no -= $g_days_in_month[$i] + ($i == 1 && $leap);
    }
    $gm = $i+1;
    $gd = $g_day_no+1;

    return array($gy, $gm, $gd);
}

/**
 * Format a string according to Persian calendar (UTF)
 *
 * @author  Omid Mottaghi
 * @access public
 * @param   string  Formatting string
 * @param   int     Timestamp to format
 * @return  string  Formatted local time/date according to locale settings
 */
function persian_strftime_utf($format, $timestamp='') {

    if($timestamp==''){
        $timestamp = mktime();
    }

    $g_d=date('j', $timestamp);
    $g_m=date('n', $timestamp);
    $g_y=date('Y', $timestamp);

    list($jy, $jm, $jd, $j_all_days) = g2p($g_y, $g_m, $g_d);

    $j_month_name = array('', 'فروردین', 'اردیبهشت', 'خرداد', 'تیر',
            'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند');
    $j_week_name = array('Saturday' => 'شنبه',
                        'Sunday' => 'یک شنبه',
                        'Monday' => 'دوشنبه',
                        'Tuesday' => 'سه شنبه',
                        'Wednesday' => 'چهارشنبه',
                        'Thursday' => 'پنج شنبه',
                        'Friday' => 'جمعه',
                        'Sat' => 'ش',
                        'Sun' => 'ی',
                        'Mon' => 'د',
                        'Tue' => 'س',
                        'Wed' => 'چ',
                        'Thu' => 'پ',
                        'Fri' => 'ج');
    $j_week_number = array('Sat' => '1',
                           'Sun' => '2',
                           'Mon' => '3',
                           'Tue' => '4',
                           'Wed' => '5',
                           'Thu' => '6',
                           'Fri' => '7');

    // calculate string
    $output_str='';

    for ($i=0; $i<strlen($format); $i++){

        if($format[$i]=='%'){
            $i++;
            switch($format[$i]){
                case 'a':
                    $output_str.=$j_week_name[date('D', $timestamp)];
                    break;
                case 'A':
                    $output_str.=$j_week_name[date('l', $timestamp)];
                    break;
                case 'b':
                case 'B':
                case 'h':
                    $output_str.=$j_month_name[$jm];
                    break;
                case 'c':
                    $output_str.=persian_strftime_utf('%y/%m/%d %I:%M:%S', $timestamp);
                    break;
                case 'C':
                    $output_str.=floor($jy/100);
                    break;
                case 'd':
                    if($jd<10) $output_str.='0'.$jd; else $output_str.=$jd;
                    break;
                case 'D':
                    $output_str.=$jy.'/'.$jm.'/'.$jd;
                    break;
                case 'e':
                    if($jd<10) $output_str.=' '.$jd; else $output_str.=$jd;
                    break;
                case 'H':
                    $output_str.=date('H', $timestamp);
                    break;
                case 'I':
                    $output_str.=date('h', $timestamp);
                    break;
                case 'j':
                    $output_str.=sprintf('%03d', $j_all_days);
                    break;
                case 'm':
                    if($jm<10) $output_str.='0'.$jm; else $output_str.=$jm;
                    break;
                case 'M':
                    $output_str.=date('i', $timestamp);
                    break;
                case 'n':
                    $output_str.="\n";
                    break;
                case 'r':
                case 'p':
                    if(date('a',$timestamp)=='pm') $output_str.='بعد از ظهر'; else $output_str.='قبل از ظهر';
                    break;
                case 'R':
                    $output_str.=PHP81_BC\strftime('%R', $timestamp);
                    break;
                case 'S':
                    $output_str.=date('s', $timestamp);
                    break;
                case 't':
                    $output_str.="\t";
                    break;
                case 'U':
                case 'V':
                case 'W':
                    $output_str.=sprintf('%02d', floor(($j_all_days+1)/7));
                    break;
                case 'u':
                case 'w':
                    $output_str.=$j_week_number[date('D', $timestamp)];
                    break;
                case 'x':
                    $output_str.=persian_strftime_utf('%y/%m/%d', $timestamp);
                    break;
                case 'X':
                    $output_str.=persian_strftime_utf('%I:%M:%S', $timestamp);
                    break;
                case 'g':
                case 'y':
                    $output_str.=$jy-(floor($jy/100)*100);
                    break;
                case 'G':
                case 'Y':
                    $output_str.=$jy;
                    break;
                case 'z':
                case 'Z':
                    $output_str.=PHP81_BC\strftime('%z', $timestamp);
                    break;
                case '%':
                    $output_str.='%';
                    break;
            }
        }else{
            $output_str.=$format[$i];
        }
    }

    return $output_str;
}

/**
 * Format a string according to Persian calendar (UTF)
 *
 * @author  Omid Mottaghi
 * @access public
 * @param   string  Formatting string
 * @param   int     Timestamp to format
 * @return  string  Formatted local time/date
 */
function persian_date_utf($format, $timestamp='') {

    if($timestamp==''){
        $timestamp = mktime();
    }

    $g_d=date('j', $timestamp);
    $g_m=date('n', $timestamp);
    $g_y=date('Y', $timestamp);

    list($jy, $jm, $jd, $j_all_days) = g2p($g_y, $g_m, $g_d);

    $j_days_in_month = array(0, 31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);
    $leap = 0;
    if ($g_m>1 && (($g_y%4==0 && $g_y%100!=0) || ($g_y%400==0))){
        $j_days_in_month[12]++;
        $leap = 1;
    }

    $j_month_name = array('', 'فروردین', 'اردیبهشت', 'خرداد', 'تیر',
            'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند');
    $j_week_name = array('Saturday' => 'شنبه',
                        'Sunday' => 'یک شنبه',
                        'Monday' => 'دوشنبه',
                        'Tuesday' => 'سه شنبه',
                        'Wednesday' => 'چهارشنبه',
                        'Thursday' => 'پنج شنبه',
                        'Friday' => 'جمعه',
                        'Sat' => 'ش',
                        'Sun' => 'ی',
                        'Mon' => 'د',
                        'Tue' => 'س',
                        'Wed' => 'چ',
                        'Thu' => 'پ',
                        'Fri' => 'ج');
    $j_week_number = array('Sat' => '1',
                           'Sun' => '2',
                           'Mon' => '3',
                           'Tue' => '4',
                           'Wed' => '5',
                           'Thu' => '6',
                           'Fri' => '7');

    // calculate string
    $output_str='';

    for ($i=0; $i<strlen($format); $i++){

        if($format[$i]!='\\'){
            switch($format[$i]){
                case 'd':
                    if($jd<10) $output_str.='0'.$jd; else $output_str.=$jd;
                    break;
                case 'j':
                    $output_str.=$jd;
                    break;
                case 'D':
                case 'S':
                    $output_str.=$j_week_name[date('D', $timestamp)];
                    break;
                case 'l':
                    $output_str.=$j_week_name[date('l', $timestamp)];
                    break;
                case 'w':
                case 'N':
                    $output_str.=$j_week_number[date('D', $timestamp)];
                    break;
                case 'z':
                    $output_str.=sprintf('%03d', $j_all_days);
                    break;
                case 'W':
                    $output_str.=floor(($j_all_days+1)/7);
                    break;
                case 'F':
                case 'M':
                    $output_str.=$j_month_name[$jm];
                    break;
                case 'm':
                    if($jm<10) $output_str.='0'.$jm; else $output_str.=$jm;
                    break;
                case 'n':
                    $output_str.=$jm;
                    break;
                case 't':
                    $output_str.=$j_days_in_month[$jm];
                    break;
                case 'L':
                    $output_str.=$leap;
                    break;
                case 'o':
                case 'Y':
                    $output_str.=$jy;
                    break;
                case 'y':
                    $output_str.=$jy-(floor($jy/100)*100);
                    break;
                case 'a':
                case 'A':
                    if(date('a', $timestamp)=='pm') $output_str.='بعد از ظهر'; else $output_str.='قبل از ظهر';
                    break;
                case 'B':
                    $output_str.=date('B', $timestamp);
                    break;
                case 'g':
                    $output_str.=date('g', $timestamp);
                    break;
                case 'G':
                    $output_str.=date('G', $timestamp);
                    break;
                case 'h':
                    $output_str.=date('h', $timestamp);
                    break;
                case 'H':
                    $output_str.=date('H', $timestamp);
                    break;
                case 'i':
                    $output_str.=date('i', $timestamp);
                    break;
                case 's':
                    $output_str.=date('s', $timestamp);
                    break;
                case 'e':
                    $output_str.=date('e', $timestamp);
                    break;
                case 'I':
                    $output_str.=date('I', $timestamp);
                    break;
                case 'O':
                    $output_str.=date('O', $timestamp);
                    break;
                case 'Z':
                    $output_str.=date('Z', $timestamp);
                    break;
                case 'c':
                    $output_str.=persian_date_utf('d-m-Y\TH:i:sO', $timestamp);
                    break;
                case 'r':
                    $output_str.=persian_date_utf('D، j F Y H:i:s O', $timestamp);
                    break;
                case 'U':
                    $output_str.=date('U', $timestamp);
                    break;
                default:
                    $output_str.=$format[$i];
                    break;
            }
        } else {
            $i++;
            $output_str.=$format[$i];
        }
    }

    return $output_str;
}

/**
 * Create a Unix timestamp for a Persian date
 * This function works only with day > 0
 *
 * @author Omid Mottaghi
 * @access public
 * @param   int hour
 * @param   int minute
 * @param   int second
 * @param   int month
 * @param   int day
 * @param   int year
 * @param   int is daylight savings time set?
 * @return  int returned timestamp
 */
function persian_mktime($hour='', $min='', $sec='', $mon='', $day='', $year='', $is_dst=-1){
    $j_days_in_month = array(31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);

    if ( (string) $hour == '') { $hour = persian_date_utf('H'); }
    if ( (string) $min  == '') { $min  = persian_date_utf('i'); }
    if ( (string) $sec  == '') { $sec  = persian_date_utf('s'); }
    if ( (string) $day  == '') { $day  = persian_date_utf('j'); }
    if ( (string) $mon  == '') { $mon  = persian_date_utf('n'); }
    if ( (string) $year == '') { $year = persian_date_utf('Y'); }

    /*
       an ugly, beta code snippet to support days <= zero!
       it should work, but days in one or more months should calculate!
    */

    /*
    if($day <= 0){
        // change sign
        $day = abs($day);

        // calculate months and days that shall decrease
        // this do-while has a lot of errors!!!
        do{
            // $month_days = $j_days_in_month[$mon]
            $months  = floor($day/30);
            $days = $day % 30;
        }while();

        $mon -= $months;
        $day -= $days;
        if ($day < 1) {
            $mon--;
        }
    }
    */

    if ($mon <= 0){
        // change sign
        $mon = abs($mon);

        // calculate years and months that shall decrease
        $years  = floor($mon/12);
        $months = $mon % 12;

        $year -= $years;
        $mon  -= $months;
        if ($mon < 1) {
            $year--;
            $mon += 12;
        }
    }

    if ($day < 1) {
        $temp_month = $mon-1;
        $temp_year  = $year;
        if($temp_month <= 0){
            $temp_month = 12;
            $temp_year--;
        }
        if ($temp_month>1 && (($temp_year%4==0 && $temp_year%100!=0) || ($temp_year%400==0))){
            $j_days_in_month[12] = 30;
        }else{
            $j_days_in_month[12] = 29;
        }
        $day += $j_days_in_month[$temp_month];
    }

    list($year, $mon, $day) = p2g($year, $mon, $day);
    return mktime($hour, $min, $sec, $mon, $day, $year, $is_dst);
}
