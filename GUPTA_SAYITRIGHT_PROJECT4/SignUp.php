<!DOCTYPE html>
<html lang = "en">
<head>
<title> Sign Up </title>
<script type="text/javascript" src="sayitright.js"></script>
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
<div class="container">
<img width=100% src="home-banner.jpg" alt="Home Banner">
<div class="centered"><h1> <strong> Sign Up </strong> </h1></div> <br>
</div>
<form>
  <!-- sign up card  -->
<div class="card1">
<h2> <font color="black"> Select Type of User </h2>
<button id="button" type= "button" onclick="window.location.href='IndividualSignUp.php'"> Individual </button>
<button id="button" type= "button" onclick="window.location.href='EventSignUp.php'"> Event </button>
<button id="button" type= "button" onclick="window.location.href='BusinessSignUp.php'"> Business </button>
</div>
</form>
<div class="footer">
  <footer>
    <hr>
  <p> Copyright&COPY; 2019 All rights reserved This web is made with &hearts; by <font color='cyan'>DIAZAPPS</font> </p>
  </footer>
</div>
</div>
</body>
</html>
