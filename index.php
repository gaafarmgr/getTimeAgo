<?php
/* include files */
require 'getTimeAgo.php';

/***
* Set date time
* @Param $date[datetime] = date('Y-m-d' H:i:s);
* @Param $date[@timestamp] = @1367367755";
*/
$date1 = "2016-10-10 22:30:10";
$date2 = "2001-10-11 11:10:32";

/***
* Set Your Country TimeZone
* @param [timezone];
* http://php.net/manual/en/timezones.php
*/
$timezone = 'Asia/Qatar';


/***
* 1st @param [noraml datetime]
* 1st @param [timestamp @datetime] should be put '@' before timestamp number
* 2nd @param [timezone]  : {Asia/Qatar by default in function arguments}
* Exmp : echo GetTimeAgo($date, 'Asia/Qatar');
*/
echo ArGetTimeAgo($date1, $date2, $timezone);
?>