<?php
$i=1;
while($i<=10)
{
    echo $i;
    echo "<br>";
    $i++;
}
echo "-----------------------","<br>";
$sum=0;
$num=5;
while($num>=1)
{
    $sum=$sum+$num;
    $num--;
}
echo $sum;
?>
<html>
    <body>
        <form method='POST'>
            DOB:
            <select name='days'>
                <option>DD</option>
                <?php
                $d=1;
                while($d<=31)
                {
                    echo "<option>$d</option>";
                    $d++;
                }
                ?>
            </select>
            <select name='months'>
                <option>MM</option> 
                <?php
                $m=1;
                while($m<=12)
                {
                    echo "<option>$m</option>";
                    $m++;
                }
                ?>
            </select>
            <select name='years'>
                <option>YYYY</option>
                <?php
                $y=1990;
                while($y<=2017)
                {
                    echo "<option>$y</option>";
                    $y++;
                }
                ?>
            </select>
        </form>
    </body>
</html>