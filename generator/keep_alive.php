<?php
    //START GLOBAL SESSION WORK AND VARIABLE
    session_start();
    
    //DB CONNCECTION
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "alips";

    $dbconect = mysqli_connect($host,$user,$password,$database) or die ("Nie można połączyć z bazą danych! Połączenie przerwane.");


    $UserName = $_SESSION["UserName"];

    $time = time();
    //echo ($time);

    $UpdateLogDate = "UPDATE user SET lastActive='$time' WHERE (login = '$UserName' OR email = '$UserName')";
    if (mysqli_query($dbconect, $UpdateLogDate)) {
        //echo '<script>alert("test");</script>';
    }

    $_SESSION['expiry'] = time()+900;
?>