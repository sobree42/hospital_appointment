	
<!DOCTYPE html> 
<html>
<head>
	<title>Hospital SYSTEM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Plug And Play PHP Email Form For Any Website - reusable form</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
        <script src="form.js"></script>
</head>
<style>
  .form-container{
	background-color: #fff;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 20px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
    border-radius: 8px;	
    font-family: 'Montserrat', Arial, Helvetica, sans-serif;
}
input[type='text'],input[type='email'],
textarea {
    font-family: Arial, FontAwesome;
}
h2,h3{
    text-align:center;
}
p{
    text-align:center;
}


    </style>
<body>
	<div class="container">
	   <div class="row">
        <?php include '.../../menuU.php'; ?>       
	   </div>
       <br>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2>Feedback</h2> 
                    <p> Please provide your feedback below: </p>
                    <form role="form" method="post" id="reused_form" action="check-feedback.php">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h3>How do you rate your overall experience?</h3>
                                <p>
                                    <label class="radio-inline">
                                        <input type="radio" name="text2" id="radio_experience" value="Bad" >
                                        <i class="fa fa-frown-o fa-2x" aria-hidden="true"></i> Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="text2" id="radio_experience" value="Just OK" >
                                        <i class="fa fa-meh-o fa-2x" aria-hidden="true"></i> Just OK 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="text2" id="radio_experience" value="Good" >
                                        <i class="fa fa-smile-o fa-2x" aria-hidden="true"></i> Good 
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments"> Comments:</label>
                                <textarea class="form-control" type="textarea"  placeholder="&#xf040;" name="text1" maxlength="6000" rows="7"></textarea>
                            </div>
                        
                            <div class="row">
                            <div class="col-sm-12 form-group">
                            <center>  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> POST </button></center>
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your feedback successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            </div>
        </div>
    </body>
	  



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