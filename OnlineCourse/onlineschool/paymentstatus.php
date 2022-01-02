<!-- Start Including Header-->
<?php
include('./mainIncluding/header.php');
?>
<!--End Including Header-->

<!-- Start course page Banner-->
<h5>AMi aci</h5>
<div class="container-fluid bg-dark">
	<div class="row">
		<img src="image/coursebanner.jpg" alt="courses" style="height: 500px; width: 100%;object-fit: cover;box-shadow: 10px;"/>
		
	</div>
	
</div>
<!--End course page Banner-->

<!-- Start Main content-->
<div class="container">
	<h2 class="text-center my-4">Payment-Status</h2>
	<form method="post" action="">
		<div class="form-group row">
			<label class="offset-sm-3 col-form-label">Order ID:</label>
			<div>
				<input type="text" class="form-control mx-3">
			</div>
			<div>
				<input type="submit" class="btn btn-primary mx-4" value="View">
			</div>
		</div>
	</form>
</div>

<!-- End Main Content-->

<!-- Start Contact Us-->
<?php
   include('./contact.php');
?>

<!--End Contact Us-->


<!---Start Including Footer-->
<?php
include('./mainIncluding/footer.php');
?>
<!-- End Including Footer-->