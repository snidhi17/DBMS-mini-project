<?php
    session_start();

    $user = dataFilter($_POST['email']);
    $pass = $_POST['pass'];
    $category = dataFilter($_POST['category']);


    require '../db.php';

if($category == 1)
{
    $sql = "SELECT * FROM farmer WHERE femail='$user'";
    $result = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);

    if($num_rows == 0)
    {
        $_SESSION['message'] = "Invalid User Credentialss!";
        header("location: error.php");
    }

    else
    {
        $User = $result->fetch_assoc();

        if (password_verify($_POST['pass'], $User['fpassword']))
        {
            $_SESSION['id'] = $User['fid'];
            $_SESSION['Hash'] = $User['fhash'];
            $_SESSION['Password'] = $User['fpassword'];
            $_SESSION['Email'] = $User['femail'];
            $_SESSION['Name'] = $User['fname'];
            $_SESSION['Username'] = $User['fusername'];
            $_SESSION['Mobile'] = $User['fmobile'];
            $_SESSION['Addr'] = $User['faddress'];
            $_SESSION['logged_in'] = true;
            $_SESSION['Category'] = 1;
            $_SESSION['Rating'] = 0;

            header("location: profile.php");
        }
        else
        {
            $_SESSION['message'] = "Invalid User Credentials!";
            header("location: error.php");
        }
    }
}
else
{
    $sql = "SELECT * FROM buyer WHERE bemail='$user'";
    $result = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);

    if($num_rows == 0)
    {
        $_SESSION['message'] = "Invalid User Credentialss!";
        header("location: error.php");
    }

    else
    {
        $User = $result->fetch_assoc();

        if (password_verify($_POST['pass'], $User['bpassword']))
        {
            $_SESSION['id'] = $User['bid'];
            $_SESSION['Hash'] = $User['bhash'];
            $_SESSION['Password'] = $User['bpassword'];
            $_SESSION['Email'] = $User['bemail'];
            $_SESSION['Name'] = $User['bname'];
            $_SESSION['Username'] = $User['busername'];
            $_SESSION['Mobile'] = $User['bmobile'];
            $_SESSION['Addr'] = $User['baddress'];
            $_SESSION['logged_in'] = true;
            $_SESSION['Category'] = 0;

            header("location: profile.php");
        }
        else
        {
            $_SESSION['message'] = "Invalid User Credentials!";
            header("location: error.php");
        }
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
