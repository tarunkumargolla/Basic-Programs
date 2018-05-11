<html>  
  
    <head>  
        <title>Users Data</title>  
        <link rel="stylesheet" href="style.css" />  
    </head>  
  
    <body>  
        <div class="form">  
            <h1>Users Data</h1>  
            <form action="" method="post">
                <table border="1">
                    <td>Id</td>
                    <td>Name</td>
                    <td>Gender</td>
                    <td>UserName</td>
                    <td>Phone Number</td>
                    <td>Address</td>
                    <td>Email</td>
                    <td>Image</td>
                    <td>Update</td>
                    <td>Delete</td>
                    <?php  
   include_once 'class.php';  
   $user = new User();
  $row =$user->AllUsers();
  echo "<th>$row[0]</th>";
  echo "<th>$row[3]</th>";
  echo "<th>$row[5]</th>";
  echo "<th>$row[6]</th>";
  echo "<th>$row[7]</th>";
  echo "<th>$row[8]</th>";
  echo "<th>$row[9]</th>";
  echo "<th>$row[4]</th>";
  echo"<a href='update.php?id=<?php echo$id;?>'>UPDATE</a>";
  echo "<a href='delete.php?id=<?php echo$id;?>'onclick='return confirm('Are you sure to delete?')'>DELETE</a>";
  ?>
                </table>
                 </form> 
            </div>  
    </body>  
  
    </html>  