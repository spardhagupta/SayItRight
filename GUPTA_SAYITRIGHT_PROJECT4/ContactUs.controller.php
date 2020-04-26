<?php

 $telephone = filter_input(INPUT_POST, 'telephone');
 $message = filter_input(INPUT_POST, 'message');
 $firstName = filter_input(INPUT_POST, 'firstName');
 $lastName = filter_input(INPUT_POST, 'lastName');

 if (!empty($firstName)){
 if (!empty($lastName)){
       if (!empty($telephone)){
         if (!empty($message)){
$host = "spardhagupta.uta.cloud";
$dbusername = "spardhag_gupta";
$dbpassword = "spardha2222";
$dbname = "spardhag_sayitright";


// Create connection

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO feedback (firstName, lastName, telephone, message)
values ('$firstName','$lastName','$telephone','$message')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Message should not be empty";
die();
}
}
else{
echo "Telephone Number should not be empty";
die();
}
}
else{
echo "LastName should not be empty";
die();
}
}
else{
echo "FirstName should not be empty";
die();
}


?>
