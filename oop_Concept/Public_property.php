<?php
class user{
    public $name;

    public function setName($newname){
       $this->name = $newname;

    }
    public function getName(){
        echo $this->name;

    }
}
$user1 = new user();
$user1 -> setName("Hello programmer.");
$user1 ->getName();