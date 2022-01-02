<?php
if(!isset($_SESSION)){
	session_start();
}

include ('./admininclude/header.php'); 
include ('../dbConnection.php'); 

if(isset($_SESSION['is_admin_login'])){
	$adminEmail = $_SESSION['adminLogEmail'];

} else {
	echo "<script> location.href='../index.php'; </script>";
}



//update Information

if(isset($_REQUEST['requupdate'])){
	//check for empty fields
	if(($_REQUEST['lesson_id']=="") || ($_REQUEST['lesson_name'] =="") || ($_REQUEST['lesson_desc'] =="") || ($_REQUEST['course_id'] == "") || ($_REQUEST['course_name'] == "")){
		$msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2"role="alert">Fill All Fields</div>';
	} else {

	$lid = $_REQUEST['lesson_id'];
	$lname = $_REQUEST['lesson_name'];
 	$ldesc = $_REQUEST['lesson_desc'];
 	$cid = $_REQUEST['course_id'];
 	$cname = $_REQUEST['course_name'];
 	
 	$llink = '../lessonvid/'. $_FILES['lesson_link']['name'];


 	$sql = "UPDATE lesson SET lesson_id = '$lid', lesson_name = '$lname', lesson_desc = '$ldesc', course_name = '$cname', course_id = '$cid', lesson_link = '$llink' WHERE lesson_id = '$lid'";

 	if($conn->query($sql) == TRUE){
 		//bellow msg display on form submit success
 		$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Update Successfully</div>';
 	} else{
 		//msg for failed

 		$msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update</div>';
 	}


	}
}

?>



<div class="col-sm-6 mt-5 mx-5 jumbotron">
	<h3 class="text-center">Update Lesson Detail</h3>

	<?php 
	if(isset($_REQUEST['view'])) {
		$sql = "SELECT * FROM lesson WHERE lesson_id = {$_REQUEST['id']}";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
	}


	?>


	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="lesson_id">Lesson ID</label>
			<input type="text" class="form-control" id="lesson_id" name="lesson_id" value ="<?php if(isset($row['lesson_id'])){ echo $row['lesson_id']; } ?>" readonly>
		</div>
		<div class="form-group">
			<label for="lesson_name">Lesson Name</label>
			<input type="text" class="form-control" id="lesson_name" name="lesson_name" value ="<?php if(isset($row['lesson_name'])){ echo $row['lesson_name']; } ?>">
		</div>
		<div class="form-group">
			<label for="lesson_desc">Lesson Description</label>
			<textarea class="form-control" id="lesson_desc" name="lesson_desc" row=2><?php if(isset($row['lesson_desc'])){ echo $row['lesson_desc']; } ?></textarea> 
		</div>
		<div class="form-group">
			<label for="course_id">Course ID</label>
			<input type="text" class="form-control" id="course_id" name="course_id" value ="<?php if(isset($row['course_id'])){ echo $row['course_id']; } ?>" readonly>
		</div>
		<div class="form-group">
			<label for="course_name">Course Name</label>
			<input type="text" class="form-control" id="course_name" name="course_name" onkeypress="isInputNumber(event)" value ="<?php if(isset($row['course_name'])){ echo $row['course_name']; } ?>" readonly >
		</div>
		<div class="form-group">
			<label for="lesson_link">Lesson Link</label>
			<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item"src="<?php if(isset($row['lesson_link'])){ echo $row['lesson_link']; } ?>" allowfullscreen></iframe>
			</div>
			<input type="file" class="form-control-file" id="lesson_link" name="lesson_link">
		</div>
		

		<div class="text-center">
			<button type="submit" class="btn btn-success" id="requupdate" name="requupdate">Update</button>
			<a href="lessons.php" class="btn btn-secondary">Close</a>
		</div>

		<?php if(isset($msg)) {echo $msg; } ?>

	</form>
</div>





<?php
include ('./admininclude/footer.php'); 
?>