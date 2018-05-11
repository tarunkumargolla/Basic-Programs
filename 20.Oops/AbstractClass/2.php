<?php
abstract class class1
{
    abstract function hello1();
   // abstract function hello2();
   public function hello()
    {
        print $this->hello1();
    }
}
class class2 extends class1
{
    function hello1()
    {
       return  "hello1";
    }
}
    class class3 extends class1
    {
        function hello1()
        {
            echo "hello2","<br>";
        }
    }
    $c2=new class2();
    $c2->hello();
     $c3=new class3();
    $c3->hello();
?>