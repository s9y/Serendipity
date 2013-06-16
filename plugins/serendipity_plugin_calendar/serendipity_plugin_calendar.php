<?php

class serendipity_plugin_calendar extends serendipity_plugin {
    var $title = CALENDAR;

    function introspect(&$propbag)
    {
        $propbag->add('name',        CALENDAR);
        $propbag->add('description', QUICKJUMP_CALENDAR);
        $propbag->add('configuration', array('beginningOfWeek', 'enableExtEvents', 'category'));
        $propbag->add('stackable',     false);
        $propbag->add('author',        'Serendipity Team');
        $propbag->add('version',       '1.1');
        $propbag->add('groups',        array('FRONTEND_VIEWS'));
    }

    function introspect_config_item($name, &$propbag)
    {
        switch($name) {
            case 'beginningOfWeek':
                $options = array();
                for ( $i = 1; $i <= 7; $i++ ) {
                    $options[] = serendipity_formatTime('%A', mktime(0,0,0,3,$i-1,2004));
                }

                $propbag->add('type',        'select');
                $propbag->add('select_values', $options);
                $propbag->add('name',        CALENDAR_BEGINNING_OF_WEEK);
                $propbag->add('description', CALENDAR_BOW_DESC);
                $propbag->add('default',     1);
                break;

            case 'enableExtEvents':
                $propbag->add('type',        'boolean');
                $propbag->add('name',        CALENDAR_ENABLE_EXTERNAL_EVENTS);
                $propbag->add('description', CALENDAR_EXTEVENT_DESC);
                $propbag->add('default',     false);
                break;

            // Event Calendar: Support category!
            case 'category':
                $categories = array('all' => ALL_CATEGORIES);
                $cats       = serendipity_fetchCategories();

                if (is_array($cats)) {
                    $cats = serendipity_walkRecursive($cats, 'categoryid', 'parentid', VIEWMODE_THREADED);
                    foreach($cats as $cat) {
                        $categories[$cat['categoryid']] = str_repeat(' . ', $cat['depth']) . $cat['category_name'];
                    }
                }

                $propbag->add('type',         'select');
                $propbag->add('name',         CATEGORIES_PARENT_BASE);
                $propbag->add('description',  CATEGORIES_PARENT_BASE_DESC);
                $propbag->add('select_values', $categories);
                $propbag->add('default',      'all');
                break;

            default:
                return false;
        }
        return true;
    }

    function generate_content(&$title)
    {
        global $serendipity;

        $title = $this->title;

        // Usage of serendipity_serverOffsetHour is as follow:
        // * Whenever a date to display needs to be set, apply the timezone offset
        // * Whenever we USE the date anywhere in the database, subtract the timezone offset
        // * Whenever we DISPLAY the date, we do not apply additional timezone addition to it.

        if (!isset($serendipity['GET']['calendarZoom'])) {
            if (!isset($serendipity['range'])) {
                $serendipity['GET']['calendarZoom'] = serendipity_serverOffsetHour(time());
            } else {
                $serendipity['GET']['calendarZoom'] = serendipity_serverOffsetHour($serendipity['range'][0]);
            }
        }


        $month = date('m', serendipity_serverOffsetHour($serendipity['GET']['calendarZoom'], true));
        $year  = date('Y', serendipity_serverOffsetHour($serendipity['GET']['calendarZoom'], true));

        $bow = (int)$this->get_config('beginningOfWeek', 1);
        // Check for faulty input, is so - run the default
        if ($bow > 6) {
            $bow = 1;
        }

        // Catch faulty month
        $month = (int)$month;
        if ($month < 1) {
            $month = 1;
        }

        switch($serendipity['calendar']) {
            default:
            case 'gregorian':
                // How many days does the month have?
                $ts              = strtotime($year . '-' . sprintf('%02d', $month) . '-01');
                $now             = serendipity_serverOffsetHour(time());
                $nrOfDays        = date('t', $ts);
                $firstDayWeekDay = date('w', $ts);
                $firstts = $ts;
                $endts = mktime(0, 0, 0, $month + 1, 1, $year);

                break;

            case 'persian-utf8':

                require_once S9Y_INCLUDE_PATH . 'include/functions_calendars.inc.php';

                list(,$jy, $jm, $jd) = $serendipity['uriArguments'];

                if( isset($jd) && $jd ){
                    list ( $gy, $gm, $gd ) = p2g ($jy, $jm, $jd);
                }elseif( isset($jm) && $jm ){
                    list ( $gy, $gm, $gd ) = p2g ( $jy, $jm, 1);
                }else{
                    $gy = $year;
                    $gm = $month;
                    $gd = (int) date('d');
                }

                list ( $year, $month, $day ) = g2p ($gy, $gm, $gd);

                // How many days does the month have?
                $ts              = strtotime($gy . '-' . sprintf('%02d', $gm) . '-' . sprintf('%02d', $gd));
                $now             = serendipity_serverOffsetHour(time());
                $nrOfDays = persian_strftime_utf('%m', $ts);
                $j_days_in_month = array(0, 31, 31, 31, 31, 31, 31, 30, 30, 30, 30, 30, 29);
                if ($year%4 == 3 && $nrOfDays == 12) $nrOfDays = $j_days_in_month[(int)$nrOfDays]+1;
                else $nrOfDays = $j_days_in_month[(int)$nrOfDays];

                // Calculate first timestamp of the month
                list ($firstgy, $firstgm, $firstgd ) = p2g ( $year, $month, 1);
                $firstts = mktime (0, 0, 0, $firstgm, $firstgd, $firstgy);

                // Calculate first persian day, week day name
                $firstDayWeekDay = date('w', $firstts);

                // Calculate end timestamp of the month
                list ( $end_year, $end_month, $end_day ) = p2g ($year, $month+1, 1);
                $endts = mktime(0, 0, 0, $end_month, $end_day, $end_year);
                break;
        } // end switch

        // Calculate the first day of the week, based on the beginning of the week ($bow)
        if ($bow > $firstDayWeekDay) {
            $firstDayWeekDay = $firstDayWeekDay + 7 - $bow;
        } elseif ( $bow < $firstDayWeekDay ) {
            $firstDayWeekDay = $firstDayWeekDay - $bow;
        } else {
            $firstDayWeekDay = 0;
        }

        // Calculate the number of next/previous month
        if ($month > 1) {
            $previousMonth = $month-1;
            $previousYear  = $year;
        } else {
            $previousMonth = 12;
            $previousYear  = $year-1;
        }

        if ($month < 12) {
            $nextMonth = $month+1;
            $nextYear  = $year;
        } else {
            $nextMonth = 1;
            $nextYear  = $year+1;
        }

        // Get first and last entry
        $minmax = serendipity_db_query("SELECT MAX(timestamp) AS max, MIN(timestamp) AS min FROM {$serendipity['dbPrefix']}entries");
        if (!is_array($minmax) || !is_array($minmax[0]) || $minmax[0]['min'] < 1 || $minmax[0]['max'] < 1) {
            // If no entry is available yet, allow scrolling a year back and forth
            $minmax = array(
                        '0' => array(
                                 'min' => mktime(0, 0, 0, 1, 1, date('Y', $now) - 1),
                                 'max' => mktime(0, 0, 0, 1, 1, date('Y', $now) + 1)
                               )
                            );
        }

        // Find out about diary entries
        $add_query   = '';
        $base_query  = '';
        $cond = array();
        $cond['and']     = "WHERE e.timestamp  >= " . serendipity_serverOffsetHour($firstts, true) . "
                              AND e.timestamp  <= " . serendipity_serverOffsetHour($endts, true) . "
                                  " . (!serendipity_db_bool($serendipity['showFutureEntries']) ? " AND e.timestamp  <= " . serendipity_db_time() : '') . "
                              AND e.isdraft     = 'false'";

        serendipity_plugin_api::hook_event('frontend_fetchentries', $cond, array('noCache' => false, 'noSticky' => false, 'source' => 'calendar'));

        // Event Calendar
        $cat = $this->get_config('category', 'all');
        if ($cat != 'all') {
            $catid = (int)$cat;
        } elseif (isset($serendipity['GET']['category'])) {
            $catid = (int)$serendipity['GET']['category'];
        } else {
            $catid = false;
        }
        
        if ($catid) {
            $base_query   = 'C' . $catid;
            $add_query    = '/' . $base_query;
            $querystring = "SELECT timestamp
                              FROM {$serendipity['dbPrefix']}category c,
                                   {$serendipity['dbPrefix']}entrycat ec,
                                   {$serendipity['dbPrefix']}entries e
                                   {$cond['joins']}
                                   {$cond['and']}
                               AND e.id          = ec.entryid
                               AND c.categoryid  = ec.categoryid
                               AND (" . serendipity_getMultiCategoriesSQL($catid) . ")";
        }

        if (!isset($querystring)) {
            $querystring = "SELECT id, timestamp
                              FROM {$serendipity['dbPrefix']}entries e
                              {$cond['joins']}
                              {$cond['and']}";
        }

        $rows = serendipity_db_query($querystring);

        switch($serendipity['calendar']) {
            default:
            case 'gregorian':
                $activeDays = array();
                if (is_array($rows)) {
                    foreach ($rows as $row) {
                        $row['timestamp'] = serendipity_serverOffsetHour($row['timestamp']);
                        $activeDays[date('j', $row['timestamp'])] = $row['timestamp'];
                    }
                }
                $today_day   = date('j', $now);
                $today_month = date('m', $now);
                $today_year  = date('Y', $now);
                break;

            case 'persian-utf8':
                $activeDays = array();
                if (is_array($rows)) {
                    foreach ($rows as $row) {
                        $row['timestamp'] = serendipity_serverOffsetHour($row['timestamp']);
                        $activeDays[(int) persian_date_utf('j', $row['timestamp'])] = $row['timestamp'];
                    }
                }
                $today_day   = persian_date_utf('j', $now);
                $today_month = persian_date_utf('m', $now);
                $today_year  = persian_date_utf('Y', $now);
                break;

        } // end switch

        $externalevents = array();
        if (serendipity_db_bool($this->get_config('enableExtEvents', false))) {
            serendipity_plugin_api::hook_event('frontend_calendar', $externalevents, array('Month' => $month, 'Year' => $year,
                                                                                           'TS' => $ts, 'EndTS' => $endts));
        }

        // Print the calendar
        $currDay     = 1;
        $nrOfRows    = ceil(($nrOfDays+$firstDayWeekDay)/7);
        for ($x = 0; $x < 6; $x++) {
            // Break out if we are out of days
            if ($currDay > $nrOfDays) {
                break;
            }
            // Prepare row
            for ($y = 0; $y < 7; $y++) {
                $cellProps = array();
                $printDay = '';
                $link = '';

                if ($x == 0) {
                    $cellProps['FirstRow'] = 1;
                }
                if ($y == 0) {
                    $cellProps['FirstInRow'] = 1;
                }
                if ($y == 6) {
                    $cellProps['LastInRow'] = 1;
                }
                if ($x == $nrOfRows-1) {
                    $cellProps['LastRow'] = 1;
                }

                // If it's not a blank day, we print the day
                if (($x > 0 || $y >= $firstDayWeekDay) && $currDay <= $nrOfDays) {
                    $printDay = $currDay;

                    if ($today_day == $currDay && $today_month == $month && $today_year == $year) {
                        $cellProps['Today'] = 1;
                    }

                    if (isset($externalevents[$currDay])) {
                        if (isset($externalevents[$currDay]['Class'])) {
                            $cellProps[$externalevents[$currDay]['Class']] = 1;
                        }
                        if (isset($externalevents[$currDay]['Title'])) {
                            $cellProps['Title'] = htmlspecialchars($externalevents[$currDay]['Title']);
                        }
                        if (isset($externalevents[$currDay]['Extended'])) {
                            foreach($externalevents[$currDay]['Extended'] as $ext_key => $ext_val) {
                                $cellProps[$ext_key] = $ext_val;
                            }
                        }
                    }

                    if (isset($activeDays[$currDay]) && $activeDays[$currDay] > 1) {
                        $cellProps['Active'] = 1;
                        $cellProps['Link']   = serendipity_archiveDateUrl(sprintf('%4d/%02d/%02d', $year, $month, $currDay) . $add_query );
                    }
                    $currDay++;
                }
                $smartyRows[$x]['days'][] = array('name' => $printDay,
                                                  'properties' => $cellProps,
                                                  'classes' => implode(' ', array_keys($cellProps)));
            } // end for
        } // end for

        $serendipity['smarty']->assignByRef('plugin_calendar_weeks', $smartyRows);

        $dow = array();
        for ($i = 1; $i <= 7; $i++) {
            $dow[] = array('date' => mktime(0, 0, 0, 3, $bow + $i - 1, 2004));
        }
        $serendipity['smarty']->assignByRef('plugin_calendar_dow', $dow);

        $plugin_calendar_data = array('month_date'   => $ts,
            'uri_previous' => serendipity_archiveDateUrl(sprintf('%04d/%02d', $previousYear, $previousMonth). $add_query),
            'uri_month'    => serendipity_archiveDateUrl(sprintf('%04d/%02d', $year, $month) . $add_query),
            'uri_next'     => serendipity_archiveDateUrl(sprintf('%04d/%02d',$nextYear, $nextMonth) . $add_query),
            'minScroll'    => $minmax[0]['min'],
            'maxScroll'    => $minmax[0]['max']);
        $serendipity['smarty']->assignByRef('plugin_calendar_head', $plugin_calendar_data);
        echo serendipity_smarty_fetch('CALENDAR', 'plugin_calendar.tpl');

    }
}

?>