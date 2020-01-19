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
  
<?php
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
    $objQuery = mysqli_query($conn, $sql);
    $objResult = mysqli_fetch_array($objQuery);

  ?>

<body>
    <div class="container">
       <div class="row">
        <?php include '.../../menuA.php'; ?>       
       </div>
<br>
<div class="container">
    <div class="content">
      <h2>My Data &raquo; Updated data</h2>
      <hr />

<form class="form-horizontal" action=".../../edit-confirm.php" method="post">
        <div class="form-group">
          <label class="col-sm-3 control-label">Admin ID</label>
          <div class="col-sm-4">
            <input value="<?php echo $objResult['id_admin']; ?>">
          </div>
        </div>
          <div class="form-group">
          <label class="col-sm-3 control-label"> Username</label>
          <div class="col-sm-4">
            <input  value="<?php echo $objResult['admin_n']; ?>" >
          </div>
         </div>
        
              
        <div class="form-group">
          <label class="col-sm-3 control-label">Password</label>
          <div class="col-sm-4">
            <input type="password" name="password" value="<?php echo $objResult['admin_pass']; ?>" class="form-control" placeholder="" required>
          </div>
        </div>
          <div class="form-group">
          <label class="col-sm-3 control-label">Confirm Password</label>
          <div class="col-sm-4">
            <input type="password" name="cpassword" value="<?php echo $objResult['admin_pass']; ?>" class="form-control" placeholder="" required>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-3 control-label"> Name</label>
          <div class="col-sm-4">
            <input type="text" name="txtName" value="<?php echo $objResult['Aname']; ?>" class="form-control" placeholder="Name" required>
          </div>
         </div>
         <div class="form-group">
          <label class="col-sm-3 control-label"> E-mail</label>
          <div class="col-sm-4">
            <input type="text" name="txtemail" value="<?php echo $objResult['Aemail']; ?>" class="form-control" placeholder="Name" required>
          </div>
         </div>
         


                               
        <div class="form-group">
          <label class="col-sm-3 control-label">&nbsp;</label>
          <div class="col-sm-6">
            <input type="submit" name="save" class="btn btn-sm btn-primary" value="Update">
            <a href="pageA.php" class="btn btn-sm btn-danger">Cancel</a>
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