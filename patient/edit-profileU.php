<?php
    ini_set('display_errors', 1);
    error_reporting(~0);
    session_start();
    if ($_SESSION['user_id'] == '') {
        echo 'Please Login!';
        exit();
    }
   $serverName = 'localhost';
   $userName = 'sa';
   $userPassword = '';
   $dbName = 'hospital';

   $userid = null;

   if (isset($_GET['user_id'])) {
       $userid = $_GET['user_id'];
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
  


<body>
    <div class="container">
       <div class="row">
        <?php include '.../../menuU.php'; ?>       
       </div>
<br>
<div class="container">
    <div class="content">
      <h2>My Details &raquo; Updated data</h2>
      <hr />

<form class="form-horizontal" action="edit-confirmU.php" method="post">
        <div class="form-group">
          <label class="col-sm-3 control-label">User ID</label>
          <div class="col-sm-4">
            <input type="number" disabled="disabled" name="textuser_id" value="<?php echo $result['user_id']; ?>" class="form-control" placeholder="" required>
          </div>
        </div>
          <div class="form-group">
          <label class="col-sm-3 control-label">Name</label>
          <div class="col-sm-4">
            <input type="text" name="textname" value="<?php echo $result['u_name']; ?>" class="form-control" placeholder="Name" required>
          </div>
         </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Gender</label>
          <div class="col-sm-4">
          <input type="radio" name="gender" value="<?php echo $result['gender']; ?>"  placeholder="" required > Male
            <input type="radio" name="gender" value="<?php echo $result['gender']; ?>" placeholder="" required> Female 
            <input type="radio" name="gender" value="<?php echo $result['gender']; ?>" placeholder="" required> Other
            <!--<input type="text" name="textgender" value="<?php echo $result['gender']; ?>" class="form-control" placeholder="" required>-->
          </div>
         </div>
        
              
        <div class="form-group">
          <label class="col-sm-3 control-label">Password</label>
          <div class="col-sm-4">
            <input type="password" name="password" value="<?php echo $result['u_pass']; ?>" class="form-control" placeholder="" required>
          </div>
        </div>
          <div class="form-group">
          <label class="col-sm-3 control-label">Confirm Password</label>
          <div class="col-sm-4">
            <input type="password" name="cpassword" value="<?php echo $result['u_pass']; ?>" class="form-control" placeholder="" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Address </label>
          <div class="col-sm-4">
            <input type="text" name="textaddress" value="<?php echo $result['u_address']; ?>" class="form-control" placeholder="" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">Mobile phone</label>
          <div class="col-sm-4">
            <input type="text" name="textmobile" value="<?php echo $result['u_mobile']; ?>" class="form-control" placeholder="" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label">E-mail</label>
          <div class="col-sm-4">
            <input type="text" name="textemail" value="<?php echo $result['u_email']; ?>" class="form-control" placeholder="" required>
          </div>
        </div>

      
         

                               
        <div class="form-group">
          <label class="col-sm-3 control-label">&nbsp;</label>
          <div class="col-sm-6">
            <input type="submit" name="save" class="btn btn-sm btn-primary" onclick="myFunction()" value="Update">
            <!--<script>
                    function myFunction() {
                                alert("Update Success");
                        }
            </script>-->
            <a href="detailsU.php" class="btn btn-sm btn-danger">Cancel</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
<?php
    mysqli_close($conn);
?>