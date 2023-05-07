<?php
include 'DBConnect.php';

$limit = $_POST['limit'];
$query = "SELECT * FROM users LIMIT $limit";
$stmt = $db->prepare($query);
$stmt->execute();
$row = $stmt->fetchAll();



foreach($row as $data){
  echo $data['username'] . "<==>" . $data['email'] . "<==>" . $data['password'] . "<br>";
}






// echo $_POST['username'];
// echo $_POST['email'];
// echo $_POST['password'];
