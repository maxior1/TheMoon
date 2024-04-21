<?php
// session_start();
include("checklogin.php");
include("include/config.php");

if (isset($_POST['submit'])) {
    $p_name = $_POST['p_name'];
    $p_detail = $_POST['p_detail'];
    $p_price = $_POST['p_price'];
    $p_stock = $_POST['p_stock'];
    $p_brand = $_POST['p_brand'];
    $cat_id = $_POST['cat_id'];
    $p_expire = $_POST['p_expire'];

    //Upload the photo
    $allowed = array('gif', 'png', 'jpg', 'jpeg', 'jfif');
    $filename = $_FILES['p_ext']['name'];
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!in_array($ext, $allowed)) {
    echo "<script>";
    echo "alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');";
    echo "</script>";
    exit;
    }
            // Insert into the database using prepared statement
            $sql = "INSERT INTO `product`(`p_id`, `p_name`, `p_detail`, `p_price`, `p_stock`, `p_brand`, `cat_id`, `p_expire`, `p_ext`) 
                    VALUES (NULL, '$p_name', '$p_detail', '$p_price', '$p_stock', '$p_brand', '$cat_id', '$p_expire', '$ext')";
            $result = mysqli_query($conn, $sql);
            $idd = mysqli_insert_id($conn);
            @copy($_FILES['p_ext']['tmp_name'], "../imgs_product/".$idd.".".$ext);

            if ($result) {
                echo "<script>";
                echo "alert('A Product has been added successfully.');";
                echo "window.location = 'tables-product.php';";
                echo "</script>";
                // header("Location: tables-product.php");
                exit(); // Exit after redirection
            } else {
                echo "Failed: ".mysqli_error($conn);
            }
            $conn->close();
    } 
    
?>
