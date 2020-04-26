<!DOCTYPE html>
<html lang = "en">
<head>
<title> Sign Up Individual</title>
<!-- <script type="text/javascript" src="IndividualSignUp.js"></script> -->
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
<div class="card3">
<form name="myForm" action="IndSignUp.controller.php" onsubmit="return validateForm()" method="post">
<h2> Select Type of User </h2>
<button id="button1" type= "button" onclick="window.location.href='IndividualSignUp.php'"> Individual </button>
<button id="button" type= "button" onclick="window.location.href='EventSignUp.php'"> Event </button>
<button id="button" type= "button" onclick="window.location.href='BusinessSignUp.php'"> Business </button>
<h4> Welcome To Individual Sign Up </h4>
<input id="log" name="placeOfWork" placeholder="Enter place of work" type="text"> <br>
<input id="log" name="school" placeholder="Enter your school name" type="text" required aria-required="true"> <br>
<input id="log" name="email" placeholder="Enter your email address" type="text" required aria-required="true">  <br>
<input id="log" name="password" placeholder="Set password" type="password" required aria-required="true"> <br>
<input id="log" name="firstName" placeholder="Enter your firstname" type="text" required aria-required="true"> <br>
<input id="log" name="lastName" placeholder="Enter your lastname" type="text" required aria-required="true"> <br>
<input id="button" type= "submit" value=" SEND">
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
