<?php

$server = 'bnffgj0smkwdchne3ytj-mysql.services.clever-cloud.com';
$username = 'uulco5uir0vim0n6';
$password = '0cwuiVUax2YMu4KJ42YF';
$database = 'bnffgj0smkwdchne3ytj';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  echo "fallo conexion";
  die('Connection Failed: ' . $e->getMessage());
}

?>
