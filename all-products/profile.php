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
    // date_default_timezone_set('Asia/Kolkata');
    // $currentTime = date( 'd-m-Y h:i:s A', time () );
    // $c_password = $_POST['c_password'];
    // $userID = $_SESSION['user_login'];
  // `update_at`='$currentTime',
    $sql = "UPDATE `customer` SET `c_name`='$name',
                                        `c_email`='$email',`c_address`='$address',
                                        `c_phone`='$phone',`gender`='$gender',
                                        `c_dob`='$bday',
                                        `c_password`='$passwordHash'
                                            WHERE c_id = '" . $_SESSION['user_login'] . "'";

    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "<script>alert('Your info has been updated');</script>";
      header('location:my-profile.php');
    } else {
      echo "Failed" . mysqli_error($conn);
    }
    // if(isset($_POST['submit']))
    // {
    // $sql=mysqli_query($con,"SELECT password FROM  users where password='".md5($_POST['password'])."' && c_id='".$_SESSION['user_login']."'");
    // $num=mysqli_fetch_array($sql);
    // if($num>0)
    // {
    //  $con=mysqli_query($con,"update students set password='".md5($_POST['newpass'])."', updationDate='$currentTime' where c_id='".$_SESSION['user_login']."'");
    // echo "<script>alert('Password Changed Successfully !!');</script>";
    // }
    // else
    // {
    //   echo "<script>alert('Current Password not match !!');</script>";
    // }
    // }
  }
}

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
                      text-decoration: underline!important;"> Update My Profile </h1>
        <?php if (isset($_SESSION['error'])) { ?>
          <div class="alert alert-danger" role="alert">
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
          </div>
        <?php } ?>
        <?php if (isset($_SESSION['success'])) { ?>
          <div class="alert alert-success" role="alert">
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
          </div>
        <?php } ?>
        <?php if (isset($_SESSION['warning'])) { ?>
          <div class="alert alert-warning" role="alert">
            <?php
            echo $_SESSION['warning'];
            unset($_SESSION['warning']);
            ?>
          </div>
        <?php } ?>

        <?php

        $sql = "SELECT * FROM `customer` WHERE c_id ='" . $_SESSION['user_login'] . "'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <label for="fname">Fullname</label>
        <input type="text" placeholder="Enter your fullname..." value="<?= $row['c_name']; ?>" name="c_name" required />

        <label for="gender">Gender</label>
        <div class="dateob" for="gender">
          <input type="radio" name="gender" value="Male" id="" <?= ($row['gender'] == 'Male') ? 'checked' : ''; ?>> Male
          <input type="radio" name="gender" value="Female" id="" <?= ($row['gender'] == 'Female') ? 'checked' : ''; ?>>
          Female
        </div>


        <label for="date">Date of Birth</label>
        <input type="date" value="<?= $row['c_dob']; ?>" name="bday" required />

        <label for="address">Address</label>
        <textarea type="text" placeholder="Enter your address..." name="address"
          required><?= $row['c_address']; ?></textarea>

        <label for="phone">Phone Number</label>
        <input type="text" value="<?= $row['c_phone']; ?>" placeholder="Enter your phone number..." name="phone"
          required />

        <label for="email">Email</label>
        <input type="text" value="<?= $row['c_email']; ?>" placeholder="Enter your email..." name="email" required />

        <label for="psw">New Password</label>
        <input type="password" placeholder="Enter your password..." name="password" id="passwordField" required />

        <!-- <label for="psw-repeat">Repeat Password</label>
        <input type="password" placeholder="Confirm your password..." name="c_password" id="repeatPasswordField"
          required /> -->

        <div id="passwordMatchMessage" style="color: green; display: none; margin-bottom: 15px;">Passwords match!</div>
        <div id="passwordWarning" style="color: red; display: none; margin-bottom: 15px;">Passwords do not match!</div>
        <label>
          <input type="checkbox" name="showPassword" id="showPasswordCheckbox" style="margin-bottom: 15px" />
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

          <button type="submit" name="update" class="signupbtn">Update</button>
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