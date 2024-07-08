<?php
class A{
   function test(){
    echo "method in for class C extend  B class";
   }
}
class B extends A{

}
class C extends B{

}
//(new B())-> test();
(new C()) ->test();

?>