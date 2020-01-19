<?php
    ini_set('display_errors', 1);
    error_reporting(~0);
    session_start();
    if ($_SESSION['user_id'] == '') {
        echo 'Please Login!';
        exit();
    }

   $serverName = 'localhost';
   $userName = 'root';
   $userPassword = '';
   $dbName = 'hospital';

   $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);

   $sql = "SELECT * FROM patient WHERE user_id = '".$_SESSION['user_id']."' ";

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
		  <link rel="stylesheet" type="text/css" href=".../../../CSS/tablestyle.css">
	
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
<body>

	   <div class="container">
       <div class="row">
        <?php include '.../../menuU.php'; ?>       
       </div>

 <div class="container">
    <div id="signup_form" class="">
        <h1><center><span class=""></span>My Profile</center></h1>
        <hr>




  



                	<table class="container" >
				
				<tr>
					<th class="success" width="120">User ID :</th>
					<td class="success"><?php echo $result['user_id']; ?></td>
				</tr>
				<tr>
					<th class="danger"width="120"> Name :</th>
					<td class="danger"><?php echo $result['u_name']; ?></td>
				</tr>
				<tr>
					<th class="info" width="120"> Gender :</th>
					<td class="info"><?php echo $result['gender']; ?></td>
				</tr>
				<tr>
					<th class="warning" width="120">Address :</th>
					<td class="warning"><?php echo $result['u_address']; ?></td>
				</tr>
				<tr>
					<th class="info" width="120">Mobile phone :</th>
					<td class="info"><?php echo $result['u_mobile']; ?></td>
				</tr>
				<tr>
					<th class="danger" width="120">E-mail :</th>
					<td class="danger"><?php echo $result['u_email']; ?></td>
				</tr>
				<tr>
				<th>
				<td>
				<a href="edit-profileU.php " class="btn btn-sm btn-info"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data </a>
				</th>
				</td>
				</tr>


						
			</table>
 
	
			 
			
			
		</div>
	</div>
<?php
mysqli_close($conn);
?>
 

</body>
</html>