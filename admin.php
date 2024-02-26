<?php
include("config.php");

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="iner.css" type="text/css">

<title>
pharmacy information system-home
</title>
<style type="text/css">
#clock {
width: 900px;
text-align: left;
font-size: 50px;
margin-top: 0px;

}
</style>
</head>

<body style="background:#4dffff;">

<div class="menu"style="width: 1328px;">
<ul>
  <li class="active"><a href="home.php">Home</a>
  
 <ul><li><a href="#">Login Detail<a></li>
  <li><a href="#">Change Passw<a></li>
  <li><a href="#">Logout<a></li>
  <li><a href="#">About PIS<a></li>
  
  </ul></li>
  <li><a href="#">Purchase</a><ul><li><a href="#">Income Drug<a></li>
  <li><a href="#">ComeOut Drug<a></li>
  <li><a href="#">Sale Drug<a></li>
  <li><a href="#">Edit Drug<a></li>
  
  </ul></li>
  <li><a href="#">Drug details</a><ul><li><a href="#">Expired Drug<a></li>
  <li><a href="#">Stock Out<a></li>
  <li><a href="#">Prescribe Drug<a></li>
  <li><a href="#">Move Drug<a></li>
  <li><a href="#">Drug List<a></li>
  </ul></li>
  <li><a href="#">Drug</a><ul><li><a href="#">Add Drug<a></li>
  <li><a href="#">Delet Drug<a></li>
  <li><a href="#">Update Drug<a></li>
  <li><a href="#">Search Drug<a></li>
  <li><a href="#">Dispanse Drug<a></li>
  </ul></li>
  <li><a href="#">Manage user</a><ul>
  <li><a href="#">Add user<a></li>
  <li><a href="#">Update user<a></li>
  <li><a href="#">Delete user<a></li>
  <li><a href="#">GenerateReport<a></li>
  </ul></li>
</ul>
</div> 


<form action="" method="post"style="text-align: center;">

<br><br>
First Name <input type="text"name="fname"required placeholder="First Name">
<br>
<br>
<br>
Last Name<input type="text" name="lname"required placeholder="Last Name">
<br>
<br>
<br>
Email <input type="email" name="email"placeholder="Email">
<br>
<br>
<br>

Password <input type="password" name="paw"required placeholder="Password">
<br>
<br>
<br>
Role<select name="role"> 
<option value="select role">  select role</option>
<option value="Admin">  Admin</option>
<option value="Physician"> Physician </option>
<option value="Pharmacist"> Pharmacist </option>
<option value="storeCoordinater"> StoreCoordinater </option>
<option value="Casher"> Casher </option>
</select>
<br>
<br>
<br>
<br>
Date<input type="date" name="date">
<br>
<br>
<br>
Age <input type="number" name="age"required placeholder="age"min="15"max="100">
<br>
<br>

<input type="submit"name="subm"value="Add user"style="background-color:#803399;color:white;font-weight: bold;font-size: 20px;" >

<div id="clock">10:10:01</div>
<script type="text/javascript">
setInterval(displayclock, 500);
function displayclock(){
	var time = new Date();
	var hrs = time.getHours();
	var min = time.getMinutes();
	var sec = time.getSeconds();
	if(hrs > 12){
		hrs = hrs - 12;
	}
	if(hrs == 0){
		hrs == 12;
	}
	document.getElementById('clock').innerHTML = hrs + ':' + min + ':' +sec;
}
</script>

<?php

if(!$conn){ echo"not connect";}
if(isset($_POST['subm'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$pas=$_POST['paw'];
	$rol=$_POST['role'];
	$dat=$_POST['date'];
	$age=$_POST['age'];
$result=mysqli_query($conn,"INSERT INTO adds (Fname, Lname, Email, passw, role, date, Age) VALUES ('$fname','$lname','$email','$pas','$rol','$dat','$age')");
	if($result){
		echo"you are added successfuly! bravo!!!";
	}
	else{
		echo"field";
	}
}

?>
</form>

</body>


</html>