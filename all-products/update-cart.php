<?php
include('config/config.php');
if(isset($_POST['update'])){
		if(!empty($_SESSION['cart'])){
		foreach($_POST['buyqty'] as $key => $val){
			if($val==0){
				unset($_SESSION['cart'][$key]);
			}else{
				$_SESSION['cart'][$key]['buyqty']=$val;

			}
		}
			echo "<script>alert('Your Cart hasbeen Updated');</script>";
		}
	} 

?>