	
<!DOCTYPE html> 
<html>
<head>
	<title>Hospital online SYSTEM</title>
	<link rel="icon" href="1.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
        <link rel="stylesheet" type="text/css" href=".../../CSS/style.css">
</head>

<body>
	<div class="container">
	   <div class="row">
        <?php include 'menu.php'; ?>       
	   </div>
	   <br>      
       <div class="container">
	<div id="signup_form" class="">
		<hr>
        <form method="POST" action="check-contus.php">
	     Firstname: <input type="text" name="firstname" placeholder="Write something.." class="form-control" required>
    <div style="height: 10px;"></div>
    Lastname: <input type="text" name="lastname"  placeholder="Write something.." class="form-control" required>
		<div style="height: 10px;"></div>
		Country: <form action="#" method="post" class="form-control">
                            <select name="country" style="height: 35px;" class="form-control" required>
                            <option value=""></option>
							<option value="SUDAN">SUDAN</option>
							<option value="SOUTH AFRICA"> SOUTH AFRICA</option>
							<option value="USA">USA</option>
							<option value="UEA">UEA</option>
							<option value="KSA">KSA</option>
							<option value="THAILAND">THAILAND</option>
							</select> 
    <div style="height: 10px;"></div>
    <label for="subject">Subject</label>
    <textarea id="subject" name="text1" placeholder="Write something.." style="height:200px"></textarea>
		<div style="height: 10px;"></div>

		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-sent"></span> POST </button> 
		</form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<marquee behavior="alternate" direction="up" width="100%"><marquee direction="right">&copy;  2018 Bongkok Hospital Online System  </marquee></marquee>

</body>
</html>