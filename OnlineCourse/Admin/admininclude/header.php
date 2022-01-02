<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, inintial-scale=1.0">
	<meta http-equiv="X-UA-Compitable" content="ie=edge">
	<title>Dashboard</title>

	<!--Bootstrap CSS -->
	<link rel="stylesheet"  href="../css/bootstrap.min.css">

	<!--Font Awsome CSS -->
	<link rel="stylesheet" type="text/css" href="../css/all.min.css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">


	<!--Custom Css -->
	<link rel="stylesheet" type="text/css" href="../css/adminstyle.css">

</head>
<body>
	<!--Top Navbar -->

	<nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow" style="background-color: #225470;">
		
		<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="adminDashboard.php"> MA Online School <small class="text-white"> Admin Area</small></a>
	</nav>

	<!--Side bar -->

	<div class="container-fluid mb-5" style="margin-top: 40px;" >
		<div class="row">
			<nav class="col-sm-3 col-md-2 bg-dark sidebar py-5 d-print-none mr-3">
				<div class="sidebar-sticky">
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link" href="adminDashboard.php">
								<i class="fas fa-tachometer-alt"></i>
								Dashboard
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="Courses.php">
								<i class="fab fa-accessible-icon"></i>
								Courses
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="lessons.php">
								<i class="fab fa-accessible-icon"></i>
								Lessons
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="students.php">
								<i class="fas fa-users"></i>
								Students
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="sellReport.php">
								<i class="fas fa-table"></i>
								Sell Report
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">
								<i class="fas fa-table"></i>
								Payment Status
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="feedback.php">
								<i class="fab fa-accessible-icon"></i>
								Feedback
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="adminChangePass.php">
								<i class="fas fa-key"></i>
								Change Password
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="adminLogout.php">
								<i class="fas fa-sign-out-alt"></i>
								Logout
							</a>
						</li>

					</ul>
				</div>
			</nav>
			