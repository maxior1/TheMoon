<?php

session_start();
// error_reporting(0);
require_once 'confiG/config.php';
if (strlen($_SESSION['login']) == 0) {
  header('location:../all-products/login.php');
} else {
  if (isset($_POST['update'])) {
    $name = $_POST['c_name'];
    $gender= $_POST['gender'];
    $bday= date('Y-m-d',strtotime($_POST['bday']));
    $email = $_POST['email'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
  }}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Box icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="./css/styles.css" />
  <title>TheMOON Sign Up</title>
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
      <a href="../glowing-master/index.php" class="logo">
        <h1>TheMOON</h1>
      </a>

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
      <form action="" method="post">

        <h1 style="text-align: center!important;
                      font-size: 30px!important;
                      text-decoration: underline!important;"> My Profile </h1>
        

        <?php

        $sql = "SELECT * FROM `customer` WHERE c_id ='" . $_SESSION['user_login'] . "'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        
        <label for="fname">Full Name:</label>
        <p style="border: 2px solid gray!important; 
                    padding: 8px!important;
                    border-radius: 15px!important;"><?= $row['c_name']; ?></p>

        <label for="gender">Gender</label>
        <p style="border: 2px solid gray!important; 
                    padding: 8px!important;
                    border-radius: 15px!important;"><?= $row['gender']; ?></p>
        

        <label for="date">Date of Birth</label>
        <p style="border: 2px solid gray!important; 
                    padding: 8px!important;
                    border-radius: 15px!important;"><?= $row['c_dob']; ?></p>

        <label for="address">Address</label>
        <p style="border: 2px solid gray!important; 
                    padding: 8px!important;
                    border-radius: 15px!important;"><?= $row['c_address']; ?></p>

        <label for="phone">Phone Number</label>
        <p style="border: 2px solid gray!important; 
                    padding: 8px!important;
                    border-radius: 15px!important;"><?= $row['c_phone']; ?></p>
        

        <label for="email">Email</label>
        <p style="border: 2px solid gray!important; 
                    padding: 8px!important;
                    border-radius: 15px!important;"><?= $row['c_email']; ?></p>



        <div class="buttons">
          <a href="../glowing-master/index.php">
            <button type="button" class="cancelbtn">Back to Homepage</button>
          </a>

          <a href="profile.php">
            <button type="button" class="cancelbtn">Update Info</button>
          </a>
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