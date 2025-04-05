<?php
$servername = "mysql203.infinityfree.com";
$username = "if0_38679130";
$password = "XSOiOzYBxN";
$dbname = "if0_38679130_ghanshyamstore";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
