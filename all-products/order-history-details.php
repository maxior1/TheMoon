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
    <title>Your Order Detail History</title>
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
          <th>Picture</th>
          <th>Name</th>
          <th>Unit Price</th>
          <th>Quantity</th> 
          <th>Subtotal</th>
        </tr>
        <?php
                                          $sql = "SELECT * FROM `orders_detail`
                                          -- JOIN orders ON orders_detail.oid = orders.oid
                                          JOIN product ON orders_detail.pid = product.p_id
                                          -- JOIN customer ON orders.member_id = customer.c_id
                                          WHERE orders_detail.oid = '".$_GET['det']."'";
                                  
                                   
                                            $result = mysqli_query($conn,$sql);
                                            $i = 0;
                                            while ($row = mysqli_fetch_assoc($result)){
                                                $i++;
                                                $summ = $row['p_price'] * $row['item'] ;
		                                        @$total += $summ;
                                            ?>
        <tr>
          <td><?=$i;?></td>
          <td><?=$row['oid'];?></td>
          <?php
            $p = $row['p_id'].".".$row['p_ext'];
          ?>
          <td>
            <div class="cart-info">
            <a href="../imgs_product/<?=$p;?>">
                <img src="../imgs_product/<?=$p;?>" width="50">
            </a>
            </div>
          </td>

          <td><p><?=$row['p_name'];?></p></td>
          <td><span>$<?=number_format($row['p_price'],0);?>.00</span></td>
          <td><p><?=$row['item'];?></p></td>
          <td>$<?=number_format($summ,0);?>.00</td>
        </tr>
        <?php
            }
        ?> 
      </table>
      <div class="total-price">
        <table>
          <tr>
            <td><strong>Total:</strong></td>
            <td><strong>$<?=number_format($total,0);?>.00</strong></td>
          </tr>
        </table>
        <!-- <a href="#" class="checkout btn">Proceed To Checkout</a> -->
      </div>
      <div class="container">
        <a href="order-history.php" style="background-color: #2c21fd!important;" class="checkout btn"
              onmouseover="this.style.opacity='0.8';
                          this.style.boxShadow='rgba(0, 0, 0, 0.10) 0px 54px 55px, rgba(0, 0, 0, 0.10) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px';"
              onmouseout="this.style.opacity='1';
                          this.style.color ='White'; 
                          this.style.boxShadow='rgba(0, 0, 0, 0.15) 0px 5px 10px';">BACK</a>
  
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