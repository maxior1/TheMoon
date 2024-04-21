<?php 
    include("checklogin.php");
    include ("config.php");
    $id = $_GET['catid'];
    
    if(isset($_POST['submit'])){
        $cat_name = $_POST['cat_name'];
        

        $sql = "UPDATE `category` SET `cat_name`='$cat_name'
                                        WHERE cat_id =$id" ;

        $result = mysqli_query ($conn, $sql);

        if($result){
            echo "<script>";
            echo "alert('A Category has been updated successfully.');";
            echo "window.location = 'tables-category.php';";
            echo "</script>";
            exit;
        } 
        else {
            echo"Failed".mysqli_error($conn);
        }

    }
?>