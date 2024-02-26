<?php
include("config.php");

?>
<?php

if(!$conn){ echo"not connect";}

	$id="";
	$fname="";
	$lname="";
	$email="";
	$pas="";
	$rol="";
	$dat="";
	$age="";
function getData(){
	$data = array();
	$data[0]=$_POST['id'];
	$data[1]=$_POST['fname'];
	$data[2]=$_POST['lname'];
	$data[3]=$_POST['email'];
	$data[4]=$_POST['paw'];
	$data[5]=$_POST['role'];
	$data[6]=$_POST['date'];
	$data[7]=$_POST['age'];
	return $data;
}
//search
if(isset($_POST['search'])){
	$info = getData();
$search_query="SELECT * FROM `adds` WHERE id = '$info[0]'";
$search_result=mysqli_query($conn, $search_query);
if($search_result){
	if(mysqli_num_rows($search_result)){
		while($rows = mysqli_fetch_array($search_result)){
			$id = $rows['id'];
			$fname = $rows['Fname'];
			$lname = $rows['Lname'];
			$email = $rows['Email'];
			$pas = $rows['passaw'];
			$rol = $rows['role'];
			$dat = $rows['date'];
			$age = $rows['age'];
		}
	}
	else{
		echo"<script>  
alert('no data available!');
header('window.location: add-u.php');
</script>";
	}
}
else{
	echo"result error";
}

}

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
First Name <input type="text"name="fname"value="<?php echo($fname);?>">
<br>
<br>
<br>
Last Name<input type="text" name="lname"value="<?php echo($lname);?>">
<br>
<br>
<br>
Email <input type="email" name="email" value="<?php echo($email);?>">
<br>
<br>
<br>

Password <input type="password" name="paw"value="<?php echo($pas);?>">
<br>
<br>
<br>
Role<select name="role"value="<?php echo($rol);?>"> 
<option value="select role">  select role</option>
<option value="Admin">  Admin</option>
<option value="Physician"> Physician </option>
<option value="Pharmacist"> Pharmacist </option>
<option value="storeCoordinater"> StoreCoordinater </option>
<option value="Casher"> Casher </option>
</select> ID Number<input type="number" name="id" required placeholder="id"value="<?php echo($id);?>">
<br>
<br>
<br>
<br>
Date<input type="date" name="date"value="<?php echo($dat);?>">
<br>
<br>
<br>
Age <input type="number" name="age"min="15"max="100"value="<?php echo($age);?>">
<br>
<br>

<div><input type="submit"name="insert"value="Add user"style="background-color:#803399;color:white;font-weight: bold;font-size: 18px;" >
      <input type="submit"name="update"value="Update user"style="background-color:#803399;color:white;font-weight: bold;font-size: 18px;" >
	  <input type="submit"name="delete"value="Delete user"style="background-color:#803399;color:white;font-weight: bold;font-size: 18px;" >
	  <input type="submit"name="search"value="Search user"style="background-color:#803399;color:white;font-weight: bold;font-size: 18px;" >
</div>
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


</form>

</body>


</html>