<?php
include("config.php");

?>
<?php session_start(); ?>
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

<body style="background:#e6ccb3;">

<div class="menu"style="width: 1328px;">
<ul>
  <li class="active"><a href="#">Home</a>
  
 <ul><li><a href="#">GenerateReport<a></li>
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
  <li><a href="#">Add user<a></li>
  <li><a href="#">Update user<a></li>
  <li><a href="#">Delete user<a></li>
  <li><a href="#">Login detail<a></li>
  </ul></li>
</ul>
</div> 
<p><?php echo $_SESSION['msg1']; ?> <?php echo $_SESSION['msg1']=""; ?></p>

&nbsp;&nbsp;&nbsp;&nbsp;<form style"text-align:center;">
&nbsp;&nbsp;&nbsp;&nbsp;<fieldset style="width:30%">
&nbsp;&nbsp;&nbsp;&nbsp;<legend><h2><b><i>Change Password</i></b></h2></legend>
User Name<input type="text"name="Uname" required><br><br><br>
User ID<input type="text"name="id" required><br><br><br>
Old Password<input type="text"name="opass" required><br><br><br>
New Password<input type="text"name="npass" required><br><br><br>
Coniform Password<input type="text"name="cpass" required><br><br><br>
<input type="submit"name="submit" value="Change Password"><br><br><br>
</form>
</body>
</html>
<?php
if(!$conn){
echo"server doesn't connected!";	
}
If(isset($_POST['submit'])){
	$id=$_POST['id'];
	$Uname=$_POST['Uname'];
	$opass=$_POST['opass'];
	$npass=$_POST['npass'];
	$cpass=$_POST['cpass'];
	$query=mysqli_query($conn,"SELECT id, username and password FROM use WHERE id='$id', username='$Uname', password='$opass'");
	$num=mysqli_fetch_array($query);
	if($num>0){
		$con=mysqli_query($conn,"UPDATE use set password='$npass' where id='$id'");
		$_SESSION['msg1']="Password changed succssfully";
		
	}else {
	$_SESSION['msg1']="Password does not matched";
	}
}

?>