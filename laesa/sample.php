<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "learn_earn";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Super Admin - Learn And Earn</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>



  <!-- ======= NAVIGATION ======= -->
<body>
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>Learn And Earn</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li class="drop-down"><a href="">About</a>
            <ul>
              <li><a href="#about">About Us</a></li>
              <li><a href="#team">Team</a></li>
              <li><a href="#testimonials">Testimonials</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#pricing">Pricing</a></li>

          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>

    </div>
  </header>





  <!-- ======= NAVIGATION ENDS ======= -->



  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">

 <!--      <div class="row"> -->
        <div class="section-title" data-aos="fade-up">
          <div>
           <div class="container">
<?php
  $q = $_GET['v'];
    switch ($q) 
      {
        case 1:?>
           <!DOCTYPE html>
            <html>
            <head>
            <style>
            table 
            {
              width: 100%;
              border-collapse: collapse;
            }



            table, td, th 
            {
              border: 1px solid black;
              padding: 5px;
            }

            th {text-align: left;}
            </style>
            </head>
            <body>

          <?php
          
          $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM `student_details`";
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
          </html><?php
              break;
            case 2:
              ?>
           <!DOCTYPE html>
            <html>
            <head>
            <style>
            /*table 
            {
              width: 100%;
              border-collapse: collapse;
            }

            table, td, th 
            {
              border: 1px solid black;
              padding: 5px;
            }

            th {text-align: left;}*/
              @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700');

$base-spacing-unit: 24px;
$half-spacing-unit: $base-spacing-unit / 2;

$color-alpha: #1772FF;
$color-form-highlight: #EEEEEE;

*, *:before, *:after {
  box-sizing:border-box;
}


body {
  padding:$base-spacing-unit;
  font-family:'Source Sans Pro', sans-serif;
  margin:0;
}

h1,h2,h3,h4,h5,h6 {
  margin:0;
}

conr {
  max-width: 1000px;
  margin-right:auto;
  margin-left:auto;
  display:flex;
  justify-content:center;
  align-items:center;
  min-height:100vh;
}

table {
  width:100%;
  border:1px solid $color-form-highlight;
}

table-header {
  display:flex;
  width:100%;
  background:#000;
  padding:($half-spacing-unit * 1.5) 0;
}

table-row {
  display:flex;
  width:100%;
  padding:($half-spacing-unit * 1.5) 0;
  
  &:nth-of-type(odd) {
    background:$color-form-highlight;
  }
}

table-data, header__item {
  flex: 1 1 20%;
  text-align:center;
}

header__item {
  text-transform:uppercase;
}

filter__link {
  color:white;
  text-decoration: none;
  position:relative;
  display:inline-block;
  padding-left:$base-spacing-unit;
  padding-right:$base-spacing-unit;
  
  &::after {
    content:'';
    position:absolute;
    right:-($half-spacing-unit * 1.5);
    color:white;
    font-size:$half-spacing-unit;
    top: 50%;
    transform: translateY(-50%);
  }
  
  &.desc::after {
    content: '(desc)';
  }

  &.asc::after {
    content: '(asc)';
  }
  
}

            </style>
            </head>
            <body>

          <?php
          
          $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM `admin_details`";
          $result = $conn->query($sql);

          echo "<table-header><table>
          
          <header>Firstname</th>
          <th>Lastname</th>
          <th>Age</th>
          <th>Hometown</th>
          <th>Job</th>
          </tr></table-header>";


          while($row = mysqli_fetch_array($result)) {
            echo "<table-row>" . $row['Admin_Id'] . "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Bio'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['Phone'] . "</td>";
            echo "<td>" . $row['Qualifications'] . "</td>";
            echo "</tr>";
          }
          echo "</table>";

          mysqli_close($conn);
          ?>
          </body>
          </html><?php
              break;
 
      case 3:?>
           <!DOCTYPE html>
            <html>
            <head>
            <style>
            table 
            {
              width: 100%;
              border-collapse: collapse;
            }

            table, td, th 
            {
              border: 1px solid black;
              padding: 5px;
            }

            th {text-align: left;}
            </style>
            </head>
            <body>

          <?php
          
          $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }

          $sql = "SELECT * FROM `tasks`";
          $result = $conn->query($sql);

          echo "<table>
          <tr>
          <th>Task Id</th>
          <th>Mentor Id</th>
          <th>Student ID</th>
          <th>Task Question</th>
          <th>Task Result</th>
          <th>Task Status</th>
          <th>Submission file</th>
          <th>Due timestamp</th>
          <th>Submission date timestamp</th>
          <th>Marks</th>
          <th>Comments</th>
          </tr>";
          while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['Task_id'] . "</td>";
            echo "<td>" . $row['mentor_id'] . "</td>";
            echo "<td>" . $row['Student_id'] . "</td>";
            echo "<td>" . $row['Task_Question'] . "</td>";
            echo "<td>" . $row['Task_Result'] . "</td>";
            echo "<td>" . $row['Task_Status'] . "</td>";
            echo "<td>" . $row['Submission_file'] . "</td>";
            echo "<td>" . $row['Due_Timestamp'] . "</td>";
            echo "<td>" . $row['Submission_date_timestamp'] . "</td>";
            echo "<td>" . $row['Marks'] . "</td>";
            echo "<td>" . $row['Comment'] . "</td>";
            
            echo "</tr>";
          }
          echo "</table>";

          mysqli_close($conn);
          ?>
          </body>
          </html>
          <?php
              break;    
/*case 4:?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<!--<form action="" method="post" class="mb-3">
  <input type="submit" name="Student" >
  <input type="submit" name="Admin" >
</form>-->
<button onclick="my_funciton()">Click Me</button>
  <?php
  // $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
  if(isset($_POST['Student'])){
             echo '<form action="" method="post" class="mb-3">
            <input type="text" name="Name" placeholder="Name" required>
<input type="Email" name="Email" placeholder="email" required>
        </form>';
        echo '<form action="" method="post" class="mb-3">
            <input type="submit" name="submit" >
        </form>';
        $Name=filter_input(INPUT_POST,'Name');
        $Email=filter_input(INPUT_POST,'Email');
        if(isset($_POST['submit'])){
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sql = "INSERT INTO student_details (Name,Email) values ($Name,$Email)";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ";
}
}
}
if(isset($_POST['Admin']))
{
  echo '<form action="" method="post" class="mb-3">
            <input type="text" name="Name" placeholder="Name" required>
<input type="Email" name="Email" placeholder="email" required>
        </form>';
        echo '<form action="" method="post" class="mb-3">
            <input type="submit" name="sub" >
        </form>';
         $Name=filter_input(INPUT_POST,'Name');
        $Email=filter_input(INPUT_POST,'Email');
        if(isset($_POST['submit'])){
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sql = "INSERT INTO student_details (Name,Email) values ($Name,$Email)";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ";
}
}
}
?>

</body>
</html>*/
/*case 4:?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action ="" method="post">
    <input type="submit" name="student" value="student">
    <input type="submit" name="admin" value="admin" >

<?php

    //if(isset($_POST['student'])){
      //$conn = mysqli_connect("localhost","root","","learn_earn");
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
      echo "The student function is called.";
      ?>
      <form action="new.php" method="POST" class="mb-3">
        <input type="number" name="Name" placeholder="Name" required>
        <input type="Email" name="Email" placeholder="email" required>
        <input type="submit" name="submit" >
      </form>
      <p> hi I worked </p>
        <?php
       // if(isset($_POST['submit'])){
          $name = $_POST['Name'];
          $pass = $_POST['Email'];
          echo $name;
          echo $pass;
      $sql = "INSERT INTO student_login(Student_Id, Password) VALUES ($name,$pass)";
      $result = mysqli_query($conn,$sql);
 if ($result) {
  echo "New record created successfully";
}
else
{
  echo mysqli_error($conn);
}

//}
    //}
    if(isset($_POST['admin'])){
        echo "The admin function is called.";
      $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        echo '<form action="" method="post" class="mb-3">
            <input type="text" name="Name" placeholder="Name" required>
<input type="Email" name="Email" placeholder="email" required>
        </form>';
        echo '<form action="" method="post" class="mb-3">
            <input type="submit" name="submit" >
        </form>';
        $Name=filter_input(INPUT_POST,'Name');
        $Email=filter_input(INPUT_POST,'Email');
        if(isset($_POST['submit'])){

$sql = "INSERT INTO admin_details (Name,Email) values ($Name,$Email)";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ";
}
}
    }
?>
</form>
</body>
</html>
        <?php
        break;*/
      case 4:?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action ="" method="post">
    <input type="submit" name="student" value="student">
    <input type="submit" name="admin" value="admin" >

<?php

    //if(isset($_POST['student']))
      $conn = mysqli_connect("localhost","root","","learn_earn");
      echo "The student function is called.";
      ?>
      <form action="" method="POST" class="mb-3">
        <input type="number" name="Name" placeholder="Name" required>
        <input type="text" name="Email" placeholder="text" required>
        <input type="submit" name="submit" >
      </form>
      <p> hi I worked </p>
      <?php
       if(isset($_POST['submit']))
       {
      $name = $_POST['Name'];
      $pass = $_POST['Email'];
      echo $name;
      echo $pass;
      $sql = "INSERT INTO student_login(Student_Id,Password) VALUES('$name','$pass')";
      $result = $conn->query($sql);
      if ($result) 
       {
        echo "New record created successfully";
       }
      else
       {
         echo mysqli_error($conn);
       }
}

    if(isset($_POST['admin'])){
        echo "The admin function is called.";
      $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        echo '<form action="" method="post" class="mb-3">
            <input type="text" name="Name" placeholder="Name" required>
<input type="Email" name="Email" placeholder="email" required>
        </form>';
        echo '<form action="" method="post" class="mb-3">
            <input type="submit" name="submit" >
        </form>';
        $Name=filter_input(INPUT_POST,'Name');
        $Email=filter_input(INPUT_POST,'Email');
        if(isset($_POST['submit'])){

$sql = "INSERT INTO admin_details (Name,Email) values ($Name,$Email)";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ";
}
}
    }
?>
</form>
</body>
</html>
        <?php
        break;
case 5:?>
  <!DOCTYPE html>
<html>
<head>
  <title>Add Records in Database</title>
</head>
<body>



   <form action="" method="post" class="mb-3">
  Student Id
  <select name="ID[]" >
    <option disabled selected>-- Select StudentId --</option>
    <?php
        include "dbconn1.php";  
        $records = mysqli_query($db, "SELECT Student_Id From student_details"); 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['Student_Id'] ."'>" .$data['Student_Id'] ."</option>"; 
        } 

    ?>  
  
  <?php
   $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
  ?>

             <form action="" method="post" class="mb-3">
            <input type="text" name="comments" placeholder="comments" required>
            <input type="submit" name="submit" >
        </form>
        <?php
        if(isset($_POST['submit'])){
          foreach($_POST['ID'] as $selected){
            echo 'U Selected' . $selected;
            $comments=filter_input(INPUT_POST,'comments');

$sql ="UPDATE student_details SET comments='$comments' WHERE Student_Id ='$selected'";
             $result = $conn->query($sql);
      if ($result) 
       {
        echo "New record created successfully";
       }
      else
       {
         echo mysqli_error($conn);
       }

          }          
        } 
      
    ?>
<?php mysqli_close($db);  // close connection ?>
</select>
</form>
</body>
</html>
<?php
              break;

case 6:?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
   <form action="" method="post" class="mb-3">
  Student Id
  <select name="ID[]" >
    <option disabled selected>-- Select StudentId --</option>
    


    <?php
     include "dbconn1.php";  
        $records = mysqli_query($db, "SELECT Student_id From tasks"); 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['Student_id'] ."'>" .$data['Student_id'] ."</option>"; 
        }
?>

<input type="number" name="Marks" placeholder="Marks">
<input type="submit" name="submit">
<?php

      
  if(isset($_POST['submit'])){
    
    foreach($_POST['ID'] as $selected){
      //echo 'U Selected' . $selected;
      $Marks = $_POST['Marks'];
      //echo $Marks;
      
             $sql ="UPDATE tasks SET Marks='$Marks',Task_Status='2' WHERE Student_id ='$selected'";
             //$result = $conn->query($sql);
                if (mysqli_query($db, $sql)) {
                   echo "New record created successfully";
                } 
                else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                     }
        }
      }
        ?>  
  </select>
</form>
</body>
</html>
<?php
              break;
case 8:?>

<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Database</title>
</head>
<body>
<section id="services" class="services section">
<div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <form method="POST">
<input type="text" name="post" >
    <input type="submit" name="submit" value="submit" >
</form>
              <h4 class="title"><a href="#" onclick="submit()">Submit</a></h4>
              
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="#" onclick="myAdmin()">Admin</a></h4>
              <p class="description">Click above to register a new Admin to the System.</p>
            </div>
          </div>
        </div>

      </div>
</section>
<h2>POSTS</h2>

<table border="2">
  <tr>
    <td>TIMESTAMP</td>
    <td>POSTS</td>
  </tr>

<!--<form action ="" method="post">
    <input type="text" name="postinput" >
    <input type="submit" name="submit" value="submit" >
    <input type="submit" name="delete" value="delete" >

  
   <input type="submit" name="update" value="update" >
    <input type="text" name="up" >
  <input type="submit" name="subup" value="updateintable" >
</form>-->

      <?php
      include "dbconn1.php"; 
$edit = mysqli_query($db,"SELECT * FROM `posts`");
          //$sql = "SELECT * FROM `posts`";
          //$result = $conn->query($sql);
         /* echo "<table>
          <tr>
          <th>Time</th>
          <th>Post</th>
          </tr>";
          while($row = mysqli_fetch_array($edit)) {
            echo "<tr>";
            echo "<td>" . $row['timestamp'] . "</td>";
            echo "<td>" . $row['post'] . "</td>";
            echo "</tr>";
          }
          echo "</table>";*/


while($data = mysqli_fetch_array($edit))
{
?>
  <tr>
    <td><?php echo $data['timestamp']; ?></td>
    <td><?php echo $data['post']; ?></td> 
  </tr> 

<?php
}
if(isset($_POST['update']))
{
  $post=$_POST['post'];
  $qry = mysqli_query($db,"UPDATE `posts` SET post='$_POST[newpost]'where post='$_POST[post]'");

}
else if(isset($_POST['submit']))
       {
      $post = $_POST['post'];
      $edit = mysqli_query($db,"INSERT INTO posts(post) VALUES('$post')");
}

      else if(isset($_POST['delete']))
       {
      $post = $_POST['post'];
      $edit = mysqli_query($db,"DELETE FROM posts WHERE post='$post'");
      }
      else
      {
        echo "error";
      }
?>


<?php
         /* if(isset($_POST['update']))
          {
          $poster = $_GET['post'];
$qry = mysqli_query($db,"select post from posts where post='$poster'");
$data = mysqli_fetch_array($qry);
          if(isset($_POST['update']))
      {

  $fullname = $_POST['fullname'];

//if(isset($_POST['subup'])) // when click on Update button
//{
  $edit = mysqli_query($db,"update posts set post='$fullname', where post='$poster'");
  /*if($edit)
    {
        mysqli_close($db); // Close connection
       
        exit;
    }
    else
    {
        echo mysqli_error();
    }*/
//}
/*else
{
  echo "error!!!!";
}
}
}
       else if(isset($_POST['submit']))
       {
      $post = $_POST['postinput'];
     // $sql = "INSERT INTO posts(post) VALUES('$post')";
     // $result = $conn->query($sql);
      $edit = mysqli_query($db,"INSERT INTO posts(post) VALUES('$post')");
      /*if ($result) 
       {
        echo "New record created successfully";
       }
      else
       {
         echo mysqli_error($conn);
       }

}

      else if(isset($_POST['delete']))
       {
      $post = $_POST['postinput'];
      //$sql = "DELETE FROM posts WHERE post='$post'";
      $edit = mysqli_query($db,"DELETE FROM posts WHERE post='$post'");
      }
      

      /*else if(isset($_POST['update']))
       {
        
        $up = $_POST['up'];
        if(isset($_POST['subup']))
        {
      $sql ="UPDATE posts SET post='$post' WHERE post ='$up'";
      if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: ";
}*/
?>
<form method="POST">
<input type="text" name="post" >
    <input type="submit" name="submit" value="submit" >
    <input type="submit" name="delete" value="delete" >
  <input type="text" name="newpost">
  <input type="submit" name="update" value="Update">
</form>
</body>
</html>
          <?php
              break;
            default:
              echo "Your favorite color is neither red, blue, nor green!";
          }
          ?>
          </div>
        </div>
       
      </div>
    </div>

  </section>

<!-- End Hero -->


<!-- ======= Services Section =======  value="1" name="datap" onclick="showUser(value) -->
    <br><br>
    
    <div class="container">
      <!-- <div class="copyright">
        &copy; Copyright <strong><span>Learn and Earn</span></strong>. All Rights Reserved
      </div> -->
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<!-- AJAX SCRIPT STARTS -->

<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","superadmindata.php?q="+str,true);
  xmlhttp.send();
}
</script>


<!-- AJAX SCRIPT ENDS -->


