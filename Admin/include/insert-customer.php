<?php 
    // session_start();
    include("checklogin.php");
    include ("include/config.php");

    if(isset($_POST['submit'])){
        $gender = $_POST['gender'];
        $c_name = $_POST['c_name'];
        $c_password = $_POST['c_password'];
        $c_email = $_POST['c_email'];
        $c_address = $_POST['c_address'];
        $c_phone = $_POST['c_phone'];
        $c_regDate = $_POST['c_regDate'];
        $c_dob = $_POST['c_dob'];
        
        

        $sql = "INSERT INTO `customer`(`c_id`, `gender`, `c_name`, `c_password`, `c_email`, `c_address`, `c_phone`, `c_regDate`, `c_dob`) 
                VALUES (NULL,'$gender','$c_name','$c_password','$c_email','$c_address','$c_phone','$c_regDate','$c_dob')";

        $result = mysqli_query($conn, $sql);

        if($result){
            echo "<script>";
            echo "alert('A Customer has been added successfully.');";
            echo "window.location = 'tables-customer.php';";
            echo "</script>";
                exit;
            
        }
        else {
            echo "Failed: ".mysqli_error($conn);
        }

    }



?>