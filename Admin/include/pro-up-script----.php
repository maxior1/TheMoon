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
    $targetDir = "../imgs_product/";
    $targetFile = $targetDir . basename($_FILES["p_ext"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    if(!empty($_FILES["p_ext"]["name"])) {
        // Check if the file is an actual image or a fake image
        $check = getimagesize($_FILES["p_ext"]["tmp_name"]);
        if($check !== false) {
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
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["p_ext"]["tmp_name"], $targetFile)) {
                echo "The file ". htmlspecialchars(basename($_FILES["p_ext"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }


    // Update the product in the database
    $sql = "UPDATE `product` SET `p_name`='$p_name',`p_detail`='$p_detail',
                                    `p_price`='$p_price',`p_stock`='$p_stock',
                                    `p_brand`='$p_brand',`cat_id`='$cat_id',
                                    `p_expire`='$p_expire',`p_ext`='$imageFileType' WHERE p_id =$id" ;

    $result = mysqli_query($conn, $sql);

    if($result){
        header("location: tables-product.php");
    } else {
        echo "Failed: ".mysqli_error($conn);
    }
}
?>
