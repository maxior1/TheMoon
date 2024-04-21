<?php 
  require_once "confiG/config.php";
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
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/cart.css" />
    <title>TheMOON All Products</title>
  </head>

  <body>
    <!-- Navigation -->
    <div class="top-nav">
      <div class="container d-flex">
        <span>Free Shipping On All Thailand Orders $50+</span>
        
      </div>
    </div>
    
    <!--Home Navigation -->
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
        
        <a href="cart.php">
          <i class='bx bx-cart' id="cart-icon"></i>
        </a>
        <!-- =====CART JAVASCRIPT===== -->
      <!-- <div class="cart">
        <h2 class="cart-title">Your Cart</h2> -->

        <!--=== CONTENT ===== -->
        <!-- <div class="cart-content"> -->
        

        <!-- </div> -->

        <!--===== TOTAL   ===============-->
        <!-- <div class="total">
            <div class="total-title">Total:</div>
            <div class="total-price-cart">$0</div>
        </div> -->
        <!--========= BUY BUTTON  ==================-->
        <!-- <a href="cart.php"> -->
        <!-- <button type="button" class="btn-buy">Buy Now</button> -->
        <!-- </a> -->
        
        <!-- ========CART CLOSE =============== -->
        <!-- <i class='bx bx-x' id="cart-close"></i> -->
    <!-- </div> -->

      </div>
    </div>


          <!--//////////////////// TOP ITEMS /////////////////////////////-->

    <div class="wrapper-search">
      <!--//////////////////// CATEGORY ITEAMS /////////////////////////////-->
      <div id="buttons">
        <button class="button-value" onclick="filterProduct('all')">All</button>
        <button class="button-value" onclick="filterProduct('2')">
          Body
        </button>
        <button class="button-value" onclick="filterProduct('1')">
          Face
        </button>
        <button class="button-value" onclick="filterProduct('3')">
          Hair
        </button>
        <button class="button-value" onclick="filterProduct('4')">
          Perfume
        </button>
      </div>
      <!--//////////////////// Search button /////////////////////////////-->
      <div id="search-container">
        <input
          type="search"
          id="search-input"
          placeholder="Search product name here.."
        />
        <button id="search">Search</button>
      </div>
      
    </div>
    
    
    <!-- All Products -->
    <section class="section all-products" id="products">
      <div class="top container">
        <h1>Our Products</h1>
        <form>
          <select id="selector">
            <option value="1">Defualt Sorting</option>
            <option value="2">Sort By High Price</option>
            <option value="3">Sort By Low Price</option>
          </select>
          <span><i class="bx bx-chevron-down"></i></span>
        </form>
      </div>
      <div class="product-center container" id="productContainer">

      <?php
        
        $kw = @$_POST['kw'];

        $sql = "SELECT * FROM `product` WHERE `p_name` like '%{$kw}%' OR `p_detail` like '%{$kw}%'";
        $rs = mysqli_query ($conn, $sql);
        while ($data = mysqli_fetch_array($rs)) {

            ?>

        <div class="product-item" data-category="<?=$data['cat_id']?>">
          <div class="overlay">
          <?php
              $p = $data['p_id'].".".$data['p_ext'];
          ?>
            <a href="productDetails.php?pid=<?=$data['p_id'];?>" class="product-thumb">
              <img  src="../imgs_product/<?=$p;?>" alt="" id="product-img"  />
            </a>
            <span class="discount">20%</span>
          </div>
          <div class="product-info">
            <span><?=$data['p_brand']?></span>
            <a id="product-title" href="productDetails.php?pid=<?=$data['p_id'];?>"><?=$data['p_name']?> </a>
            <h4 id="product-price">$<?=$data['p_price']?>.00</h4>
          </div>
          <ul class="icons">
            <li><a href="cart.php?id=<?=$data['p_id'];?>"><i class="bx bx-cart add-cart"></a></i></li>
          </ul>
        </div>


        <?php
          }
        ?> 
       
    </section>
    <section class="pagination">
      <div class="container">
        <a href="../all-products/product.php">
        <div id="buttons">
        <button class="button-value">Back to Top</button>
        </div>
        </a>
        <!-- <span>1</span> <span>2</span> <span>3</span> <span>4</span><span>5</span><span>6</span><span>7</span>
        <span><i class="bx bx-right-arrow-alt"></i></span> -->
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
    <script src="./js/pricesort.js"></script>
    <script src="./js/search.js"></script>
    <script src="./js/index.js"></script>
    <script src="./js/addcart.js"></script>
    <script src="./js/protype.js"></script>
    <!-- <script src="./js/pagination.js"></script> -->
    
    
  </body>
</html>
