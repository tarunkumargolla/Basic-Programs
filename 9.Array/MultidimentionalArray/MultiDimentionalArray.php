<?php
$students=array(array('name','age','weight'),array('mark',15,65),array('john',13,46),array('tom',14,56));
echo $students[0][0]."- - ";echo $students[0][1]."- - ";echo $students[0][2]."<br>";
echo $students[1][0]."- - ";echo $students[1][1]."- - ";echo $students[1][2]."<br>";
echo $students[2][0]."- - ";echo $students[2][1]."- - ";echo $students[2][2]."<br>";
echo $students[3][0]."- - ";echo $students[3][1]."- - ";echo $students[3][2]."<br>";
echo print_r($students);
?>