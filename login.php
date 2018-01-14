<?php
    session_start();
    if(isset($_SESSION["islogin"]))
        header("Location: admin.php");

    if(isset($_POST["username"])){
        if($_POST["username"] == $_POST["password"] && $_POST["password"]=="admin"){
            session_start();
            $_SESSION["islogin"]= true;
            header("Location: admin.php");
        }
        
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action='./login.php' method="POST">
        <input name='username' placeholder='Username (admin)' ><br>
        <input name='password' placeholder='Password (admin)' ><br>
        <input type='submit' value="Login">
    </form>
</body>
</html>