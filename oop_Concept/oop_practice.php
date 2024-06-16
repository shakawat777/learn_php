<?php
/*
function fast($start){
    echo $start ."Welcome to the new oop concept.\n";
}
fast("Hi Mr. Shaakawat! ");

class End{

    function end($start){
        echo $start . "Welcome to the new opp concept.\n";
    }
}
$geat = new End();// create Object.
$geat -> End("Hello Mr. Shaakawat");//method call

*/
/*
class start{
    public $name;
    public function setName($newname){
        $this->name = $newname;

    }
    public function getName(){
        echo "$this->name";
    }
}
$end = new start();
$end -> setName("Welcome to new oop concept.");
$end -> getName();
*/
class oop{
    public $name;

    public function setName($newname){
        $this ->name = $newname;


    }

    public function getName(){
       return $this->name;

    }
}
$use = new oop();
$use -> setName("hello American");
$use1= $use ->getName();
echo $use1;