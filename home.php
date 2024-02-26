<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="style2.css" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>
pharmacy information system-home
</title>
<style type="text/css">
#clock {
width: 900px;
text-align: center;
font-size: 120px;
margin-top: 50px;

}
</style>
</head>

<body>

<header> 
<span class="logo"> <img src="logo.jpg"></span>
<span class="logo"><img src="hom.png"></span>
<span class="logo"> <img src="ppppph.jpg"style="margin-left: -37px;"></span>
</header>

<div class="menu">
<ul>
  <li class="active"><a href="#">Home</a>
  
 <ul><li><a href="#">GenerateReport<a></li>
  <li><a href="changepassword.php">Change Passw<a></li>
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
  <li><a href="logindetail.php">login detail<a></li>
  </ul></li>
</ul>
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

</body>


</html>