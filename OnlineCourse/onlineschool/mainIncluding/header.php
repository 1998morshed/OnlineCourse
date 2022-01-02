<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- Font Awesome CSS -->
	
    <!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,600&display=swap" rel="stylesheet">
	
	<!-- Student Testimonial owl slider CSS-->
   <link rel="stylesheet" type="text/css" href="css/owl.min.css">
   <link rel="stylesheet" type="text/css" href="css/owl.theme.min.css">	
   <link rel="stylesheet" type="text/css" href="css/testyslider.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>
		Online School
	</title>
</head>
<body>
  	<!-- Start Neviagtion-->
  	<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
 	<a class="navbar-brand" href="index.php">Onlineschool</a>
 	<span class="navbar-text">jore jore chillao</span>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav custom-nav pl-5">
      <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link">Home</a></li>
      <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
      <?php
      session_start();
      if(isset($_SESSION['is_login'])){
           echo '<li class="nav-item custom-nav-item"><a href="paymentstatus.php" class="nav-link">Payment Status</a></li>
           <li class="nav-item custom-nav-item"><a href="#" class="nav-link">My profile</a></li>
           <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
        }
        else
        {
           echo '
           <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a></li>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter">Signup</a></li>
           ';
        }
      ?>
      
      
      <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Feedback</a></li>
      <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Contact</a></li>
    </ul>
    </div>
    </nav>
  	<!-- End Nevigation-->