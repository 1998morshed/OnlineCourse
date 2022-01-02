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
}


if(isset($_REQUEST['usubmitFeedbackBtn'])){
	if(($_REQUEST['f_content'] == "")){
		//msg if field is missing
		$passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
	}else {
		$fcontent = $_REQUEST['f_content'];
		

		$sql = "INSERT INTO feedback (f_content, stu_id) VALUES ('$fcontent', '$stuId')";

		if($conn->query($sql) == TRUE){
			//below msg for submit success
			$passmsg = '<div class="alert alert-succes col-sm-6 ml-5 mt-2" role ="alert">Updated Succesfully</div>';
		} else {
			$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role ="alert">Unable to Updated</div>';
		}
	}
}

?>

<div class="col-sm-6 mt-5 m-3 shadow p-3 mb-5 bg-body rounded text-white" style="background: teal">
	<form class="mx-5" method="POST" enctype="multipart/form-data">
		<div class="form-group ">
			<label for="stuId">Student ID</label>
			<input type="text" class="form-control shadow p-3 bg-body rounded" id="stuId" name="stuId" value="<?php if(isset($stuId)) {echo $stuId;} ?>" readonly>
		</div>
		

		<div class="form-group  text-white" >
			<label for="f_content">Write Feedback</label>
			<textarea  class="form-control shadow p-3 bg-body rounded" id="f_content" name="f_content" row=5> </textarea>
		</div>
		

			<button type="submit" class="btn btn-primary" id="usubmitFeedbackBtn" name="usubmitFeedbackBtn">Submit</button>
		

		<?php if(isset($passmsg)) {echo $passmsg; } ?>

	</form>
</div>

<?php
include ('./stuInclude/footer.php'); 
?>