<?php
class Test{
    public $name;
    public function setName($name){
        $this -> name = $name;

    }
    public function getName(){
        return $this -> name;
    }
}
$user = new Test();
$user ->setName("Welcome to new oop concept publcic with return value");
$message = $user -> getName();
echo $message;