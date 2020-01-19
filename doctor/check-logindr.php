<?php
  session_start();
  $serverName = 'localhost';
  $userName = 'root';
  $userPassword = '';
  $dbName = 'hospital';

  $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);

  $userName = $_POST['username'];
  $userPass = $_POST['password'];
  $sql = "SELECT * FROM doctor WHERE dr_name='$userName' and dr_pass='$userPass'";
  $query = mysqli_query($conn, $sql);
  $result = mysqli_fetch_array($query);
    if (!$result) {
        echo 'Wrong Username or Password';
    } else {
        $_SESSION['dr_id'] = $result['dr_id'];

        session_write_close();
        if ($result) {
            header('location:.../../detailsdr.php');
        }
    }
