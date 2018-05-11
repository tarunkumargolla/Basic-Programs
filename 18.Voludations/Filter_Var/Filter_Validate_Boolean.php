<?php
echo "using this function we can check BOOLEAN value  true or not","<br>";
if(isset($_POST["s1"]))
{
    $boolean=$_POST["bool"];
    if(filter_var($boolean,FILTER_VALIDATE_BOOLEAN))
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
           Enter Boolean Value:<input type="text"name="bool"/>
           <input type="submit"name="s1"value="submit"/>
        </form>
    </body>
</html>