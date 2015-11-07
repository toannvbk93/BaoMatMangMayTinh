<?php
	//error_reporting(0);
	session_start();
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
include("function.php");

if (!isset($_SESSION['uname'])){
if (isset($_POST["uname"]) && isset($_POST["pass"]) && isset($_POST["repass"])) {
if ($_POST["uname"]!="" && $_POST["pass"]!="" && $_POST["repass"]!="")
{
	$uname = $_POST['uname'];
	$password = $_POST['pass'];
	$repass = $_POST['repass'];
	if ($password != $repass)
	{
		include("header.phtml");
		echo "<div class='span3'>
		</div>
		<div class='span5'>
		<div style='border: 1px solid #999; padding-bottom: 10px; margin-bottom: 50px'>";
		include("form.phtml");
		echo "<div style='color:#C00000; padding-left:40px;'>Passwords do not match.</div>";
	}
	else
	{	include("header.phtml");
		if(addNewUser($uname, $password, $_POST['fullname'], $_POST['birthday'], $_POST['nationality'], $_POST['job'], $_POST['balance']))
		{
			echo "<div class='span9' style='margin-bottom: 500px'>
			<div>
			<h2>Creat account success!</h2>";
		}
		else
		{
			echo "<div class='span3'>
			</div>
			<div class='span5'>
			<div style='border: 1px solid #999; padding-bottom: 10px; margin-bottom: 50px'>";
			include("form.phtml");
			echo "<div style='color:#C00000; padding-left:40px;'>Trung ten tai khoan.</div>";
		}
	}
}
else
{
	include("header.phtml");
	echo "<div class='span3'>
		</div>
		<div class='span5'>
		<div style='border: 1px solid #999; padding-bottom: 10px ; margin-bottom: 50px'>";
	include("form.phtml");
}
}
else
{
	include("header.phtml");
	echo "<div class='span3'>
		</div>
		<div class='span5'>
		<div style='border: 1px solid #999; padding-bottom: 10px; margin-bottom: 50px'>";
	include("form.phtml");
}
}
else
{
	include('header1.phtml');
	echo "<div class='span9' style='margin-bottom: 490px'>
		<h4>You are logged in as ". $_SESSION['uname'] . ".</h4>
		</div>";
}
?>
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