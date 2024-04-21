<?php 
    include("checklogin.php");
    include ("config.php");

    $id = $_GET['oid'];

    $sql = "DELETE FROM `orders` WHERE oid = $id";
    $result = mysqli_query ($conn, $sql);
    if($result){
        echo "<script>";
        echo "alert('An Order has been deleted successfully.');";
        echo "window.location = '../tables-orders.php';";
        echo "</script>";
        exit;
    }
    else {
        echo"Failed".mysqli_error($conn);
    }
?>