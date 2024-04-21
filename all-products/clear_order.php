<?php
    @session_start();

    unset($_SESSION['buyid']);

    echo "<h2>Please wait! Your order is processing.... &#128229;</h2>";
?>
<script>
    setTimeout(function() {
        alert("Your order has been processed successfully. Thank you!");
        window.location.href = 'cart.php'; // Redirect after the alert is closed
    }, 2000); // Adjust the delay as needed (in milliseconds)
</script>
<meta charset="utf-8">
