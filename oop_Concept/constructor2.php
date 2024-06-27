<?php
class personDescriptions{
    public $personName;
    public $personAge;
    public $id;
    public function __construct($personName, $personAge){
        $this ->personName = $personName;
        $this ->personAge = $personAge;
   }
   public function setId($id){
    $this->id = $id;
   }
   public function __destruct()
   {
        if(!empty($this->id)) {
            echo " This information is valid";
        }
   }
   public function personDetails(){
    echo " This person name is {$this->personName} and the PersonAge is ". $this->personAge ."\n";
   }
}

$personInfo = new personDescriptions("Shakawat",25);
$personInfo->personDetails();
$personInfo->setId(123);

?>