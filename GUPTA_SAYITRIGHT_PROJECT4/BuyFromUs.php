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
	}

  ?>

<!Doctype html>
<html lang = "en">
 <head>
   <title> Buy From Us </title>
   <script type="text/javascript" src="BuyFromUs.js"></script>
   <link rel="stylesheet" href="SayItRight.css">
   <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
 </head>
  <body>
    <div class="wrapper">
    <div class="topnav">
    <ul class="h">
    <li><img src="Logo.jpg" alt="Logo"></li>
    <li id="home"><a href="#home" onclick="window.location.href='Home.php'">Home</a></li>
    <li><a href="#AboutUs" onclick="window.location.href='AboutUs.php'">About Us</a></li>
    <li><a href="#Blog">Blog</a></li>
    <li><a href="#Purchase" onclick="window.location.href='Purchase.php'">Purchase</a></li>
    <li><a href="#ContactUs" onclick="window.location.href='ContactUs.php'">Contact Us</a></li>
    <li><a href="#SignUp" onclick="window.location.href='SignUp.php'">Sign Up</a></li>
    <li><a href="#Login" onclick="window.location.href='Login.php'">Login</a></li>
    </ul>
    </div>
    <center><h1> Buy From Us </h1></center>
  <div class="card7">
  <div class="f">
  <div class="buyfrus column1">
  <form name="myForm" action="BuyFromUs.controller.php" onsubmit="return validateForm()" method="post">
    <h2 id="bfu"> Contact Information </h2>
    <input id="txtcu" name="email" placeholder="Enter Email" type="email" required aria-required="true">
    <h2 id="bfu"> Shipping Address </h2>
    <input id="txtcu" name="firstname" placeholder="Enter your firstname" type="text" required aria-required="true"> <br>
    <input id="txtcu" name="lastname" placeholder="Enter your lastname" type="text" required aria-required="true"> <br>
    <input id="txtcu" name="address" placeholder="Enter Address" type="text" required aria-required="true"> <br>
    <input id="txtcu" name="apartment" placeholder="Enter Apartment, Suite etc." type="text" required aria-required="true"> <br>
    <input id="txtcu" name="city" placeholder="Enter City" type="text" > <br>
    <select id="txtcu" name="language" required aria-required="true">
      <option value="English">English</option>
      <option value="French">French</option>
      <option value="Spanish">Spanish</option>
    </select> <br>
    <input id="txtcu" name="postalcode" placeholder="Enter Postal Code" type="number" required aria-required="true"> <br>
    <input id="message" type= "submit" value= "Submit">
  </form>
  </div>

  <div class="orderdetails column1">
    <table id="bfu" style="overflow-x:auto;">
    <tr id="bfu">
      <th id="bfu">ID</th>
      <th id="bfu">Name</th>
      <th id="bfu">Units</th>
      <th id="bfu">Price</th>
    </tr>
    <?php

      $totalamt=0;
      foreach ($_SESSION['cart'] as $productId=>$quantity) {

        $query = "SELECT * FROM products where id=$productId";
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        echo '<tr id="bfu">';
        echo '<td id="bfu">';echo'<img src="'.$row['imageUrl'].'" height="100" width="100">';echo'</td>';
        echo '<td id="bfu">';echo $row["name"]; echo '</td>';
        echo '<td id="bfu">';echo $quantity; echo'</td>';
        echo '<td id="bfu">';echo $row["price"]; echo'</td>';
        echo '</tr>';
        $totalamt+=$quantity*$row["price"];

      }

    ?>

    <tr id="bfu">
      <td id="bfu">Total</td>
      <td id="bfu"></td>
      <td id="bfu">USD</td>
      <td id="bfu"><?php echo $totalamt ?>;</td>
    </tr>
  </table>
  </div>
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
