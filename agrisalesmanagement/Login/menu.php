<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		if($_SESSION['Category']!= 1)
		{
			$link = "profile.php";
		}
		else {
				$link = "../profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "../signin.php";
	}
?>

<!DOCTYPE html>
			<header id="header">
				<div class="header">
  					<a href="#" class="logo">Agri Sales Management</a>
  					<div class="header-right">
    					<a class="active" href="../index.php">Home</a>
    					<a href="<?= $link; ?>"><?php echo" ". $loginProfile; ?></a>
    					<a href="../market.php">Digital market</a>
  					</div>
				</div>
			</header>
	</body>
</html>