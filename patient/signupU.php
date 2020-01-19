<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = '';
$name = $email = $gender = $comment = $website = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['u_name'])) {
        $nameErr = 'Name is required';
    } else {
        $name = test_input($_POST['u_name']);
        // check if name only contains letters and whitespace
        if (!preg_match('/^[a-zA-Z ]*$/', $name)) {
            $nameErr = 'Only letters and white space allowed';
        }
    }

    if (empty($_POST['u_email'])) {
        $emailErr = 'Email is required';
    } else {
        $email = test_input($_POST['u_email']);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'Invalid email format';
        }
    }
    if (empty($_POST['gender'])) {
        $genderErr = 'Gender is required';
    } else {
        $gender = test_input($_POST['gender']);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}
?>
    <!DOCTYPE html> 
    <html>
    <head>
        <title>Hospital SYSTEM</title>
        <link rel="icon" href="1.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href=".../../../CSS/style.css">
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
            <form method="POST" action="check-signupU.php">
    
            <!--User ID: <input type="number" name=" user_id" class="form-control" required>
            <div style="height: 10px;"></div>-->
            <span class="error">* <?php echo $nameErr; ?></span>
             Name: <input type="text" name="u_name" class="form-control" required>
             
            <div style="height: 10px;"></div>
            <span class="error">* <?php echo $genderErr; ?></span>
            Gender:   <input type="radio" name="gender" <?php if (isset($gender) && $gender == 'female') {
    echo 'checked';
} ?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender == 'male') {
    echo 'checked';
} ?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender == 'other') {
    echo 'checked';
} ?> value="other">Other  
  
            <div style="height: 10px;"></div>
            Password: <input type="password" name="u_pass" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> 
            <div style="height: 10px;"></div>
            Confirm Password: <input type="password" name="u_conpass" class="form-control" required> 
            <div style="height: 10px;"></div>
            Address: <input type="text" name="u_address" class="form-control" required>
            <div style="height: 10px;"></div>				
            Mobile NO.: <input type="number" name="u_mobile" class="form-control" required> 
            <div style="height: 10px;"></div>
            <span class="error">* <?php echo $emailErr; ?></span>
            E-mail: <input type="text" name="u_email" value="<?php echo $email; ?>" class="form-control" required> 
            <div style="height: 10px;"></div>
    
            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span>Signup</button>
            <br>
            <br>
            <button type="submit" class="btn btn-primary" href=".../../loginU.php"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
            </form>
    
    
    
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
