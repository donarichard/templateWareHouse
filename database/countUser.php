<?php
class CountUsers{
    public function countUsers()
    {
        $conn=include ('C:\xampp\htdocs\warehouse\app\database\config.php');
        $sql= "SELECT * FROM user ";
        $result= mysqli_query($conn, $sql) or die(mysqli_error($conn));
        $count = mysqli_num_rows($result);
        return $count;
    }
}