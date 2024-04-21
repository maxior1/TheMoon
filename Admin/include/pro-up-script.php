<?php 
include("checklogin.php");
include("config.php");

$id = $_GET['pid'];

if(isset($_POST['submit'])){
    $p_name = $_POST['p_name'];
    $p_detail = $_POST['p_detail'];
    $p_price = $_POST['p_price'];
    $p_stock = $_POST['p_stock'];
    $p_brand = $_POST['p_brand'];
    $cat_id = $_POST['cat_id'];
    $p_expire = $_POST['p_expire'];

    // File Upload Handling
    $allowed = array('gif', 'png', 'jpg', 'jpeg', 'jfif');
    $filename = $_FILES['p_ext']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
        echo "<script>";
        echo "alert('Failed to save product information! The image file must be jpg, gif or png only.');";
        echo "</script>";
        header("location: tables-product.php");
        exit;
        
    }

    // Get old picture extension
    $sql_select = "SELECT p_ext FROM `product` WHERE p_id = $id";
    $result_select = mysqli_query($conn, $sql_select);
    $row = mysqli_fetch_assoc($result_select);
    $old_ext = $row['p_ext'];
    // echo "Old Picture Path: " . $old_picture_path . "<br>";
    // Delete old picture
    $old_picture_path = "../../../imgs_product/".$id.".".$old_ext;

    // Delete old picture
    if(file_exists($old_picture_path)) {
        unlink($old_picture_path);
    }

    // Update the product in the database
    $sql = "UPDATE `product` SET `p_name`='$p_name',`p_detail`='$p_detail',
                                    `p_price`='$p_price',`p_stock`='$p_stock',
                                    `p_brand`='$p_brand',`cat_id`='$cat_id',
                                    `p_expire`='$p_expire',`p_ext`='$ext' WHERE p_id = $id" ;

    $result = mysqli_query($conn, $sql);
    // if ($result) {
    //     echo "Database updated successfully<br>";
    // } else {
    //     echo "Database update failed: " . mysqli_error($conn) . "<br>";
    // }
    if($result){
        // Move new picture to folder
        $new_picture_path = "../imgs_product/".$id.".".$ext;
        move_uploaded_file($_FILES['p_ext']['tmp_name'], $new_picture_path);
        echo "<script>";
        echo "alert('A Product has been updated successfully.');";
        echo "window.location = 'tables-product.php';";
        echo "</script>";
        exit;
        
    } else {
        echo "Failed: ".mysqli_error($conn);
        
    }
}
?>
