<?php
	//error_reporting(0);
	session_start();
	if (!isset($_SESSION['uname'])) {
		header("location: login.php");
	}
	include("function.php");
	
	if(isset($_REQUEST['id'])) {
		buyProduct($_REQUEST['id']);	
	}
?>
<script>
	location.href="bestbuy.php";
</script>