<?php
function greetings($message) {
    echo $message. " sumon";
}

greetings("Hello");

class Greeting{
    function greetings($message){
        echo"\nHello ". $message ;
    }

}
//$greetings = new Greeting();// Class instance.// object.
//$greetings->greetings("hello");// function kaj kore class er baire.

(new Greeting())->greetings("Bangladesh");// class er maddhome method ta call korte hobe.