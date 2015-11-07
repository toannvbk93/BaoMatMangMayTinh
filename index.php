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

    <title>BKAV</title>
</head>
<body class="metro">
<?php
	if (!isset($_SESSION['uname'])) {
		include("header.phtml");
	}
	else {
		include("header1.phtml");
	}

	if(isset($_GET['page']))
	{
		echo "<div class='span12'>";
			include($_GET['page']);
		echo "</div>";
	}
	else
	{
		echo "<div class='span9' style='margin-bottom: 460px'>
			<h1> Welcome to...</h1>
		</div>";
	}
?>
		
	</div>
</div>

<footer>
	<?php 
		include("footer.phtml");
	?>
</footer>
</body>
</html>