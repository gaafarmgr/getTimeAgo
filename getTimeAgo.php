<?php
function EnGetTimeAgo($datenow, $datetime, $timezone = 'Asia/Qatar', $full = false) {

    // set timezone :: by default [Asia/Qatar] +3
    date_default_timezone_set($timezone);

    // get DateTime now;
    $now = new DateTime($datenow);

    // set DateTime you want manuel or get from database
    $ago = new DateTime($datetime);

    // operation difference between 2 Dates
    $diff = $now->diff($ago);

    // get this weeks basd on days [retrun 0]
    $diff->w = floor($diff->d / 7);

    // get this days basd on week [retrun 0]
    $diff->d -= $diff->w * 7;

    // string date & time format
    $string = array('y' => 'year','m' => 'month','w' => 'week','d' => 'day','h' => 'hour','i' => 'minute','s' => 'second',);

    // loop to set format string after get operation difference value
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    // @param false by default - set {true} to show full date time [Year Mont day hour minut second]
    if (!$full) $string = array_slice($string, 0, 1);

    // return how many days ago
    return $string ? implode(', ', $string).' ago' : 'just now';
}





/**
 * function ArGetTimeAgoAr()
 * Arabic Lang
 */
function ArGetTimeAgo($datenow, $datetime, $timezone = 'Asia/Qatar', $full = false) {

    // set timezone :: by default [Asia/Qatar] +3
    date_default_timezone_set($timezone);

    // get DateTime now;
    $now = new DateTime($datenow);

    // set DateTime you want manuel or get from database
    $ago = new DateTime($datetime);

    // operation difference between 2 Dates
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $ago = "منذ";
    $now = "الآن";

    $year = 'سنة';
    $years = 'سنوات';

    $month = 'شهر';
    $months = 'شهور';

    $week = 'اسبوع';
    $weeks = 'أسابيع';

    $day = 'يوم';
    $days = 'أيام';

    $hour = 'ساعة';
    $hours = 'ساعات';

    $minutes = 'دقائق';
    $minute = 'دقيقة';

    $second = 'ثانية';
    $seconds = 'ثوان';


    // string date & time format Single
    $string = array(
        'y' => $year,
        'm' => $month,
        'w' => $week,
        'd' => $day,
        'h' => $hour,
        'i' => $minute,
        's' => $second
        );


    // string date & time format collection
    $strings = array(
        'y' => $years,
        'm' => $months,
        'w' => $weeks,
        'd' => $days,
        'h' => $hours,
        'i' => $minutes,
        's' => $seconds
        );


    //loop to set format string after get operation difference value
    foreach ($string as $k => &$v) {

        if ( $diff->$k ) {
            $v = $diff->$k . ' '. ( $diff->$k > 2 && $diff->$k <= 11 ? $strings[$k] : $string[$k] );
        } else {
            unset($string[$k]);
        }
    }

    // @param false by default - set {true} to show full date time [Year Mont day hour minut second]
    if (!$full) $string = array_slice($string, 0, 1);

    // return how many days ago
    return $string ? $ago .' '. implode(', ', $string) : $now;
}
?>