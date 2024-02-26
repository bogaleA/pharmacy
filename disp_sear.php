<?php
include("config.php");

?>
<?php
$servernam="localhost:3307";
$usernam="root";
$password="";
$dbname="logo";

$conn=mysqli_connect($servernam, $usernam, $password, $dbname);
if(!$conn){ echo"not connect";}
if(isset($_POST['sub'])){
	$mrn=$_POST['mrn'];
	$pfname=$_POST['fname'];
	$psname=$_POST['sname'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$phnu=$_POST['phnu'];
	$kebele=$_POST['kbl'];
	$wereda=$_POST['wrd'];
	$zone=$_POST['zon'];
	$diagno=$_POST['dgn'];
	$ndrug=$_POST['drug'];
	$fname=$_POST['pname'];
	$lname=$_POST['lpname'];
	$quali=$_POST['qual'];
	$sign=$_POST['sign'];
	$date=$_POST['date'];
	$strg=$_POST['stg'];
	$dosagf=$_POST['Dosag'];
	$dosag=$_POST['dos'];
	$dura=$_POST['dura'];
	$frequ=$_POST['frq'];
	$quntiy=$_POST['quntiy'];
	$frn=$_POST['dname'];
	$lan=$_POST['dpname'];
	$sig=$_POST['sig'];
	$qua=$_POST['qua'];
	$date=$_POST['date'];
$result=mysqli_query($conn,"INSERT INTO dispens (MRN, pfname, psname, age, gender, Phonenumber, kebele, wereda, zone, diagnosis,
 fname, lname, namedrug, qualification, sign, date, strength, dosageForm, dosag, duration, frequancy, quantity, dfname, dlname,
 signa, quality, dat) VALUES ('$mrn','$pfname','$psname','$age','$gender','$phnu','$kebele','$wereda','$zone','$diagno',
 '$fname','$lname','$ndrug','$quali','$sign','$date','$strg','$dosagf','$dosag','$dura','$frequ','$quntiy','$frn','$lan','$sig','$qua','$date')");

if($result){
		echo"<script>  
alert('succssfully dispensed');
header('window.location: disp_sear.php');
</script>";
	}
	else{
		echo"<script>  
alert('not dispensed correctlly');
header('window.location: disp_sear.php');
</script>";
	}
}

?>
<?php

if(!$conn){ echo"not connect";}

	$mrn="";
	$pfname="";
	$psname="";
	$age="";
	$gender="";
	$phnu="";
	$kebele="";
	$wereda="";
	$zone="";
	$diagno="";
	$ndrug="";
	$fname="";
	$lname="";
	$quali="";
	$sign="";
	$date="";
function getData(){
	$data = array();
	$data[0]=$_POST['mrn'];
	$data[1]=$_POST['fname'];
	$data[2]=$_POST['sname'];
	$data[3]=$_POST['age'];
	$data[4]=$_POST['gender'];
	$data[5]=$_POST['phnu'];
	$data[6]=$_POST['kbl'];
	$data[7]=$_POST['wrd'];
	$data[8]=$_POST['zon'];
	$data[9]=$_POST['dgn'];
	$data[10]=$_POST['drug'];
	$data[11]=$_POST['pname'];
	$data[12]=$_POST['lpname'];
	$data[13]=$_POST['qual'];
	$data[14]=$_POST['sign'];
	$data[15]=$_POST['date'];
	return $data;
}

if(isset($_POST['subm'])){
	$info = getData();
$search_query="SELECT * FROM `prescrib` WHERE MRN = '$info[0]'";
$search_result=mysqli_query($conn, $search_query);
if($search_result){
	if(mysqli_num_rows($search_result)){
	while($rows = mysqli_fetch_array($search_result)){
	$mrn=$rows['MRN'];
	$pfname=$rows['pfname'];
	$psname=$rows['psname'];
	$age=$rows['age'];
	$gender=$rows['gender'];
	$phnu=$rows['Phonenumber'];
	$kebele=$rows['kebele'];
	$wereda=$rows['wereda'];
	$zone=$rows['zone'];
	$diagno=$rows['diagnosis'];
	$ndrug=$rows['namedrug'];
	$fname=$rows['fname'];
	$lname=$rows['lname'];
	$quali=$rows['qualifcation'];
	$sign=$rows['sign'];
	$date=$rows['date'];
	}
	}
	else{
		echo"<script>  
alert('data not reached to server!');
header('window.location: #');
</script>";
	}
}
else{
	echo"<script>  
alert('error happpend!');
header('window.location: #');
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
<br>
<form action=""method="post">
<fieldset style="width:90%">
<legend><h2><b><i>Dispenseing drugs</b></h2></legend>
patient first name<input type="text" name="fname"value="<?php echo($pfname);?>"readonly>
patient father's name<input type="text" name="sname" pattern="[A-Za-z]+" value="<?php echo($psname);?>"readonly>
MRN<input type="number"name="mrn"value="<?php echo($mrn);?>"readonly required>
Age<input type="number" name="age"min="0"max="150"value="<?php echo($age);?>"readonly><br><br>
Gender<select name="gender"value="<?php echo($gender);?>"readonly><br><br>
<option value="Male">Male </option>
<option value="Femal">Femal</option>
     </select>
Phone number<input type="number" name="phnu"value="<?php echo($phnu);?>"readonly> 
kebele<input type="text" name="kbl"value="<?php echo($kebele);?>"readonly>
woreda<input type="text" name="wrd"value="<?php echo($wereda);?>"readonly>
Zone<input type="text" name="zon"value="<?php echo($zone);?>"readonly><br><br>
Diagnosis<input type="text" name="dgn"value="<?php echo($diagno);?>"readonly>
Name of the drug<input type="text" name="drug"value="<?php echo($ndrug);?>"readonly>


</select><br><br>
Strangth<input type="text" name="stg"required>
Dosag Form<select name="Dosag">
<option value="Adult dosage"> Adult dosage</option>
<option value="Pediatric dosage">Pediatric dosage</option>
<option value="Hepatic dosage">Hepatic dosage</option>
<option value="Renal dosage">Renal dosage</option>
</select>
dosage<select name="dos">
<option value="300mg">300mg</option>
<option value="500mg">500mg</option>
<option value="750mg">750mg</option>
<option value="1000mg">1000mg</option>
<option value="8mg/kg">8mg/kg</option>
<option value="0.125mcg/kg">0.125mcg/kg</option>
<option value="100mg"> 100mg </option>
<option value="25mg">25mg</option>
<option value="50mg"> 50mg</option>
<option value="10-20mg">10-20mg</option>
<option value="400mg"> 400mg </option>
<option value="40mg ">40mg</option>
<option value="60mg">60mg</option>
</select><br><br>
Duration<input type="number" name="dura"required>
Frequency<select name="frq">
<option value="daily(IV)">daily(IV)</option>
<option value="daily(oral)">daily(oral)</option>
<option value="daily(initial)">daily(initial)</option>
<option value="bd(IV)"> bd(IV) </option>
<option value="bd(oral)"> bd(oral) </option>
<option value="bd(initial)"> bd(initial) </option>
<option value="bid(IV)"> bid(IV) </option>
<option value="bid(oral)"> bid(oral) </option>
<option value="bid(initial)"> bid(initial) </option>
<option value="twice daily(IV)"> twice daily(IV) </option>
<option value="twice daily(oral)"> twice daily(oral) </option>
<option value="twice daily(initial)"> twice daily(initial) </option>
<option value="minute(IV)"> minute(IV) </option>
<option value="minute(oral)"> minute(oral) </option>
<option value="minute(initial)"> minute(initial) </option>
<option value="3 times/day(IV)">3 times/day(IV)</option>
<option value="3 times/day(oral)">3 times/day(oral)</option
<option value="3 times/day(initial)">3 times/day(initial)</option
<option value="once daily(IV)">once daily(IV)</option>
<option value="once daily(oral)">once daily(oral)</option>
<option value="once daily(initial)">once daily(initial)</option>
</select>
Quantity<input type="number" name="quntiy"required><br><br>
<u><b>Prescribr's</b></u><br><br>
first name<input type="text" name="pname"value="<?php echo($fname);?>"readonly>
last name<input type="text" name="lpname"value="<?php echo($lname);?>"readonly>
signature<input type="text" name="sign"value="<?php echo($sign);?>"readonly><br><br><br>
Qualification<select name="qual"readonly>
<option value="nurse"> nurse</option>
<option value="HO">HO</option>
<option value="general medicen professional">general medicen professional</option>
<option value="spacialist medicen professional"> spacialist medicen professional</option
</select>
Date<input type="date" name="date"value="<?php echo($date);?>"readonly><br><br><br><br>
<u><b>Dispenser's</b></u><br><br>
first name<input type="text" name="dname"required>
last name<input type="text" name="dpname"required>
signature<input type="text" name="sig"required><br><br><br>
Qualification<select name="qua">
<option value="Pharmacist"> Pharmacist</option>
</select>
Date<input type="date" name="date"value="<?php echo($date);?>"><br><br><br><br>
<input type="submit"name="sub"value="dispanse drug"style="background-color:#803399;text-align:center;color:white;font-weight: bold;font-size: 20px;" >

</body>

</html>
