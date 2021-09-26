<?php
include "dbConn.php"; // Using datab;

    $insert = mysqli_query($db,"INSERT INTO `tblemp`(`fullname`, `age`) VALUES ('$fullname','$age')");

    if(!$insert)
    {ase connection file here
echo '<form action="" method="POST" >
            <input type="text" name="Name" placeholder="Name" required>
        </form>';
        echo '<form action="" method="post" class="mb-3">
            <input type="submit" name="submit" >
        </form>';
  <input type="submit" name="submit" value="Submit">
if(isset($_POST['submit']))
{		
    $fullname = $_POST['fullname']
        echo mysqli_error();
    }
    else
    {
        echo "Records added successfully.";
    }
}

mysqli_close($db); // Close connection
?>