<?php
	session_start();
	require 'db.php'; 
    $pid = $_GET['pid'];
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $city = $_POST['city'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $pincode = $_POST['pincode'];
        $addr = $_POST['addr'];
        $bid = $_SESSION['id'];

        $sql = "INSERT INTO transaction (bid, pid, name, city, mobile, email, pincode, addr)
                VALUES ('$bid', '$pid', '$name', '$city', '$mobile', '$email', '$pincode', '$addr')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            $_SESSION['message'] = "Order Succesfully placed! <br /> Thanks for shopping with us!!!";
            header('Location: Login/success.php');
        }
        else {
            echo $result->mysqli_error();
        }
    }
?>




<!DOCTYPE html>
<html>
<head>
	<title>Transaction</title>
	<meta lang="eng">
	<meta charset="UTF-8">
		<title>buy now</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="css/style2.css">
</head>
    <body>
        <div class="container">
            <div class="title">Transaction details</div>
            <div class="content">
                <form method="post" action="buyNow.php?pid=<?= $pid; ?>">
                    <br>
                    <div class="user-details">
                        <div class="input-box">
                        <span class="details">Name</span>
                            <input type="text" name="name" id="name" value="" placeholder="Name" required/>
                        </div>
                        <div class="input-box">
                        <span class="details">City</span>
                            <input type="text" name="city" id="city" value="" placeholder="City" required/>
                        </div>
                    </div>
                    <div class="user-details">
                        <div class="input-box">
                        <span class="details">Mobile Number</span>
                            <input type="number" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
                        </div>

                        <div class="input-box">
                        <span class="details">Email</span>
                            <input type="email" name="email" id="email" value="" placeholder="Email" required/>
                        </div>
                    </div>
                    <div class="user-details">
                        <div class="input-box">
                        <span class="details">Pincode</span>
                            <input type="text" name="pincode" id="pincode" value="" placeholder="Pincode" required/>
                        </div>
                        <div class="input-box">
                        <span class="details">Address</span>
                            <input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:80%" required/>
                        </div>
                    </div>
                    <br>
                    <div class="button">
                        <input type="submit" value="Confirm Order" />
                    </div>
                    <center>
                    <div>
                        <a href="index.php" class="buttonfit">HOME</a>
                    </div>
                    </center>
                </form>
            <div>
        </div>  
    </body>
</html>
