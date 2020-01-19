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

        $password = (isset($_POST['password']) ? $_POST['password'] : '');

        $dr_name = $_POST['dr_name'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $dr_address = $_POST['dr_address'];
        $dr_mobile = $_POST['dr_mobile'];
        $dr_Email = $_POST['dr_Email'];
        $dr_specialty = $_POST['dr_specialty'];
        $cate = $_POST['textcate'];
        $sql = "INSERT INTO doctor ( dr_name, gender,dr_pass, dr_address, dr_mobile, dr_Email,dr_specialty,id_cate)
		VALUES ('$dr_name','$gender','$password','$dr_address','$dr_mobile','$dr_Email','$dr_specialty','$cate')";

//$count = mysqli_num_rows($result);
if (mysqli_query($conn, $sql)) {
    echo 'Save Done.';
    header('location:.../../addDr.php');
} else {
    echo 'Error Save ['.$sql.']';
}

        $conn->close();
