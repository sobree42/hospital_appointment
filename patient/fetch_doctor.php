<?php

$conn = mysqli_connect('localhost', 'root', '', 'hospital');
$output = '';
$sql = "SELECT * FROM doctor WHERE id_cate ='".$_POST['cateid']."' ORDER BY dr_name";
$result = mysqli_query($conn, $sql);
$output = '<option value=""> --select Doctor--</option>';
while ($row = mysqli_fetch_array($result)) {
    $output .= '<option value="'.$row['dr_id'].'">'.$row['dr_name'].'</option>';
}
echo $output;
?>

