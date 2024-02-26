<?php
include("config.php");

?>
<?php
if(!$conn){
	echo"not connect";}
if(isset($_POST['update'])){
	$id=$_POST['id'];
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$pas=$_POST['paw'];
	$rol=$_POST['role'];
	$dat=$_POST['date'];
	$age=$_POST['age'];
	$sql="UPDATE adds SET Fname='$_POST[fname]',Lname='$_POST[lname]',Email='$_POST[email]',passw='$_POST[paw]',role='$_POST[role]',age='$_POST[age]',date='$_POST[date]' WHERE id='$_POST[id]'";
     $query=mysqli_query($conn,$sql);
	 if($query){
		 echo"<script>  
alert('data updated successfully!');
header('window.location: update.php');
</script>";
	 }else{
		echo"<script>  
alert('not updated! data are not available');
header('window.location: delete.php');
</script>";
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
  
 <ul><li><a href="#">GenerateReport <a></li>
  <li><a href="#">Change Passw<a></li>
  <li><a href="logout.php">Logout<a></li>
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
  <li><a href="add.php">Add user<a></li>
  <li><a href="update.php">Update user<a></li>
  <li><a href="delete.php">Delete user<a></li>
  <li><a href="logindetail.php">Login detail<a></li>
  </ul></li>
</ul>
</div> 


<form action="update.php" method="post"style="text-align: center;">

<br><br>
First Name <input type="text"name="fname">
<br>
<br>
<br>
Last Name<input type="text" name="lname">
<br>
<br>
<br>
Email <input type="email" name="email">
<br>
<br>
<br>

Password <input type="password" name="paw">
<br>
<br>
<br>
Role<select name="role"> 
<option value="Admin">  Admin</option>
<option value="Physician"> Physician </option>
<option value="Pharmacist"> Pharmacist </option>
<option value="storeCoordinater"> StoreCoordinater </option>
<option value="Casher"> Casher </option>
</select> ID Number<input type="number" name="id" required placeholder="id">
<br>
<br>
<br>
<br>
Date<input type="date" name="date">
<br>
<br>
<br>
Age <input type="number" name="age"min="15"max="100">
<br>
<br>

<div>   <input type="submit"name="update"value="Update user"style="background-color:#803399;color:white;font-weight: bold;font-size: 20px;" >
	 <span> <a href="search.php"style="background-color: #ff80bf;text-decoration: none;font-weight: bold;"> Search ID</a></span> 
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