<?php
/*
function evenOrodd($n) {
    if($n%2 == 0){
        return true;
    }
    else{
        return false;
    }
}
$x=12;
if(evenOrodd($x)){
    echo "The number {$x} is even";
}
else{
    echo "The number {$x} is odd";
}
*/

/*
function sum(float $a, int $b, int $c){
    // $a = 35;
    // $b = 45;
    // $c=5;
    $sum = $a+$b+$c;
    echo "$sum";

}
sum(3.5,5,6);
*/
// Most important code for function.
/*
function sum(...$numbers) {
    $sum = 0;
    for ($i=0;$i<count($numbers);$i++) {
        $sum+= $numbers[$i];
    }
    return $sum;
    

}
echo  sum(1,2,3,4,5);
*/
/* Write a function for recursive function.*/ 

function printNumbers($numbers){
    if($numbers > 10){
        return;

    }
    echo $numbers . " ";
    printNumbers($numbers+1);
}
printNumbers(0);

 

