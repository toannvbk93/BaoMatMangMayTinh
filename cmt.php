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
		include('header.phtml');
	}
	else{
		include('header1.phtml');
	}
?>
	<div class='span3'>
	</div>
	<div class='span8' style='margin-bottom: 340px'>
	<strong>Status:</strong>
	<?php echo(isset($_GET['status']))?$_GET['status']:"None";?><br><br>
	
	<form action='cmt.php' method='get'>
		<div class="input-control textarea">
			<textarea name='status' placeholder='Type anything here...'></textarea>
		</div>
		<input class="bg-darkRed fg-white" type='submit' value='Submit'></input>
	</form>
			</div>
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