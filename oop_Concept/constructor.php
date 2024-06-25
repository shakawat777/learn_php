<?php
// Constructor.
class Fund{
    public $fund;
    public function __construct($initialblance=0){
        $this->fund = $initialblance;
         //echo "Fund";
    }
    public function addFund($amount){
        $this -> fund += $amount;
        echo "\nFund added $" . $amount;
    }
    public function widthwidth($amount){
        $this -> fund -= $amount;
        echo "\nFund withdrawn $" . $amount;
    }
    public function getFund(){
        echo "\nTotal  fund is : {$this -> fund}";
    }
}
$OurFund = new Fund(1000);
$OurFund-> getFund();
$OurFund ->widthwidth(500);
$OurFund-> getFund();
 $OurFund-> addFund(1500);
 $OurFund-> getFund();
?>