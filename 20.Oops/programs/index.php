<?php  
   session_start();  
   include_once 'class.php';  
   $user = new User;  
   $id = $_SESSION['id'];  
   if (!$user->session()){  
      header("location:login.php");  
   }  
   if (isset($_REQUEST['q'])){  
      $user->logout();  
      header("location:login.php");  
   }  
?>  
    <html>  
  
    <head>  
        <title>Dashboard</title>  
        <link rel="stylesheet" href="style.css" />  
    </head>  
  
    <body>  
        <div class="form">  
            <h1>Welcome <?php $row=$user->fullname($id);echo $row[3];?></h1>  
             <div><img src="images/<?php echo $row[4];?>" width="200"height="200"></div>
             <a href="imageupdate.php?id=<?php echo$id;?>"align="left">UPDATE</a></p>
            <p align="right"><a href="?q=logout">LOGOUT</a></p>  
             <a href="update.php?id=<?php echo$id;?>"align="left">UPDATE</a>
             <a href="delete.php?id=<?php echo$id;?>"onclick="return confirm('Are you sure to delete?')"align="center">DELETE</a>
        </div>  
    </body>  
  
    </html>  