<?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'hospital';

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die('Connection failed: '.mysqli_connect_error());
        }

    if (trim($_POST['u_name']) == '') {
        echo 'Please input Username!';
        exit();
    }

    if (trim($_POST['gender']) == '') {
        echo 'Please input gender!';
        exit();
    }

    if (trim($_POST['u_pass']) == '') {
        echo 'Please input Password!';
        exit();
    }

    if ($_POST['u_pass'] != $_POST['u_conpass']) {
        echo 'Password not Match!';
        exit();
    }

    if (trim($_POST['u_address']) == '') {
        echo 'Please input Address!';
        exit();
    }

    if (trim($_POST['u_mobile']) == '') {
        echo 'Please input Mobile!';
        exit();
    }

    if (trim($_POST['u_email']) == '') {
        echo 'Please input E-mail!';
        exit();
    }

    $strSQL = "SELECT * FROM patient WHERE u_name = '".trim($_POST['u_name'])."' ";
    $objQuery = mysqli_query($strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    if ($objResult) {
        echo 'Username already exists!';
    } else {
        $password = (isset($_POST['password']) ? $_POST['password'] : '');
        $user_id = $_POST['user_id'];
        $u_name = $_POST['u_name'];
        $gender = $_POST['gender'];
        $password = $_POST['u_pass'];

        $u_address = $_POST['u_address'];
        $u_mobile = $_POST['u_mobile'];
        $u_email = $_POST['u_email'];
        $strSQL = "INSERT INTO patient (user_id, u_name, gender,u_pass, u_address, u_mobile, u_email)
		VALUES ('$user_id','$u_name','$gender','$password','$u_address','$u_mobile','$u_email')";
        if (mysqli_query($conn, $strSQL)) {
            echo 'Save Done.';
            header('location:.../../loginU.php');
        } else {
            echo 'Error Save ['.$strSQL.']';
        }
    }
    $conn->close();
