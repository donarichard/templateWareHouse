<?php
include ('C:\xampp\htdocs\warehouse\app\database\User.php');

        session_start();
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $password = $_POST['pass'];
            $_SESSION['username']=$username;
            $pass=md5($_POST['pass']);
            $user = new User();
            if (!is_null($username) AND !is_null($password)) {
                $credentialsAreValid = $user->checkCredentials($username, $pass);
                if ($credentialsAreValid) {
                    echo $_SESSION['username'];
                    header("Location: ../public/dashboard/index.php");
                }else{
                    /*header('Location: ../public/');*/
                    echo '<script type="text/javascript">alert("Login Failed" ); window.location = \'../public/\';</script>';
                }
            }

}
