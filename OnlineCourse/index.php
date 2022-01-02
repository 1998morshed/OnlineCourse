<!-- Start Including Header-->
<?php
include('./dbConnection.php');
include('./mainIncluding/header.php');
?>
<!--End Including Header-->

  	<!-- Video background start-->
  	<div class="container-fluid remove-vid-marg">
     <div class="vid-parent">
     	<video playsinline autoplay muted loop>
     	 	<source src="video/banvideo.mp4">
     		
     	</video>
     	<div class="vid-overlay">

     	</div>
     </div>

     <div class="vid-content">
     	<h1 class="my-content"> Welcome to MA Online School</h1>
     	<small class="my-content">Committed To Excellence</small><br>

      <?php
         if(!isset($_SESSION['is_login'])){
          echo '<a href="#" class="btn btn-danger mt-3"  data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
         }
         else
         {
          echo '<a href="Student/studentProfile.php" class="btn btn-primary mt-3">My Profile</a> ';
         }

      ?>
     	
     	
     </div>

  	</div>

  	<!-- Video background End-->

  	<!-- start text Banner-->
        <div class="container-fluid bg-success txt-banner">
            <div class="row bottom-banner">
            	<div class="col-sm">
            		<h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>
            	</div>
	            <div class="col-sm">
	            	<h5><i class="fas fa-users mr-3"></i>Expert Instructions</h5>
	            </div>
	            <div class="col-sm">
	            	<h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
	            </div>
	            <div class="col-sm">
	            	<h5><i class="fas fa-dollar-sign mr-3"></i>Money Back Guarantee*</h5>
	            </div>
        	</div>

        </div>

       <!-- &#2547-->

          <!-- Start popular Course-->
    <div class="container mt-3">
      <h1 style="font-family:Segoe Print; " class="text-center  font-weight-bolder">Popular Courses</h1>
      <!-- Start Most popular Course 1st Card Deck-->
      <div class="card-deck mt-4">
        <?php
          $sql = "SELECT * FROM course LIMIT 3";
          $result = $conn->query($sql);
          if($result->num_rows>0){
            while ($row = $result->fetch_assoc()){

              $course_id = $row['course_id'];

              echo '<a href="#" class="btn shadow  bg-body rounded" style="text-align: left; padding: 0px; margin: 0px;">
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
        </a>';
            }
          }

         ?>
        
        
      </div>
      <!--End Most popular Course 1st Card Deck-->

      <!-- Start Most popular Course 2nt Card Deck -->
      <!-- https://paste.ubuntu.com/p/Q4pmNNRmgn/ -->
      <!-- End Most popular Course 2nd Card Deck -->
      
      
    </div>

<div>
    <hr style ="border-bottom: 5px solid #A6A6A6; margin-right: 0;">
</div>

    <!-- End Most popular Course-->

    <!-- Course Start -->

        <div class="container mt-3" style=" margin-bottom: 5px; height: 300px; box-shadow: black;">
            <div class="card-deck mt-4 bottom-banner">
              
                <div class="col-sm-5 text-center">

                <h5 style="text-align: justify; color: red; margin-top: 80px; font-family: Comic Sans MS; font-size: 25px;">
                "This is our Virtual Classroom. And this is only for those students who are admitted in our School."</h5>
                <div style="margin-top: 30px;" >
                  <div class="text-center m-2">
                      <a class="btn btn-dark btn-lg" href="courses.php">Courses</a>      
                  </div>
                </div>
              </div>
                <div class="col-sm-1 " >
              </div>

              <div class="col-sm-4 text-center">
                <img src="image/classroom.jpg" style="padding: 0; height: 300px; width: 530px; ">
              </div>
             
          </div>

        </div>

        <div >
          <hr style ="border-bottom: 5px solid #A6A6A6; margin-right: 0;">
        </div>

    <!-- Course End -->

    <!-- Exam Start -->

        <div class="container mt-3" style="height: 300px; box-shadow: black;">
            <div class="card-deck mt-4 bottom-banner">
              <div class="col-sm-4 text-center">
                <img src="image/online-exam.jpg" style="padding: 0; height: 300px; width: 530px; ">
              </div>

              <div class="col-sm-3 " >
              </div>
               <div class="col-sm-4 text-center">

                <h5 style="text-align: justify; color: red; margin-top: 80px; font-family: Comic Sans MS; font-size: 25px;">
                "This is our Virtual Classroom. And this is only for those students who are admitted in our School."</h5>
                <div style="margin-top: 30px;" >
                  <button  type="submit" name="" class="btn btn-dark btn-lg">Exam</button>
                </div>
              </div>
             
          </div>

        </div>

        <div >
          <hr style ="border-bottom: 5px solid #A6A6A6; margin-right: 0;">
        </div>

    <!-- Exam End -->

    <!-- Library Start -->

        <div class="container mt-3" style=" margin-bottom: 5px; height: 300px; box-shadow: black;">
            <div class="card-deck mt-4 bottom-banner">
              
                <div class="col-sm-5 text-center">

                <h5 style="text-align: justify; color: red; margin-top: 80px; font-family: Comic Sans MS; font-size: 25px;">
                "This is our Virtual Classroom. And this is only for those students who are admitted in our School."</h5>
                <div style="margin-top: 30px;" >
                  <div class="text-center m-2">
                      <a class="btn btn-dark btn-lg" href="library.php">Ebook Library</a>      
                  </div>
                </div>
              </div>
                <div class="col-sm-1 " >
              </div>

              <div class="col-sm-4 text-center">
                <img src="image/library.jpg" style="padding: 0; height: 300px; width: 530px; ">
              </div>
             
          </div>

        </div>

        <div >
          <hr style ="border-bottom: 5px solid #A6A6A6; margin-right: 0;">
        </div>

    <!-- Library End -->


  	<!-- End Text Banner-->


  	<!-- Start Contact Us-->
    <section id="contact">
      <?php
  	   include('./contact.php');
       ?>
    </section>

  	<!--End Contact Us-->


    <!-- Start Students Terminal-->
   
            <section class="testimonials" id="feedback">
              <div class="container-fluid mt-5" style="background-color: #4B7289" >
                  <h1 style="font-family:Segoe Print; " class="text-center  font-weight-bolder p-4"> Student's Feedback </h1>

                  <div class="row">
                    <div class="col-sm-12">
                      <div id="customers-testimonials" class="owl-carousel">

            <?php 
            $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
              while ($row = $result->fetch_assoc()){

              $s_img = $row['stu_img'];
              $n_img = str_replace('..', '.', $s_img);

              ?>

           <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="<?php echo $n_img; ?>" alt="<?php echo $row['stu_name']; ?>">
                <p><?php echo $row['f_content']; ?></p>
              </div>
              <div class="testimonial-name"><?php echo $row['stu_name']; ?>
                <br><small> <?php echo $row['stu_occ']; ?></small>
              </div>
            </div>
          <?php

          }

         }

       ?>

     <!--END OF TESTIMONIAL 5 -->
        </div>
      </div>
    </div>
  </div>
</section>

            
           

    <!-- Start Social Follow-->
    <div class="container-fluid bg-dark">
      <div class="row text-white text-center p-1" >
         <div class="col-sm">
           <a style="color: white;" href="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
         </div>

         <div class="col-sm">
           <a style="color: white;" href="text-white social-hover" href="#"><i class="fab fa-twitter"></i>Twitter</a>
         </div>

         <div class="col-sm">
           <a style="color: white;" href="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i>Whatsapp</a>
         </div>

         <div class="col-sm">
           <a style="color: white;" href="text-white social-hover" href="#"><i class="fab fa-instagram"></i>Instagram</a>
         </div>
        
      </div>
      
    </div>
    <!-- End Social follow-->

    <!-- Start About Section-->
    <section class="text-dark">
    <div class="container-fluid p-4 ">
        <div class="container" >
          <div class="row text-center">
             <div class="col-sm">
                <h5>About Us</h5>
                  <p>MA onlineschool provide universal access to the hole wrold's best education, partnering with top
                  universities and organizations to offer courses online.</p>
               
             </div>
             <div class="col-sm">
                 <h5>Category</h5>
                 <a class="text-dark" href="#"> Web Developer</a><br />
                 <a class="text-dark" href="#"> Web Designing</a><br />
                 <a class="text-dark" href="#"> Andorid App Dev</a><br />
                 <a class="text-dark" href="#"> Ios Development</a><br />
                 <a class="text-dark" href="#"> Data Analysis</a><br />
               
             </div>
             <div class="col-sm">
                <h5 style="font-family: " class="text-center  font-weight-bolder">Contact Us</h5>
                <p>MA OnlineSchool<br>Gendaria,<br>Dhaka,<br>Bangladesh.<br>Phon: +8801640690531</p>
               
             </div>
            
          </div>
          
        </div>
    </div>
    </section>
    <!--End About Section-->

<!---Start Including Footer-->
<?php
include('./mainIncluding/footer.php');
?>
<!-- End Including Footer-->