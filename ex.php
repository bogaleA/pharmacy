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
if(isset($_POST['subm'])){
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
	$dosagf=$_POST['dosag'];
	$dosag=$_POST['dos'];
	$dura=$_POST['dura'];
	$frequ=$_POST['frq'];
	$quntiy=$_POST['quntiy'];
$result=mysqli_query($conn,"INSERT INTO prescrib (MRN, pfname, psname, age, gender, Phonenumber, kebele, wereda,
 zone, diagnosis, namedrug, fname, lname, qualifcation, sign, date, strength, dosageForm, dosag, duration, frequancy, quantity)
 VALUES ('$mrn','$pfname','$psname','$age','$gender','$phonum','$kebele','$wereda',
 '$zone','$diagno','$ndrug','$fname','$lname','$quali','$sign','$date','$strg','$dosagf','$dosag','$dura','$frequ','$quntiy')");

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