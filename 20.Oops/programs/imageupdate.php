<?php  
   include_once 'class.php';  
   $user = new User();  
   if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
       $id = isset($_GET['id']) ? ($_GET['id']) : 0;
     $image =$_FILES['image']['name'];
      $update = $user->imageupdate($image,$id);  
      if($update){ 
          include_once 'imageupload.php';
         header("location:index.php"); 
      }
      else
      {  
         echo "Image Update Not Successful!";  
      }  
   }  
?>  
<html>  
  
    <head>  
        <title>Image Update</title>  
        <link rel="stylesheet" href="style.css" />  
    </head>  
  
    <body>  
        <div class="form">  
            <h1>Image Update</h1>  
            <form action="" method="post"enctype="multipart/form-data">
                <span style="color:red">*</span><input type="file" name="image" placeholder="Please Select Image" required />  
                <br />
                <input type="submit" name="submit" value="update" />
                 </form> 
            </div>  
    </body>  
  
    </html>  