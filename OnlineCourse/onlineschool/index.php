<!-- Start Including Header-->
<?php
include('./mainIncluding/header.php');
?>
<!--End Including Header-->

  	<!-- Video background start-->
  	<div class="container-fluid remove-vid-marg">
     <div class="vid-parent">
     	<video playsinline autoplay muted loop>
     	 	<source src="video/banvid.mp4">
     		
     	</video>
     	<div class="vid-overlay">

     	</div>
     </div>

     <div class="vid-content">
     	<h1 class="my-content"> Welcome to Online School</h1>
     	<small class="my-content">Jore Jore Chillao</small><br>

      <?php
         if(!isset($_SESSION['is_login'])){
          echo '<a href="#" class="btn btn-danger mt-3"  data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
         }
         else
         {
          echo '<a href="#" class="btn btn-primary mt-3">My Profile</a> ';
         }

      ?>
     	
     	
     </div>

  	</div>

  	<!-- Video background End-->

  	<!-- start text Banner-->
        <div class="container-fluid bg-danger txt-banner">
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

  	<!-- End Text Banner-->

  	<!-- Start popular Course-->
  	<div class="container mt-5">
  		<h1 class="text-center">Popular Courses</h1>
  		<!-- Start Most popular Course 1st Card Deck-->
  		<div class="card-deck mt-4">
  			<a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
  				<div class="card">
  					<img src="image/course/guitar.jpg" class="card-img-top" alt="Guitar" />
  					<div class="card-body">
  						<h5 class="card-title">Learn Guitar Easy Way</h5>
  						<p class="card-text">Lorem ipsum dolor sit amet consecteture adipisicing elit. Facilitis, memo.</p>
  					</div>
  					<div class="card-footer">
  						<p class="card-text d-inline">Price: <small><del>&#2547 3000</del></small>
  						<span class="font-weight-bolder">&#2547 2000</span></p><a class="btn btn-primary text-white
  						font-weight-bolder float-right" href="#">Enroll</a>
  						
  					</div>
  					
  				</div>
  			</a>
  			<a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
  				<div class="card">
  					<img src="image/course/guitar.jpg" class="card-img-top" alt="Guitar" />
  					<div class="card-body">
  						<h5 class="card-title">Learn Guitar Easy Way</h5>
  						<p class="card-text">Lorem ipsum dolor sit amet consecteture adipisicing elit. Facilitis, memo.</p>
  					</div>
  					<div class="card-footer">
  						<p class="card-text d-inline">Price: <small><del>&#2547 3000</del></small>
  						<span class="font-weight-bolder">&#2547 2000</span></p><a class="btn btn-primary text-white
  						font-weight-bolder float-right" href="#">Enroll</a>
  						
  					</div>
  					
  				</div>
  			</a>
  			<a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
  				<div class="card">
  					<img src="image/course/guitar.jpg" class="card-img-top" alt="Guitar" />
  					<div class="card-body">
  						<h5 class="card-title">Learn Guitar Easy Way</h5>
  						<p class="card-text">Lorem ipsum dolor sit amet consecteture adipisicing elit. Facilitis, memo.</p>
  					</div>
  					<div class="card-footer">
  						<p class="card-text d-inline">Price: <small><del>&#2547 3000</del></small>
  						<span class="font-weight-bolder">&#2547 2000</span></p><a class="btn btn-primary text-white
  						font-weight-bolder float-right" href="#">Enroll</a>
  						
  					</div>
  					
  				</div>
  			</a>
  		</div>
  		<!--End Most popular Course 1st Card Deck-->

  		<!-- Start Most popular Course 1st Card Deck-->
  		<div class="card-deck mt-4">
  			<a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
  				<div class="card">
  					<img src="image/course/python.png" class="card-img-top" alt="Python" />
  					<div class="card-body">
  						<h5 class="card-title">Learn Python Easy Way</h5>
  						<p class="card-text">Lorem ipsum dolor sit amet consecteture adipisicing elit. Facilitis, memo.</p>
  					</div>
  					<div class="card-footer">
  						<p class="card-text d-inline">Price: <small><del>&#2547 4000</del></small>
  						<span class="font-weight-bolder">&#2547 2500</span></p><a class="btn btn-primary text-white
  						font-weight-bolder float-right" href="#">Enroll</a>
  						
  					</div>
  					
  				</div>
  			</a>
  			<a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
  				<div class="card">
  					<img src="image/course/python.png" class="card-img-top" alt="Python" />
  					<div class="card-body">
  						<h5 class="card-title">Learn Python Easy Way</h5>
  						<p class="card-text">Lorem ipsum dolor sit amet consecteture adipisicing elit. Facilitis, memo.</p>
  					</div>
  					<div class="card-footer">
  						<p class="card-text d-inline">Price: <small><del>&#2547 4000</del></small>
  						<span class="font-weight-bolder">&#2547 2500</span></p><a class="btn btn-primary text-white
  						font-weight-bolder float-right" href="#">Enroll</a>
  						
  					</div>
  					
  				</div>
  			</a>
  			<a href="#" class="btn" style="text-align: left; padding: 0px; margin: 0px;">
  				<div class="card">
  					<img src="image/course/python.png" class="card-img-top" alt="Python" />
  					<div class="card-body">
  						<h5 class="card-title">Learn Python Easy Way</h5>
  						<p class="card-text">Lorem ipsum dolor sit amet consecteture adipisicing elit. Facilitis, memo.</p>
  					</div>
  					<div class="card-footer">
  						<p class="card-text d-inline">Price: <small><del>&#2547 4000</del></small>
  						<span class="font-weight-bolder">&#2547 2500</span></p><a class="btn btn-primary text-white
  						font-weight-bolder float-right" href="#">Enroll</a>
  						
  					</div>
  					
  				</div>
  			</a>
  		</div>
  		<!--End Most popular Course 1st Card Deck-->

  		<div class="text-center m-2">
  			<a class="btn btn-danger btn-sm" href="#">View All Courses</a>
  			
  		</div>
  		
  	</div>

  	<!-- End Most popular Course-->

  	<!-- Start Contact Us-->
      <?php
  	   include('./contact.php');
       ?>

  	<!--End Contact Us-->


    <!-- Start Students Terminal-->
   
<section class="testimonials">
  <div class="container-fluid mt-5" style="background-color: #4B7289" id="Feedback">
      <h1 class="text-center testyheading p-4"> Student's Feedback </h1>

      <div class="row">
        <div class="col-sm-12">
          <div id="customers-testimonials" class="owl-carousel">

            <!--TESTIMONIAL 1 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="image/stu/student-1.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">Saiful Islam</div>
            </div>
            <!--END OF TESTIMONIAL 1 -->
            <!--TESTIMONIAL 2 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="image/stu/student-2.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">Neaj Morshad Ashik</div>
            </div>
            <!--END OF TESTIMONIAL 2 -->
            <!--TESTIMONIAL 3 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="image/stu/student-3.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">Sahin Alam</div>
            </div>
            <!--END OF TESTIMONIAL 3 -->
            <!--TESTIMONIAL 4 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="image/stu/student-4.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">Shamim Sarkar</div>
            </div>
            <!--END OF TESTIMONIAL 4 -->
            <!--TESTIMONIAL 5 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="image/stu/student-5.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">Sadia Jannat</div>
            </div>
            <!--END OF TESTIMONIAL 5 -->
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- END OF TESTIMONIALS -->

    <!-- Start Social Follow-->
    <div class="container-fluid bg-danger">
      <div class="row text-white text-center p-1">
         <div class="col-sm">
           <a href="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
         </div>

         <div class="col-sm">
           <a href="text-white social-hover" href="#"><i class="fab fa-twitter"></i>Twitter</a>
         </div>

         <div class="col-sm">
           <a href="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i>Whatsapp</a>
         </div>

         <div class="col-sm">
           <a href="text-white social-hover" href="#"><i class="fab fa-instagram"></i>Instagram</a>
         </div>
        
      </div>
      
    </div>
    <!-- End Social follow-->

    <!-- Start About Section-->
    <div class="container-fluid p-4" style="background-color: #E9ECEF">
        <div class="container" style="background-color: #E9ECEF">
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
                <h5>Contact Us</h5>
                <p>MA OnlineSchool<br>Gendaria,<br>Dhaka,<br>Bangladesh.<br>ph: 01640690531</p>
               
             </div>
            
          </div>
          
        </div>
    </div>
    <!--End About Section-->

<!---Start Including Footer-->
<?php
include('./mainIncluding/footer.php');
?>
<!-- End Including Footer-->