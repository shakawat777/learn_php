<?php
$dateSrtring = '2024-06-09 01:21:36';
$timeStemp = strtotime($dateSrtring);
echo $timeStemp. "\n";
// formated date format:
    $formatedDate = date('Y-m-d H:i:s',$timeStemp);
    echo $formatedDate ."\n";
// mektime function:
$mak_time = mktime(01,21,36 , 6,9,2024 );
echo $mak_time . "\n"; 

// Different time:
    /*
$start_time =mktime(0,0,0 , 1,6,2024);
$end_time  = mktime(0,0,0 , 9,6,2024);
$time_diff = $end_time - $start_time;
echo "time: $time_diff \n";
*/

//Find day to second: