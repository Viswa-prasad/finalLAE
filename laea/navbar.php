 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top d-flex align-items-center">
     <div class="container d-flex align-items-center">

         <div class="logo me-auto">
             <h1><a href="index.php">Learn and Earn</a></h1>
             <!-- Uncomment below if you prefer to use an image logo -->
             <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
         </div>

         <nav id="navbar" class="navbar order-last order-lg-0">
             <ul>
                 <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                 <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                         <li><a class="nav-link scrollto" href="#about">About Us</a></li>
                         <li><a class="nav-link scrollto" href="#team">Team</a></li>
                         <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
                         <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                     class="bi bi-chevron-right"></i></a>
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
                 <li><a class="nav-link scrollto" href="#services">Services</a></li>
                 <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                 <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                 <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                 <?php
          if (isset($_SESSION['user'])) {
            echo '<li><a class="nav-link" href="logout.php">Log Out</a></li>';
          }
          ?>
             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->



     </div>
 </header><!-- End Header -->