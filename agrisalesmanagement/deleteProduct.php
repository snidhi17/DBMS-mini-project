<?php
 	session_start();
	require 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$productName = dataFilter($_POST['pname']);
		$productId = dataFilter($_POST['proid']);
		$fid = $_SESSION['id'];


        $sql = "DELETE from fproduct WHERE pid='$productId' and fid='$fid'";
		$result = mysqli_query($conn, $sql);

		if($result)
		{
			$_SESSION['message'] = "Check digital market : deleted only if you uploaded the product";
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
					<form method="POST" action="deleteProduct.php" enctype="multipart/form-data">
				        <br><br>
					    <h2>Enter the Product to delete</h2>
						<br><br>
						<br>
						<br><br><br><br>
					  	<div class="input-box">
							<input type="text" name="pname" id="pname" value="" placeholder="Product Name" >
					  	</div>
                          <br><br>
                        <div class="input-box">
							<input type="text" name="proid" id="proid" value="" placeholder="Product id" >
					  	</div>
                        <div>
                        <br><br>
							<button class="buttonfit" style="color:wight;">Submit</button>
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
