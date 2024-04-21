<?php 
    include("checklogin.php");
    include ("config.php");
    $id = $_GET['oid'];
    
    if(isset($_POST['submit'])){
        $status = $_POST['status'];
        

        $sql = "UPDATE `orders` SET `status`='$status'
                                        WHERE oid =$id" ;

        $result = mysqli_query ($conn, $sql);

        if($result){
            echo "<script>";
            echo "alert('An Order has been updated successfully.');";
            echo "window.location = 'tables-orders.php';";
            echo "</script>";
            exit;
        } 
        else {
            echo"Failed".mysqli_error($conn);
        }

    }
?>