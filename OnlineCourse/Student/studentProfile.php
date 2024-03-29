<?php
if(!isset($_SESSION)){
	session_start();
}

include ('./stuInclude/header.php'); 
include_once ('../dbConnection.php'); 

if(isset($_SESSION['is_login'])){
	$stuEmail = $_SESSION['stuLogEmail'];

} else {
	echo "<script> location.href='../index.php'; </script>";
}

$sql = "SELECT * FROM student WHERE stu_email ='$stuEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1){
	$row =$result->fetch_assoc();

	$stuId = $row["stu_id"];
	$stuName = $row["stu_name"];
	$stuOcc = $row["stu_occ"];
	$stuImg = $row["stu_img"];
}

if(isset($_REQUEST['updateStuNameBtn'])){
	if(($_REQUEST['stuName'] == "")){
		$passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
	}else {
		$stuName = $_REQUEST['stuName'];
		$stuOcc = $_REQUEST['stuOcc'];
		$stu_image = $_FILES['stuImg']['name'];
		$stu_image_temp = $_FILES['stuImg']['tmp_name'];
		$img_folder ='../image/stu/'. $stu_image;
		move_uploaded_file($stu_image_temp, $img_folder);

		$sql = "UPDATE student SET stu_name = '$stuName', stu_occ = '$stuOcc', stu_img = '$img_folder' WHERE stu_email = '$stuEmail' ";

		if($conn->query($sql) == TRUE){
			//below msg for submit success
			$passmsg = '<div class="alert alert-succes col-sm-6 ml-5 mt-2" role ="alert">Updated Succesfully</div>';
		} else {
			$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role ="alert">Unable to Updated</div>';
		}
	}
}

?>

<div class="col-sm-6 mt-5 mx-5 shadow p-3 mb-5 bg-body rounded text-white" style="background: teal">
	<form class="mx-5" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="stuId">Student ID</label>
			<input type="text" class="form-control shadow-sm p-3 bg-body rounded" id="stuId" name="stuId" value="<?php if(isset($stuId)) {echo $stuId;} ?>" readonly>
		</div>
		<div class="form-group">
			<label for="stuEmail">Email</label>
			<input type="text" class="form-control shadow-sm p-3 bg-body rounded" id="stuEmail" name="stuEmail" value="<?php echo $stuEmail; ?>" readonly>
		</div>

		<div class="form-group">
			<label for="stuName">Name</label>
			<input type="text" class="form-control shadow-sm p-3  bg-body rounded" id="stuName" name="stuName" value="<?php if(isset($stuName)) {echo $stuName;} ?>">
		</div>
		
		
		<div class="form-group">
			<label for="stu_pass">Password</label>
			<input type="text" class="form-control shadow-sm p-3  bg-body rounded" id="stu_pass" name="stu_pass">
		</div>
		<div class="form-group">
			<label for="stuOcc">Occupation</label>
			<input type="text" class="form-control shadow-sm p-3 bg-body rounded" id="stuOcc" name="stuOcc" value="<?php if(isset($stuOcc)) {echo $stuOcc;} ?>">
		</div>
		<div class="form-group">
			<label for="stuImg">Upload Image</label>
			<input type="file" class="form-control-file shadow-sm p-3 bg-body rounded" id="stuImg" name="stuImg" >
		</div>


			<button type="submit" class="btn btn-info" id="updateStuNameBtn" name="updateStuNameBtn">Update</button>
		

		<?php if(isset($passmsg)) {echo $passmsg; } ?>

	</form>
</div>

<?php
include ('./stuInclude/footer.php'); 
?>