<?php
include 'DBConnect.php';



// if you want to insert data
if(isset( $_POST['username'] )){
  $query = "INSERT INTO users (username, email, password) VALUES (?,?,?)";
  $stmt = $db->prepare($query);
  $stmt->execute([$_POST['username'],$_POST['email'] , $_POST['password'] ]);
}

// if you want to update data
if(isset( $_POST['email'] )){
  $query = "UPDATE users SET username = ?, email = ?, password = ? WHERE email = ?";
  $stmt = $db->prepare($query);
  $stmt->execute([ $_POST['username'],$_POST['email'] , $_POST['password'] , $_POST['email'] ] );
}




// echo $_POST['username'];
// echo $_POST['email'];
// echo $_POST['password'];
