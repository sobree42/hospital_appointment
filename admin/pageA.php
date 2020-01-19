
<?php
    ini_set('display_errors', 1);
    error_reporting(~0);
    session_start();
    if ($_SESSION['id_admin'] == '') {
        echo 'Please Login!';
        exit();
    }

   $serverName = 'localhost';
   $userName = 'root';
   $userPassword = '';
   $dbName = 'hospital';

   $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);

   $sql = "SELECT * FROM admin_test WHERE id_admin = '".$_SESSION['id_admin']."' ";

   $query = mysqli_query($conn, $sql);

    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HOSPITAL SYSTEM</title>
	<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <link rel="stylesheet" type="text/css" href=".../../../CSS/style.css">
        <link rel="stylesheet" type="text/css" href=".../../../CSS/tablestyle.css">
		</head>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
<body>

	   <div class="container">
       <div class="row">
        <?php include '.../../menuA.php'; ?>
       </div>
    	<h1><center><span class=""></span>My Profile</center></h1>
        <hr>

                	<table class="container" >
				
				<tr>
					<th class="success" width="120">User ID :</th>
					<td class="success"><?php echo $result['id_admin']; ?></td>
				</tr>
				<tr>
					<th class="danger"width="120"> Name :</th>
					<td class="danger"><?php echo $result['admin_n']; ?></td>
				</tr>
				<tr>
					<th class="info" width="120"> username :</th>
					<td class="info"><?php echo $result['Aname']; ?></td>
				</tr>
				<tr>
					<th class="warning" width="120">E-mail :</th>
					<td class="warning"><?php echo $result['Aemail']; ?></td>
				</tr>

				<!--<tr>
				<th>
				<td>
				<a href="edit-profile.php " class="btn btn-sm btn-info"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit Data </a>
				</th>
				</td>
				</tr>-->


						
			</table>
 
	
			 
			
			
		</div>
	</div>
<?php

mysqli_close($conn);
?>





 
</html>
</body>