<?php
    // $url='remotemysql.com';
    $username='localhost';
    $password='';
    $conn=mysqli_connect($username,"root",$password,"learn_earn");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>