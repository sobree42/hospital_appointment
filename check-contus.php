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

        $Fname = $_POST['firstname'];
        $Lname = $_POST['lastname'];

        $country = $_POST['country'];
        $text = $_POST['text1'];

        $sql = "INSERT INTO contact ( fname, lname,country, text)
		VALUES ('$Fname','$Lname','$country','$text')";

//$count = mysqli_num_rows($result);
if (mysqli_query($conn, $sql)) {
    echo 'Save Done.';
    header('location:contus.php');
} else {
    echo 'Error Save ['.$sql.']';
}

        $conn->close();
