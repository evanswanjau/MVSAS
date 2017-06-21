<?php
  //Creating database connection
  $servername = 'localhost';
  $user = 'root';
  $password = '';
  $dbname = "mvsas";

  // Create connection
  $conn = new mysqli($servername, $user, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 ?>
