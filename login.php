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
	include("function.php");
	if (!isset($_SESSION['uname'])){
	if (isset($_POST["uname"]) && isset($_POST["pass"])) {
		$uname = $_POST['uname'];
		$password = $_POST['pass'];

		// if login successful
		if (user_login($uname, $password)) {
			$uname = user_login($uname, $password);
			$_SESSION['uname'] = $uname;
			include("header1.phtml");
			echo "<div class='span4' style='margin-bottom: 490px'>
				<h2>Welcome " . $uname . "!</h2>
			</div>";
		}
		else {
			include("header.phtml");
			echo "<div class='span3'>
			</div>
			<div class='span5' style='border: 1px solid #999; padding-bottom: 10px; margin-bottom: 270px'>
			<form action='login.php' method='post'>
				<fieldset>
					<center>
					<legend>
						Login
					</legend>
					</center>
					<div style='padding-left:37px;'>
					<label>
						User name:
					</label>
					<div class='input-control text size4' data-role='input-control'>
						<input type='text' autofocus='' placeholder='User name' name='uname'></input>
						<button class='btn-clear' tabindex='-1' type='button'></button>
					</div>
					<label>
						Password:
					</label>
					<div class='input-control password size4' data-role='input-control'>
						<input type='Password' placeholder='password' name='pass'></input>
						<button class='btn-reveal' tabindex='-1' type='button'></button>
					</div><br>
					<input type='submit' value='Submit'></input><br><br>
					Login failed.
					<div>
				</fieldset>
				</form>
			</div>";
		}
	}
	else
	{
		include("header.phtml");
		echo "<div class='span3'>
		</div>
		<div class='span5' style='border: 1px solid #999; padding-bottom: 10px; margin-bottom: 270px'>
		<form action='login.php' method='post'>
			<fieldset>
				<center>
					<legend>
						Login
					</legend>
				</center>
				<div style='padding-left:37px;'>
				<label>
					User name:
				</label>
				<div class='input-control text size4' data-role='input-control'>
					<input type='text' autofocus='' placeholder='User name' name='uname'></input>
					<button class='btn-clear' tabindex='-1' type='button'></button>
				</div>
				<label>
					Password:
				</label>
				<div class='input-control password size4' data-role='input-control'>
					<input type='Password' placeholder='password' name='pass'></input>
					<button class='btn-reveal' tabindex='-1' type='button'></button>
				</div><br>
				<input type='submit' value='Submit'></input>
				<div>
			</fieldset>
		</form>
		</div>";
	}
}
else
{
	include("header1.phtml");
	echo "<div class='span9' style='margin-bottom: 490px'>
		<h4>You are logged in as ". $_SESSION['uname'] . ".</h4>
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