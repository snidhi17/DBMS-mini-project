<?php
    session_start();
?>

<!DOCTYPE html>
    <html >
     <head>
        <title>success</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../css/style1.css">
    </head>

    <body>
        <?php
            require 'menu.php';
        ?>
        <center>
            <div class="container">
                <header class="major">
                    <br><br>
                    <h2>SUCCESS</h2>
                    <br><br>
                </header>
                <p>
                    <?php
                        if( isset($_SESSION['message']) AND !empty($_SESSION['message']))
                        {
                            echo $_SESSION['message'];
                        }
                        else
                        {
                            header("Location: ../index.php");
                        }
                    ?>
                </p><br/>
                <br><br>
                <a href = "../index.php" class="buttonfit">HOME</a>
                <br><br>
    	        <?php $_SESSION['message'] = ""; ?>
            </div>
        </center>
    </body>
</html>
