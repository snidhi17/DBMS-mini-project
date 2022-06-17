<?php
    session_start();

    if ( $_SESSION['logged_in'] != 1 )
    {
      $_SESSION['message'] = "You must log in before viewing your profile page!";
      header("location: error.php");
    }
    else
    {

       $email =  $_SESSION['Email'];
       $name =  $_SESSION['Name'];
       $user =  $_SESSION['Username'];
       $mobile = $_SESSION['Mobile'];
    }
?>

<!DOCTYPE html>
    <html >
     <head>
        <title>profile</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../css/style1.css">
    </head>

    <body>
        <?php
            require 'menu.php';
        ?>
        <center>
        <section id="banner" class="wrapper">
            <div class="container">
                <header class="major">
                    <br><br>
                    <h2>Welcome</h2>
                    <br><br>
                </header>
                <p>
                <?php
                    if ( isset($_SESSION['message']) )
                    {
                        echo $_SESSION['message'];
                        unset( $_SESSION['message'] );
                    }
                ?>
                <br>
                <img src="../images/profileDefault.png">
                <br> 
                </p>
                  <h2><?php echo $name; ?></h2>
                  <br>
                  <p><?= $email ?></p>
                  <br>
                    
                 <?php if($_SESSION['Category'] == 1): ?>
                    <div class="row uniform">
                    <br><br>
                        <div>
                            <a href=../profileView.php class="buttonfit">My Profile</a>
                        </div>
                    <br><br>
                        <div>
                            <a href="logout.php" class="buttonfit">LOG OUT</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="row uniform">
                    <br><br>
                        <div>
                            <a href=../market.php class="buttonfit">Digital Market</a>
                        </div>
                    <br><br>
                        <div>
                            <a href="logout.php" class="buttonfit">LOG OUT</a>
                        </div>
                    </div>

                <?php endif; ?>
            </center>

    </body>
</html>
