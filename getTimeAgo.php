<?php
function EnGetTimeAgo($datenow, $datetime, $timezone = 'Asia/Qatar', $showFull = false) {

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
    $value_arr = array('y' => 'year','m' => 'month','w' => 'week','d' => 'day','h' => 'hour','i' => 'minute','s' => 'second',);

    // loop to set format string after get operation difference value
    foreach ($value_arr as $key => &$str) {
        if ($diff->$key) {
            $str = $diff->$key . ' ' . $str . ($diff->$key > 1 ? 's' : '');
        } else {
            unset($value_arr[$key]);
        }
    }

    // @param false by default - set {true} to show full date time [Year Mont day hour minut second]
    if (!$showFull) $value_arr = array_slice($value_arr, 0, 1);

    // return how many days ago
    return $value_arr ? implode(', ', $value_arr).' ago' : 'just now';
}





/**
 * function ArGetTimeAgoAr()
 * Arabic Lang
 */
function ArGetTimeAgo($datenow, $datetime, $timezone = 'Asia/Qatar', $showFull = false) {

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
    $arr_value = array(
        'y' => $year,
        'm' => $month,
        'w' => $week,
        'd' => $day,
        'h' => $hour,
        'i' => $minute,
        's' => $second
        );


    // string date & time format collection
    $arr_values = array(
        'y' => $years,
        'm' => $months,
        'w' => $weeks,
        'd' => $days,
        'h' => $hours,
        'i' => $minutes,
        's' => $seconds
        );


    //loop to set format string after get operation difference value
    foreach ($arr_value as $key => &$str) {

        if ( $diff->$key ) {
            $str = $diff->$key . ' '. ( $diff->$key > 2 && $diff->$key <= 11 ? $arr_values[$key] : $arr_value[$key] );
        } else {
            unset($arr_value[$key]);
        }
    }

    // @param false by default - set {true} to show full date time [Year Mont day hour minut second]
    if (!$showFull) $arr_value = array_slice($arr_value, 0, 1);

    // return how many days ago
    return $arr_value ? $ago .' '. implode(', ', $arr_value) : $now;
}
?>
