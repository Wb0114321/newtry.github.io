<?php
include 'db_connect.php';

$name = $_POST['name'];
$age = $_POST['age'];
$class = $_POST['class'];
$rollno = $_POST['rollno'];

$sql = "INSERT INTO students (name, age, class, rollno) 
        VALUES ('$name', '$age', '$class', '$rollno')";

if ($conn->query($sql) === TRUE) {
  echo "✅ Student added successfully.";
} else {
  echo "❌ Error: " . $conn->error;
}

$conn->close();
?>
