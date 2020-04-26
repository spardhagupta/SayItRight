<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<title> Home   </title>
<script type="text/javascript" src="Home_EventandConference.js"></script>
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
<li><a href="#Login" onclick="window.location.href='Profile.php'">Profile</a></li>
</ul>
</div>
<input id="button2" type= "submit" value="VIEW EVENTS" onclick="window.location.href='CreatedEvent.php'" >
<input id="button2" type= "submit" value="VIEW CONFERENCES" onclick="window.location.href='CreatedConferences.php'">
<h2 id="label4"> Create Event or Conference </h2>
<div class="card5">
<form name="myForm" action="Home_EventandConf_controller.php" onsubmit="return validateForm()" method="post">
<h4> Select Type
<input type="radio" name="Business" checked> Event
<input type="radio" name="Business"> Conference  </h4>
<input id="log" name="name" placeholder="Enter Name" type="text" required aria-required="true">
<input id="log" name="venue" placeholder="Enter Location" type="text" required aria-required="true">
<input id="log" name="date" type="date" required aria-required="true">
<input id="log" name="time" type="time" required aria-required="true">
<textarea id="textarea" name="description" rows="10" cols="30" placeholder="Enter description" required aria-required="true" minlength="10" maxlength="30"></textarea> <br>
<input id="add" type= "submit" value="CREATE">
</div>
<div class="footer">
  <footer>
    <hr>
  <p> Copyright&COPY; 2019 All rights reserved This web is made with &hearts; by <font color='cyan'>DIAZAPPS</font> </p>
  </footer>
</div>
</form>
</div>
</div>
</body>
</html>
