<?php 

    // session_start();
    // unset($_SESSION['user_login']);
    // unset($_SESSION['login']);
    // unset($_SESSION['admin_login']);
    // header('location: login.php');

    session_start();
    unset( $_SESSION ["aid"]);
    unset( $_SESSION ["aname"]);
    // session_destroy();
    header("Location: index.php");
    exit;
?>
