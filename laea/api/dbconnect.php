<?php
$username='localhost';
$password='';
$con=mysqli_connect($username,"root",$password,"learn_earn");
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
  //echo "Connected successfully";