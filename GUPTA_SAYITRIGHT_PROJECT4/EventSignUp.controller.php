<?php

 $email = filter_input(INPUT_POST, 'email');
 $password = filter_input(INPUT_POST, 'password');
 $firstName = filter_input(INPUT_POST, 'firstName');
 $lastName = filter_input(INPUT_POST, 'lastName');

 if (!empty($email)){
 if (!empty($password)){
       if (!empty($firstName)){
         if (!empty($lastName)){
$host = "spardhagupta.uta.cloud";
$dbusername = "spardhag_gupta";
$dbpassword = "spardha2222";
$dbname = "spardhag_sayitright";


// Create connection

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') ');
}
else{
$sql = "INSERT INTO users (email, password, firstName, lastName, roleId, placeOfWork, school)
values ('$email','$password','$firstName','$lastName',2,'','')";
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
echo "LastName should not be empty";
die();
}
}
else{
echo "FirstName should not be empty";
die();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Email should not be empty";
die();
}


?>
