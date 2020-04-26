<?php
session_start();

	if (isset($_GET)) {

$host = "spardhagupta.uta.cloud";
$dbusername = "spardhag_gupta";
$dbpassword = "spardha2222";
$dbname = "spardhag_sayitright";

		$conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbusername, $dbpassword);

		if(!$conn){
		  die("Connection Failed");
		}

    // get all products
    $query = "SELECT * FROM events, userevents where events.id=userevents.eventId";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

  ?>

<!DOCTYPE html>
<html lang = "en">
<head>
<title> Created Events </Title>
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="SayItRight.css">
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
<div class="t">


<table id="fix" style="overflow-x:auto;">
  <caption>List Of My Events</caption>

<tr id="fix">
  <th id="fix">Conferences</th>
  <th id="fix">Description</th>
  <th id="fix">Date</th>
  <th id="fix">Sede</th>
  <th id="fix">Venue</th>
  <th id="fix">CONFIRMATION</th>
</tr>
<?php
$numProducts = count($rows, COUNT_NORMAL);
if ($numProducts > 0) {
  foreach ($rows as $row) {
    echo '<tr id="fix">';
    echo '<td id="fix">';echo $row["name"]; echo'</td>';
    echo '<td id="fix">'; echo $row["description"]; echo '</td>';
    echo '<td id="fix">';echo $row["date"]; echo'</td>';
    echo '<td id="fix">';echo $row["time"]; echo'</td>';
    echo '<td id="fix">';echo $row["venue"]; echo'</td>';
    echo '<form method="post" action="Event.controller.php">'; echo'</td>';
    echo '<input type="hidden" value="'.$row["id"].'" name="eventId">';
    echo '<td id="fix">';echo '<input id="message" type= "submit" value="REMOVE" name="Event_Remove">'; echo'</td>';
    echo '</form>';
    echo '</tr>';
  }
} else {
  echo "<div>No events found</div>";
}
?>
</form>
</table>
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
