<html>
    <body>
        <form method="POST">
            <table border="1" align="center"width="400">
                <td>
				<?php $x=array("aaa","ttt","www","ttt","yyy","tttt"); $y=array_count_values($x); echo $y['ttt']; print_r($x); print_r($y);?>
				<?php $x=array(1,3,2,3,7,8,9,7,3); $y=array_count_values($x); echo $y[8];  print_r($x); print_r($y);?>
<?php
if(isset($_POST["s1"]))
{
$datetime1 = new DateTime($_POST["date1"]);
$datetime2 = new DateTime($_POST["date2"]);
$difference = $datetime1->diff($datetime2);
echo 'Difference: '.$difference->y.' years, ' 
                   .$difference->m.' months, ' 
                   .$difference->d.' days,',"<br>";
    $Amount=$_POST["amt"];
    echo "Your Amount is =><b>$Amount</b>","<br>";
    $Rate=$_POST["rt"];
    if(strlen($Rate) <2 ){
    	$Rate = $Rate.".0";
    }
    echo "Your Rate Of Intrest is =>Rupee <b>$Rate</b> Paise","<br>";
    $Year="_$difference->y";
    $Month=$difference->m;
    $Day=$difference->d;
    if($Year=="_0")
    {
$zero_year_intrest=($Amount*$Rate*0)/100;
$_0=($zero_year_intrest+$Amount);
    }
    else
    {
       $zero_year_intrest=($Amount*$Rate*0)/100;
       $_0=($zero_year_intrest+$Amount); 
    }
    if($Year=="_1")
    {
$first_year_intrest=($Amount*$Rate*12)/100;
echo "1 year intrest is <b>$first_year_intrest \n</b>";
$_1=($first_year_intrest+$Amount);
echo "& 1 year amount is <b>$_1</b><br>";
    }
    else
    {
       $first_year_intrest=($Amount*$Rate*12)/100;
       $_1=($first_year_intrest+$Amount); 
    }
    if($Year=="_2")
    {
 echo "1 year intrest is <b>$first_year_intrest \n</b>";echo "& 1 year amount is <b>$_1</b><br>";
$second_year_intrest=($_1*$Rate*12)/100;
echo "2 years intrest is <b>$second_year_intrest \n</b>";
$_2=($second_year_intrest+$_1);
echo "& 2 years amount is <b>$_2</b><br>";
    }
    else
    {
        $second_year_intrest=($_1*$Rate*12)/100;
        $_2=($second_year_intrest+$_1);
    }
    if($Year=="_3")
    {
        echo "1 year intrest is <b>$first_year_intrest \n</b>";echo "& 1 year amount is <b>$_1</b><br>";
        echo "2 years intrest is <b>$second_year_intrest \n</b>";echo "& 2 years amount is <b>$_2</b><br>";
$third_year_intrest=($_2*$Rate*12)/100;
echo "3 years intrest is <b>$third_year_intrest \n</b>";
$_3=($third_year_intrest+$_2);
echo "& 3 years amount is <b>$_3 </b><br>";
    }
    else
    {
        $third_year_intrest=($_2*$Rate*12)/100;
        $_3=($third_year_intrest+$_2);
    }
    if($Year=="_4")
    {
        echo "1 year intrest is <b>$first_year_intrest \n</b>";echo "& 1 year amount is <b>$_1</b><br>";
        echo "2 years intrest is <b>$second_year_intrest \n</b>";echo "& 2 years amount is <b>$_2</b><br>";
        echo "3 years intrest is <b>$third_year_intrest \n</b>";echo "& 3 years amount is <b>$_3 </b><br>";
$fourth_year_intrest=($_3*$Rate*12)/100;
echo "4 years intrest is <b>$fourth_year_intrest \n</b>";
$_4=($fourth_year_intrest+$_3);
echo "& 4 years amount is <b>$_4</b><br>";
    }
    else
    {
        $fourth_year_intrest=($_3*$Rate*12)/100;
        $_4=($fourth_year_intrest+$_3);
    }
    if($Year=="_5")
    {
        echo "1 year intrest is <b>$first_year_intrest \n</b>";echo "& 1 year amount is <b>$_1</b><br>";
        echo "2 years intrest is <b>$second_year_intrest \n</b>";echo "& 2 years amount is <b>$_2</b><br>";
        echo "3 years intrest is <b>$third_year_intrest \n</b>";echo "& 3 years amount is <b>$_3 </b><br>";
        echo "4 years intrest is <b>$fourth_year_intrest \n</b>";echo "& 4 years amount is <b>$_4</b><br>";
$fifth_year_intrest=($_4*$Rate*12)/100;
echo "5 years intrest is <b>$fifth_year_intrest </b>\n";
$_5=($fifth_year_intrest+$_4);
echo "& 5 years amount is <b>$_5</b><br>";
    }
    else
    {
     $fifth_year_intrest=($_4*$Rate*12)/100;
     $_5=($fifth_year_intrest+$_4);   
    }
$months_intrest=($$Year*$Rate*$Month)/100;
echo "$difference->m months intrest is <b>$months_intrest </b>\n";
$months_amt=($months_intrest+$$Year);
echo "& $difference->m months amount is <b>$months_amt </b><br>";

$one_month_intrest=($$Year*$Rate*1)/100;
//echo "one month intrest is $one_month_intrest <br>";

$days_amt=($one_month_intrest*$Day)/30;
echo "$difference->d days intrest is <b>$days_amt </b><br>";

$total_amt=($months_amt+$days_amt);
echo "total amount is <b>$total_amt</b>";
}
?>
                    </td>
</table>
        </form>
    </body>
</html>
<html>
    <body>
        <form method="POST">
            <table border="1" align="center" width="400" bgcolor="#CCCCCC" >
            <caption>Simple Intrest</caption>
                <tr>
                    <th>Date1:<span style="color:red" required>*</span></th>
                    <th><input type="date"name="date1"id="date1"required/></th>
                </tr>
                <tr>
                    <th>Date2:<span style="color:red" required>*</span></th>
                    <th><input type="date"name="date2"id="date2"required/></th>
                </tr>
                <tr>
                    <th>Amount:<span style="color:red" required>*</span></th>
                    <th><input type="number"name="amt"id="amt"required/></th>
                </tr>
                <tr>
                    <th>Rate:<span style="color:red" required>*</span></th>
                    <th><select name="rt"required>
                            <option>Rate Of Intrest</option>
                <?php
                
				for($r=0.25;$r<=2;$r+=0.25){echo "<option value='$r'>$r</option>";}
                ?>
							
                    </select></th>
                </tr>
                <tr align="center">
                    <th></th>
                    <th><input type="submit"name="s1"value="intrest"/></th>
                </tr>
            </table>
        </form>
    </body>
</html>
