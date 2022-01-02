<!-- Start Including Header-->
<?php
include('./dbConnection.php');
include('./mainIncluding/header.php');
?>
<!--End Including Header-->

<!-- Start course page Banner-->
<h5>AMi aci</h5>
<div class="container-fluid bg-dark">
	<div class="row">
		<img src="image/bgimage.jpg" alt="courses" style="height: 500px; width: 100%; cover;box-shadow: 10px;"/>
		
	</div>
	
</div>
<!--End course page Banner-->

<!-- Start Main content-->
 
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
 		<div class="col-md-4">
 			<img src="<?php echo str_replace('..', '.', $row['course_img']) ?>"style="width: 345px; height: 300px;" class="card-img-top" alt="<?php echo $row['course_id'] ?>" />
 			
 		</div>
 		<div class="col-md-4">
 			<div class="card-body">
 				<h5 class="card-title">Cousre Name: <?php echo $row['course_name'] ?></h5>
 				<p class="card-text"> <b>Description:</b> <?php echo $row['course_desc'] ?></p>
 				<p class="card-text"><b>Duration:</b> <?php echo $row['course_duration'] ?></p>
 				<form action="checkout.php" method="post">
 					<p class="card-text d-inline"><b>Price:</b> <small><del>&#2547 <?php echo $row['course_original_price'] ?></del></small>
  						<span class="font-weight-bolder">&#2547 <?php echo $row['course_price'] ?></span></p>
  						<input type="hidden" name="id" value="<?php echo $row['course_price'] ?>">
  					<!-- <button type="submit" class="btn btn-primary text-white font-weight-bolder float-right" name="buy">Buy Now</button> -->
  					<a href="checkout.php?course_id=<?php echo $row['course_id'] ?>" class="btn btn-primary">Buy now</a>
 					
 				</form>
 				
 			</div>
 			
 		</div>
 		
 	</div>
 	
 </div>

 <div class="container">
 	<div class="row">
 		<table class="table table-bordered table-hover">
 			<thead>
 				<tr>
 					<th scope="col">Lesson No.</th>
 					<th scope="col">Lesson Name</th>
 				</tr>
 			</thead>
 			<tbody>
 		<?php
 		$sql ="SELECT * FROM lesson";
 		$result = $conn->query($sql);
 		if($result->num_rows > 0){
 			$num = 0;
 			while($row = $result->fetch_assoc()){
 				if($course_id == $row['course_id']){
 					$num++;
 				echo '<tr>
 					<th scope="row">'.$num.'</th>
 					<td>'.$row['lesson_name'].'</td>
 				</tr>';
 				}

 			}

 		}

 		?>


 		</tbody>
 			
 	</table>
 		
  </div>

  <?php if(isset($_GET['course_id'])){
      echo "<b>Course Author : </b>";
      $course_id = $_GET['course_id'];

      $sql = "SELECT course_author FROM course WHERE course_id ='$course_id' ";
      $result =$conn->query($sql);
      if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        echo '<p style ="margin-right: 47%; display: inline; font-weight: bold;font-size: 25px;"> '.$row['course_author'].' </p>';
       
      }
      
    } ?>
 	
 </div>

 

     <!-- Start Students Terminal-->
   
    
       <!--ENDS OF STUDENT TESTIMONIAL  -->

            
           

   

<!---Start Including Footer-->
<?php
include('./mainIncluding/footer.php');
?>
<!-- End Including Footer-->