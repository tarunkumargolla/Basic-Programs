<?php
echo "using multilevel inheritence caleculate php faculty HRA is 30% DA is 20% and BONUS is 10% on basic salary","<br>";
class faculty
{
    public static $basicsal=50000;
}
class HRA extends faculty
{
    public static $hra;
    static function calhra()
    {
        HRA::$hra=HRA::$basicsal*.3;
        return HRA::$hra;
    }
}
class DA extends HRA
{
    public static $da;
    static function calda()
    {
        DA::$da=DA::$basicsal*.2;
        return DA::$da;
    }
}
class phpfaculty extends DA
{
    public static $bonus;
    static function calbonus()
    {
         phpfaculty::$bonus=phpfaculty::$basicsal*.1;
        return phpfaculty::$bonus;
    }

}
echo "php faculty Basic Salary is:".phpfaculty::$basicsal,"<br>";
echo "php faculty HRA is:".phpfaculty::calhra(),"<br>";
echo "php faculty DA is:".phpfaculty::calda(),"<br>";
echo "php faculty Bonus is:".phpfaculty::calbonus(),"<br>";
echo "php faculty Total Salary is:".(phpfaculty::$basicsal+phpfaculty::calhra()+phpfaculty::calda()+phpfaculty::calbonus()),"<br>";
?>
OUT PUT DIAGRAM:
<html>
    <body>
        <img src="2.jpg"height="200"width="300">
        </body>
        </html>