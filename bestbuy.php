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
	<div id="content">
	<div id="mainContainer">          
	<div class="box">
			<div id="logo">
					<img src="image/logo.png">
			</div><!-- end logo -->
			<div>
				<nav class="horizontal-menu compact">
					<ul>
						<li><a href="bestbuy.php?id=1">Laptop</a></li>
						<li><a href="bestbuy.php?id=2">Phụ kiện</a></li><!--Accessories-->
					</ul>
				</nav>
				<hr>
			</div><!-- end navigation -->
			<div>
				<h3>Thông tin sản phẩm</h3><br><br>
				<div style='margin-bottom: 150px'>
				<?php
					if(isset($_REQUEST['id'])) {
						$products = getProduct($_REQUEST['id']);
						$count = count($products[0]);
						for ($i = 0; $i < $count; $i++) {
							echo "
								<table style='margin-bottom: 20px; margin-left: 20px'>
								<tr>
									<td> 
										<img src='".$products[3][$i]."' width='200px' height='160px'>
									</td>
									<td style='width:300px;>
									<div style='margin-left:40px'>
										Tên sản phẩm:	<b>".$products[0][$i]."</b><br/>
										Giá: <b>".$products[1][$i]." VND</b><br/>
										Mô tả: <b>".$products[2][$i]."</b><br/>
									</div><!-- end information -->
									</td>
									<td style='width:200px; text-align: right;'>
									<a style='color:#770000;' href='buyproduct.php?id=".$products[4][$i]."'>Mua ngay</a>
									</td>
								</tr>
								</table>
							";
						}	
					}
				?>
				
			</div><!-- end container -->
			</div>
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