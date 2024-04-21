///Line 134 in cart
<input type="number" value="<?php echo $_SESSION['cart'][$datas['id']]['buyqty'];?>" name="buyqty[<?php echo $data['id']; ?>]">

////////clear in order
<?php
	@session_start();

	session_destroy();

	echo "<h2>Please wait! Your order has been process....</h2>";
	echo "<meta http-equiv=\"refresh\" content=\"2;URL=cart.php\">";
	
	//header("Location: index.php");

	echo '<script>
	setTimeout(function() {
		alert("Your order has been successfully processed. Thank you!");
		window.location.href = "cart.php";
	}, 2000); 
	</script>';
?>

<meta charset="utf-8">
