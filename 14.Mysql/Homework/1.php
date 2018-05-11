<html>
    <body>
        <form metho="POST">
            <table border="1">
                <tr>
                    <td>sno</td>
                    <td>FirstName</td>
                    <td>LastName</td>
                    <td>FatherName</td>
                    <td>Gender</td>
                    <td>PhoneNo</td>
                    <td>EmailId</td>
                    <td>Address</td>
                    <td>UserName</td>
                    <td>PassWord</td>
                    <td>DOB</td>
                </tr>
                <?php
                $con=mysqli_connect("localhost","root","","naresh123");
                $com=mysqli_query($con,"select * from register");
                while($r=mysqli_fetch_row($com))
                {
                    echo "<tr>";
                    echo "<th>$r[0]</th>";
                    echo "<th>$r[1]</th>";
                    echo "<th>$r[2]</th>";
                    echo "<th>$r[3]</th>";
                    echo "<th>$r[4]</th>";
                    echo "<th>$r[5]</th>";
                    echo "<th>$r[6]</th>";
                    echo "<th>$r[7]</th>";
                    echo "<th>$r[8]</th>";
                    echo "<th>$r[9]</th>";
                    echo "<th>$r[10]</th>";
                    echo "</tr>";
                }
                ?>
            </table>
        </form>    
    </body>
</html>