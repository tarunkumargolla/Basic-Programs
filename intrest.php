<?php
$Amount=1000;
$Rate=1.50;
$Year=12;
$Month=0;
$Day=0;
$first_year_intrest=($Amount*$Rate*$Year)/100;
echo "first year intrest is $first_year_intrest \n";
$first_year_amt=($first_year_intrest+$Amount);
echo "first year amount is $first_year_amt <br>";

$second_year_intrest=($first_year_amt*$Rate*$Year)/100;
echo "second year intrest is $second_year_intrest \n";
$second_year_amt=($second_year_intrest+$first_year_amt);
echo "second year amount is $second_year_amt <br>";

$third_year_intrest=($second_year_amt*$Rate*$Year)/100;
echo "third year intrest is $third_year_intrest \n";
$third_year_amt=($third_year_intrest+$second_year_amt);
echo "third year amount is $third_year_amt <br>";

//$fourth_year_intrest=($third_year_amt*$Rate*$Year)/100;
//echo "fourth year intrest is $fourth_year_intrest \n";
//$fourth_year_amt=($fourth_year_intrest+$third_year_amt);
//echo "fourth year amount is $fourth_year_amt <br>";

//$fifth_year_intrest=($fourth_year_amt*$Rate*$Year)/100;
//echo "fifth year intrest is $fifth_year_intrest \n";
//$fifth_year_amt=($fifth_year_intrest+$fourth_year_amt);
//echo "fifth year amount is $fifth_year_amt <br>";

$months_intrest=($third_year_amt*$Rate*$Month)/100;
echo "months intrest is $months_intrest \n";
$months_amt=($months_intrest+$third_year_amt);
echo "months amount is $months_amt <br>";

$one_month_intrest=($third_year_amt*$Rate*1)/100;
echo "one month intrest is $one_month_intrest <br>";

$days_amt=($one_month_intrest*$Day)/30;
echo "days intrest is $days_amt <br>";

$total_amt=($months_amt+$days_amt);
echo "total amount is $total_amt";
?>
