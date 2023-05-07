<?php

include 'DBConnect.php';
// if you want to insert data

  $query = "SELECT count(*) FROM users";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $row  = $stmt->fetch();
  echo $row[0];
