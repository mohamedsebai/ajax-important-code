<?php

$dsn   = "mysql:host=localhost;dbname=ajaxdata";
$user   = 'root';
$pass   = '';
$options = array(
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
);
try{
  $db = new PDO($dsn,$user,$pass,$options);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $db;
}
catch(PDOException $e){
 echo 'not connecting' . $e->getMessage();
}
