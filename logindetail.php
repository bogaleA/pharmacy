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


<?php
mysqli_select_db($conn,'logo');
$sql = "SELECT * FROM adds";
$records_result = mysqli_query($conn,$sql);

?>
<br>
<br>
<span>
<table id="dff">
<tr>
<th>ID</th>
<th>first name </th>
<th>last name </th>
<th> email</th>
<th> role</th>
<th>date </th>
<th> age</th>
</tr>
<?php
while($row = mysqli_fetch_array($records_result)){
	echo "<tr><form action=up.php method=post>";
	echo"<td><input type=text name=id value='".$row['id']."'></td>";
	echo"<td ><input type=text name=fname value='".$row['Fname']."'></td>";
	echo "<td><input type=text name=lname value='".$row['Lname']."'></td>";
	echo "<td><input type=text name=email value='".$row['Email']."'></td>";
	echo "<td><input type=text name=role value='".$row['role']."'></td>";
	echo "<td><input type=text name=date value='".$row['date']."'></td>";
	echo "<td><input type=text name=age value='".$row['age']."'></td>";
	echo "</form></tr>";
}

?></table>
</span>
</body>


</html>