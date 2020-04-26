<?php
$host = "spardhagupta.uta.cloud";
$dbusername = "spardhag_gupta";
$dbpassword = "spardha2222";
$dbname = "spardhag_sayitright";

$conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbusername, $dbpassword);

if(!$conn){
  die("Connection Failed");
}
?>

<!DOCTYPE html>
<html lang = "en">
<head>
<title> Home Individual  </title>
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
<li><a href="#Profile" onclick="window.location.href='Profile.php'">Profile</a></li> 

</ul>
</div>
<div class="row1">
  <div class="column3">
    <div class="card6" style="background-color: #00bfff">
      <img src="globe.png" id="img1">
        <h4 id="label1"> <?php
							$query = 'SELECT count(*) from events';
							$stmt = $conn->prepare($query);
							$stmt->execute();
							$nRows = $stmt->fetchColumn();
							echo $nRows;
							?> </h4>
        <h5 id="label2"> Activities Performed </h5>
        <button id="button4" type="button" name="events" onclick="window.location.href='List_of_events.php'"> Total Activities </button>
      </div>
    </div>
    <div class="column3">
      <div class="card6" style="background-color:#ADFF2F">
        <img src="group.png" id="img1">
        <h4 id="label1"> <?php
							$query = 'SELECT count(*) from userevents';
							$stmt = $conn->prepare($query);
							$stmt->execute();
							$nRows = $stmt->fetchColumn();
							echo $nRows;
							?>  </h4>
        <h5 id="label2"> Activities Performed </h5>
        <button id="button4"  type="button" name="events" onclick="window.location.href='List_of_events.php'"> EVENTS </button>
      </div>
    </div>
    <div class="column3">
      <div class="card6" style="background-color: #ffdb58">
        <img src="star.png" id="img1">
          <h4 id="label1"> <?php
							$query = 'SELECT count(*) from userevents';
							$stmt = $conn->prepare($query);
							$stmt->execute();
							$nRows = $stmt->fetchColumn();
							echo $nRows;
							?>  </h4>
          <h5 id="label2"> Activities Performed </h5>
          <button id="button4" type="button" name="events" onclick="window.location.href='ListOfMyEvents.php'"> My EVENTS </button>
        </div>
      </div>
      <div class="column3">
        <div class="card6" style="background-color: #696969">
          <img src="trophy.png" id="img1">
            <h4 id="label1"> <?php
							$query = 'SELECT count(*) from userevents';
							$stmt = $conn->prepare($query);
							$stmt->execute();
							$nRows = $stmt->fetchColumn();
							echo $nRows;
							?>  </h4>
            <h5 id="label2"> Activities To Carry </h5>
            <button id="button4" type="button" name="events" onclick="window.location.href='ListOfMyEvents.php'"> My Activities </button>
          </div>
        </div>
        <div class="column3">
          <div class="card6" style="background-color: #00bfff">
  <button id="button5" type="button" name="header" onclick="window.location.href='List_of_events.php'"> Meetup </button>
<p id="label3"> Event </p>
  <p id="label3"> Please come and join us </p>
</div>
</div>
  <div class="column3">
    <div class="card6" style="background-color: #696969">
<button id="button5" type="button" name="header" onclick="window.location.href='List_of_events.php'"> Hello </button>
<p id="label3"> Hello </p>
<p id="label3"> Wonderful idea </p>
</div>
</div>
<div class="column3">
  <div class="card6" style="background-color: #ADFF2F">
<button id="button5" type="button" name="header" onclick="window.location.href='List_of_events.php'"> Get Together </button>
<p id="label3"> Get Together </p>
<p id="label3"> Wonderful event </p>
</div>
</div>
<div class="column3">
  <div class="card6" style="background-color: #DC143C">
<button id="button5" type="button" name="header" onclick="window.location.href='List_of_events.php'"> event</button>
<p id="label3"> event </p>
<p id="label3"> hello all welcome  </p>
</div>
</div>
<div class="column3">
  <div class="card6" style="background-color: #ffdb58">
<button id="button5" type="button" name="header"onclick="window.location.href='List_of_events.php'"> Get Together </button>
<p id="label3"> Get Together </p>
<p id="label3"> Wonderful Event</p>
</div>
</div>
<div class="column3">
  <div class="card6" style="background-color: #2E8B57">
<button id="button5" type="button" name="header"onclick="window.location.href='List_of_events.php'"> Office meeting </button>
<p id="label3"> mandatory </p>
<p id="label3"> meetup important</p>

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
