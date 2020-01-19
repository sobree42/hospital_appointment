<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost', 'root', '', 'hospital');
if (!$con) {
    die('Could not connect: '.mysqli_error($con));
}

$sql = "SELECT * FROM doctor WHERE dr_id = '".$q."'";
/*$sql = "SELECT * FROM doctor WHERE dr_id = '".mysql_real_escape_string($q)."'";*/
$result = mysqli_query($con, $sql);

echo '<table>
<tr>
<th>Dr.ID</th>
<th>Dr.Name </th>
<th>Dr.Gender </th>
<th>Dr.Address</th>
<th>Dr.Mobile</th>
<th>Dr.E-mail </th>
<th>Dr.Specialty </th>
</tr>';
while ($row = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>'.$row['dr_id'].'</td>';
    echo '<td>'.$row['dr_name'].'</td>';
    echo '<td>'.$row['gender'].'</td>';
    echo '<td>'.$row['dr_address'].'</td>';
    echo '<td>'.$row['dr_mobile'].'</td>';
    echo '<td>'.$row['dr_Email'].'</td>';
    echo '<td>'.$row['dr_specialty'].'</td>';
    echo '</tr>';
}
echo '</table>';
mysqli_close($con);
?>
</body>
</html>