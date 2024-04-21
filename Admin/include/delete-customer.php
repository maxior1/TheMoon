<?php 
    include("checklogin.php");
    include ("config.php");

    $id = $_GET['id'];

    $sql = "DELETE FROM `customer` WHERE c_id = $id";
    $result = mysqli_query ($conn, $sql);
    if($result){
        echo "<script>";
        echo "alert('A Customer has been deleted successfully.');";
        echo "window.location = '../tables-customer.php';";
        echo "</script>";
        exit();
    }
    else {
        echo"Failed".mysqli_error($conn);
    }
?>