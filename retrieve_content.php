<?php
// Create a database connection
$servername = "localhost";
$username = "root";
$password = "V@nsh1893";
$dbname = "create_table";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve content from the database
$sql = "SELECT * FROM employee_hours";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    // Display each row of content in a table row
    echo "<tr>";
    echo "<td>" . $row["employee_name"] . "</td>";
    echo "<td>" . $row["hours_worked"] . "</td>";
    echo "</tr>";
  }
} else {
  echo "No content available";
}

$conn->close();
?>
