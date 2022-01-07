<?php
$dbservername = "localhost";
$dbusername = "cse102fall2021";
$dbpassword = "fall2021cse102";
$dbname = "cse102fall2021";

// Create connection
$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Database Connected Successfully";
?>