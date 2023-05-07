<?php include 'DBconnect.php'; ?>

<!-- get data and Load it in where you want  -->
<div class="getData">
  <?php
  $query = "SELECT * FROM users";
  $stmt = $db->prepare($query);
  $stmt->execute();
  $row = $stmt->fetchAll();


 foreach($row as $da){
   echo $da['username'] . "<br>";
   echo $da['email'] . "<br>";
   echo $da['password'] . "<br>" . "<hr>";
 }
?>
</div>
