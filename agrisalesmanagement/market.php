<?php
 	session_start();
	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] == 0)
	{
		$_SESSION['message'] = "You need to first login to access this page !!!";
		header("Location: Login/error.php");
	}

 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>market</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/style1.css">
	</head>
	<?php require 'menu.php'; ?>
	<body>
		<center>
				<div class="container">
					<br><br><br>
					<h2>Welcome to Digital Market</h2>
					<br><br>
					<br><br>
					<div>
						<br><br>
						<section>
							<a href="profileView.php"><img src="images/profileDefault.png"></a>
							<p><b>Your Profile</b></p>
						</section>
						<br><br>
						<section>
							<a href="productMenu.php?n=1" name="catSearch"><img src="images/search.png"></a>
							<p><b>Search according to your needs</b></p>
						</section>
						<br><br>
						<section>
							<a href="productmenu.php?n=0"><img src="images/product.png"></a>
							<p><b>Our products</b></p>
						</section>
					</div>
				</div>
		</center>
	</body>
</html>
