<?php  
   include_once 'class.php';  
   $user = new User();  
   if ($_SERVER["REQUEST_METHOD"] == "POST"){  
      $trn_date = date("Y-m-d H:i:s"); 
     $image =$_FILES['image']['name'];
      print($image);die();
      $register = $user->register($trn_date,$_REQUEST['name'],$image,$_REQUEST['gender'],$_REQUEST['username'],$_REQUEST['num'],$_REQUEST['address'],$_REQUEST['email'],$_REQUEST['password']);  
      $email =$_REQUEST['email'];
      $num =$_REQUEST['num'];
      if($register){ 
          include_once 'imageupload.php';
         echo "Registration Successful!";  
      }
      else
      {  
         echo "Entered email <mark>" .$email. " </mark>or phoneNumber <mark>" .$num. " </mark>already exist!";  
      }  
   }  
?>  
    <html>  
  
    <head>  
        <title>Registration</title>  
        <link rel="stylesheet" href="style.css" />  
    </head>  
  
    <body>  
        <div class="form">  
            <h1>Registration</h1>  
            <form action="" method="post"enctype="multipart/form-data">  
                <div style="color:red">Please Must Fill * fields</div>
              <span style="color:red">*</span><input type="text" name="name" placeholder="Please Enter Name" required />  
                <br />
                <span style="color:red">*</span><input type="file" name="image" placeholder="Please Select Image" required />  
                <br />
                Gender:<span style="color:red"required>*</span><input type="radio" name="gender" value="Male" required/> Male
                <input type="radio" name="gender" value="FeMale" required/> FeMale
                <br />
                <span style="color:red">*</span><input type="text" name="username" placeholder="Please Enter Userame" required />  
                <br /> 
                <span style="color:red">*</span><input type="phone" name="num" placeholder="Please Enter PhoneNumber" pattern="[789][0-9]{9}"required />  
                <br />
                <span style="color:red">*</span><textarea name="address"placeholder="Please Enter Address"required/></textarea>
                <br />
                <span style="color:red">*</span><input type="email" name="email" placeholder="Please Enter Email" required />  
                <br />  
               <span style="color:red">*</span><input type="password" name="password" placeholder="Please Enter Password" required />  
                <br />
                <input type="submit" name="submit" value="Register" /> 
                <input type="reset" name="submit" value="Reset" /> 
            </form>  
            <p>Alredy Registered?<a href="login.php"> Login Here</a></p>  
        </div>  
    </body>  
  
    </html>  
    <script>
        
        </script>