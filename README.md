# getTimeAgo
<h4> PHP Function to calculate time between two dates </h4>

# Use:
<h4>require file getTimeAgo.php to your page</h4>
* require 'getTimeAgo.php';

<h4>put yor firest datetime</h4> 
* $datenow = "2013-10-11 11:03:00";

<h4>put yor second datetime</h4>
* $date = "2001-10-11 11:03:20";

<h4>Set Your Country TimeZone</h4>
* $timezone = 'Asia/Qatar';

<h4>if want to get number days of two dates</h4>
* ste [true] last argument

<h4>you can check list from php website</h4>
http://php.net/manual/en/timezones.php

<h4>for English :</h4>
<?php echo EnGetTimeAgo($datenow, $date, $timezone);?>

<h4>for Arabic</h4>
<?php echo ArGetTimeAgo($datenow, $date, $timezone);?>


#Note :
<h4>you can use also "Timestamp" like this :</h4>
- $date = "@1493262055";
- put '@' befor timestamp
