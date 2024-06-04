<?php
/*
//Syntax foreach loop:
$myArray = array("name" => "volvo", "age" => "24", "message" => "medin Germany" );


foreach ($myArray as $key => $value){
    echo "$key => $value\n";
}
*/

function myCar(){
    echo "volvo";
   
 }
function myMessage(){
     echo "medin Germany";
}

function myAge(){
    echo "24";
}
$myArray = array("car" => "myCar", "age" => "myAge", "message" => "myMessage" );

 $myArray["car"]();
 echo "\n";
 $myArray["age"]();
 echo "\n";
 $myArray["message"]();

 