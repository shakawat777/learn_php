<?php
/*
$fruits = "Apple, Banana,orange";
$c = explode(',', $fruits);//$c = explode(" ", $fruits);
print_r($c);
*/

/*
$fruits = "Apple, Banana,orange,mango,cheery";
$c = preg_split("/[\s,]+/", $fruits);
print_r($c);

echo"\n";
*/

$fruits = "Apple,Banana,orange,mango,cheery";
$c = preg_split("/\s*/", $fruits);

print_r($c);
/*
echo"\n";
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);
*/
echo"\n";

$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr);
