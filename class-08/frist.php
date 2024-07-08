<?php
class hello{
    public static function greetings(){
        echo "Hello programmer!";
    }
    public function __construct()
    {
        self::greetings();
    }
}
//(new hello())->greetings();
//hello::greetings();// Scope resolution operator.
new Hello();

?>