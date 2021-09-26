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

$sql = "SELECT * FROM `Student_details`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo 
  }
} else {
  echo "0 results";
}
$conn->close();
?>