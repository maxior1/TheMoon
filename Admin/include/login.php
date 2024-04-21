<?php
    session_start();
    require_once 'config.php';
    

        if(isset($_POST['submit'])){
            $sql ="SELECT * FROM `admin` WHERE `a_name` ='{$_POST['usr']}' and `a_pwd` ='".md5($_POST['pwd'])."' limit 1";
            $rs = mysqli_query($conn,$sql) or die ("Cannot select") ;
            $num = mysqli_num_rows($rs);
            if ($num >0){
                $data = mysqli_fetch_array($rs);
                $_SESSION ["aid"] = $data['a_id'];
                $_SESSION ["aname"] = $data['a_name'];

                echo"<script>";
                echo"window.location ='../index2.php';";
                echo"</script>";

            } else {
                echo "<script>";
                echo "alert ('Incorrect Password or Username');";
                echo"window.location ='../index.php';";
                echo "</script>";
              }

         }

?> 