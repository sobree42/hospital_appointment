<!DOCTYPE html> 
<html>
<head>
	<title>Hospital  SYSTEM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href=".../../../CSS/style.css">
        <link rel="stylesheet" type="text/css" href=".../../../CSS/tablestyle.css">
        <!--<link rel="stylesheet" type="text/css" href=".../../../CSS/appoin.css">-->
</head>

<body>
	<div class="container">
	   <div class="row">
        <?php include '.../../menuU.php'; ?>       
	   </div>
       <br>
       

<?php
session_start();
if ($_SESSION['user_id'] == '') {
    echo 'Please Login!';
    exit();
}
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
$p_id = $_SESSION['user_id'];
$sql = 'SELECT appoin.appoin_id,doctor.dr_name,doctor.gender,doctor.dr_mobile,doctor.dr_Email,doctor.dr_specialty,appoin.a_month,appoin.a_date,appoin.a_time FROM ((appoin INNER JOIN doctor ON appoin.dr_id=doctor.dr_id) INNER JOIN patient ON appoin.user_id='.$p_id.' AND patient.user_id='.$p_id.') ';
$result = mysqli_query($conn, $sql);
   echo '<h2>My Appointment</h2>';

if ($result->num_rows > 0) {
    echo'<table class="container">';
    echo'<tr>';
    echo'<td>Appoin ID:</td>';
    echo'<td>Dr.Name:</td>';
    echo'<td>Gender:</td>';
    echo'<td>Dr.Mobile:</td>';
    echo'<td>Dr.Email:</td>';
    echo'<td>Dr.Specialty:</td>';
    echo'<td>Month:</td>';
    echo'<td>Date:</td>';
    echo'<td>Time:</td>';
    echo'</tr>';
    while ($row = $result->fetch_assoc()) {
        echo'<tr>';
        echo'<td>'.$row['appoin_id'].'</td>';
        echo'<td>'.$row['dr_name'].'</td>';
        echo'<td>'.$row['gender'].'</td>';
        echo'<td>'.$row['dr_mobile'].'</td>';
        echo'<td>'.$row['dr_Email'].'</td>';
        echo'<td>'.$row['dr_specialty'].'</td>';
        echo'<td>'.$row['a_month'].'</td>';
        echo'<td>'.$row['a_date'].'</td>';
        echo'<td>'.$row['a_time'].'</td>';
        echo'</tr>';
    }
    echo'</table>';
} else {
    echo '0 results';
}

$conn->close();
?>
















<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<marquee behavior="alternate" direction="up" width="100%"><marquee direction="right">&copy;  2018  Hospital Online System  </marquee></marquee>

</body>
</html>
