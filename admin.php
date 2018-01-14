<?php
    session_start();

    if(!isset($_SESSION["islogin"]))
        header("Location: login.php");
    
    if(isset($_GET["logout"])){
        session_unset();
        session_destroy();
        header("Location: landing.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
</head>
<body>
    <a href="?logout=1">Logout</a>
</body>
</html>