<?php

$servername = "localhost";
$username = "root";
$password = "admin";



try {
    $conn = new PDO("mysql:host=$servername;dbname=pasta", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $error) {
    echo "Connection failed: " . $error->getMessage();
  }