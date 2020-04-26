<!DOCTYPE html>
<html lang = "en">
<head>
<title> HOME </title>
<link rel="stylesheet" href="SayItRight.css">
<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
<div class="wrapper">
<div class="nav">
<ul class="h">
<li><img src="Logo1.png" alt="Logo" height="70" width="140"></li>
<li id="home"><a href="#home" onclick="window.location.href='Home.php'">Home</a></li>
<li><a href="#AboutUs" onclick="window.location.href='AboutUs.php'">About Us</a></li>
<li><a href="#Blog">Blog</a></li>
<li><a href="#Products" onclick="window.location.href='Purchase.php'">Products</a></li>
<li><a href="#ContactUs" onclick="window.location.href='ContactUs.php'">Contact Us</a></li>
<li><a href="#SignUp" onclick="window.location.href='SignUp.php'">Sign Up</a></li>
<li><a href="#Login" onclick="window.location.href='Login.php'">Login</a></li>
</ul>
</div>
<?php
session_start();
?>
<div class="container">
<img width=100% height="700px" src="home-banner.jpg" alt="Home Banner">
<img id="mobile" src="mobile.png">
<p id="paragraph"> <strong> For good <br/> communication <br/> <font color='red'>SayItRight</font>  is </br>  a tool that </br> you should use </strong> </p>
</div>
<div class="card4">
  <h3> Subscribe Our News Letter </h3>
  <p id="description"> You can see the products you added to the cart </p>
  <input id="shop" type="submit" value=" SUBSCRIBE" onclick="window.location.href='ShoppingCart.php'">
</div>
<div class="footer1">
  <footer>
    <hr>
  <p> Copyright&COPY; 2019 All rights reserved This web is made with &hearts; by <font color='cyan'>DIAZAPPS</font> </p>
  </footer>
</div>
</div>
</body>
</html>
