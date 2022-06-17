<?php
    session_start();

	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != 1)
	{
		$_SESSION['message'] = "You have to Login to view this page!";
		header("Location: Login/error.php");
	}
?>

<!DOCTYPE HTML>

<html lang="en">
    <head>
        <title>Profile: <?php echo $_SESSION['Username']; ?></title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style1.css">
    </head>
    <body>

        <?php
            require 'menu.php';
        ?>

        <section id="one" class="wrapper style1 align">
            <div class="inner">
                <div class="box">
                <header>
                    <center>
                    <br>
                    <h2><?php echo $_SESSION['Name'];?></h2>
                    <br>
                    <h4 style="color: black;"><?php echo $_SESSION['Username'];?></h4>
                    <br>
                    <img src="images/profileDefault.png">
                    </center>
                </header>
                    <div class="row">
                    <br><br>
                    <center>
                        <div>
                            <b><font size="+1" color="black">Email ID : </font></b>
                            <font size="+1"><?php echo $_SESSION['Email'];?></font>
                        </div>
                    </center>
                    </div>
                    <br>
                    <div class="row">
                    <center>
                        <div>
                            <b><font size="+1" color="black">Mobile No : </font></b>
                            <font size="+1"><?php echo $_SESSION['Mobile'];?></font>
                        </div>
                        <div>
                            <b><font size="+1" color="black">ADDRESS : </font></b>
                            <font size="+1"><?php echo $_SESSION['Addr'];?></font>
                        </div>
                    </center>
                    </div>
                    <br><br>
                        <div>
                            <center>
                            <?php if($_SESSION['Category'] == 1): ?>
                                <div class="row uniform">
                                    <div>
            							<a href="uploadProduct.php" class="buttonfit" style="text-decoration: none;">Upload Product</a>
            						</div>
                                    <br><br>
                                    <div>
            							<a href="deleteProduct.php" class="buttonfit" style="text-decoration: none;">delete Product</a>
            						</div>
                                    <br><br>
                                    <div>
                                        <a href="orders.php" class="buttonfit" style="text-decoration: none;">Orders</a>
                                    </div>
                                    <br><br>
                                    <div>
                                        <a href="Login/logout.php" class="buttonfit" style="text-decoration: none;">LOG OUT</a>
                                    </div>
                                </div>
                            <?php else: ?>
                                <div class="row uniform">
                                    <div>
            							<a href="market.php" class="buttonfit" style="text-decoration: none;">digital market</a>
            						</div>
                                    <br><br>
                                    <div>
                                        <a href="Login/logout.php" class="buttonfit" style="text-decoration: none;">LOG OUT</a>
                                    </div>
                                </div>
                            <?php endif; ?>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>

