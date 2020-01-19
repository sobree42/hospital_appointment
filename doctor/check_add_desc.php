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
        //echo 'Connected successfully hi';
        //print_r($_POST);
        $drid = $_POST['textdr_id'];
        $userid = $_POST['textuser_id'];
        //$name = $_GET['textname'];
        $treatfor = $_POST['texttreatfor'];
        $treat = $_POST['texttreat'];
        $Note = $_POST['Note'];
        $sql = "INSERT INTO `descrip` ( dr_id,user_id,treat_for,treat,note)
		VALUES ('$drid','$userid','$treatfor','$treat','$Note')";
if (mysqli_query($conn, $sql)) {
    echo 'Save Done.';
    header('location:Dr_desc.php');
} else {
    echo 'Error Save ['.$sql.']';
}

        $conn->close();
