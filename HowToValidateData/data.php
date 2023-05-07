<?php
include 'DBConnect.php';


if(isset($_POST['username'])){

$username = $_POST['username'];
$email    = $_POST['email'];
$password = $_POST['password'];

// define error to not send undefined variabel error in ajax
$formError = [
  'usernameError' => '',
  'emailError' => '',
  'passwordError' => '',
];

if( empty($username)) {
  $formError['usernameError'] = 'username can not be empty';
}
if(empty($email)){
  $formError['emailError']    = 'email can not be empty';
}
if(empty($password)){
  $formError['passwordError'] = 'password can not be  empty';

  // send data json encode to ajax 
  echo json_encode($formError);
}

if(empty($formError)){
  $query = "INSERT INTO users (username, email, password) VALUES (?,?,?)";
  $stmt = $db->prepare($query);
  $stmt->execute([ $username, $email, $password]);
  echo 'data inserted';
}




}
