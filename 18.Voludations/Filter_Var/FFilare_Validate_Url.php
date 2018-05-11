<?php
echo "using this function we can check URL is valid or not","<br>";
if(isset($_POST["s1"]))
{
    $url=$_POST["url"];
    if(filter_var($url,FILTER_VALIDATE_URL))
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
           Enter URL:<input type="text"name="url"/>
           <input type="submit"name="s1"value="submit"/>
        </form>
    </body>
</html>