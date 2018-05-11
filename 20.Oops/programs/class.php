<?php  
define('HOST', 'localhost');  
define('USER', 'root');  
define('PASS', '');  
define('DB', 'oopregister');  
class DB  
  
{  
    function __construct() {  
        $con = mysql_connect(HOST, USER, PASS) or die('Connection Error! '.mysql_error());  
        mysql_select_db(DB, $con) or die('DB Connection Error: ->'.mysql_error());  
    }  
}  
  
class User  
  
{  
    public  
  
    function __construct() {  
        $db = new DB;  
    }  
  
    public  
  
    function register($trn_date, $name,$image,$gender,$username,$num,$address,$email, $pass) {  
        $pass = md5($pass);  
        $checkuser = mysql_query("Select id from users where email='$email' or phone =$num");  
        $result = mysql_num_rows($checkuser);  
        if ($result == 0) {  
            $register = mysql_query("Insert into users (trn_date, name,image,gender,username,phone,address,email, password) values ('$trn_date','$name','$image','$gender','$username','$num','$address','$email','$pass')") or die(mysql_error());  
            return $register;  
        } else {  
            return false;  
        }  
    }  
  
    public  
  
    function login($email, $pass) {  
        $pass = md5($pass);  
        $check = mysql_query("Select * from users where email='$email' and password='$pass'");  
        $data = mysql_fetch_array($check);  
        $result = mysql_num_rows($check);  
        if ($result == 1) {  
            $_SESSION['login'] = true;  
            $_SESSION['id'] = $data['id'];  
            return true;  
        } else {  
            return false;  
        }  
    } 
    
    public  
  
    function update($up_date, $name, $username, $email,$gender,$num,$address,$id) {    
  
            $update = mysql_query("update users set up_date = '$up_date', name ='$name', username ='$username', email ='$email',gender ='$gender',phone ='$num',address ='$address' where id=$id") or die(mysql_error());  
            if($update)
            {
            return $update;  
            } else {  
            return false;  
        }  
    }  
  public  
  
    function imageupdate($image,$id) {    
  
            $update = mysql_query("update users set image= '$image' where id=$id") or die(mysql_error());  
            if($update)
            {
            return $update;  
            } else {  
            return false;  
        }  
    }  
    public  
  
    function delete($id) {    
  
            $delete = mysql_query("delete from users where id=$id") or die(mysql_error());  
            if($delete)
            {
            return $delete;  
            } else {  
            return false;  
        }  
    }  
    public  
  
    function fullname($id) {  
        $result = mysql_query("Select * from users where id='$id'");  
        $row = mysql_fetch_array($result);
        if($row){return $row;}
          
    }  
    
    public  
  
    function AllUsers($id) {  
        $result = mysql_query("Select * from users");  
        $row = mysql_fetch_array($result);
        if($row){return $row;}
          
    }  
  
    public  
  
    function session() {  
        if (isset($_SESSION['login'])) {  
            return $_SESSION['login'];  
        }  
    }  
  
    public  
  
    function logout() {  
        $_SESSION['login'] = false;  
        session_destroy();  
    }  
}  
  
?>  