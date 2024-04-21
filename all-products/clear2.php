<meta charset="utf-8">
<?php
	@session_start();
	$id2 = $_GET['id'] ;
	unset($_SESSION['buyid'][$id2]) ;
	unset($_SESSION['buyname'][$id2]) ;
	unset($_SESSION['buyprice'][$id2]) ;
	unset($_SESSION['buydetail'][$id2]) ;
	unset($_SESSION['propicture'][$id2]) ;
	unset($_SESSION['buyqty'][$id2]) ;
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=cart.php\">";

?>