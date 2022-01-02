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
		<img src="image/bgimage.jpg" alt="courses" style="height: 500px; width: 100%;  box-shadow: 10px;">
		
	</div>
	
</div>
<!--End course page Banner-->

  	<!-- Start All popular Course-->
  	<div class="container mt-5">
  		<h1 class="text-center">All Courses</h1>

      <!-- Start Most popular Course 1st Card Deck-->
      <div class="card-dek row mt-4 ">
        <?php
          $sql = "SELECT * FROM course";
          $result = $conn->query($sql);
          if($result->num_rows>0){
            while ($row = $result->fetch_assoc()){

              $course_id = $row['course_id'];

              echo '<div class="col-sm-4 mb-4"
              <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding: 0px; ">
          <div class="card">
            <img src="'.str_replace('..', '.', $row['course_img']).'" style="width: 345px; height: 250px;"class="card-img-top" alt="'.$row['course_name'].'" />
            <div class="card-body">
              <h5 class="card-title">'.$row['course_name'].'</h5>
              <p class="card-text">'.$row['course_desc'].'</p>
            </div>
            <div class="card-footer">
              <p class="card-text d-inline">Price: <small><del>&#2547 '.$row['course_original_price'].'</del></small>
              <span class="font-weight-bolder">&#2547 '.$row['course_price'].'</span></p><a class="btn btn-primary text-white
              font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
              
            </div>
            </div>
            
          </div>
        </a>';
            }
          }

         ?>
        
        
      </div>
  		
  	</div>

  	<!-- End All popular Course-->

    



<!---Start Including Footer-->
<?php
include('./mainIncluding/footer.php');
?>
<!-- End Including Footer-->