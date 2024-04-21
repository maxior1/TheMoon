<?php
	@session_start();

	// session_destroy();
	unset($_SESSION['buyid']);

	echo " <h3>Please wait! All product are deleting from your cart....&#128564;</h3> ";
	// echo "<meta http-equiv=\"refresh\" content=\"2;URL=cart.php\">";
	//header("Location: index.php");

?>
<script>
    setTimeout(function() {
        alert("Your cart has been cleared successfully.");
        window.location.href = 'cart.php'; // Redirect after the alert is closed
    }, 1000); // Adjust the delay as needed (in milliseconds)
</script>
<meta charset="utf-8">