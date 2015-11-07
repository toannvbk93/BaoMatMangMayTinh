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
		echo"<div class='span3'>
			</div>
			<div class='span8' style='margin-bottom: 390px'>
				<form action='findUser.php' method='get'>
				<fieldset><center>
				<legend>
				Search user
				</legend></center>
				<label>
					Username:
				</label>
                <div class='input-control text'>
                    <input type='text' autofocus='' placeholder='Search...' name='uname'>
                    <button class='btn-search'></button>
                </div>
				</form>";
			
		if(isset($_GET['uname']))
		{
			$userInfo = getUserInfo($_GET['uname']);
			$count = count($userInfo[0]);
			echo "Result for \"<span style='color:#770000;'><strong>". $_GET['uname'] . "</strong></span>\". " . $count . " records found.<br><br>";
			for ($i = 0; $i < $count; $i++) {
				echo "<div class='span3'>
					<img src='image/profilepicture.jpg' class='rounded span3'>
				</div>
				<div class='span3'>
				<h2>" . $_GET['uname'] . " Profile</h2><br>
				<strong>Username:</strong> ".$userInfo[0]."<br>
				<strong>Full name:</strong>  ".$userInfo[2]."<br>
				<strong>Birthday:</strong>  ".$userInfo[3]."<br>
				<strong>Job:</strong>  ".$userInfo[5]."<br>
				<strong>Nationality:</strong>  ".$userInfo[4]."<br>
				<strong>Balance:</strong>  ".$userInfo[6]."<br>";
			}
				
		}
?>
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