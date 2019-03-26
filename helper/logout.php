<?php

class Logout{
    public function logoutsession(){
        session_destroy();
        header("Location: ../public/");
    }
}

?>