<?php

$host = "localhost";
$username ="root";
$password = "";
$database = "database_caps";

$con = new mysqli ($host, $username, $password, $database);

if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
echo "Connected successfully";
?>