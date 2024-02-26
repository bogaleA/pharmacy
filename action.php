
<?php
$message="not correct";
session_start();
$servernam="localhost:3307";
$usernam="root";
$password="";
$dbname="logo";
$con=mysqli_connect($servernam, $usernam, $password, $dbname);
if(!$con)
{
	echo"unable to establish connection";
	
}

$db=mysqli_select_db($con,"logo");
if(!$db){
	echo"Database no found";
}
if(isset($_POST['Login'])) {
     $user=$_POST['uname'];
     $pass=$_POST['pasw'];
     $usertype=$_POST['suname'];
	
$query="SELECT * FROM `use` WHERE username='$user' and password='$pass' and usertype='$usertype'";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_array($result)){
	
	if($row['username'] == $user && $row['password'] == $pass && $row['usertype'] == 'Admin')	
	{
		$_SESSION['uname'] = $user;
		header("location: home.php");
		die;
	}
	elseif($row['username'] == $user && $row['password'] == $pass && $row['usertype'] == 'Physician')
	{
		$_SESSION['uname'] = $user;
		header("location: homepd.php");
		die;
	}
	elseif($row['username'] == $user && $row['password'] == $pass && $row['usertype'] == 'Pharmacist')
	{
		$_SESSION['uname'] = $user;
		header("location: homephr.php");
		die;
	}
	elseif($row['username'] == $user && $row['password'] == $pass && $row['usertype'] == 'StoreCoordinater')
	{
		$_SESSION['uname'] = $user;
			header("location: homesc.php");
			die;
	}
	elseif($row['username'] == $user && $row['password'] == $pass && $row['usertype'] == 'Casher')
	{
		$_SESSION['uname'] = $user;
		header("location: homec.php");
		die;
	}
	else {
		echo"<script>  
alert('not logened correctly your username or password or role is not correct!');
header('window.location: login.php');
</script>";
		}
}

}
?>




<html>
<body>
<br>
<br>
<h3 style="color:red; text-align:center;">Not logened correctly your username or password or role is not correctly enterd!<br><br><br>

</h3>
<a href="login.php"style="text-decoration:none;width:50px;">
<h2 style="text-align:center;background-color:#bfff00;border:2px solid #b3cccc;width:50px;margin-left:380px;">OK</h2></a>

</body>
</html>