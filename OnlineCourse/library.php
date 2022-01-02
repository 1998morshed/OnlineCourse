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
  		<h1 class="text-center">Ebook Library</h1>

      <!-- Start Most popular Course 1st Card Deck-->
      <div class="card-dek row mt-4 ">
      <div class="col-sm-4 mb-4">
              <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding: 0px; ">
          <div class="card">
            <img src="image/courseimg/algo.jpg" style="width: 345px; height: 250px;"class="card-img-top" alt="'.$row['course_name'].'" />
            <div class="card-body">
              <h5 class="card-title">Algorithm</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
            </div>
            <div class="card-footer">
              </p><a class="btn btn-primary text-white
              font-weight-bolder float-right" href="https://jeffe.cs.illinois.edu/teaching/algorithms/book/Algorithms-JeffE.pdf">Read</a>
              
            </div>
            </div>
            
          </div>
        </a>

        <div class="col-sm-4 mb-4">
              <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding: 0px; ">
          <div class="card">
            <img src="image/courseimg/algo.jpg" style="width: 345px; height: 250px;"class="card-img-top" alt="'.$row['course_name'].'" />
            <div class="card-body">
              <h5 class="card-title">Algorithm</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
            </div>
            <div class="card-footer">
              </p><a class="btn btn-primary text-white
              font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Read</a>
              
            </div>
            </div>
            
          </div>
        </a>
      


      <div class="col-sm-4 mb-4">
              <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding: 0px; ">
          <div class="card">
            <img src="image/courseimg/algo.jpg" style="width: 345px; height: 250px;"class="card-img-top" alt="'.$row['course_name'].'" />
            <div class="card-body">
              <h5 class="card-title">Algorithm</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
            </div>
            <div class="card-footer">
              </p><a class="btn btn-primary text-white
              font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Read</a>
              
            </div>
            </div>
            
          </div>
        </a>

      
        
      </div>



      <div class="col-sm-4 mb-4">
              <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding: 0px; ">
          <div class="card">
            <img src="image/courseimg/algo.jpg" style="width: 345px; height: 250px;"class="card-img-top" alt="'.$row['course_name'].'" />
            <div class="card-body">
              <h5 class="card-title">Algorithm</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
            </div>
            <div class="card-footer">
              </p><a class="btn btn-primary text-white
              font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Read</a>
              
            </div>
            </div>
            
          </div>
        </a>

      
        
      </div>
  		
  	</div>

  	<!-- End 1st dake-->





<!---Start Including Footer-->
<?php
include('./mainIncluding/footer.php');
?>
<!-- End Including Footer-->