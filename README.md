# getTimeAgo
PHP Function to calculate time between two dates

How to use:

#include files:
include 'getTimeAgo.php';


$date = "@1367367755";
$date = "2001-10-11 11:03:00";

#put yor firest datetime 
$datenow = "2013-10-11 11:03:00";

#put yor second datetime 
$date = "2001-10-11 11:03:20";

#Set Your Country TimeZone
$timezone = 'Asia/Qatar';

#you can check list from php website 
http://php.net/manual/en/timezones.php

#for English :
echo EnGetTimeAgo($datenow, $date, $timezone);

#for Arabic
echo ArGetTimeAgo($datenow, $date, $timezone);


#Note :
#you can use "Timestamp" like this :
$date = "@1367367755";
put '@' befor timestamp
