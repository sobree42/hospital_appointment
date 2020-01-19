<?php
  session_start();
  $serverName = 'localhost';
  $userName = 'root';
  $userPassword = '';
  $dbName = 'hospital';

  $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);

  $userName = $_POST['username'];

  $userPass = $_POST['password'];
  $sql = "SELECT * FROM patient WHERE u_name='$userName' and u_pass='$userPass'";
  $query = mysqli_query($conn, $sql);
  $result = mysqli_fetch_array($query);
    if (!$result) {
        ?>
        <script type="text/javascript">
    alert("Wrong Username or Password");
    
        </script>
<?php
header('location:.../../loginU.php');
    } else {
        $_SESSION['user_id'] = $result['user_id'];

        session_write_close();
        if ($result) {
            ?>
            <script type="text/javascript">
            alert('Login Success'); 
            </script>
<?php
            header('location:.../../detailsU.php');
        }
    }
?>