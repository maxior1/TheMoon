<?php 
    // session_start();
    include("checklogin.php");
    include ("include/config.php");

    if(isset($_POST['submit'])){
        $cat_name = $_POST['cat_name'];
        

        $sql = "INSERT INTO `category`(`cat_id`, `cat_name`)
                    VALUES (NULL,'$cat_name')";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script>";
            echo "alert('A Category has been added successfully.');";
            echo "window.location = 'tables-category.php';";
            echo "</script>";
                exit;
            
        }
        else {
            echo "Failed: ".mysqli_error($conn);
        }

    }



?>