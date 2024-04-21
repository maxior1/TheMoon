<?php
  error_reporting(E_NOTICE);
	@session_start();
  if (strlen($_SESSION['login'])==0) {
    // echo "<script>alert('Please Login first before you buy the product!');</script>";
    $_SESSION['error'] = 'Please Login first before you buy the product!';
    header('location: login.php');
    
}

// if(isset($_POST['ordersubmit'])) 
// {
	
// if(strlen($_SESSION['login'])==0)
//     {   
// header('location:login.php');
// }
else{

	include("confiG/config.php");
	$sql = "select * from product where p_id='{$_GET['id']}' ";
	$rs = mysqli_query($conn, $sql) ;
	$data = mysqli_fetch_array($rs);
	$id = $_GET['id'] ;
  $p = $data['p_id'].".".$data['p_ext'];
	
	if(isset($_GET['id'])) {
		$_SESSION['buyid'][$id] = $data['p_id'];
		$_SESSION['buyname'][$id] = $data['p_name'];
		$_SESSION['buyprice'][$id] = $data['p_price'];
		$_SESSION['buydetail'][$id] = $data['p_detail'];
		$_SESSION['propiture'][$id] = $p;
		@$_SESSION['buyqty'][$id]++;
	}
}
  // if(isset($_POST['update'])){
	// 	if(!empty($_SESSION['cart'])){
	// 	foreach($_POST['buyqty'] as $key => $val){
	// 		if($val==0){
	// 			unset($_SESSION['cart'][$key]);
	// 		}else{
	// 			$_SESSION['cart'][$key]['buyqty']=$val;

	// 		}
	// 	}
	// 		echo "<script>alert('Your Cart hasbeen Updated');</script>";
	// 	}
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
    <title>TheMOON-Your Cart</title>
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
          <th>Product</th>
          <th>Unit Price</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>


        <?php
              if(!empty($_SESSION['buyid'])) {
                foreach($_SESSION['buyid'] as $pid) {
                  @$i++;
                  $sum[$pid] = $_SESSION['buyprice'][$pid] * $_SESSION['buyqty'][$pid] ;
                  @$total += $sum[$pid] ;
              ?>
        <tr>



          <td><?=$i;?></td>
          <td>
            <div class="cart-info">
            <img src="../imgs_product/<?=$_SESSION['propiture'][$pid];?>" width="120">
              <!-- <img src="./images/product-02.jpg" alt="" /> -->
              <div>
                <br/>
                <a style="color:black!important;" href="productDetails.php?pid=<?=$data['p_id'];?>"><?=$_SESSION['buyname'][$pid];?></a> <br/>
                <a href="clear2.php?id=<?=$pid;?>">remove</a>
              </div>
            </div>
          </td>
          <td>
            <span>$<?=$_SESSION['buyprice'][$pid];?>.00</span>
          </td>
          <!-- <form method="post"> -->
          <td>
            <?=$_SESSION['buyqty'][$pid];?>
            <!-- Line add number readme -->
          </td>
          <td>$<?=number_format($sum[$pid],0);?>.00</td>
        </tr>
        <?php } // end foreach ?>
      </table>
      <div class="total-price">
        <table>
          <tr>
            <td><b>Cart Subtotal:</b></td>
            <td><b>$<?=number_format($total,0);?>.00</b></td>
          </tr>
          <?php 
      } else {
      ?>
        
        <tr>
          <td colspan="3" height="60" align="center">
          
          <h3>Your Cart is currently Empty &#129402;</h3> 
            
          </td>
        </tr>
        <tr>
          <!-- <td colspan="3" height="60" align="center"> -->
          <img src="images/empty-cart.png" width="350" height="307" alt="cart-empty">
          <!-- </td> -->
        </tr>
        
        
      <?php } // end if ?>
        </table>
        <?php
        if(empty($_SESSION['buyid'])) {
        ?>
              <a href="#" class="checkout btn" onClick="alert('There is no product in your cart.');" 
              onmouseover="this.style.opacity='0.8';
                          this.style.boxShadow='rgba(0, 0, 0, 0.10) 0px 54px 55px, rgba(0, 0, 0, 0.10) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px';"
              onmouseout="this.style.opacity='1';
                          this.style.color ='White'; 
                          this.style.boxShadow='rgba(0, 0, 0, 0.15) 0px 5px 10px';">Proceed To Checkout</a>
        <?php } else { ?>
              <a href="proceed-checkout.php" class="checkout btn"
                  onmouseover="this.style.opacity='0.8';
                              this.style.boxShadow='rgba(0, 0, 0, 0.10) 0px 54px 55px, rgba(0, 0, 0, 0.10) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px';"
                  onmouseout="this.style.opacity='1';
                              this.style.color ='White'; 
                              this.style.boxShadow='rgba(0, 0, 0, 0.15) 0px 5px 10px';">Proceed To Checkout</a>
        <?php } ?>
        
        
        
      </div>
      <div class="container">
        <!-- =================Style CSS with this.style================ -->
      <a href="../all-products/product.php" style="background-color: #0292b4!important;" class="checkout btn"
        onmouseover="this.style.opacity='0.8';
                    
                    this.style.boxShadow='rgba(0, 0, 0, 0.10) 0px 54px 55px, rgba(0, 0, 0, 0.10) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px';"
        onmouseout="this.style.opacity='1';
                    this.style.color ='White'; 
                    this.style.boxShadow='rgba(0, 0, 0, 0.15) 0px 5px 10px';">COUNTINUE SHOPPING</a>

      <a href="order-history.php" style="background-color: #1355b5!important; margin:0 15px 0 15px !important;" class="checkout btn"
        onmouseover="this.style.opacity='0.8';
                      this.style.boxShadow='rgba(0, 0, 0, 0.10) 0px 54px 55px, rgba(0, 0, 0, 0.10) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px';"
        onmouseout="this.style.opacity='1';
                    this.style.color ='White'; 
                    this.style.boxShadow='rgba(0, 0, 0, 0.15) 0px 5px 10px';">ORDER HISTORY</a>
      <!-- </form> -->
      <a href="clear.php" style="background-color: #b51313!important;" class="checkout btn"
        onmouseover="this.style.opacity='0.8';
                      this.style.boxShadow='rgba(0, 0, 0, 0.10) 0px 54px 55px, rgba(0, 0, 0, 0.10) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px';"
        onmouseout="this.style.opacity='1';
                    this.style.color ='White'; 
                    this.style.boxShadow='rgba(0, 0, 0, 0.15) 0px 5px 10px';">CLEAR ALL</a>
      </div>
      
    </div>

    <!-- Latest Products -->
    <section class="section featured">
      <div class="top container">
        <h1>Latest Products</h1>
        <a href="../all-products/product.php" class="view-more">View more</a>
      </div>
      <div class="product-center container">
      <?php
        
        $kw = @$_POST['kw'];

        $sql = "SELECT * FROM `product` WHERE `p_name` like '%{$kw}%' OR `p_detail` like '%{$kw}%'";
        $sql = "SELECT * FROM `product` WHERE `p_id` IN (33,37,42,43) ";
        $rs = mysqli_query ($conn, $sql);
        while ($data = mysqli_fetch_array($rs)) {

            ?>
        <div class="product-item">
          <div class="overlay">
          <?php
              $p = $data['p_id'].".".$data['p_ext'];
            ?>
            <a href="" class="product-thumb">
              <img src="../imgs_product/<?=$p;?>" alt="" />
            </a>
            <span class="discount">10%</span>
          </div>
          <div class="product-info">
            <span><?=$data['p_brand']?></span>
            <a href="productDetails.php?pid=<?=$data['p_id'];?>"><?=$data['p_name']?></a>
            <h4>$<?=$data['p_price']?></h4>
          </div>
          <ul class="icons">
              <a href="cart.php?id=<?=$data['p_id'];?>"> 
                <li><i class="bx bx-cart"></i></li>
              </a>
            
          </ul>
        </div>
        <?php
          }
        ?> 
      </div>
    </section>

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
