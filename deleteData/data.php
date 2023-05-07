<?php
include 'DBConnect.php';




// if you want to update data
if(isset( $_POST['email'] )){
  $query = "DELETE FROM users WHERE email = ?";
  $stmt = $db->prepare($query);
  if($stmt->execute( array($_POST['email']) )){
    echo 'data is deleted';
  }else{
    echo 'there is an error';
  }
}




// echo $_POST['username'];
// echo $_POST['email'];
// echo $_POST['password'];
