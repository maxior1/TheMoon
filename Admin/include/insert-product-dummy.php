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

    // File Upload Handling
    $targetDir = "../imgs_product"; // Specify the target directory where you want to store the uploaded files
    $targetFile = $targetDir . basename($_FILES["p_ext"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the file is an actual image or a fake image
    $check = getimagesize($_FILES["p_ext"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["p_ext"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["p_ext"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["p_ext"]["name"])) . " has been uploaded.";

            // Insert into the database using prepared statement
            $sql = "INSERT INTO `product`(`p_id`, `p_name`, `p_detail`, `p_price`, `p_stock`, `p_brand`, `cat_id`, `p_expire`, `p_ext`) 
                    VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssssssss", $p_name, $p_detail, $p_price, $p_stock, $p_brand, $cat_id, $p_expire, $imageFileType);

            if ($stmt->execute()) {
                header("Location: tables-product.php");
                exit(); // Exit after redirection
            } else {
                echo "Failed: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>
