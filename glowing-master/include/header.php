

  <!-- 
    - #HEADER
  -->

  <header class="header">

    <div class="alert">
      <div class="container">
        <p class="alert-text">Free Shipping On All Thailand Orders $50+</p>
      </div>
    </div>

    <div class="header-top" data-header>
      <div class="container">

        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </button>
        <!--============= PHP here ================ -->
        <div class="input-wrapper">
        <?php if(strlen($_SESSION['login']))
          {   
              // $user_id = $_SESSION['user_login'];
              // $stmt = $conn->query("SELECT * FROM customer WHERE c_id = $user_id");
              // $stmt->execute();
              // $row = $stmt->fetch(PDO::FETCH_ASSOC);
      
        ?>  
            <ul>
                <li><a href="#"><i class="icon fa fa-user"></a></li>
                <li></i>Welcome - <strong style="font-wieght:bold!important;" ><?php echo htmlentities($_SESSION['user_name']);?></strong>&#10024;</li>
            </ul>
            <a href="../all-products/my-profile.php">
          <button class="header-action-btn" aria-label="user" >
            <ion-icon name="person-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
          </button>
        </a>
              
        <?php } ?>

        
          
        <a href="cart.php">
          <button class="header-action-btn" aria-label="cart item">
        </a>
        </div>

        <a href="index.php" class="logo">
          <img src="./assets/imgs/logo-mm.png" width="260" height="26" alt="Glowing">
        </a>
<!--============= PHP here ================ -->

        <div class="header-actions">
            <!-- <data class="btn-text" value="0">$0.00</data> -->
      <?php if(strlen($_SESSION['login'])==0)
    {   ?>
          <a href="../all-products/login.php">
          <button class="header-action-btn" aria-label="user" >
            <ion-icon name="person-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
          </button>
        </a>
<?php }

else{ ?>
	
        <li><a style="color: white!important; 
              /* box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px!important;  */
              background-color:#cf5659!important; 
              width: 60px!important; 
              border-radius:2px!important;
              padding:6px!important;
              transition: background-color 0.3s, color 0.3s;" 
        href="../all-products/logout.php"
        onmouseover="this.style.backgroundColor='red'; 
                    this.style.color='white';  
                    this.style.boxShadow='rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px';"
        onmouseout="this.style.backgroundColor='#cf5659'; 
                    this.style.color='white';
                    this.style.boxShadow='rgba(0, 0, 0, 0.35) 0px 5px 10px';">Logout</a></li>


				<?php } ?>
        
        

<!-- <li><a href="login.php"><i class="icon fa fa-sign-in"></i>Login</a></li> -->
        <a href="../all-products/cart.php">
          <button class="header-action-btn" aria-label="cart item">
            <!-- <data class="btn-text" value="0">$0.00</data> -->

            <ion-icon name="bag-handle-outline" aria-hidden="true" aria-hidden="true"></ion-icon>
        
            <span class="btn-badge"></span>
          </button>
        </a>
        
        </div>

        <nav class="navbar">
          <ul class="navbar-list">

            <li>
              <a href="#home" class="navbar-link has-after">Home</a>
            </li>

            <li>
              <a href="#collection" class="navbar-link has-after">Collection</a>
            </li>

            <li class="dropdown">
              <a href="#shop" class="navbar-link has-after">Shop</a>
              <i class='bx bxs-chevron-down'></i>
              <ul class="sub-menu">
                <li><a href="../all-products/product.php"><span>All Products</span></a></li>
                <li class="dropdown">
                  <a href="#"><span>Category</span></a>
                  <i class='bx bxs-chevron-down'></i>
                  <ul class="sub-menu sub-menu-right">
                    <li><a href="../all-products/product.php"><span>Face Care</span></a></li>
                    <li><a href="../all-products/product.php"><span>Body Care</span></a></li>
                    <li><a href="../all-products/product.php"><span>Hair Care</span></a></li>
                    <li><a href="../all-products/product.php"><span>Perfume</span></a></li>
                  </ul>
                </li>
                
                
              </ul>
            </li>

            <li>
              <a href="#offer" class="navbar-link has-after">Promotion</a>
            </li>

            <li>
              <a href="#blog" class="navbar-link has-after">Blog</a>
            </li>

            <li>
              <a href="#contact" class="navbar-link has-after">Contact</a>
            </li>

          </ul>
        </nav>

      </div>
    </div>

  </header>
  
  