<?php
	session_start();
	$_SESSION['logged_in'] = false;
	session_unset();
	session_destroy();
?>

<!DOCTYPE html>
<html>
	<head>
        <title>LogOut</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../css/style1.css">
    </head>

	<body>
	   <?php
            require 'menu.php';
        ?>
	    <section>
			<div>
                <header>
					<center>
						<br><br>
                    	<h2>Thanks for visiting !!!</h2>
						<br><br>
                    	<p>You have been succesfully logged out !!!</p>
						<br><br>
                        <div>
							<br />
                            <a href="../index.php" class="buttonfit">HOME</a>
                        </div>
                    </center>
                </header>
                </div>
            </div>
        </section>
	</body>
</html>
