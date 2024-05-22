<?php

include("connection.php");

// Database connection and data retrieval logic (replace with your actual logic)
$conn = new mysqli("localhost", "username", "password", "database_name");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $data[] = $row; // Add each row of data to the array
  }
}

$conn->close();

echo json_encode($data); // Convert data to JSON for sending back to JavaScript
?>
