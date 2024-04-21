<?php
  session_start();
  error_reporting(0);
  include('confiG/config.php');

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>TheMOON Login</title>
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
    <!-- Login -->
    <div class="container">
      <div class="login-form">
        <form action="login_db.php" method="post">
          <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <?php if(isset($_SESSION['success'])) { ?>
                <div class="alert alert-success" role="alert">
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </div>
          <?php } ?>
          <h1>Login</h1>
          <p>
            Already have an account? Login in or
            <a href="signup.php">Sign Up</a>
          </p>

          <label for="email">Email</label>
          <input type="text" placeholder="Enter your email..." name="email" required />

          <label for="psw">Password</label>
          <input
            type="password"
            placeholder="Enter your password..."
            name="password"
            id="passwordField"
            required
          />

          <!-- <label for="psw-repeat">Repeat Password</label>
          <input
            type="password"
            placeholder="Confirm your password..."
            name="c_password"
            id="repeatPasswordField"
            required
          />
          
          <div id="passwordMatchMessage" style="color: green; display: none; margin-bottom: 15px;">Passwords match!</div>
          <div id="passwordWarning" style="color: red; display: none; margin-bottom: 15px;">Passwords do not match!</div>-->
          <label>
            <input
              type="checkbox"
              name="showPassword"
              id="showPasswordCheckbox"
              style="margin-bottom: 15px"
            />
            Show Password
          </label> 

          <p>
            By creating an account you agree to our
            <a href="#">Terms & Privacy</a>.
          </p>

          <div class="buttons">
          <a href="../glowing-master/index.php">
              <button type="button" class="cancelbtn">Cancel</button>
          </a>
            <button type="submit" name="login" class="signupbtn">Login</button>
          </div>
        </form>
      </div>
    </div>

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
    <script src="./js/showpwd.js"></script>
  </body>
</html>
