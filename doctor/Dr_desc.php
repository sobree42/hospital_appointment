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
        <?php include '.../../menudr.php'; ?>       
	   </div>
       <br>
	   
	   <?php
       session_start();
       if ($_SESSION['dr_id'] == '') {
           echo 'Please Login!';
           exit();
       }
    ini_set('display_errors', 1);
    error_reporting(~0);

    $serverName = 'localhost';
    $userName = 'root';
    $userPassword = '';
    $dbName = 'hospital';

    $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);
    $p_id = $_SESSION['dr_id'];
    $sql = 'SELECT appoin.appoin_id,patient.user_id,patient.u_name,patient.gender,patient.u_address,doctor.dr_specialty,appoin.a_month,appoin.a_date,appoin.a_time FROM ((appoin INNER JOIN patient ON appoin.user_id= patient.user_id) INNER JOIN doctor ON appoin.dr_id='.$p_id.' AND doctor.dr_id='.$p_id.')';

    $query = mysqli_query($conn, $sql);

?>
<table class="container">
  <tr>
    <th > <div>Appoin ID </div></th>
	<th> <div>Patient ID:</div></th>
    <th> <div >Name </div></th>
    <th> <div >Gender </div></th>
    <th> <div >Address </div></th>
    <th> <div >Dr.Specialty </div></th>
	<th> <div >Month </div></th>
	<th> <div >Date </div></th>
	<th> <div >Time </div></th>
	<th> <div >Add Description </div></th>
  </tr>
<?php
while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
    ?>
  <tr>
    <td><div><?php echo $result['appoin_id']; ?></div></td>
    <td><?php echo $result['user_id']; ?></td>
	<td><?php echo $result['u_name']; ?></td>
    <td><?php echo $result['gender']; ?></td>
	<td><?php echo $result['u_address']; ?></td>
    <td><?php echo $result['dr_specialty']; ?></td>
	<td><?php echo $result['a_month']; ?></td>
	<td><?php echo $result['a_date']; ?></td>
	<td><?php echo $result['a_time']; ?></td>
	<td><a href="JavaScript:if(confirm('Confirm ADD Description?')==true)
	{window.location='add_desc.php';}"class="btn btn-sm btn-info"><span class="glyphicon glyphicon" aria-hidden="true"></span>ADD</a></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>












<br>
<br>
<br>
<br>
<marquee behavior="alternate" direction="up" width="100%"><marquee direction="right">&copy;  2018  Hospital Online System  </marquee></marquee>

</body>
</html>