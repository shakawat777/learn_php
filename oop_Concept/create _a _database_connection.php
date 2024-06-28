<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "database2";

$conn=mysqli_connect($serverName,$userName,$password,$dbName);

if(! $conn){
    echo "Error connecting";
}
echo "Database connection successfully";

?>