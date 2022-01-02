<?php
if(!isset($_SESSION)){
	session_start();
}

// include ('./stuInclude/header.php'); 
include_once ('../dbConnection.php'); 


if(isset($_SESSION['is_login'])){
	$stuEmail = $_SESSION['stuLogEmail'];

} else {
	echo "<script> location.href='../index.php'; </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, inintial-scale=1.0">
	<meta http-equiv="X-UA-Compitable" content="ie=edge">
	<title>Watch Course</title>

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

	<div class="navbar navbar-dark p-0 shadow" style="background-color: #225470;" >
		
		<a style="text-decoration: none;  " class="bt btn-danger btn-lg" href="./myCourses.php">My Course</a>
		<?php if(isset($_GET['course_id'])){
			$course_id = $_GET['course_id'];

			$sql = "SELECT course_name FROM course WHERE course_id ='$course_id' ";
			$result =$conn->query($sql);
			if($result->num_rows > 0){
				$row = $result->fetch_assoc();
				echo '<p style ="margin-right: 47%; display: inline; font-family:Segoe Print; font-weight: bold;font-size: 35px;"> '.$row['course_name'].' </p>';
			}
			
		} ?>
	</div>

	<div class="container-fluid">
		<h4 class="text-center">Lessions</h4>
		<div class="row">
			
				 <?php
				if(isset($_GET['course_id'])){
					$course_id = $_GET['course_id'];
					$sql = "SELECT * FROM lesson WHERE course_id = '$course_id'";
					$result = $conn->query($sql);
				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
						echo '<div class="col-md-4 shadow p-3 mb-5 bg-body rounded">
						<li class="nav-item border-bottom py-2 bg-dark text-white" movieurl='.$row['lesson_link'].' style ="cursor: pointer;">'.$row['lesson_name'].' </li> 
						
						<video controls width="100%" >
					<source src='.$row['lesson_link'].' type="video/mp4">
					
				</video>
				<li class="nav-item  py-2 fs-5" movieurl='.$row['lesson_link'].' style ="cursor: pointer;">'.$row['lesson_desc'].' </li> 
						
				 </div>';
					}
				}
			}	
			?> 
			
			<!-- <figure id=video_player>
			<div class="col-sm-3 border-light">
				
				
				<ul id="playlist" class="nav flex-column">
				 <?php
				if(isset($_GET['course_id'])){
					$course_id = $_GET['course_id'];
					$sql = "SELECT * FROM lesson WHERE course_id = '$course_id'";
					$result = $conn->query($sql);
				if($result->num_rows > 0){
					while($row = $result->fetch_assoc()){
						echo '<li class="nav-item border-bottom py-2" movieurl='.$row['lesson_link'].' style ="cursor: pointer;">'.$row['lesson_name'].' </li> 
						<li class="nav-item border-bottom py-2" movieurl='.$row['lesson_link'].' style ="cursor: pointer;">'.$row['lesson_desc'].' </li> 
						
						<video controls width="600px">
					<source src='.$row['lesson_link'].' type="video/mp4">
					
				</video>';
					}
				}
			}	
			?> 

			</ul>
			</div>
			<!-- <div class="col-sm-8">

					
					
				<video id="videoarea" src="" class="mt-5 w-75 ml-2" controls></video>
			</div> -->
		  </figure> -->
		</div>
	</div> 

	<!-- start course feedback 

	<?php

		$sql = "SELECT * FROM student WHERE stu_email ='$stuEmail'";
		$result = $conn->query($sql);
		if($result->num_rows == 1){
			$row =$result->fetch_assoc();
			$stuId = $row["stu_id"];
		}

		if(isset($_GET['course_id'])){
					$courseId = $_GET['course_id'];
		}


		if(isset($_REQUEST['usubmitFeedbackBtn'])){
			if(($_REQUEST['f_content'] == "")){
				//msg if field is missing
				$passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
			}else {
				$fcontent = $_REQUEST['f_content'];
				

				$sql = "INSERT INTO cofeedback (f_content, stu_id,course_id) VALUES ('$fcontent', '$stuId','$courseId')";

				if($conn->query($sql) == TRUE){
					//below msg for submit success
					$passmsg = '<div class="alert alert-succes col-sm-6 ml-5 mt-2" role ="alert">Updated Succesfully</div>';
				} else {
					$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role ="alert">Unable to Updated</div>';
				}
			}
		}

		?>

		<div class="col-sm-6 mt-5">
			<form class="mx-5" method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="stuId">Student ID</label>
					<input type="text" class="form-control" id="stuId" name="stuId" value="<?php if(isset($stuId)) {echo $stuId;} ?>" readonly>
				</div>
				

				<div class="form-group">
					<label for="f_content">Write Feedback</label>
					<textarea  class="form-control" id="f_content" name="f_content" row=5> </textarea>
				</div>
				

					<button type="submit" class="btn btn-primary" id="usubmitFeedbackBtn" name="usubmitFeedbackBtn">Submit</button>
				

				<?php if(isset($passmsg)) {echo $passmsg; } ?>

			</form>
		</div>


	<!-- end course feedback -->

		<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/popper.min.js"></script>
	<script type="text/javascript" src="../js/bootsrap.min.js"></script>

	<!-- Font Awsome JS -->
	<script type="text/javascript" src="../js/all.min.js"></script>

	<script type="text/javascript" src="../js/custom.js"></script>

</body>
</html>