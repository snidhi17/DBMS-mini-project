<?php session_start();?>
<!DOCTYPE html>
    <html >
    <head>
		<meta charset="UTF-8">
		<title>error!</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
        <link rel="stylesheet" href="../css/style1.css">
	</head>

    <body>
        <?php
            require 'menu.php';
        ?>
        <center>
        <div>
            <header>
                    <br><br>
                    <h2>ERROR</h2>
                    <br><br>
            </header>
            <p>
                <?php
                    $page = $_SERVER['HTTP_REFERER'];
                    if(isset($_SESSION['message']) AND !empty($_SESSION['message']))
                    {
                        echo $_SESSION['message'];
                    }
                    else
                    {
                        header("Location: ../index.php");
                    }
                ?>
            </p><br>
            <br>
            <a href ="<?= $page ?>" class="buttonfit">Retry</a>
    	    <?php $_SESSION['message'] = ""; ?>
        </div>
        </center>
    </body>
</html>
