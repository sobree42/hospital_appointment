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
    $sql = "UPDATE doctor SET 
          
			dr_name = '".$_POST['textname']."' ,
			gender = '".$_POST['gender']."' ,
            dr_pass = '".$_POST['password']."',
			dr_address = '".$_POST['textaddress']."' ,
			dr_mobile = '".$_POST['textmobile']."' ,
			dr_email = '".$_POST['textemail']."',
            dr_specialty = '".$_POST['dr_specialty']."'
			WHERE dr_name = '".$_POST['textname']."' ";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('Location: .../../detailsdr.php');
    } else {
        echo 'Data failed, try again';
    }

    $conn->close();
