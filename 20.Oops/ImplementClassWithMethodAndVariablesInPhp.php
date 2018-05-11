<?php
class emp
{
    var $empno;
    var $ename;
    var $sal;
    function display($empno,$ename,$sal)
    {
        $this->empno=$empno;
        $this->ename=$ename;
        $this->sal=$sal;
    }
    function show()
    {
        echo $this->empno." ".$this->ename." ".$this->sal,"<br>";
    }
}
$e=new emp();
$e->display(100,"james",9000);
$e->show();
$e1=new emp();
$e1->empno=200;
$e1->ename="scott";
$e1->sal=5000;
$e1->show();
?>