<?php
	session_start();
	require 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>product menu</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/style1.css">
		<link rel="stylesheet" href="css/style3.css">
	</head>
	<body class>
	<style>
        body {
          background-image: url('images/image6.jpg');
        }
      </style>

		<?php
			require 'menu.php';
			function dataFilter($data)
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>
			<section id="main">
				<div class="container">
				<br><br>
						<center>
							<h2>Welcome to digital market</h2>
						</center>
						<br><br>
						<?php
							if(isset($_GET['n']) AND $_GET['n'] == 1):
						?>
						<br><br>
						<center>
						<h3>Select Filter</h3>
						</center>
						<br><br>
						<form method="GET" action="productMenu.php?">
							<input type="text" value="1" name="n" style="display: none;">
							<center>
							<div class="row">
								<div class="col-sm-4">
									<div class="col-sm-2">
										<div class="select-wrapper" style="width: auto" >
											<select name="type" id="type" required style="background-color:white;color: black;">
												<option value="all" style="color: black;">List All</option>
												<option value="fruit" style="color: black;">Fruit</option>
												<option value="vegetable" style="color: black;">Vegetable</option>
												<option value="grain" style="color: black;">Grains</option>
											</select>
							  			</div>
									</div>
									<br><br>
									<div class="col-sm-2">
										<input class="buttonfit" type="submit" value="Go!" />
										<br><br>
									</div>
								<div class="col-sm-4"></div>
							</div>
							</center>
						</form>
						<?php endif; ?>
				</div>
			<section id="two" class="wrapper style2 align-center">
				<div class="container">
				<?php
					if(!isset($_GET['type']) OR $_GET['type'] == "all")
					{
					 	$sql = "SELECT * FROM fproduct WHERE 1";
					}
				    if(isset($_GET['type']) AND $_GET['type'] == "fruit")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Fruit'";
					}
					if(isset($_GET['type']) AND $_GET['type'] == "vegetable")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Vegetable'";
					}
					if(isset($_GET['type']) AND $_GET['type'] == "grain")
					{
						$sql = "SELECT * FROM fproduct WHERE pcat = 'Grains'";
					}
					$result = mysqli_query($conn, $sql);

				?>
				<div class="row">
				<?php
					while($row = $result->fetch_array()):
				?>
				<div class="row">
        			<div class="column">
            			<div class="card">
               				<div class="container">
							   <section>
								<br><br>
								<strong><h2 class="title" style="color:black; "><?php echo $row['product'].'';?></h2></strong>
								<br>
								<blockquote><?php echo "Type : ".$row['pcat'].'';?><br>
								<?php echo "Price : ".$row['price'].' /-';?><br>
								<?php echo "details : ".$row['pinfo'].'';?><br>
								<?php echo "Product id : ".$row['pid'].'';?><br>
								</blockquote>
								<center><a href="review.php?pid=<?php echo $row['pid'] ;?>" class="buttonfit"> View More </a></center>
								<br><br>
								</section>
                			</div>
            			</div>
        			</div>
				</div>
				<?php endwhile;	?>
				</div>
			</section>
		</section>
</body>
</html>
