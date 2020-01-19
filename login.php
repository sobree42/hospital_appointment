	
<!DOCTYPE html> 
<html>
<head>
	<title>HOSPITAL SYSTEM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href=".../../CSS/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
body {font-family: Arial, Helvetica, sans-serif;
       text-align:center; }
       * {box-sizing: border-box;}

</style>
</head>

<body>
	<div class="container">
	   <div class="row">
        <?php include 'menu.php'; ?>       
	   </div>
	   <br>
	  
<center> 
     <h1><center><span class="glyphicon glyphicon-lock"></span> Choose your Login</center></h1>
</center>
  </div>

 <!--ul>                     
            <li> 
            <a href=".../../admin/Form_A.php"><img src="img/admin.png" alt="Person" style="width:10% " ></a>
            
            <a href=".../../patient/loginU.php"><img src="img/user.png" alt="Person" style="width:10% " > </a>
             
            <a href=".../../doctor/logindr.php"><img src="img/doctor.png" alt="Person" style="width:10% " > </a></li>

            <li>Admin Login  
            Patient Login
            Doctor Login</li>
        </ul-->

<center> 
     
<br>
<br>
<a href=".../../admin/Form_A.php" class="button button2 "><i class="fa fa-address-card-o"></i> Admin </a>

<a href=".../../patient/loginU.php" class="button button2 "><i class="fa fa-heartbeat"></i> Patient </a>
<a href=".../../doctor/logindr.php" class="button button2 "><i class="fa fa-user-md"></i> Doctor </a>

</center>

<br>
<br>
<br>
<br>
<marquee behavior="alternate" direction="up" width="100%"><marquee direction="right">&copy;  2018 Department Of Information and Tchnology, Faculty of Science and Tchnology , Fatoni University   </marquee></marquee>

</body>
</html>