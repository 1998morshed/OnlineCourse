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


if(isset($_REQUEST['newStuSubmitBtn'])){
	//checking for empty field
 if(($_REQUEST['stu_name'] =="") || ($_REQUEST['stu_email'] =="") || ($_REQUEST['stu_pass'] == "") || ($_REQUEST['stu_occ'] == "") ){

 	$msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
 } else {

 	$stu_name = $_REQUEST['stu_name'];
 	$stu_email = $_REQUEST['stu_email'];
 	$stu_pass = $_REQUEST['stu_pass'];
 	$stu_occ = $_REQUEST['stu_occ'];
 

 	$sql = "INSERT INTO student (stu_name, stu_email, stu_pass, stu_occ) VALUES ('$stu_name', '$stu_email', '$stu_pass', '$stu_occ')";


 	if($conn->query($sql) == TRUE){
 		$msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Student Added Successfully</div>';
 	} else{
 		$msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Add Student</div>';
 	}

 }


}


?>

<div class="col-sm-6 mt-5 mx-5 jumbotron">
	<h3 class="text-center">Add New Student</h3>
	<form action="" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="stu_name">Name</label>
			<input type="text" class="form-control" id="stu_name" name="stu_name">
		</div>
		
		<div class="form-group">
			<label for="stu_email">Email</label>
			<input type="text" class="form-control" id="stu_email" name="stu_email">
		</div>
		<div class="form-group">
			<label for="stu_pass">Password</label>
			<input type="text" class="form-control" id="stu_pass" name="stu_pass">
		</div>
		<div class="form-group">
			<label for="stu_occ">Occupation</label>
			<input type="text" class="form-control" id="stu_occ" name="stu_occ">
		</div>

		<div class="text-center">
			<button type="submit" class="btn btn-success" id="newStuSubmitBtn" name="newStuSubmitBtn">Added</button>
			<a href="students.php" class="btn btn-secondary">Cancel</a>
		</div>

		<?php if(isset($msg)) {echo $msg; } ?>

	</form>
</div>


<?php
include ('./admininclude/footer.php'); 
?>