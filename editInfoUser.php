<?php
	//error_reporting(0);
	session_start();
	if (!isset($_SESSION['uname'])) {
		header("location: login.php");
	}
	include("function.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<link href="image/favicon.ico" rel="Shortcut Icon">
    <link href="metrobootstrap/css/metro-bootstrap.css" rel="stylesheet">
    <link href="metrobootstrap/css/metro-bootstrap-responsive.css" rel="stylesheet">
	<link href="metrobootstrap/css/docs.css" rel="stylesheet">
	<link href="metrobootstrap/css/main.css" rel="stylesheet">
	<link href="metrobootstrap/css/iconFont.css" rel="stylesheet">

    <!-- Load JavaScript Libraries -->
    <script src="metrobootstrap/min/jquery.min.js"></script>
    <script src="metrobootstrap/min/jquery.widget.min.js"></script>
    <script src="metrobootstrap/min/metro.min.js"></script>
	<script src="metrobootstrap/min/metro-calendar.js"></script>
	<script src="metrobootstrap/min/metro-datepicker.js"></script>

    <title>BKAV</title>
</head>
<body class="metro">
<?php
include('header1.phtml');
if (isset($_POST["pass"]) && isset($_POST["repass"])) {
	if ($_POST["pass"]!="" && $_POST["repass"]!="")
	{
		$uname = $_SESSION['uname'];
		$password = $_POST['pass'];
		$repass = $_POST['repass'];
		if ($password != $repass)
		{
			$userInfo = getUserInfo($_SESSION['uname']);
			echo "<div class='span3'>
			</div>
			<div class='span5'>
			<div style='border: 1px solid #999; padding-bottom: 10px; margin-bottom: 50px'>";
			include('form_editinfo.phtml');
			echo "<div style='padding-left:40px;'>Password not match.</div>";
		}
		else
		{
			editUser($uname, $password, $_POST['fullname'], $_POST['birthday'], $_POST['nationality'], $_POST['job'], $_POST['balance']);
			header("location: viewInfoUser.php?user=".$_SESSION['uname']);
		}
	}
	else
	{
		$userInfo = getUserInfo($_SESSION['uname']);
		echo "<div class='span3'>
		</div>
		<div class='span5'>
		<div style='border: 1px solid #999; padding-bottom: 10px; margin-bottom: 50px'>";
		include('form_editinfo.phtml');
	}
}
else
{
	$userInfo = getUserInfo($_SESSION['uname']);
	echo "<div class='span3'>
	</div>
	<div class='span5'>
	<div style='border: 1px solid #999; padding-bottom: 10px; margin-bottom: 50px'>";
	include('form_editinfo.phtml');
}
?>
		</div>
		
	</div>
	</div>
	</div>
</div>
<footer>
	<?php 
		include("footer.phtml");
	?>
</footer>
</body>
</html>