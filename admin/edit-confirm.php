<?php
    ini_set('display_errors', 1);
    error_reporting(~0);

    $serverName = 'localhost';
    $userName = 'root';
    $userPassword = '';
    $dbName = 'hospital';

    $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);
    if ($_POST['password'] != $_POST['cpassword']) {
        echo 'Password not Match!';
        exit();
    }
    $password = (isset($_POST['password']) ? $_POST['password'] : '');
    /*$fpassword = md5($password);*/
    $sql = "UPDATE admin_test SET 
          
			id_admin = '".$_POST['textname']."' ,
			gender = '".$_POST['gender']."' ,
            u_pass = '".$_POST['password']."',
			u_address = '".$_POST['textaddress']."' ,
			u_mobile = '".$_POST['textmobile']."' ,
			u_email = '".$_POST['textemail']."'
			WHERE u_name = '".$_POST['textname']."' ";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        $message = 'Update Success';
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Location: .../../detailsU.php');
    } else {
        echo 'Data failed, try again';
    }

    $conn->close();
