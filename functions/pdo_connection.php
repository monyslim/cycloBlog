<?php

$serverName = "mysql:3306";
$userName = "root";
$password = "password";

try {
  $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ);
  $pdo = new PDO("mysql:host=$serverName;dbname=blog_db", $userName, $password, $options);

//   $user->first_name
//   $user['first_name']

  // set the PDO error mode to exception
//   $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     return $pdo;

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}