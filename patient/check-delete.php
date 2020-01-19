<?php
    ini_set('display_errors', 1);
    error_reporting(~0);

    $serverName = 'localhost';
    $userName = 'root';
    $userPassword = '';
    $dbName = 'hospital';

    $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);

    $steAppoinId = $_GET['appoin_id'];
    $sql = "DELETE FROM appoin
			WHERE appoin_id = '".$steAppoinId."' ";

    $query = mysqli_query($conn, $sql);

    if (mysqli_affected_rows($conn)) {
        echo 'Record delete successfully';
        header('location:.../../cancel_appoin.php');
    }

    mysqli_close($conn);
