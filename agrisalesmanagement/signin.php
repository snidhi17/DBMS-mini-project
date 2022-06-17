<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
	<link rel="stylesheet" href="css/style2.css">
</head>
<body>
<style>
        body {
          background-image: url('images/image2.jpg');
        }
      </style>
<div class="container">
    <div class="title">login</div>
    <div class="content">
      <form method="post" action="login/login.php">
        <br>
        <div class="user-details">
            <div class="input-box">
                <span class="details">Email</span>
                <input type="email" name="email" id="email" value="" placeholder="Enter your email" required>
             </div>
            <div class="input-box">
                <span class="details">Password</span>
                <input type="password" name="pass" id="pass" value="" placeholder="Enter your password" required>
            </div>
            <div class="details">
                <input type="radio" name="category" id="dot-1" value="1">
                <input type="radio" name="category" id="dot-2" value="0">
                <span class="boxtitle"> Category </span>
                <div class="category1">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="dot1">Farmer</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="dot1">Customer</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="button">
          <input type="submit" value="login">
        </div>
      </form>
    </div>
</div>
</body>
</html>
