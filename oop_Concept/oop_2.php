<?php
function greet($message){
    echo "Hello " . $message;
}
greet("Basic oop concept \n");


class Greet{
    function greel($message){
        echo "Hello " . $message;
    }
}
$greeting = new Greet();
$greeting -> greel("OOP Concept is available")
?>