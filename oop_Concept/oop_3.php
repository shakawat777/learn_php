<?php
class person{
    public $Name;
    public $Age;
    public function Pname(){
        echo "This person name is ". $this->Name;
    }
    public function Page(){
        echo "\nThis person age is ". $this -> Age;
    }

}

$personOne = new person();
$personOne ->Name = "John";
$personOne ->Age = "25";

$personOne ->Pname();
$personOne->Page();
?>