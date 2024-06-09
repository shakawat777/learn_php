<?php
/*
$dateSrtring = '2024-06-09 01:21:36';
$timeStemp = strtotime($dateSrtring);
echo $timeStemp. "\n";
*/

/*
// formated date format:
    $formatedDate = date('Y-m-d H:i:s',$timeStemp);
    echo $formatedDate ."\n";
*/


    /*
// mektime function:
$mak_time = mktime(01,21,36 , 6,9,2024 );
echo $mak_time . "\n"; 
*/

/*
// Different time:
   
$start_time =mktime(0,0,0 , 6,1,2024);
$end_time  = mktime(0,0,0 , 6,9,2024);
$diff_Inseconds = $end_time - $start_time;
echo "time: $diff_Inseconds \n";


//Find day to second:
$diff_Indays = $diff_Inseconds/(60*60*24);
echo "days: $diff_Indays \n";
*/

$year = 2024;
$month = 06;
$day = 10;
 $dateSrtring = sprintf("%d-%d-%d", $year, $month, $day);
  echo $dateSrtring . "\n";

  printf("%d-%d-%d", $year, $month, $day);
