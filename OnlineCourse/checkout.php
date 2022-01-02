<?php
include('./dbConnection.php');
session_start();
if(!isset($_SESSION['stuLogEmail'])){
	echo "<script> location.href = 'loginorsignup.php' </script> ";
} else {
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	$stuEmail=$_SESSION['stuLogEmail'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="GENERATOR" content="Evrsoft First Page">
	<meta name="viewport" content="width=device-width, inintial-scale=1.0">
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  
	<!-- Font Awesome CSS -->
	
    <!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@1,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet"> 
    <!--font-family: 'Bangers', cursive; -->

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>CheckOut</title>
</head>
<body>
<div class="container mt-5">
	<?php 
 	if(isset($_GET['course_id'])){
 		$course_id =$_GET['course_id'];
 		$_SESSION['course_id'] = $course_id;
 		$sql = "SELECT * FROM course WHERE course_id ='$course_id'";
 		$result = $conn->query($sql);
 	    $row = $result->fetch_assoc();

 	}


 	?>
	<div class="row">
		<div class="col-sm-6 offset-sm-3 jumbotron">
			<h3 class="mb-5">Welcome to MA School Payment Page</h3>

			<form action="checkout1.php" method="post">
			
				<div class="form-group row">
					<label for="ORDER_ID" class="col-sm-4 col-form-label">
					 Order ID
					</label>
					<div class="col-sm-8">
						<input id="ORDER_ID" class="form-control" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo "ORDS" .rand(10000,999999999)?>" readonly>
						
					</div>
					
				</div>
				<div class="form-group row">
					<label for="CUST_ID" class="col-sm-4 col-form-label">Student Email</label>
					<div class="col-sm-8">
						<input id="CUST_ID" class="form-control" tabindex="2" maxlength="12" size="12"
						 name="CUST_ID" autocomplete="off" value="<?php if(isset($stuEmail)){echo $stuEmail;}?>" readonly>
					</div>
				</div>
				
				<div class="form-group row">
					<label for="TXN_AMOUNT" class="col-sm-4 col-form-label">Amount</label>
					<div class="col-sm-8">
						<input title="TXN_AMOUNT" class="form-control" tabindex="10"
						type="text" name="TXN_AMOUNT"  value="<?php echo $row['course_price']?>" readonly>
					</div>
				</div>
				<div class="form-group row">
					<!--<label for="INDUSTRY_TYPE_ID" class="col-sm-4 col-form-label">INDUSTRY TYPE ID</label>-->
					<div class="col-sm-8">
						<input type="hidden" id="INDUSTRY_TYPE_ID" class="form-control" tabindex="4"
						maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail" readonly>
					</div>
				</div>
				<div class="form-group row">
					<!--<label for="CHANNERL_ID" class="col-sm-4 col-form-label">CHANNEL ID</label>-->
					<div class="col-sm-8">
						<input type="hidden" id="COURSE_ID" class="form-control" tabindex="4"
						maxlength="12" size="12" name="COURSE_ID" autocomplete="off" value="<?php echo $row['course_id']?>" readonly>
					</div>
				</div>
				<div class="text-center">
					<!--<input value="Checkout" type="submit" class="btn btn-primary" onclick="" >-->
					<a href="checkout1.php? price=<?php echo $row['course_price']?>"class="btn btn-primary">Checkout</a>
					<a href="./courses.php" class="btn btn-secondary">Cancel</a>
					
				</div>
			
			<small class="form-text text-muted"> Note: Complete Payment by Clicking Button
				
			</small>

		</form>
			
		</div>
		
	</div>
</div>
</body>
</html>


<?php }

?>