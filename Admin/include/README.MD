-------- SELECT TABLE CODE -----------------------

 <?php
        $sql = "SELECT * FROM `category`";
        $result = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_assoc($result)){
            ?>
        <tr>
            <th scope="row"><?=$row['cat_id']?></th>
            <td><?=$row['cat_name']?></td>
            <td>
                <button type="button" class="btn btn-success">
                    <i class="fa fa-pencil"></i>
                </button>
                <button type="button" class="btn btn-danger">
                    <i class="fa fa-trash-o"></i>
                </button>
            </td>
        </tr>
        <?php
        }
  ?>

-------- BTN INSERT TABLE CODE -----------------------

<a href="edit.php?id=<?php echo $row['id']?>" class="edit">Edit</a>


-------- INSERT TABLE CODE -----------------------

<?php 
    session_start();
    include ("include/config.php");

    if(isset($_POST['submit'])){
        $p_name = $_POST['p_name'];
        $p_detail = $_POST['p_detail'];
        $p_price = $_POST['p_price'];
        $p_stock = $_POST['p_stock'];
        $p_brand = $_POST['p_brand'];
        $cat_id = $_POST['cat_id'];
        $p_expire = $_POST['p_expire'];
        $p_ext = $_POST['p_ext'];
        

        $sql = "INSERT INTO `product`(`p_id`, `p_name`, `p_detail`, `p_price`, `p_stock`, `p_brand`, `cat_id`, `p_expire`, `p_ext`) 
                    VALUES (NULL,'$p_name','$p_detail','$p_price','$p_stock','$p_brand','$cat_id','$p_expire','$p_ext')";

        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: tables-product.php");
            
        }
        else {
            echo "Failed: ".mysqli_error($conn);
        }

    }



?>



?>