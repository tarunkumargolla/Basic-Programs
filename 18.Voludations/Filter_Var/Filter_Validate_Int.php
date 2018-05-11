<?php
echo "using this function we can check given vlaue is Integer or not","<br>";
if(isset($_POST["s1"]))
{
    $num=$_POST["nm"];
    if(filter_var($num,FILTER_VALIDATE_INT))
    {
        echo "Valid";
    }
    else 
    {
        echo "Invalid";
    }
}
?>
<html>
    <body>
        <form method="POST">
           Enter Integer Value:<input type="text"name="nm"/>
           <input type="submit"name="s1"value="submit"/>
        </form>
    </body>
</html>
<?php
echo "<hr>","<br>";
echo "using this function we can check textbox controll will accepting 1 to 100 numbers or not","<br>";
if(isset($_POST["s2"]))
{
    $age=$_POST["ag"];
    $min=1;
    $max=100;
    if(filter_var($age,FILTER_VALIDATE_INT,array("options"=>array("min_range"=>$min,"max_range"=>$max))))
    {
        echo "Valid";
    }
    else 
    {
        echo "Invalid";
    }
}
?>
<html>
    <body>
        <form method="POST">
           Enter Age Vlaue:<input type="text"name="ag"/>
           <input type="submit"name="s2"value="submit"/>
        </form>
    </body>
</html>