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

/*
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
*/
/*
class Aoop{
    public $application;
    public function setName($newApplication){
        $this ->application =$newApplication;
    }
    public function getName(){
        echo $this->application;
    }
}
$use = new Aoop();
$use ->setName("applications");
$use ->getName();
*/


/*
class S{
    public $name;
    public function setName($newName){
        $this ->name = $newName;
    }
    public function getName(){
        return $this ->name;

    }
}
$mySelf = new S();
$mySelf->setName("Life a little  but");
echo $mySelf->getName();
// echo $message;

*/


/*
class person{
    public $personName;
    public $personAge;
    public $personGender;
    public function Name(){
        echo "This person name is ". $this->personName;
    }
    public function Age(){
        echo "\nThis person age is ". $this -> personAge;
    }
    public function Gender(){
        echo "\n This person gender is " . $this-> personGender;
    }
}
$personDescriptions = new person();
$personDescriptions -> personName = "Md. Shakawat hossain khan";
$personDescriptions -> personAge = "25";
$personDescriptions -> personGender = "Male";
//method call 
$personDescriptions -> Name();
$personDescriptions -> Age();
$personDescriptions -> Gender();

*/


//-------------------------------------------------------


/*


class Fund{
    public $fund;
    public function __construct($initialblance=0)
    {
        $this->fund = $initialblance;
        echo "Bank Account";
    }
    public function depositFund($amount){
        $this->fund += $amount;
        echo "\n My Account Deposit Amount: " . $amount;
    }
    public function withdrawnFund($amount){
        $this->fund -= $amount;
        echo "\n My Account Withdrawn Amount: " . $amount;
    }
    public function getFund(){
        echo "\n Total Amount: {$this->fund}" ;
    }
}
$myfund = new Fund(2000);
$myfund->getFund();
$myfund->depositFund(500);
$myfund -> getFund();
$myfund -> withdrawnFund(300);
$myfund -> getFund();
*/

class personsInformation{
    public $personName;
    public $personAge;

    public function __construct($personName,$personAge)
    {
        $this-> personName = $personName;
        $this-> personAge = $personAge;
    }
    public function personDescription(){
        echo "This person name is {$this->personName} and the age is " .$this ->personAge;
    }
}
$personDetails = new personsInformation("Hossain",25);
$personDetails -> personDescription();