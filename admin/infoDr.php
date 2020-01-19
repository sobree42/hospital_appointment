	
<!DOCTYPE html> 
<html>
<head>
	<title>Hospital SYSTEM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href=".../../../CSS/tablestyle.css">
        <link rel="stylesheet" type="text/css" href=".../../../CSS/style.css">
</head>


<body>
	<div class="container">
	   <div class="row">
        <?php include '.../../menuA.php'; ?>       
	   </div>
	   <br>


<?php 

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'hospital';
    //echo "hi";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die('Connection failed: '.mysqli_connect_error());
    }
   /* echo "Connected successfully hi"; */
    //print_r($_POST);
    $sql = 'SELECT * FROM doctor';
    $result = mysqli_query($conn, $sql);
       echo '<h2>ALL DOCTORS</h2>';

    if ($result->num_rows > 0) {
        echo'<table class="container">';
        echo'<tr>';
        echo'<td>Doctor ID:</td>';
        echo'<td>Name:</td>';
        echo'<td>Gender:</td>';
        echo'<td>Address:</td>';
        echo'<td>Mobile phone:</td>';
        echo'<td>E-mail:</td>';
        echo'<td>Specialty:</td>';
        echo'</tr>';
        while ($row = $result->fetch_assoc()) {
            echo'<tr>';
            echo'<td>'.$row['dr_id'].'</td>';
            echo'<td>'.$row['dr_name'].'</td>';
            echo'<td>'.$row['gender'].'</td>';
            echo'<td>'.$row['dr_address'].'</td>';
            echo'<td>'.$row['dr_mobile'].'</td>';
            echo'<td>'.$row['dr_Email'].'</td>';
            echo'<td>'.$row['dr_specialty'].'</td>';
            echo'</tr>';
        }
        echo'</table>';
    } else {
        echo '0 results';
    }

    $conn->close();

        ?>
 

</body>
</html>