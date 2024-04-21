<meta charset="utf-8">
<?php
@session_start();
include("confiG/config.php");
// if (isset($_POST['ordersubmit'])) {

// 	if (strlen($_SESSION['login']) == 0) {
// 		header('location:login.php');
// 	} else {

		foreach ($_SESSION['buyid'] as $pid) {
			$sum[$pid] = $_SESSION['buyprice'][$pid] * $_SESSION['buyqty'][$pid];
			@$total += $sum[$pid];
		}

		$sql = "insert into `orders` values('', '$total', CURRENT_TIMESTAMP, '" . $_SESSION['user_login'] . "','Pending','');";
		mysqli_query($conn, $sql) or die("insert error");
		$id = mysqli_insert_id($conn);

		foreach ($_SESSION['buyid'] as $pid) {
			$sql2 = "insert into orders_detail values('', '$id', '" . $_SESSION['buyid'][$pid] . "', '" . $_SESSION['buyqty'][$pid] . "');";
			mysqli_query($conn, $sql2);
		}
	

echo "<meta http-equiv=\"refresh\" content=\"0;URL=clear_order.php\">";

?>