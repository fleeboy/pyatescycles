<?php

/********* Instructions **************************/
/*
   This program has been provided for those on shared hosting as a replacement for
   crontab.example and edited versions of it.  Those programs will not work in this
   shared hosting environment because  

       a) the servers are firewall blocked from talking to themselves, and
       b) cron jobs are limited to three per website, and
       c) each cron job is limited to once per hour or less frequently.

   Using your WEBSITE control panel item, Scheduled Tasks, schedule this program, cron.php, 
   to run at your chosen frequency, eg weekly or monthly.


   Enter this as the program to run in the box on the WEBSITE control panel, Scheduled Tasks

   /usr/bin/php5-cli /home/sites/pyatescycles.co.uk/public_html/racebook/cron.php 

   You will also need to enable the plugins, that you want to schedule, in the ELGG admin cotrol panel,
   eg garbagecollector, logrotate.
   If the plugin has a frequency to set make sure the frequency in Scheduled Tasks, the plugin and
   $freq below are consistent.  The action will not occur if, for instance, the plugin has a setting
   of 'weekly' and the command is passed the value ($freq) of 'monthly'.

   The file cron.log is not rotated.  It is there mainly so you can see that the scheduled items
   are being done.   You can change $log below to '/dev/null' when you are satisfied that you have set 
   the cron facility and all is working OK.
*/
/********* End of Instructions **************************/

//  Uncomment only one of the $freq lines below

// $freq = 'hourly';
// $freq = 'daily';
// $freq = 'weekly';
$freq = 'monthly';
// $freq = 'yearly';

$log = '../../cron.log';   

/**
   Now to do the action
*/

exec("cd /home/sites/pyatescycles.co.uk/public_html/racebook/engine/handlers; /bin/date >> $log; /usr/bin/php5-cli ./pagehandler-cli.php cron  $freq >> $log 2>&1");

?>
