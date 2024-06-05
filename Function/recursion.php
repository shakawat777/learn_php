<?php

/* Write a function for recursive function.*/ 
/*
function printNumbers($numbers){
    if($numbers > 10){
        return;

    }
    echo $numbers . " ";
    printNumbers($numbers+1);
}
printNumbers(0);
*/

/*
// Write a program SWAP two numbers.
$a = 10;
$b = 15;
 echo "a = " . $a . "\n" ."b = " . $b ."\n";
 echo "\n";
 // logic for swapping:
    $temp =  $a;
    $a = $b;
    $b = $temp;
    echo "a = " . $a. "\n". "b = ". $b. "\n";
*/
    /* Write a program swap two numbers using recursion*/
/*
    function swap($a, $b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
         echo "a = ". $a. "\n". "b = ". $b. "\n";
        echo "\n";

    }
    
    $a = 10;
    $b = 15;
    swap($a, $b);
    // echo "a = ". $a. "\n". "b = ". $b. "\n";
    */
//Write a program fibonacci series using recursive functions.
/*
function fibonacci($old, $new, $start, $end){
    if($start>$end){
        return;
    }
    $start++;
    echo $old . " ";
    $temp = $old + $new;
    $old = $new; 
    $new = $temp;
    fibonacci($old, $new, $start, $end);
} 
fibonacci(0, 1, 1, 10)

*/
echo date("F l  d-y-m  h:i:s");
?>
