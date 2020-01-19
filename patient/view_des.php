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
$sql = 'SELECT descrip.id_treat,doctor.dr_id,patient.user_id,patient.u_name,descrip.treat_for,descrip.treat,descrip.note FROM ((descrip INNER JOIN patient ON descrip.user_id='.$p_id.' AND patient.user_id='.$p_id.') INNER JOIN doctor ON descrip.dr_id= doctor.dr_id) ';
$result = mysqli_query($conn, $sql);
   echo '<h2>My Description</h2>';

if ($result->num_rows > 0) {
    echo'<table class="container">';
    echo'<tr>';
    echo'<td>Treatment ID:</td>';
    echo'<td>Doctor ID:</td>';
    echo'<td>Patient ID:</td>';
    echo'<td>Name:</td>';
    echo'<td>Treatment For:</td>';
    echo'<td>Treatment:</td>';
    echo'<td>Note:</td>';
    echo'</tr>';
    while ($row = $result->fetch_assoc()) {
        echo'<tr>';
        echo'<td>'.$row['id_treat'].'</td>';
        echo'<td>'.$row['dr_id'].'</td>';
        echo'<td>'.$row['user_id'].'</td>';
        echo'<td>'.$row['u_name'].'</td>';
        echo'<td>'.$row['treat_for'].'</td>';
        echo'<td>'.$row['treat'].'</td>';
        echo'<td>'.$row['note'].'</td>';
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
<marquee behavior="alternate" direction="up" width="100%"><marquee direction="right">&copy;  2018  Hospital Online System  </marquee></marquee>

</body>
</html>