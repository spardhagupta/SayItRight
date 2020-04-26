<?php
$host = "spardhagupta.uta.cloud";
$dbusername = "spardhag_gupta";
$dbpassword = "spardha2222";
$dbname = "spardhag_sayitright";

$conn = new PDO('mysql:host='.$host.';dbname'.$dbname, $dbusername, $dbpassword);

if(!$conn){
  die("Connection Failed");
}
?>
