<?php
include 'DBConnect.php';


$search = $_POST['search'];
echo $search;
// if you want to insert data
if(isset( $search )){
  $query = "SELECT * FROM users WHERE username LIKE '$search' ";
  $stmt = $db->prepare($query);
  $stmt->execute();

  $row  = $stmt->fetchAll();
   foreach($row as $data){
     echo $data['username'] . "=>" . $data['email'] . "=>" . $data['password'] . '@@<br>';
   }
}




// echo $_POST['username'];
// echo $_POST['email'];
// echo $_POST['password'];
