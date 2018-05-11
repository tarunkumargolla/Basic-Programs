<?php
echo "in the php single or simple level inheritence caleculate php faculty total salary";
class faculty
{
    public static $basicsal=50000;
}
class phpfaculty extends faculty
{
    public static $bonus=10000;
}
echo "php faculty Basic Salary is:".phpfaculty::$basicsal,"<br>";
echo "php faculty Bonus is:".phpfaculty::$bonus,"<br>";
echo "php faculty Total Salary is:".(phpfaculty::$basicsal+phpfaculty::$bonus),"<br>";
echo "<hr>";
?>
OUT PUT DIAGRAM:
<html>
    <body>
        <img src="1.jpg"height="200"width="300">
        </body>
        </html>