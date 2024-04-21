<?php 
    include("checklogin.php");
    include ("config.php");

    $id = $_GET['cid'];

    $sql = "DELETE FROM `category` WHERE cat_id = $id";
    $result = mysqli_query ($conn, $sql);
    if($result){
        echo "<script>";
        echo "alert('A Category has been deleted successfully.');";
        echo "window.location = '../tables-category.php';";
        echo "</script>";
        exit();
    }
    else {
        echo"Failed".mysqli_error($conn);
    }
?>