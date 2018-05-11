<?php
if(isset($_POST["s1"]))
{
    $age=$_POST["age"];
    if($age>=18)
    {
        $gender=$_POST["gender"];
        if($gender=="Male")     
        {
            echo "u r entering party because u r male";
        }
        else 
        {
            echo "u r not entering party because u r female";
        }
    }
    else 
    {
        echo "u r not entering party because u r minor";
    }
}
?>
<html>
    <body>
        <form method="POST">
            <table border="1">
                <tr>
                    <th>EnterAge</th>
                    <th><input type="text"name="age"/></th>
                </tr>
                 <tr>   
                    <th>Gender</th>
                    <th><input type="radio"name="gender"value="Male"/>Male
                    <input type="radio"name="gender"value="FeMale"/>FeMale</th>
                </tr>
                <tr>
                    <th></th>
                    <th><input type="submit"name="s1"value="submit"></th>
                </tr>
            </table>
        </form>
    </body>
</html>