<?php
echo "using hirartical inheritence caleculate villege employee total salary HRA is 20% and town employee total salary HRA is 30%","<br>";
class emp
{
    public static $basicsal=50000;
}
class vilemp extends emp
{
    public static $hra;
    static function calhra()
    {
        vilemp::$hra=vilemp::$basicsal*.2;
        return vilemp::$hra;
    }
}
class townemp extends emp
{
    public static $hra;
    static function calhra()
    {
        townemp::$hra=townemp::$basicsal*.3;
        return townemp::$hra;
    }
}
echo "Villege Emp Basic Salary is:".vilemp::$basicsal,"<br>";
echo "Villege Emp HRA is:".vilemp::calhra(),"<br>";
echo "Villege Emp total salary is:".(vilemp::$basicsal+vilemp::calhra()),"<br>";
echo "Town Emp Basic Salary is:".townemp::$basicsal,"<br>";
echo "Town Emp HRA is:".townemp::calhra(),"<br>";
echo "Town Emp total salary is:".(townemp::$basicsal+townemp::calhra()),"<br>";
?>
OUT PUT DIAGRAM:
<html>
    <body>
        <img src="3.jpg"height="200"width="300">
        </body>
        </html>