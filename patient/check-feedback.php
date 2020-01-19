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

        $text = $_POST['text2'];
        $text1 = $_POST['text1'];

        $sql = "INSERT INTO feedback ( text2,text1)
		VALUES ('$text','$text1')";

//$count = mysqli_num_rows($result);
if (mysqli_query($conn, $sql)) {
    echo 'Save Done.';
    header('location:.../../feedback.php');
} else {
    echo 'Error Save ['.$sql.']';
}

        $conn->close();
