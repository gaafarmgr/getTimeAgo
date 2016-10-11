# getTimeAgo
<h2> PHP Function to calculate time between two dates </h2>

# How to Useg:
require file getTimeAgo.php to your page
require 'getTimeAgo.php';

#put yor firest datetime 
$datenow = "2013-10-11 11:03:00";

#put yor second datetime 
$date = "2001-10-11 11:03:20";

#Set Your Country TimeZone
$timezone = 'Asia/Qatar';

#you can check list from php website 
http://php.net/manual/en/timezones.php

#for English :
<?php echo EnGetTimeAgo($datenow, $date, $timezone);?>

#for Arabic
<?php echo ArGetTimeAgo($datenow, $date, $timezone);?>


#Note :
#you can use "Timestamp" like this :
- $date = "@1367367755";
- put '@' befor timestamp
