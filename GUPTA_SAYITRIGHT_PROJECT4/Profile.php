<?php
session_start();

	if (isset($_GET)) {

		// check if logged in
		$email = $_SESSION['email'];
		if ($email == null) {
			header("Location: login.php?error=auth");
			exit();
		}
$host = "spardhagupta.uta.cloud";
$dbusername = "spardhag_gupta";
$dbpassword = "spardha2222";
$dbname = "spardhag_sayitright";

		$conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbusername, $dbpassword);

		if(!$conn){
		  die("Connection Failed");
		}


		// fetch user details
		$query = "SELECT * FROM users join roles on users.roleId = roles.id where email = :email";
		$stmt = $conn->prepare($query);
		$stmt->execute(array(':email' => $email));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
	}
?>

<!DOCTYPE html>
<html lang = "en">
<head>
<title> Profile </title>
<script type="text/javascript" src="Profile.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="SayItRight.css">
<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
<div class="wrapper">
<div class="topnav">
<ul class="h">
<li><img src="Logo1.png" alt="Logo" height="70" width="140"></li>
<li id="home"><a href="#home" onclick="window.location.href='Home.php'">Home</a></li>
<li><a href="#AboutUs" onclick="window.location.href='AboutUs.php'">About Us</a></li>
<li><a href="#Blog">Blog</a></li>
<li><a href="#Purchase" onclick="window.location.href='Purchase.php'">Purchase</a></li>
<li><a href="#ContactUs" onclick="window.location.href='ContactUs.php'">Contact Us</a></li>
<li><a href="#SignUp" onclick="window.location.href='SignUp.php'">Sign Up</a></li>
<li><a href="#Login" onclick="window.location.href='Login.php'">Login</a></li>
</ul>
</div>
<div class="card8">
<div class="f">
    <form name="myForm" action="profile.controller.php" onsubmit="return validateForm()" method="post">
  <center><h1> Welcome to your profile </h1></center>
  <hr><br>
<div class="column">
 <img src = user.jpg height="300px" width="300px">
 <input id="message2" type= "submit" value= "SEND MESSAGE" >
</div>

<div class="column">
  <input id="txtcu" name="firstName" placeholder="Enter your firstname" type="text" value="<?php echo $row['firstName']; ?>"> <br>
  <input id="txtcu" name="lastName" placeholder="Enter your lastname" type="text" value="<?php echo $row['lastName']; ?>"> <br>
  <input id="txtcu" name="placeOfWork" placeholder="Enter place work" type= "text" value="<?php echo $row['placeOfWork']; ?>"><br>
  <input id="txtcu" name="school" placeholder="Enter School" type="text" value="<?php echo $row['school']; ?>"> <br>
  <input id="txtcu" name="email" placeholder="Enter Email" type="email" value="<?php echo $row['email']; ?>"> <br>
  <input id="txtcu" name="password" placeholder="Enter Password" type= "password" value="<?php echo $row['password']; ?>">
  <p>Change Password</p>
  </div>
<input id="message" type= "submit" value= "SEND MESSAGE">
</form>
</div>
</div>

<div class="footer">
<footer>
  <hr>
<p> Copyright&COPY; 2019 All rights reserved This web is made with &hearts; by <font color='cyan'>DIAZAPPS</font> </p>
</footer>
</div>
</div>
</body>
</html>
