<?php 
 //load_data_select.php

 $connect = mysqli_connect('localhost', 'root', '', 'hospital');
 function fill_categorie($connect)
 {
     $output = '';
     $sql = 'SELECT * FROM categorie';
     $result = mysqli_query($connect, $sql);
     while ($row = mysqli_fetch_array($result)) {
         $output .= '<option value="'.$row['id_cate'].'">'.$row['cate_name'].'</option>';
     }

     return $output;
 }
 function fill_doctor($connect)
 {
     $output = '';
     $sql = 'SELECT * FROM doctor';
     $result = mysqli_query($connect, $sql);
     if ($result->num_rows > 0) {
         $output .= '<div>';
         $output .= '<table class="container">';
         $output .= '<table style="text-align:center;">';
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
             /* $output .= '<table class="container">';*/
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
         $output .= '</table>';
         $output .= '</div>';

         return $output;
     }
 }
 ?> 
<!DOCTYPE html> 
<html>
<head>
	<title>Hospital online SYSTEM</title>
	<link rel="icon" href="1.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href=".../../../CSS/style.css">
		<link rel="stylesheet" type="text/css" href=".../../../CSS/tablestyle.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div style="padding:15px 15px 2500px;">
<div class="container">
	   <div class="row">
        <?php include '.../../menuU.php'; ?>
        			 </div>
                     </div>
	<div id="signup_form" >  
    <select name="categorie" id="categorie">  
                      <option value="">Show All Doctor</option>  
                      <?php echo fill_categorie($connect); ?>  
                 </select>   
                 <div class="row" id="show_doctor" style="padding:15px 15px 2500px;">  
                      <?php echo fill_doctor($connect); ?> 
</div>						  
</div>
<script>  
$(document).ready(function(){  
  $('#categorie').change(function(){  
       var id_cate = $(this).val();  
       $.ajax({  
            url:"check_search_data.php",  
            method:"POST",  
            data:{id_cate:id_cate},  
            success:function(data){  
                 $('#show_doctor').html(data);  
            }  
       });  
  });  
}); 
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
document.getElementById("navbar").style.top = "0";
} else {
document.getElementById("navbar").style.top = "-50px";
}
} 
</script>
 
 </div>
</body>
</html>
 