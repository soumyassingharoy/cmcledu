<?php    $active= basename($_SERVER['REQUEST_URI']); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>STAR PUBLIC SCHOOL</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <!-- Favicons -->
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Google Fonts -->
      <link rel="preconnect" href="https://fonts.gstatic.com">
	  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
      <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
      <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
      <!--Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">
   </head>
   <body>
      <!-- ======= Top Bar ======= -->
      <section id="topbar" class="d-none d-lg-block">
         <div class="container d-flex">
            <div class="contact-info mr-auto">
               <i class="icofont-phone"></i> +91 9862571258
               <i class="icofont-envelope"></i><a href="javascript:void(0)">cmclvidyabharati@cmcledu.com</a>
               <i class="icofont-arrow-right"></i><a class="font-weight-bold" href="javascript:void(0)">CBSE Mandatory Disclosure</a>
            </div>
            <div class="social-links">
               <a href="javascript:void(0)" class="facebook"><i class="icofont-facebook"></i></a>
               <a href="javascript:void(0)" class="youtube"><i class="icofont-youtube-play"></i></a>
            </div>
         </div>
      </section>
      <!-- ======= Header ======= -->
      <header id="header">
         <div class="container d-flex">
            <div class="logo mr-auto">
               <a href="index.php"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a>
            </div>
            <nav class="nav-menu d-none d-lg-block">
               <ul>
                  <li <?php if($active == "index.php" || $active == '') { echo "class='active'"; } ?>><a href="index.php">Home</a></li>
                  <li class="drop-down">
                     <a href="javascript:void(0)">About Us</a>
                     <ul>
                        <li><a href="school-information.php">School Information</a></li>
                        <li><a href="javascript:void(0)">Mission & Vision</a></li>
                        <li><a href="javascript:void(0)">Principal’s Desk</a></li>
                        <li><a href="javascript:void(0)">Management Desk</a></li>
                     </ul>
                  </li>
                  <li class="drop-down">
                     <a href="javascript:void(0)">Academics</a>
                     <ul>
                        <li class="drop-down">
                           <a href="javascript:void(0)">Admission</a>
                           <ul>
                              <li><a href="javascript:void(0)">Admission Policy</a></li>
                              <li><a href="javascript:void(0)">Admission Form download</a></li>
                           </ul>
                        </li>
                        <li><a href="javascript:void(0)">Rules & Regulation</a></li>
                        <li><a href="javascript:void(0)">Fee Structure </a></li>
                        <li><a href="javascript:void(0)">PTM Summary </a></li>
                        <li><a href="javascript:void(0)">Results </a></li>
                        <li><a href="javascript:void(0)">Assessment/Exams</a></li>
                     </ul>
                  </li>
                  <li class="drop-down">
                     <a href="javascript:void(0)">Facilities</a>
                     <ul>
                        <li><a href="javascript:void(0)">Smart Class</a></li>
                        <li><a href="javascript:void(0)">Sports & Games</a></li>
                        <li><a href="javascript:void(0)">Library</a></li>
                        <li><a href="javascript:void(0)">Computer Education </a></li>
                        <li class="drop-down">
                           <a href="javascript:void(0)">Laboratories</a>
                           <ul>
                              <li><a href="javascript:void(0)">Physics Lab</a></li>
                              <li><a href="javascript:void(0)">Chemistry Lab</a></li>
                              <li><a href="javascript:void(0)">Biology Lab</a></li>
                              <li><a href="javascript:void(0)">Maths Lab</a></li>
                           </ul>
                        </li>
                        <li><a href="javascript:void(0)">Activity Room</a></li>
                        <li><a href="javascript:void(0)">Science Lab</a></li>
                     </ul>
                  </li>
                  <li <?php if($active == "portfolio.php" || $active == '') { echo "class='active'"; } ?>><a href="portfolio.php">Gallery</a></li>
                  <li class="drop-down">
                     <a href="javascript:void(0)">CBSE Info</a>
                     <ul>
                        <li class="drop-down">
                           <a href="javascript:void(0)">Students TC</a>
                           <ul>
                              <li><a href="javascript:void(0)">Year List </a></li>
                              <li><a href="javascript:void(0)">Student TC Download </a></li>
                           </ul>
                        </li>
                        <li class="drop-down">
                           <a href="javascript:void(0)">CBSE Links</a>
                           <ul>
                              <li><a href="javascript:void(0)">Redressal Committee</a></li>
                              <li><a href="javascript:void(0)">Link to cbse.nic.in</a></li>
                              <li><a href="javascript:void(0)">Careers</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li <?php if($active == "contact.php" || $active == '') { echo "class='active'"; } ?>><a href="contact.php">Contact Us </a></li>
                  <li <?php if($active == "homework.php" || $active == '') { echo "class='active'"; } ?>><a href="homework.php">Homework</a></li>
               </ul>
            </nav>
            <!-- .nav-menu -->
         </div>
      </header>
      <!-- End Header -->