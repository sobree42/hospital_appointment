<?php
function load_categorie()
{
    $conn = mysqli_connect('localhost', 'root', '', 'hospital');
    $output = '';
    $sql = 'SELECT * FROM categorie ORDER BY cate_name';
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $output .= '<option value="'.$row['id_cate'].'">'.$row['cate_name'].'</option>';
    }

    return $output;
}
?>
<!DOCTYPE html> 
<html>
<head>
	<title>Hospital  SYSTEM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href=".../../../CSS/style.css">
		
</head>

<body>
	<div class="container">
	   <div class="row">
        <?php include '.../../menuU.php'; ?>       
	   </div>
       <br>
       
       <div class="container">
	<div id="signup_form" class="">
		<hr>
        
  
			
				<tr>
					<td>Select Categorie
				</td>
					<td><select name="categorie" id="categorie" style="height: 35px;" class="form-control" required">
						<option> --SELECT-- </option>
						<?php echo load_categorie(); ?>
						<?php
                        $res = mysqli_query($link, 'SELECT * FROM categorie');
                        while ($row = mysqli_fetch_array($res)) {
                            ?>
							
							<option value="<?php echo $row['id_cate']; ?>"><?php echo $row['cate_name']; ?></option>
					<?php
                        }

                    ?>
</select>
</td>
</tr>
<form method="GET" action="choose_time.php">
<tr>
	<td>Select Doctor</td>
	<td>
		<div >
			<select id="doctor" name="doctor" style="height: 35px;" class="form-control" required>
				<option>--SELECT--</option>
			</select>
		</div>
</td>
</tr>
<td>Select the month</td>
<td>
<div id="month_selector"><select id="mySelect1" name="month" onchange="chngedate()" class="form-control" required></select></div>
</td>
<td>Select the Day</td>
<td>
<div id="date_selector"><select id="selectlist" name="date" class="form-control" required></select></div></td>
</tr>
<tr>


		<div style="height: 10px;"></div>
		<div style="height: 10px;"></div>

		<button type="submit" name="check" class="btn"><span class="glyphicon glyphicon-check"></span> CHECK </button> 
		</form>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<marquee behavior="alternate" direction="up" width="100%"><marquee direction="right">&copy;  2018  Hospital Online System  </marquee></marquee>

</body>
</html>
<script>
$(document).ready(function(){
	$('#categorie').change(function(){
		var id_cate =$(this).val();
		$.ajax({
			url:"fetch_doctor.php",
			method:"POST",
			data:{cateid:id_cate},
			datatype:"text",
			success:function(data)
			{
				$('#doctor').html(data);
			}
		});
	});
});
</script>
<script>
var selectList1 = document.getElementById("selectlist");
var obj=new Date();
	 var date=obj.getDate();
	 
//Create and append the options
for (var i = date; i <=30; i++) {
    var option = document.createElement("option");
    option.value = i;
    option.text = i;
    selectList1.appendChild(option);
}
</script>

<script type="text/javascript">
	function chngedate(){
	var abc = document.getElementById("mySelect1");
	var xyz = document.getElementById("selectlist");
	var object = new Date();
	var month = object.getMonth();
	if(month+1!=abc.value){
		var selectList1 = document.getElementById("selectlist");
	 	selectList1.innerHTML="";
		//Create and append the options
		for (var i = 1; i <=30; i++) {
		    var option = document.createElement("option");
		    option.value = i;
		    option.text = i;
		    selectList1.appendChild(option);
		}
	}else{
			var selectList1 = document.getElementById("selectlist");
			var obj=new Date();
			var date=obj.getDate();
			selectList1.innerHTML="";
			//Create and append the options
			for (var i = date; i <=30; i++) {
			    var option = document.createElement("option");
			    option.value = i;
			    option.text = i;
			    selectList1.appendChild(option);
			}
		}
	}
</script>
<script>
var arr = new Array("","Junuary","Febrary","March","April","May","June","July","Agust","September","October","November","December");
var Div1 = document.getElementById("mySelect1");
var obj=new Date();
var Month=obj.getMonth();
	 
//Create and append the options
for (var i = Month+1,j=0; j <=2; i++,j++) {
    var option = document.createElement("option");
    option.value = i;
    option.text = arr[i];
    Div1.appendChild(option);
}
function check(){   
  var data =document.getElementById('id_cate').value;
   obj={
    type:'post',
    data:{'value':data},
    url:'bookingU.php',
    success:function(msg){ 	 document.getElementById('doc_select').innerHTML=msg;     }
    }; 
   jQuery.ajax(obj);
    
 }
</script>