<?php
class hello{
    public static function greetings(){
        echo "Hello programmer!";
    }
}
(new hello())->greetings();
//hello::greetings();// Scope resolution operator.

?>