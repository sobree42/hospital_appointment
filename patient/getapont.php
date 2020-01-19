<?php

include 'conn.php';
if (isset($_GET['doctor'])) {
    $date = $_GET['date'];
    $month = $_GET['month'];
    $doctor = $_GET['doctor'];
    $time = $_POST['check'];
}
session_start();
if (isset($_SESSION['user_id'])) {
    $p_id = $_SESSION['user_id'];
    $sql = 'INSERT into appoin(dr_id,user_id,a_month,a_date,a_time) values('.$doctor.','.$p_id.','.$month.','.$date.','.$time.')';

    if ($conn->query($sql) === true) {
        echo 'Appontment taken';
        header('location: .../../bookingU.php');
    } else {
        echo 'error';
    }
}
