<?php
    session_start();
    if(isset($_POST['save']))
    {
        extract($_POST);
        include 'database.php';
        $sql=mysqli_query($conn,"SELECT * FROM student_login where Student_Id='$stud_id' and Password='$pas'");
        $row  = mysqli_fetch_array($sql);
        if(is_array($row))
        {
            $_SESSION["SID"] = $row['Student_Id'];
            $_SESSION["student_id"]=$row['Student_Id'];
            header("Location: ../laes/index.php"); 
        }
        else
        {
            echo "<script>alert('Incorrect Password / Username !');window.location.href='./index.html';</script>";
        }
    }

?>