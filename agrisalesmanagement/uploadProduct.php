<?php
 	session_start();
	require 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$productType = $_POST['type'];
		$productName = dataFilter($_POST['pname']);
		$productInfo = $_POST['pinfo'];
		$productPrice = dataFilter($_POST['price']);
		$fid = $_SESSION['id'];

		$sql = "INSERT INTO fproduct (fid, product, pcat, pinfo, price)
			   VALUES ('$fid', '$productName', '$productType', '$productInfo', '$productPrice')";
		$result = mysqli_query($conn, $sql);
		if(!$result)
		{
			$_SESSION['message'] = "Unable to upload Product !!!";
			header("Location: Login/error.php");
		}
		else {
			$_SESSION['message'] = "successfull !!!";
			header("Location: Login/success.php");
		}
	}

	function dataFilter($data)
	{
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Product upload</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="css/style1.css">
	</head>
	<body>
		<?php require 'menu.php'; ?>
			<center>
			<section id="one">
				<div class="container1">
					<form method="POST" action="uploadProduct.php" enctype="multipart/form-data">
					<br><br>
						<h2>Enter the Product Information here..!!</h2>
						<br><br>
						<br>
						<div class="row">
					 	 	<div class="col-sm-6">
						  		<div class="select-wrapper" style="width: auto" >
							  		<select name="type" id="type" required style="background-color:white;color: black;">
								  		<option value="" style="color: black;"> Category </option>
								  		<option value="Fruit" style="color: black;">Fruit</option>
								  		<option value="Vegetable" style="color: black;">Vegetable</option>
								  		<option value="Grains" style="color: black;">Grains</option>
							  		</select>
								</div>
					  		</div>
							<br><br><br><br>
					  		<div class="input-box">
								<input type="text" name="pname" id="pname" value="" placeholder="Product Name" >
					  		</div>
						</div>
						<br><br><br>
						<div>
							<textarea  name="pinfo" id="pinfo" rows="10" cols="100" placeholder="Write about your product here"></textarea>
						</div>
						<br>
						<div class="row">
							<div class="input-box">
					  			<input type="text" name="price" id="price" value="" placeholder="Price" >
							</div>
							<div class="col-sm-6">
							<br><br>
								<button class="buttonfit" style="color:wight;">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</section>
			</center>
			<script>
			 	CKEDITOR.replace( 'pinfo' );
			</script>
			<style>
				.input-box input {
    				height: 45px;
    				width: 20%;
    				outline: none;
    				font-size: 16px;
    				border-radius: 5px;
    				padding-left: 15px;
    				border: 1px solid #ccc;
    				border-bottom-width: 2px;
    				transition: all 0.3s ease;
				}
			</style>
	</body>
	</html>
