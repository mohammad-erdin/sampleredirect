<?php
    session_start();

    if(isset($_SESSION["islogin"]))
        header("Location: admin.php");
    else 
        header("Location: login.php");

?>