<?php
	session_start();
	require 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Orders</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="css/style1.css">
		<link rel="stylesheet" href="css/style3.css">
	</head>
	<body class>
	<style>
        body {
          background-image: url('images/image4.jpg');
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
						<h2>Orders</h2>
					</center>
					<br><br>
				</div>
			<section id="two">
				<div class="container">
				<?php
                    $fid = $_SESSION['id'];
                    $sql = "SELECT * FROM transaction t, fproduct f WHERE t.pid=f.pid and fid='$fid'";
					$result = mysqli_query($conn, $sql);

				?>
				<div class="row">
				<?php
					while($roww = $result->fetch_array()):
				?>
				<div class="row">
        			<div class="column">
            			<div class="card">
               				<div class="container">
							   <section>
								<br><br>
								<strong><h2 class="title" style="color:black; "><?php echo $roww['product'].'';?></h2></strong>
								<br>
								<blockquote>
                                    <?php echo "Product category : ".$roww['pcat'].'';?><br>
                                    <?php echo "Product ID : ".$roww['pid'].'';?><br>
                                    <?php echo "Buyer Name : ".$roww['name'].'';?><br>
                                    <?php echo "Buyer city : ".$roww['city'].'';?><br>
								    <?php echo "Buyer Mobile : ".$roww['mobile'].'';?><br>
								    <?php echo "Buyer Email : ".$roww['email'].'';?><br>
								    <?php echo "Address : ".$roww['addr'].'';?><br>
                                    <?php echo "pincode : ".$roww['pincode'].'';?><br>
								</blockquote>
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
