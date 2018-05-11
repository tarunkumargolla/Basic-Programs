<?php
abstract class class1
{
    function hello()
    {
        echo "hello1","<br>";
    }
    abstract function hello2();
}
class class2 extends class1
{
   public function hello2()
    {
        echo "hello2","<br>";
   }
   private function hello3()
   {
       echo "hello3","<br>";
   }
   public function hello4()
   {
       echo "hello4";
   }
}
//$c1=new class1();
$c2=new class2();
$c2->hello();
$c2->hello2();
$c2->hello4();
//$c2->hello3();
?>