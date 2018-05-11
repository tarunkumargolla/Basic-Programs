<html>
    <body>
        <form method="GET">
            <table border="1">
                <tr>
                    <th><input type="submit"name="s1"value="assending"></th>
                     <th><input type="submit"name="s1"value="dessending"></th>
                </tr>
                <?php
               if(isset($_GET["s1"]))
               {
                   $s=$_GET["s1"];
                   if($s=="assending")
                   {
                       echo "<table border='1'>";
                       echo "<tr>";
                       echo "<th>empno</th>";
                       echo "<th>ename</th>";
                       echo "<th>sal</th>";
                       echo "</tr>";
                       $con=mysqli_connect("localhost","root","","naresh123");
                       $com=mysqli_query($con,"select * from emp order by empno asc");
                       while($r=mysqli_fetch_row($com))
                       {
                           echo "<tr>";
                       echo "<th>$r[0]</th>";
                       echo "<th>$r[1]</th>";
                       echo "<th>$r[2]</th>";
                       echo "</tr>";
                       }
                       mysqli_close($con);
                       echo "</table>";
                   }
                   if($s=="dessending")
                   {
                       echo "<table border='1'>";
                       echo "<tr>";
                       echo "<th>empno</th>";
                       echo "<th>ename</th>";
                       echo "<th>sal</th>";
                       echo "</tr>";
                       $con=mysqli_connect("localhost","root","","naresh123");
                       $com=mysqli_query($con,"select * from emp order by ename desc");
                       while($r=mysqli_fetch_row($com))
                       {
                           echo "<tr>";
                       echo "<th>$r[0]</th>";
                       echo "<th>$r[1]</th>";
                       echo "<th>$r[2]</th>";
                       echo "</tr>";
                       }
                       mysqli_close($con);
                       echo "</table>";
                   }
                   if($s=="assending")
                   {
                       echo "<table border='1'>";
                       echo "<tr>";
                       echo "<th>empno</th>";
                       echo "<th>ename</th>";
                       echo "<th>sal</th>";
                       echo "</tr>";
                       $con=mysqli_connect("localhost","root","","naresh123");
                       $com=mysqli_query($con,"select * from emp order by sal asc");
                       while($r=mysqli_fetch_row($com))
                       {
                           echo "<tr>";
                       echo "<th>$r[0]</th>";
                       echo "<th>$r[1]</th>";
                       echo "<th>$r[2]</th>";
                       echo "</tr>";
                       }
                       mysqli_close($con);
                       echo "</table>";
                   }
               }
                ?>
            </table>
        </form>
    </body>
</html>
            