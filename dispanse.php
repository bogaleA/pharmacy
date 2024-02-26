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

<body style="background:#99ffff;">

<div class="menu"style="width: 1328px;">
<ul>
  <li class="active"><a href="homephr.php">Home</a>
  
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
  <li><a href="dispanse.php">Dispanse Drug<a></li>
  </ul></li>
  <li><a href="#">Manage user</a><ul>
  <li><a href="#">Add user<a></li>
  <li><a href="#">Update user<a></li>
  <li><a href="#">Delete user<a></li>
  <li><a href="#">Login detail<a></li>
  </ul></li>
</ul>
</div> 
<?php
mysqli_select_db($conn,'logo');
$sql = "SELECT * FROM prescrib";
$records_result = mysqli_query($conn,$sql);

?>
<table style="width:50%">
<tr style="width:50%">
<th>MRN</th>
<th>patientFname </th>
<th>patienLname </th>
<th> Age</th>
<th>action</th>
<th> NameOfgDrug</th>
<th>Phonenumber</th>
<th>kebele </th>
<th>wereda </th>
<th> zone</th>
<th> diagnosis</th>
<th>prescribrsFname </th>
<th>LastName </th>
<th> qualifcation</th>
<th> signature</th>
<th> date</th>
<th> Gender</th>
</tr>
<?php
while($row = mysqli_fetch_array($records_result)){
	echo "<tr style='width:50%'><form action='disp_sear.php'method='post'>";
	echo"<td><input type=text name=mrn value='".$row['MRN']."'></td>";
	echo"<td ><input type=text name=fname value='".$row['pfname']."'></td>";
	echo "<td><input type=text name=sname value='".$row['psname']."'></td>";
	echo "<td><input type=text name=age value='".$row['age']."'></td>";
	echo "<td><input type=submit name=subm value='Dispanse'></td>";
	echo "<td><input type=text name=drug value='".$row['namedrug']."'></td>";
	echo"<td><input type=text name=phnu value='".$row['Phonenumber']."'></td>";
	echo"<td ><input type=text name=kbl value='".$row['kebele']."'></td>";
	echo "<td><input type=text name=wrd value='".$row['wereda']."'></td>";
	echo "<td><input type=text name=zon value='".$row['zone']."'></td>";
	echo "<td><input type=text name=dgn value='".$row['diagnosis']."'></td>";
	echo "<td><input type=text name=pname value='".$row['fname']."'></td>";
	echo "<td><input type=text name=lpname value='".$row['lname']."'></td>";
	echo "<td><input type=text name=qual value='".$row['qualifcation']."'></td>";
	echo "<td><input type=text name=sign value='".$row['sign']."'></td>";
	echo "<td><input type=text name=date value='".$row['date']."'></td>";
	echo "<td><input type=text name=gender value='".$row['gender']."'></td>";
	echo "</form></tr>";
}

?></table>

</body>
</html>