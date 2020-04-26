<!DOCTYPE html>
<html lang = "en">
<head>
<title> Contact Us </title>
<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
<!-- <script type="text/javascript" src="contactus.js"> </script> -->
<link rel="stylesheet" href="SayItRight.css">
</head>
<body>
<div class="wrapper">
<div class="nav">
<ul class="h">
<li><img src="Logo1.png" alt="Logo" height="70" width="140"></li>
<li id="home"><a href="#home" onclick="window.location.href='Home.html'">Home</a></li>
<li><a href="#AboutUs" onclick="window.location.href='AboutUs.html'">About Us</a></li>
<li><a href="#Blog">Blog</a></li>
<li><a href="#Products" onclick="window.location.href='Products.html'">Products</a></li>
<li><a href="#ContactUs" onclick="window.location.href='ContactUs.html'">Contact Us</a></li>
<li><a href="#SignUp" onclick="window.location.href='SignUp.html'">Sign Up</a></li>
<li><a href="#Login" onclick="window.location.href='Login.html'">Login</a></li>
</ul>
</div>
<div class="container">
<img width=100% src="home-banner.jpg" alt="Home Banner">
<div class="centered"><h1> <strong> CONTACT US </strong> </h1></div> <br>
</div>
<div class="f">
  <form name="contactus" method="post" onsubmit="return validateForm()" action="ContactUs.controller.php">
<div class="column">
<input id="txt" name="firstName" placeholder="Enter your firstname" type="text"> <br>
<input id="txt" name="lastName" placeholder="Enter your lastname" type="text"> <br>
<input id="txt" name="telephone" placeholder="Enter your telephone number" type= "text"/>
</div>
<div class="column">
<textarea id="ta1" name="message" rows="7" cols="30" placeholder="Enter message"></textarea> <br>
</div>
<input id="message" type= "submit" value= "SEND MESSAGE">
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
