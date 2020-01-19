

 <!DOCTYPE html> 
<html>
<head>
	<title>Hospital online SYSTEM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href=".../../../CSS/style.css">
		<link rel="stylesheet" type="text/css" href=".../../../CSS/tablestyle.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php 
 //load_data.php
 $conn = mysqli_connect('localhost', 'root', '', 'hospital');
 $output = '';
 if (isset($_POST['id_cate'])) {
     if ($_POST['id_cate'] != '') {
         $sql = "SELECT * FROM doctor WHERE id_cate = '".$_POST['id_cate']."'";
     } else {
         $sql = 'SELECT * FROM doctor';
     }
     $result = mysqli_query($conn, $sql);
     if ($result->num_rows > 0) {
         $output .= '<table class="container">';
         $output .= '<tr>';
         $output .= '<td>Doctor ID:</td>';
         $output .= '<td>Name:</td>';
         $output .= '<td>Gender:</td>';
         $output .= '<td>Address:</td>';
         $output .= '<td>Mobile phone:</td>';
         $output .= '<td>E-mail:</td>';
         $output .= '<td>Specialty:</td>';
         $output .= '</tr>';
         while ($row = mysqli_fetch_array($result)) {
             /*$output .= '<table >';*/
             $output .= '<tr>';
             $output .= '<td>'.$row['dr_id'].'</td>';
             $output .= '<td>'.$row['dr_name'].'</td>';
             $output .= '<td>'.$row['gender'].'</td>';
             $output .= '<td>'.$row['dr_address'].'</td>';
             $output .= '<td>'.$row['dr_mobile'].'</td>';
             $output .= '<td>'.$row['dr_Email'].'</td>';
             $output .= '<td>'.$row['dr_specialty'].'</td>';
             $output .= '</tr>';
         }
         $output .= '</table>';
         echo $output;
     }
 }
 ?>  
</body>
</html>