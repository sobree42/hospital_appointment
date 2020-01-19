<?php
  session_start();
  $serverName = 'localhost';
  $userName = 'root';
  $userPassword = '';
  $dbName = 'hospital';

  $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);

  $userName = $_POST['username'];

  $userPass = $_POST['password'];
  $sql = "SELECT * FROM admin_test WHERE admin_n='$userName' and admin_pass='$userPass'";
  $query = mysqli_query($conn, $sql);
  $result = mysqli_fetch_array($query);
    if (!$result) {
        ?>
        <script type="text/javascript">
    alert("Wrong Username or Password");
    
        </script>
<?php
header('location:Form_A.php');
    } else {
        $_SESSION['id_admin'] = $result['id_admin'];

        session_write_close();
        if ($result) {
            ?>
            <script type="text/javascript">
            alert('Login Success'); 
            </script>
<?php
            header('location:pageA.php');
        }
    }
?>