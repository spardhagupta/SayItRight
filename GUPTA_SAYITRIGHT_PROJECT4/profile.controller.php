<?php

$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$placeOfWork = filter_input(INPUT_POST, 'placeOfWork');
$school = filter_input(INPUT_POST, 'school');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

if(!empty($firstname)){
   if(!empty($lastname)){
     if(!empty($lastname)){
       if(!empty($lastname)){
         if(!empty($lastname)){
           if(!empty($lastname)){
require 'config.php';
else{
  $sql = "SELECT * FROM users join roles on users.roleId = roles.id where email = :email, password = :password, placeOfWork = :placeOfWork, school = :school, email = :email, password = :password";
  $stmt = $conn->prepare($sql);
  $stmt->execute(array(':email' => $email, ':password' => $password, ':placeOfWork' => $placeOfWork, ':school' => $school, ':email' => $email, ':password' => $password));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

}
     }
     else {
       echo "password field should not be empty";
       die();
     }
   }
   else {
     echo "password field should not be empty";
     die();
 }
}
else {
  echo "password field should not be empty";
  die();
}
   }
   else {
     echo "password field should not be empty";
     die();
 }

}
else {
  echo "password field should not be empty";
  die();
}
}
else {
  echo "password field should not be empty";
  die();
}
?>
