<?php
include'./student.php'; // Include'student.php';
// use \app\controller\student; //namespace use for autoloading.
$obj = new \app\controller\student;

$std = $obj->name; // property call.
echo $std;

?>