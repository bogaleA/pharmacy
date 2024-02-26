<?php
include("config.php");

?>
<?php
$conn=mysqli_connect($servernam, $usernam, $password, $dbname);
if(!$conn){ echo"not connect";}
if(isset($_POST['submit'])){
	$mrn=$_POST['mrn'];
	$pfname=$_POST['fname'];
	$psname=$_POST['sname'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$phonum=$_POST['phnu'];
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
$result=mysqli_query($conn,"INSERT INTO prescrib (MRN, pfname, psname, age, gender, Phonenumber, kebele, wereda, zone, diagnosis, namedrug,
 fname, lname, qualifcation, sign, date) VALUES ('$mrn','$pfname','$psname','$age','$gender','$phonum','$kebele','$wereda','$zone',
 '$diagno','$ndrug','$fname','$lname','$quali','$sign','$date')");
	if($result){
		echo"<script>  
alert('you are prescribed succssfully!');
header('window.location: prescrib.php');
</script>";
	}
	else{
		echo"<script>  
alert('you are not prescribed correctly! please cheak it');
header('window.location: prescrib.php');
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

<body style="background:#bfff00;">

<div class="menu"style="width: 1328px;">
<ul>
  <li class="active"><a href="homepd.php">Home</a>
  
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
  <li><a href="prescrib.php">Prescribe Drug<a></li>
  <li><a href="#">Move Drug<a></li>
  <li><a href="">Drug List<a></li>
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
<br>
<form method="post">
<fieldset style="width:90%">
<legend><h2><b><i>Prescribing Drug to Patient</i></b></h2></legend>
patient first name<input type="text" name="fname" pattern="[A-Za-z]+" placeholder="First Name" required>
patient father's name<input type="text" name="sname" pattern="[A-Za-z]+" placeholder="father Name" required>
MRN<input type="number"name="mrn" required>
Age<input type="number" name="age"min="0"max="150"required><br><br>
Gender<select name="gender"value="<?php echo($gender);?>"><br><br>
<option value="Male">Male </option>
<option value="Femal">Femal</option>
     </select>
Phone number<input type="number" name="phnu" required> 
kebele<input type="text" name="kbl" required>
woreda<input type="text" name="wrd" required>
Zone<input type="text" name="zon" required><br><br>
Diagnosis<input type="text" name="dgn" required>
Name of the drug<select name="drug">
<option value="Abacavir">Abacavir</option>
<option value="abciximab">abciximab</option>
<option value="abetacept ">abetacept</option>
<option value=" aceclofenac"> aceclofenac </option>
<option value="aceclofenac combinations">aceclofenac combinations </option>
<option value="acenocoumarol">acenocoumarol</option>
<option value="aminophyilline">aminophyilline</option>
<option value="amoxicillin">amoxicillin</option>
<option value="amoxapine">amoxapine</option>
<option value="ampicillin">ampicillin</option>
<option value="Baclofen">Baclofen </option>
<option value=" balasalzide"> balasalzide </option>
<option value="bambuterol hydrochloride "> bambuterol hydrochloride </option>
<option value="benzocaine"> benzocaine</option>
<option value="bezydamine">bezydamine </option>
<option value="betahistune "> betahistune </option>
<option value="bisoprolol"> bisoprolol </option>
<option value="ciprofloxacin">ciprofloxacin </option>
<option value="chloroquine">chloroquine</option>
<option value="cisplatin "> cisplatin </option>
<option value="dentrolene">dentrolene</option>
<option value="digoxin">digoxin</option>
<option value="etodoloc">etodoloc</option>
<option value="etoposide"> etoposide </option>
<option value=" stanozolol"> stanozolol </option>
<option value="tirofiban"> tirofiban</option>

</select><br><br>
<u>Prescriber's</u><br><br>
first name<input type="text" name="pname" required>
last name<input type="text" name="lpname" required><br><br><br>
signature<input type="text" name="sign"placeholder="put your password"required><br><br><br>
Qualification<select name="qual"><br><br>
<option value="nurse"> nurse</option>
<option value="HO">HO</option>
<option value="general medicen professional">general medicen professional</option>
<option value="spacialist medicen professional"> spacialist medicen professional</option
</select>
Date<input type="date" name="date"required><br><br><br><br>
<input type="submit"name="submit"value="Order to dispansery"style="background-color:#803399;text-align:center;color:white;font-weight: bold;font-size: 20px;" >
</fieldset>

</body>
</html>