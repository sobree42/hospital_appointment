<!DOCTYPE html> 
<html>
<head>
	<title>Hospital  SYSTEM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href=".../../../CSS/style.css">
        <link rel="stylesheet" type="text/css" href=".../../../CSS/appoin.css">
</head>

<body>
	<div class="container">
	   <div class="row">
        <?php include '.../../menuU.php'; ?>       
	   </div>
       <br>
       <div class="colors">
<table  >
<div>

	<tr><td></td><td>Your's Appointment</td></tr>
	<tr><td></td><td>Appointment Taken</td></tr>
	</div>
</table>
</div>
<?php

if (isset($_GET['doctor'])) {
    $date = $_GET['date'];
    $month = $_GET['month'];
    $doctor = $_GET['doctor']; ?>
<br>
<br>
<br>
<form action="getapont.php?doctor=<?php echo $doctor; ?>&month=<?php echo $month; ?>&date=<?php echo $date; ?>" method="POST">
<div class="morning">
<h3>Morning Shift 06:00 AM To 12:00 PM</h3>
<div id="dov">
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<div class="morning">
<h3>After Noon Shift 12:00 PM  To 06:00 PM</h3>
<div id="dov1">
</div>
</div>
<br>
<br>
<br>
<br>
<br>
<div class="morning">
<h3>Evening Shift 06:00 PM To 12:00 AM</h3>
<div id="dov2">
</div>
</div>
<input type="submit"class="btn "   value="BOOK" name="submit" style="padding: 4px;width: 100%;font-size: 20px;">
</form>
<script>


var z=document.getElementById("dov2");
var y=document.getElementById("dov1");
var x=document.getElementById("dov");


var timearr = ["06:00-06:30","06:30-07:00","07:00-07:30","07:30-08:00","08:00-08:30","08:30-09:00","09:00-09:30","09:30-10:00","10:00-10:30","10:30-11:00","11:00-11:30","11:30-12:00"];
var time1arr = ["12:00-12:30","12:30-01:00","01:00-01:30","01:30-02:00","02:00-02:30","02:30-03:00","03:00-03:30","03:30-04:00","04:00-04:30","04:30-05:00","05:00-05:30","05:30-06:00"];
var time2arr = ["06:00-06:30","06:30-07:00","07:00-07:30","07:30-08:00","08:00-08:30","08:30-09:00","09:00-09:30","09:30-10:00","10:00-10:30","10:30-11:00","11:00-11:30","11:30-12:00"];

for(var val=0;val<12;val++){
x.innerHTML += "<div><input type=\"radio\" value="+val+" name=\"check\" id=\"radio"+val+"\" class=\"radio\"/ ><label for=\"radio"+val+"\" id=\"rdio"+val+"\">"+timearr[val]+"</label></div>";
}

for(var val=0,val1=12;val<12;val++,val1++){
y.innerHTML += "<div><input type=\"radio\" name=\"check\" value="+val1+" id=\"radio"+val1+"\" class=\"radio\"/><label for=\"radio"+val1+"\" id=\"rdio"+val1+"\">"+time1arr[val]+"</label></div>";
}
for(var val=0,val2=24;val<12;val++,val2++){
z.innerHTML += "<div><input type=\"radio\" name=\"check\" value="+val2+" id=\"radio"+val2+"\" class=\"radio\"/><label for=\"radio"+val2+"\" id=\"rdio"+val2+"\">"+time2arr[val]+"</label></div>";

}

</script>
<?php
}

include 'conn.php';
if (isset($_GET['doctor'])) {
    $sql3 = 'SELECT a_time FROM appoin WHERE dr_id='.$doctor.' AND a_month='.$month.' AND a_date='.$date.';';
    $result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
        while ($getresult3 = $result3->fetch_assoc()) {
            $start3 = $getresult3['a_time']; ?>

<script>
	   var start = "<?php echo $start3; ?>";
	   var java=0,php=0;
	   
	   if(start<=12){
	   for(i=0;i<=12;i++){
	   	if(i==start){
	   		java=java;
	   		break;
	   	}else{
	   		java=java+1;
	   	}
	   }
	 }

else  if(start<=18){java=12;
	   for(i=13;i<=18;i++){
	   	if(i==start){
	   		java=java;
	   		break;
	   	}else{
	   		java=java+2;
	   	}
	   }
	 }

	   else if(start<=24){java=24;
	   for(i=19;i<=24;i++){
	   	if(i==start){
	   		java=java;
	   		break;
	   	}else{
	   		java=java;
	   	}
	   }
	 }else{}
	   val=java;
	   var block = document.getElementById("radio"+val);
	   block.style.color="red";
	   var s1=document.getElementById("rdio"+val);
		 block.disabled=true;
		 s1.style.color="red";
		 s1.style.backgroundColor="blue";
			
</script>
<?php
        }
    }
}
?>







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