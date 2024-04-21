<?php
        require_once ("confiG/config.php");

        $sql = "SELECT * FROM `product` WHERE `p_id`= '{$_GET['pid']}' ";
        $rs = mysqli_query ($conn, $sql);
        $data = mysqli_fetch_array($rs);
        $p = $data['p_id'].".".$data['p_ext']; 

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
    <title>TheMOON-Product Details</title>
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
              <a href="#products" class="nav-link">Shop</a>
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
              <span class="d-flex">0</span>
            </a>
          </li>
        </ul>

        
      </div>
    </div>

    <!-- Product Details -->
    <section class="section product-detail">
      <div class="details container">
        <div class="left image-container">
          <div class="main">
            <?php
              $p = $data['p_id'].".".$data['p_ext'];
            ?>
            <img src="../imgs_product/<?=$p;?>" id="zoom" alt="" />
          </div>
        </div>
        <div class="right">
          <span></span>
          <h1> <?=$data['p_name']?> </h1>
          <div class="price">$<?=$data['p_price']?>.00</div>
          <form action="" method="post">
            <!-- <select id="sizeDropdown">
                    <option value="0">Select Size </i></option>
                    <option value="1">100 ml</option>
                    <option value="2">200 ml</option>
                    <option value="3">250 ml</option>
            </select>
            <div class="downn">
              <i class='bx bx-chevron-down'></i>
            </div> -->
            
          </form>
          <form class="form">
            <!-- <input style="width: 55px!important;" min="1" type="number" placeholder="1" /> -->
            <a href="cart.php?id=<?=$data['p_id'];?>" class="addCart">Add To Cart</a>
          </form>
          <h3>Product Detail</h3>
          <p>
            <?=$data['p_detail']?>
          </p>
        </div>
      </div>
    </section>

    <!-- Related -->
    <section class="section featured">
      <div class="top container">
        <h1>Related Products</h1>
        <a href="product.php" class="view-more">View more</a>
      </div>
      <div class="product-center container">
      <?php
        
        $kw = @$_POST['kw'];

        $sql = "SELECT * FROM `product` WHERE `p_name` like '%{$kw}%' OR `p_detail` like '%{$kw}%'";
        $sql = "SELECT * FROM `product` WHERE `p_id` IN (26,27,28,29) ";
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
            <span class="discount">20%</span>
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
    <script
      src="https://code.jquery.com/jquery-3.4.0.min.js"
      integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6"
      crossorigin="anonymous"
    ></script>
    <script src="./js/zoomsl.min.js"></script>
    <script>
      $(function () {
        console.log("hello");
        $("#zoom").imagezoomsl({
          zoomrange: [4, 4],
        });
      });
    </script>
  </body>
</html>
