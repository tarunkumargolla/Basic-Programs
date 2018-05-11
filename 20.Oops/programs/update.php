<?php  
   include_once 'class.php';  
   $user = new User();
   $id = isset($_GET['id']) ? ($_GET['id']) : 0;
  $row =$user->fullname($id);
   if ($_SERVER["REQUEST_METHOD"] == "POST"){  
      $up_date = date("Y-m-d H:i:s");
      $update = $user->update($up_date,$_REQUEST['name'],$_REQUEST['username'],$_REQUEST['email'],$_REQUEST['gender'],$_REQUEST['num'],$_REQUEST['address'],$id);  
      if($update){  
         header("location:index.php"); 
      }
      else
      {  
         echo "Update Not Successful!";  
      }  
   }  
?>  
    <html>  
  
    <head>  
        <title>Update</title>  
        <link rel="stylesheet" href="style.css" />  
    </head>  
  
    <body>  
        <div class="form">  
            <h1>update</h1>  
            <form action="" method="post">  
                <div style="color:red">Please Must Fill * fields</div>
              <span style="color:red">*</span><input type="text" name="name" value='<?php echo $row[3];?>'  />  
                <br /> 
               <div> <img src="images/<?php echo $row[4];?>" width="100"height="50"><div>
                <span style="color:red">*</span><input type="file" name="image" />  
                <br />
                <?php
                $genarray =explode(',',$row[5])
                ?>
                Gender:<span style="color:red"required>*</span><input type="radio" name="gender" value="Male"<?php if(in_array('Male',$genarray)){ echo "checked=true";} ?> /> Male
                <input type="radio" name="gender" value="FeMale" <?php if(in_array('FeMale',$genarray)){ echo "checked=true";} ?>/> FeMale
                <br />
                <span style="color:red">*</span><input type="text" name="username" value='<?php echo $row[6];?>' />  
                <br /> 
                 <span style="color:red">*</span><input type="phone" name="num" value='<?php echo $row[7];?>' pattern="[789][0-9]{9}" />  
                <br />
                <span style="color:red">*</span><textarea name="address"required/><?php echo $row[8];?></textarea>
                <br />
                <span style="color:red">*</span><input type="email" name="email" value='<?php echo $row[9];?>'  />  
                <br /> 
                <input type="submit" name="submit" value="update" />  
            </form>  
        </div>  
    </body>  
  
    </html>  