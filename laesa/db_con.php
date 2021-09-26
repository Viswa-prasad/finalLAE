<?php
$servername = "remotemysql.com";
$username = "lO4zmJJqK1";
$password = "nXnAikIZGX";
$dbname = "lO4zmJJqK1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO `super_admin`(`username`, `password`) VALUES ('viswa','prasad')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>