<html>
    <body>
        <form method="GET">
            <table border="1">
                <tr>
                    <td><a href="?sort=empno">Empno</a></td>
                    <td><a href="?sort=ename">Ename</a></td>
                    <td><a href="?sort=sal">Sal</a></td>
                </tr>
                <?php
                if(isset($_GET["sort"]))
                {
                    $s=$_GET["sort"];
                    //echo $s;
                    if($s=="empno")
                    {
                        $con=mysqli_connect("localhost","root","","naresh123");
                        $com=mysqli_query($con,"select * from emp order by empno desc");
                        while($r=mysqli_fetch_row($com))
                        {
                            echo "<tr>";
                            echo "<td>$r[0]</td>";
                            echo "<td>$r[1]</td>";
                            echo "<td>$r[2]</td>";
                            echo "</tr>";
                        }
                        mysqli_close($con);
                    }
                    if($s=="ename")
                    {
                        $con=mysqli_connect("localhost","root","","naresh123");
                        $com=mysqli_query($con,"select * from emp order by ename asc");
                        while($r=mysqli_fetch_row($com))
                        {
                            echo "<tr>";
                            echo "<td>$r[0]</td>";
                            echo "<td>$r[1]</td>";
                            echo "<td>$r[2]</td>";
                            echo "</tr>";
                        }
                        mysqli_close($con);
                    }
                    if($s=="sal")
                    {
                        $con=mysqli_connect("localhost","root","","naresh123");
                        $com=mysqli_query($con,"select * from emp order by sal asc");
                        while($r=mysqli_fetch_row($com))
                        {
                            echo "<tr>";
                            echo "<td>$r[0]</td>";
                            echo "<td>$r[1]</td>";
                            echo "<td>$r[2]</td>";
                            echo "</tr>";
                        }
                        mysqli_close($con);
                    }
                }
                ?>
            </table>   
        </form> 
    </body>
</html>