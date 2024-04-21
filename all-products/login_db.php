<?php 

    session_start();
    require_once 'confiG/db.php';

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

      
        if (empty($email)) {
            $_SESSION['error'] = 'Please fill in email!';
            header("location: login.php");
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error'] = ' Incorrect email format!';
            header("location: login.php");
        } else if (empty($password)) {
            $_SESSION['error'] = 'Please fill in password';
            header("location: login.php");
        } else {
            try {

                $check_data = $conn->prepare("SELECT * FROM `customer` WHERE c_email = :email");
                $check_data->bindParam(":email", $email);
                $check_data->execute();
                $row = $check_data->fetch(PDO::FETCH_ASSOC);

                if ($check_data->rowCount() > 0) {      

                    if ($email == $row['c_email']) {
                        if (password_verify($password, $row['c_password'])) {
                            if ($row['urole'] == 'admin') {
                                $_SESSION['admin_login'] = $row['c_id'];
                                header("location: admin.php");
                            } else {
                                $_SESSION['login'] = $_POST['email'];
                                $_SESSION['user_login'] = $row['c_id'];
                                $_SESSION['user_name'] = $row['c_name'];
                                
                                
                                
                                header("location: ../glowing-master/index.php");
                            }
                        } else {
                            $_SESSION['error'] = 'Incorrect password!';
                            header("location: login.php");
                        }
                    } else {
                        $_SESSION['error'] = 'Incorrect email!';
                        header("location: login.php");
                    }
// =========================== from shopping php login.php

                    // $extra="cart.php";
                    // $_SESSION['login']=$_POST['email'];
                    // $_SESSION['id']=$num['id'];
                    // $_SESSION['username']=$num['name'];
                    // $uip=$_SERVER['REMOTE_ADDR'];
                    // $status=1;
                    // $log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('".$_SESSION['login']."','$uip','$status')");
                    // $host=$_SERVER['HTTP_HOST'];
                    // $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
                    // header("location:http://$host$uri/$extra");
                    // exit();
//=========================================
                } else {
                    $_SESSION['error'] = "No data in the system!";
                    header("location: login.php");

//// =========================== from shopping php login.php

                        // $extra="login.php";
                        // $email=$_POST['email'];
                        // $uip=$_SERVER['REMOTE_ADDR'];
                        // $status=0;
                        // $log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('$email','$uip','$status')");
                        // $host  = $_SERVER['HTTP_HOST'];
                        // $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
                        // header("location:http://$host$uri/$extra");
                        
                        // exit();
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


?>