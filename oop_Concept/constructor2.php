<?php
class personDescriptions{
    public $personName;
    public $personAge;
    public function __construct($personName, $personAge){
        $this ->personName = $personName;
        $this ->personAge = $personAge;
   }
   public function personDetails(){
    echo " This person name is {$this->personName} and the PersonAge is ". $this->personAge;
   }
}

$personInfo = new personDescriptions("Shakawat",25);
$personInfo->personDetails();

?>