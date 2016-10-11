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
* 1st @param [datetime]
* 2nd @param [timestamp] should be put '@' before timestamp number
* 3rd @param [timezone]  : {Asia/Qatar by default in function arguments}
* 4th @param [true]  : set {true} to get number of dayes
* Exmp : EnGetTimeAgo($date, $date2, 'Asia/Qatar') or EnGetTimeAgo($date, $date2, 'Asia/Qatar', true);
*/

echo ArGetTimeAgo($date1, $date2, $timezone);
//echo EnGetTimeAgo($date1, $date2, $timezone, true); //get number of dayes between 2 dates
?>
