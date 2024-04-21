<?php 
    include("checklogin.php");
    include ("config.php");
    $id = $_GET['cid'];
    
    if(isset($_POST['submit'])){
        $c_name = $_POST['c_name'];
        // $c_password = $_POST['c_password'];
        $c_email = $_POST['c_email'];
        $c_address = $_POST['c_address'];
        $c_phone = $_POST['c_phone'];
        $c_regDate = $_POST['c_regDate'];
        $gender = $_POST['gender'];
        $c_dob = $_POST['c_dob'];

        $sql = "UPDATE `customer` SET `c_name`='$c_name',
                                        `c_email`='$c_email',`c_address`='$c_address',
                                        `c_phone`='$c_phone',`gender`='$gender',
                                        `c_regDate`='$c_regDate',
                                        `c_dob`='$c_dob' WHERE c_id =$id" ;

        $result = mysqli_query ($conn, $sql);

        if($result){
            echo "<script>";
            echo "alert('A Customer has been updated successfully.');";
            echo "window.location = 'tables-customer.php';";
            echo "</script>";
            exit;
        } 
        else {
            echo"Failed".mysqli_error($conn);
        }

    }
?>