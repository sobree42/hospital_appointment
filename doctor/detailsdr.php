<?php
    ini_set('display_errors', 1);
    error_reporting(~0);
    session_start();
   $serverName = 'localhost';
   $userName = 'root';
   $userPassword = '';
   $dbName = 'hospital';

   $userid = null;

   if (isset($_GET['dr_id'])) {
       $userid = $_GET['dr_id'];
   }

   $serverName = 'localhost';
   $userName = 'root';
   $userPassword = '';
   $dbName = 'hospital';

   $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);

    $sql = "SELECT * FROM doctor WHERE dr_id = '".$_SESSION['dr_id']."' ";

   $query = mysqli_query($conn, $sql);

    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);

?>	
<!DOCTYPE html> 
<html>
<head>
	<title>Hospital SYSTEM</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
<body>

	   <div class="container">
       <div class="row">
        <?php include '.../../menudr.php'; ?>       
       </div>

 <div class="container">
    <div id="signup_form" class="">
        <h1><center><span class=""></span>My Profile</center></h1>
        <hr>




  



                	<table class="table table-striped table-condensed">
				
				<tr>
					<th class="success">Dr ID :</th>
					<td class="success"><?php echo $result['dr_id']; ?></td>
				</tr>
				<tr>
					<th class="danger"> Dr.Name :</th>
					<td class="danger"><?php echo $result['dr_name']; ?></td>
				</tr>
				<tr>
					<th class="info"> Gender :</th>
					<td class="info"><?php echo $result['gender']; ?></td>
				</tr>
				<tr>
					<th class="warning">Address :</th>
					<td class="warning"><?php echo $result['dr_address']; ?></td>
				</tr>
				<tr>
					<th class="info">Mobile phone :</th>
					<td class="info"><?php echo $result['dr_mobile']; ?></td>
				</tr>
				<tr>
					<th class="danger">E-mail :</th>
					<td class="danger"><?php echo $result['dr_Email']; ?></td>
				</tr>
                <tr>
					<th class="danger">Specialty :</th>
					<td class="danger"><?php echo $result['dr_specialty']; ?></td>
				</tr>


						
			</table>
 
	
			<a href="edit-profiledr.php " class="btn btn-sm btn-info"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data </a> 
			<!--<a href="edit-profile.php?userid=<?php //echo $row['userid'];?>" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-edit" aria-hidden="true"><span class="glyphicon glyphicon-edit" Edit Data</a> ll
			<a href="profile.php?del=<?php //echo $row['userid'];?>" class="btn btn-sm btn-danger" onClick="return confirm('You sure are delete data <?php //echo $row['uname'];?>')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete Data</a> -->
			
		</div>
	</div>
<?php
mysqli_close($conn);
?>
 

</body>
</html>