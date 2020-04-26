<!DOCTYPE html>
<html lang = "en">
<head>
<title> Login </title>
<script type="text/javascript" src="Login.js"></script>
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
<div class="centered"><h1> <strong> LOGIN </strong> </h1></div> <br>
</div>
<div class="card1">
<form name="myForm" action="login.controller.php" onsubmit="return validateForm()" method="post">
<h2> <font-color: black> LOGIN </h2>
<input id="log" name="email" placeholder="Enter your email address" type="email" required>  <br>
<input id="log" name="password" placeholder="Enter password" type="password" required> <br>
<input id="button" type= "submit" value= "LOGIN" name="login-submit">
</form>
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
