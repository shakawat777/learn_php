<?php
$students = array(
    "hasan",
    "hemel",
    "Hasib",
    "Shakib",
    "Shamim",
);
$n = count($students);
echo $n;
echo "\n";
/*
for($i = 0; $i < $n; $i++){
    echo $students[$i];
    echo "\n";
}
*/
// Array POP
// array_pop($students);
// array_pop($students);
// Array Shift.
/*
array_shift($students);
array_shift($students);
print_r($students);
*/

//  array_push($students,"Shagor","shakil");
//  print_r($students);
/*
array_unshift($students,"Rahim","Mahfuz");
print_r($students);
*/
/*
echo "$students[0]\n";
print_r($students);
*/
$students[1]="a";
$students[2]="b";

for($i = 0; $i < $n; $i++){
    echo $students[$i];
    echo "\n";
}

?>