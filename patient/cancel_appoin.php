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
    ini_set('display_errors', 1);
    error_reporting(~0);

    $serverName = 'localhost';
    $userName = 'root';
    $userPassword = '';
    $dbName = 'hospital';

    $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);

    $sql = 'SELECT appoin.appoin_id,doctor.dr_name,doctor.gender,doctor.dr_mobile,doctor.dr_Email,doctor.dr_specialty,appoin.a_month,appoin.a_date,appoin.a_time FROM appoin INNER JOIN doctor ON appoin.dr_id=doctor.dr_id';

    $query = mysqli_query($conn, $sql);

?>
<table class="container">
  <tr>
    <th > <div>Appoin ID </div></th>
    <th> <div >Dr.Name </div></th>
    <th> <div >Gender </div></th>
    <th> <div >Dr.Mobile </div></th>
    <th> <div >Dr.Email </div></th>
    <th> <div >Dr.Specialty </div></th>
	<th> <div >Month </div></th>
	<th> <div >Date </div></th>
	<th> <div >Time </div></th>
	<th> <div >Edit </div></th>
  </tr>
<?php
while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
    ?>
  <tr>
    <td><div><?php echo $result['appoin_id']; ?></div></td>
    <td><?php echo $result['dr_name']; ?></td>
    <td><?php echo $result['gender']; ?></td>
    <td><div><?php echo $result['dr_mobile']; ?></div></td>
    <td><?php echo $result['dr_Email']; ?></td>
    <td><?php echo $result['dr_specialty']; ?></td>
	<td><?php echo $result['a_month']; ?></td>
	<td><?php echo $result['a_date']; ?></td>
	<td><?php echo $result['a_time']; ?></td>
	<td><a href="JavaScript:if(confirm('Confirm Delete?')==true)
	{window.location='check-delete.php?appoin_id=<?php echo $result['appoin_id']; ?>';}">Delete</a></td>
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
<br>
<br>
<br>
<br>
<marquee behavior="alternate" direction="up" width="100%"><marquee direction="right">&copy;  2018  Hospital Online System  </marquee></marquee>

</body>
</html>