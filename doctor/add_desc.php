<?php

// define variables and set to empty values

session_start();
if ($_SESSION['dr_id'] == '') {
    echo 'Please Login!';
    exit();
}

$serverName = 'localhost';
$userName = 'root';
$userPassword = '';
$dbName = 'hospital';

$drid = null;
$userid = null;
if (isset($_GET['dr_id'.'user_id'])) {
    $drid = $_GET['dr_id'];
    $userid = intval($_GET['user_id']);
} elseif (isset($_GET['user_id'])) {
    $userid = $_GET['user_id'];
}
//$q = intval($_GET['q']);
$serverName = 'localhost';
$userName = 'root';
$userPassword = '';
$dbName = 'hospital';

$conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);
//$p_id = $_SESSION['user_id'];
//$p_id1 = $_SESSION['dr_id'];
//$sql = "SELECT * FROM doctor WHERE dr_id = '".$_SESSION['dr_id']."' ";
$p_id = $_SESSION['dr_id'];
    $sql = 'SELECT appoin.appoin_id,patient.user_id,patient.u_name,patient.gender,patient.u_address,doctor.dr_specialty,appoin.a_month,appoin.a_date,appoin.a_time FROM ((appoin INNER JOIN patient ON appoin.user_id= patient.user_id) INNER JOIN doctor ON appoin.dr_id='.$p_id.' AND doctor.dr_id='.$p_id.')';
$sql1 = "SELECT * FROM doctor WHERE dr_id = '".$_SESSION['dr_id']."' ";
$query = mysqli_query($conn, $sql);
$query1 = mysqli_query($conn, $sql1);

 $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
 $result1 = mysqli_fetch_array($query1);
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Hospital  SYSTEM</title>
	<link rel="icon" href="1.png">
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
       <div class="container">
    <div id="signup_form" class="">
        <form method="POST" action="check_add_desc.php">
          <label class="col-sm-3 control-label">Dr.ID</label>
            <input type="number"  name="textdr_id" value="<?php echo $result1['dr_id']; ?>" class="form-control" placeholder="" required>
        <br>
          <label class="col-sm-3 control-label">PatientID</label>
            <input type="number"  name="textuser_id" value="<?php echo $result['user_id']; ?>" class="form-control" placeholder="" required>
        <br>
   
            <!--<label for="Name">Name:</label> <input type="text" name="textname" disabled="disabled" value="<?php echo $result['u_name']; ?>" class="form-control" required>
             <div style="height: 10px;"></div>-->
       
             <label for="Treatment for">Treatment for:</label>  <input type="text" name="texttreatfor" class="form-control" required>
             <div style="height: 10px;"></div>
           
             <label for="Treatment">Treatment:</label> <input type="text" name="texttreat" class="form-control" required>
             <div style="height: 10px;"></div>

            <label for="Note">Note</label>
            <textarea id="Note" name="Note" placeholder="Write something.." style="height:100px"></textarea>
             <div style="height: 10px;"></div>
             <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon"></span>Submit</button>
            <br>
            <br>
            <button type="submit" class="btn btn-primary" href=".../../loginU.php"><span class="glyphicon glyphicon"></span>Cancel</button>
            </form>



<br>
<br>
<br>
<br>
<marquee behavior="alternate" direction="up" width="100%"><marquee direction="right">&copy;  2018  Hospital Online System  </marquee></marquee>

</body>
</html>
