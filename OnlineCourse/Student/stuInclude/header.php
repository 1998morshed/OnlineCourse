<?php
include_once ('../dbConnection.php');
if(!isset($_SESSION)){
	session_start();
}
 
 
if(isset($_SESSION['is_login'])){
	$stuLogEmail = $_SESSION['stuLogEmail'];

}

if(isset($stuLogEmail)){
	$sql = "SELECT stu_img FROM student WHERE stu_email = '$stuLogEmail'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$stu_img = $row['stu_img'];
}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, inintial-scale=1.0">
	<meta http-equiv="X-UA-Compitable" content="ie=edge">
	<title>Profile</title>

	<!--Bootstrap CSS -->
	<link rel="stylesheet"  href="../css/bootstrap.min.css">

	<!--Font Awsome CSS -->
	<link rel="stylesheet" type="text/css" href="../css/all.min.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">


	<!--Custom Css -->
	<link rel="stylesheet" type="text/css" href="../css/stustyle.css">

</head>
<body>
	<!--Top Navbar -->

	<nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: #225470;">
		
		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../index.php"> MA Online School</a>
	</nav>

	<!--Side bar -->

	<div class="container-fluid mb-5" style="margin-top: 40px;">
		<div class="row">
			<nav class="bg-dark col-sm-2 col-md-2  sidebar py-5 d-print-none">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item mb-3">
							<?php echo "<img src='$stu_img' style='width: 200px; height: 200px;' class='rounded-circle p-2 shadow'"; ?>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="studentProfile.php">
								<i class="fas fa-user"></i>
								Profile <span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="myCourses.php">
								<i class="fab fa-accessible-icon"></i>
								My Courses
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="stufeedback.php">
								<i class="fab fa-accessible-icon"></i>
								Feedback
							</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="studentChangePass.php">
								<i class="fas fa-key"></i>
								Change Password
							</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="../logout.php">
								<i class="fas fa-sign-out-alt"></i>
								Logout
							</a>
						</li>

					</ul>
				</div>
			</nav>
