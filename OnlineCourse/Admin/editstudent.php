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
	//checking for empty field
 if( ($_REQUEST['stu_id'] =="") || ($_REQUEST['stu_name'] =="") || ($_REQUEST['stu_email'] =="") || ($_REQUEST['stu_pass'] == "") || ($_REQUEST['stu_occ'] == "") ){

 	$msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
 } else {

	
	$stu_id = $_REQUEST['stu_id'];
	$stu_name = $_REQUEST['stu_name'];
 	$stu_email = $_REQUEST['stu_email'];
 	$stu_pass = $_REQUEST['stu_pass'];
 	$stu_occ = $_REQUEST['stu_occ'];
 	$stu_img = $_REQUEST['stu_img'];
 

 	$sql = "UPDATE student SET stu_name ='$stu_name' , stu_email = '$stu_email', stu_pass ='$stu_pass', stu_occ= '$stu_occ' WHERE stu_id = '$stu_id'";


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
	<h3 class="text-center">Student Profile</h3>

	<?php 
	if(isset($_REQUEST['view'])) {
		$sql = "SELECT * FROM student WHERE stu_id = {$_REQUEST['id']}";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
	}


	?>


	<form action="" method="POST" enctype="multipart/form-data">
		<div class="text-center mt-2">
		<img src="<?php if(isset($row['stu_img'])){ echo $row['stu_img']; } ?>" class="rounded img-thumbnail" style="height: 300px; width: 300px;" alt="Responsive image">
		</div>
		<div class="form-group row  mt-2 ">
			<label for="stu_id" class="col-sm-2 col-form-label" >Student ID</label>
			 <div class="col-sm-10">
			<input type="text" class="form-control" id="stu_id" name="stu_id" value ="<?php if(isset($row['stu_id'])){ echo $row['stu_id']; } ?>" readonly>
			</div>
		</div>
		<div class="form-group row">
			<label for="stu_name" class="col-sm-2 col-form-label">Name</label>
			 <div class="col-sm-10">
			<input type="text" class="form-control" id="course_name" name="stu_name" value ="<?php if(isset($row['stu_name'])){ echo $row['stu_name']; } ?>">
			</div>
		</div>
		
		<div class="form-group row">
			<label for="stu_email" class="col-sm-2 col-form-label">Email</label>
			 <div class="col-sm-10">
			<input type="text" class="form-control" id="stu_email" name="stu_email" value ="<?php if(isset($row['stu_email'])){ echo $row['stu_email']; } ?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="stu_pass" class="col-sm-2 col-form-label">Password</label>
			 <div class="col-sm-10">
			<input type="text" class="form-control" id="stu_pass" name="stu_pass" value ="<?php if(isset($row['stu_pass'])){ echo $row['stu_pass']; } ?>">
			</div>
		</div>
		<div class="form-group row">
			<label for="course_original_price" class="col-sm-2 col-form-label">Occupation</label>
			 <div class="col-sm-10">
			<input type="text" class="form-control" id="stu_occ" name="stu_occ" value ="<?php if(isset($row['stu_occ'])){ echo $row['stu_occ']; } ?>">
			</div>
		</div>

	

		<div class="text-center">
			<button type="submit" class="btn btn-success" id="requupdate" name="requupdate">Update</button>
			<a href="students.php" class="btn btn-secondary">Close</a>
		</div>

		<?php if(isset($msg)) {echo $msg; } ?>

	</form>
</div>





<?php
include ('./admininclude/footer.php'); 
?>