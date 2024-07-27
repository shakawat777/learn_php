<?php
include'./student.php'; // Include'student.php';
// use \App\controller\student; //namespace use for autoloading.
$obj = new \App\controller\student;

$std = $obj->name; // property call.
echo $std;

?>