	
<!DOCTYPE html> 
<html>
<head>
	<title>Hospital online SYSTEM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href=".../../../CSS/style.css">
</head>

<body>
	<div class="container">
	   <div class="row">
        <?php include '.../../menuA.php'; ?>       
	   </div>
	   <br>
	   <div class="container">
	<div id="signup_form" >
	
        <form method="POST" action="check-addDr.php">
	    <!--Doctor ID: <input disabled="disabled" name=" dr_id" class="form-control" required>
		<div style="height: 10px;"></div>-->
	     Name: <input type="text" name="dr_name" class="form-control" required>
		<div style="height: 10px;"></div>
        Gender: <input type="radio" name="gender" value="Male" > Male
        <input type="radio" name="gender" value="Female"> Female 
        <input type="radio" name="gender" value="Other"> Other
		<div style="height: 10px;"></div>
		Password: <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		Confirm Password: <input type="password" name="conpasswrd" class="form-control" required> 
		<div style="height: 10px;"></div>
		Address: <input type="text" name="dr_address" class="form-control" required>
		<div style="height: 10px;"></div>				
		Mobile phone: <input type="number" name="dr_mobile" class="form-control" required> 
		<div style="height: 10px;"></div>
		E-mail: <input type="text" name="dr_Email" class="form-control" required> 
		<div style="height: 10px;"></div>
		Specialty: <form action="#" method="post" class="form-control">
							<select name="dr_specialty" style="height: 35px;" class="form-control" required>
							<option value="">--SELECT--</option>
							<option value="Normal">Normal</option>
							<option value="Bone">Bone</option>
							<option value="Heart">Heart</option>
							<option value="Dentist">Dentist</option>
							<option value="Neurologist">Neurologist</option>
							<option value="Kidney">Kidney</option>
                            <option value="Cardiologist">Cardiologist</option>
                            <option value="Plastic Surgeon">Plastic Surgeon</option>
							</select>
		<div style="height: 10px;"></div>
		Categorie ID: <form action="#" method="post" class="form-control">
							<select name="textcate" style="height: 35px;" class="form-control" required>
							<option value="">--SELECT--</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
							</select>
		<div style="height: 10px;"></div>
		<button type="submit" class="btn"><span></span>Submit</button> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn"><span ></span>Cancel</button>
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
<br>
<br>
<br>
<marquee behavior="alternate" direction="up" width="100%"><marquee direction="right">&copy;  2018 Bongkok Hospital Online System  </marquee></marquee>

</body>
</html>