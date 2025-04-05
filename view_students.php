<?php
include 'db_connect.php';

$result = $conn->query("SELECT * FROM students");

echo "<h2>Student List</h2>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Name</th><th>Age</th><th>Class</th><th>Roll No</th></tr>";

while ($row = $result->fetch_assoc()) {
  echo "<tr>
          <td>{$row['name']}</td>
          <td>{$row['age']}</td>
          <td>{$row['class']}</td>
          <td>{$row['rollno']}</td>
        </tr>";
}
echo "</table>";

$conn->close();
?>
