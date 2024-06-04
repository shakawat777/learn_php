<?php
/*
//Syntax foreach loop:
$myArray = array("name" => "volvo", "age" => "24", "message" => "medin Germany" );


foreach ($myArray as $key => $value){
    echo "$key => $value\n";
}
*/



/*
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
*/

$foods=[
    "vegetables" => "
    Tomato,
    Potato,
    Cucumber,
     Pumpkin,
     Pea",
    "fruits" => "
    Apple,
    Orange,
    Banana,
    Grapes,
    Mango",
    "Drinks" => "
    Lemu, 
    Rc-cola,
    mojo,
    frutika,
    Lemon,
    "
];
// This line for concatenation.
$foods["Drinks"] .= "cleamon";

foreach ($foods as $key => $food) {
     echo "$key" ."=>" . "$food";
     echo "\n";
}
// For searching key.
/*
$key = array_keys($foods);
print_r($key);
*/

 