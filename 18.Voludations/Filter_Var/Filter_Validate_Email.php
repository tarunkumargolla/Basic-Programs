<?php
echo "using this function we can check Email is valid or not","<br>";
if(isset($_POST["s1"]))
{
    $email=$_POST["eid"];
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
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
           Enter EmailId:<input type="text"name="eid"/>
           <input type="submit"name="s1"value="submit"/>
        </form>
    </body>
</html>