<?php
    session_start();
    
    if (strlen($_SESSION['login'])==0) {
      // echo "<script>alert('Please Login first before you buy the product!');</script>";
      $_SESSION['error'] = 'Please Login first before you buy the product!';
      header('location: login.php');
      
  }
  else{

    include("confiG/config.php");
    
    
    // if(isset($_GET['id'])) {
    //   $_SESSION['buyid'][$id] = $data['p_id'];
    //   $_SESSION['buyname'][$id] = $data['p_name'];
    //   $_SESSION['buyprice'][$id] = $data['p_price'];
    //   $_SESSION['buydetail'][$id] = $data['p_detail'];
    //   $_SESSION['propiture'][$id] = $p;
    //   @$_SESSION['buyqty'][$id]++;
    // }
  

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Box icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>Your Order History</title>
  </head>
  <body>
    <!-- Navigation -->
    <div class="top-nav">
      <div class="container d-flex">
        <span>Free Shipping On All Thailand Orders $50+</span>
        
      </div>
    </div>
    <div class="navigation">
      <div class="nav-center container d-flex">
        <a href="../glowing-master/index.php" class="logo"><h1>TheMOON</h1></a>
  
          <ul class="nav-list d-flex">
            <li class="nav-item">
              <a href="../glowing-master/index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="../glowing-master/index.php" class="nav-link">Collection</a>
            </li>
            <li class="nav-item">
              <a href="product.php" class="nav-link">Shop</a>
            </li>
            <li class="nav-item">
              <a href="../glowing-master/index.php" class="nav-link">Promotion</a>
            </li>
            <li class="nav-item">
              <a href="../glowing-master/index.php" class="nav-link">Blog</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Contact</a>
            </li>
          </ul>
            <a href="cart.php" class="icon">
              <i class="bx bx-cart"></i>
              <span class="d-flex"></span>
            </a>
          </li>
        </ul>

        
      </div>
    </div>

    <!-- Cart Items -->
    <div class="container cart">
      <table>
        <tr>
          <th>No.</th>
          <th>Order ID</th>
          <th>Order Date</th>
          <th>Status</th>
          <th>Order Details</th> 
        </tr>
        <?php
            $sql = "SELECT * FROM `orders`
            INNER JOIN customer ON orders.member_id = customer.c_id
            WHERE customer.c_id = '".$_SESSION['user_login']."'";
            $i = 0;
            $result = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_assoc($result)){
              $i++;
          
        ?>
        <tr>
          <td><?=$i;?></td>
          <td><?=$row['oid'];?></td>
          <td><?=$row['odate'];?></td>
          <td><p><?=$row['status'];?></p></td>
          <td>
            <a class="checkout btn" style="background-color: rgb(49, 143, 102);"
                href="order-history-details.php?det=<?=$row['oid'];?>">See more</a>
          </td>
        </tr>
        <?php
            }
        ?> 
      </table>
      <div class="total-price">
        
        <!-- <a href="#" class="checkout btn">Proceed To Checkout</a> -->
      </div>
      <div class="container">
        <a href="../glowing-master/index.php" style="background-color: #0292b4!important;" class="checkout btn"
              onmouseover="this.style.opacity='0.8';
                          this.style.boxShadow='rgba(0, 0, 0, 0.10) 0px 54px 55px, rgba(0, 0, 0, 0.10) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px';"
              onmouseout="this.style.opacity='1';
                          this.style.color ='White'; 
                          this.style.boxShadow='rgba(0, 0, 0, 0.15) 0px 5px 10px';">BACK TO HOMEPAGE</a>
  
        <!-- <a href="update-cart.php" style="background-color: #1355b5!important; margin:0 15px 0 15px !important;" class="checkout btn"> -->
            <!-- <button type="submit" name="update">UPDATE CART</button> -->
            <!-- <input type="submit" name="update" value="Update shopping cart"> -->
        <!-- </a> -->
        <!-- </form> -->
       
        </div>
    </div>

    <!-- Latest Products -->
    
    <!-- Footer -->
    <footer class="footer">
      <div class="row">
        <div class="col d-flex">
          <h3>CONTACT US</h3>
					<div>
            <p>Road 20/53, Kham Riang, Khatarakwichai, Maha Sarakham 44150, Thailand</p>
            <p>themoon@beautycare.com</p>
            <p> +69 (0)96 2568 4593</p>
					</div>
        </div>
        <div class="col d-flex">
          <h3>INFORMATION</h3>
          <a href="../m-about/index.php">About us</a>
          <a href="../m-term/index.php">Term & Conditions</a>
          <a href="../m-policy/index.php">Privacy Policy</a>
          <a href="../glowing-master/index.php">Leave a message</a>
        </div>
        <div class="col d-flex">
          <h3>USEFUL LINK</h3>
          <a href="../glowing-master/index.php">Online Store</a>
          <a href="product.php">All Product</a>
          <a href="../glowing-master/index.php">Promotion</a>
          <a href="../glowing-master/index.php">Our Best Seller</a>
        </div>
        <div class="col d-flex">
          <span><i class="bx bxl-facebook-square"></i></span>
          <span><i class="bx bxl-instagram-alt"></i></span>
          <span><i class="bx bxl-github"></i></span>
          <span><i class="bx bxl-twitter"></i></span>
          <span><i class="bx bxl-pinterest"></i></span>
        </div>
      </div>
    </footer>

    <!-- Custom Script -->
    <script src="./js/index.js"></script>
  </body>
</html>
<?php
}
?>