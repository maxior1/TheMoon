<?php 
    include("checklogin.php");
    include ("config.php");

    $id = $_GET['pid'];

    $sql = "DELETE FROM `product` WHERE p_id = $id";
    $result = mysqli_query ($conn, $sql);
    unlink("../../imgs_product/".$_GET['pid'].".".$_GET['ext']);
    if($result){
        echo "<script>";
        echo "alert('A Product has been deleted successfully.');";
        echo "window.location = '../tables-product.php';";
        echo "</script>";
        // header("location: ../tables-product.php");
        exit();
    }
    else {
        echo"Failed".mysqli_error($conn);
    }
?>