<?php
	session_start();
	require 'db.php';
	$pid = $_GET['pid'];
?>


<!DOCTYPE html>
<html>
<head>
	<title>review</title>
	<meta lang="eng">
	<meta charset="UTF-8">
		<title>review</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="css/style1.css">
</head>
<body>


				<?php
					require 'menu.php';

					$sql="SELECT * FROM fproduct WHERE pid = '$pid'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);

					$fid = $row['fid'];
					$sql = "SELECT * FROM farmer WHERE fid = '$fid'";
					$result = mysqli_query($conn, $sql);
					$frow = mysqli_fetch_assoc($result);

					?>
				<section id="main">
						<div class="container">
							<div class="row">
								<div class="col-sm-4">
								</div>
								<center>
								<div>
									<br><br>
									<b><p style="font: 30px Times new roman;"><?= $row['product']; ?></p></b>
									<br><br>
									<p style="font: 25px Times new roman;">Product Owner : <?= $frow['fname']; ?></p>
									<p style="font: 25px Times new roman;">Price : <?= $row['price'].' /-'; ?></p>
								</div>
								</center>
							</div>
							<br>
							<center>
							<div class="row">
								<div style="font: 25px Times new roman;">
									<?= $row['pinfo']; ?>
								</div>
							</div>
							</center>
						</div>

						<br><br>

						<div class="12u$">
                            <center>
                                <div class="row uniform">
                                    <div>
										<a href="#review" class="buttonfit" style="text-decoration: none;">Give review</a>
										<br><br><br>
                                        <a href="buyNow.php?pid=<?= $pid; ?>" class="buttonfit" style="text-decoration: none;">Buy Now</a>
                                    </div>
                                </div>
                            </center>
                        </div>

					<div class="container">
					<center>
					<br><br>
					<b><p style="font: 25px Times new roman;">Product review</p></b>
					<div class="row">
						<?php
							$sql = "SELECT * FROM review WHERE pid='$pid'";
							$result = mysqli_query($conn, $sql);
						?>
						<div>
							<?php
								if($result) :
									while($row1 = $result->fetch_array()) :
							?>
							<div class="con">
								<div class="row">
									<div class="col-sm-4">
										<em style="color: black;"><?= $row1['comment']; ?></em>
									</div>
									<div class="col-sm-4">
										<em style="color: black;"><?php echo "Rating : ".$row1['rating'].' out of 10';?></em>
									</div>
								</div>
								<span class="time-right" style="color: black;"><?php echo "From: ".$row1['name']; ?></span>
								<br /><br />
							</div>
							<?php endwhile; endif;?>
						</div>
					</div>
					</center>
				</section>
					<br><br><br>
					<section class="review" id="review">
					<div class="container">
						<center>
						<b><p style="font: 30px Times new roman; align: left;">Rate this product</p></b>
						<br><br>
						<form method="POST" action="reviewInput.php?pid=<?= $pid; ?>">
							<div class="row">
								<div class="col-sm-7">
									<textarea style="background-color:white;color: black;" rows="10" cols="100" name="comment" placeholder="Write a review"></textarea>
								</div>
								<div class="col-sm-5">
									<br >
									Rating: <input type="number" min="0" max="10" name="rating" value="0"/>
								</div>
							</div>
								<br>
									<input class="buttonfit" type="submit">
								<br><br><br><br>
						</form>
						</center>
					</div>
					</section>
</body>
</html>
