<?php
class User{


    public function checkCredentials($username, $password)
    {
        $conn=include ('C:\xampp\htdocs\pswarehouse\database\config.php');
     $sql= "SELECT * FROM user where userName='".$username."' and password='".$password."'";
   $result= mysqli_query($conn, $sql) or die(mysqli_error($conn));
   $count = mysqli_num_rows($result);
   if ($count>0){
      return true;
   }else{
      return false;
   }

    }
}