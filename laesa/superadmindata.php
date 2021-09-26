<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$servername = "remotemysql.com";
$username = "lO4zmJJqK1";
$password = "nXnAikIZGX";
$dbname = "lO4zmJJqK1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// mysqli_select_db($con,"ajax_demo");
// $sql="SELECT * FROM user WHERE id = '".$q."'";
// $result = mysqli_query($con,$sql);


$sql = "SELECT * FROM `student_details` WHERE Student_Id = '".$q."'";
$result = $conn->query($sql);


echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['Student_Id'] . "</td>";
  echo "<td>" . $row['Name'] . "</td>";
  echo "<td>" . $row['Bio'] . "</td>";
  echo "<td>" . $row['Email'] . "</td>";
  echo "<td>" . $row['Phone'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
</body>
</html>