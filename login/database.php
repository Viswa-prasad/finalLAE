<?php
    $url='remotemysql.com';
    $username='lO4zmJJqK1';
    $password='nXnAikIZGX';
    $conn=mysqli_connect($url,$username,$password,"lO4zmJJqK1");
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>