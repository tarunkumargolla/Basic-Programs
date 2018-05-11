<?php  
   include_once 'class.php';  
   $user = new User(); 
    $id = isset($_GET['id']) ? ($_GET['id']) : 0;
   if ($id){  
      $delete = $user->delete($id);
      $logout =$user->logout();
      if($delete){ 
          
      header("location:register.php");
      }
      else
      {  
         echo "Delete Not Successful!";  
      }  
   }  
?>  