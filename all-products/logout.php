<?php 

    // session_start();
    // unset($_SESSION['user_login']);
    // unset($_SESSION['login']);
    // unset($_SESSION['admin_login']);
    // header('location: login.php');

    session_start();
    include("confiG/config.php");
    $_SESSION['login']=="";
    date_default_timezone_set('Asia/Kolkata');
    $ldate=date( 'd-m-Y h:i:s A', time () );
    mysqli_query($conn,"UPDATE userlog  SET logout = '$ldate' WHERE userEmail = '".$_SESSION['login']."' ORDER BY id DESC LIMIT 1");
    session_unset();
    $_SESSION['errmsg']="You have successfully logout";
?>
<script language="javascript">
document.location="../glowing-master/index.php";
</script>
