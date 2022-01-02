    <!--Start Footer-->
    <footer class="container-fluid bg-dark text-center p-2">
        <small class="text-white">Copyright &copy; 2020 || Design by <a href="https://www.facebook.com/morshed.cse.jnu/">Morshed</a> & <a href="https://www.facebook.com/ashraful.cse.jnu/">Ashraful</a> || <a href="#login" data-toggle="modal" data-target="#adminLoginModalCenter"> Admin Login</a></small>
      
    </footer>
    <!--Footer End-->
    <!--Start Admin Log In Modal-->


      <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="stuLoginModalCenterLabel">Admin Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Start admin Login  Form-->
              <form id="adminLoginForm">
    
                <div class="form-group">
                   <i class="fas fa-envelope"></i><label for="adminLogemail" class="p1-2 font-weight-bold">
                     Email</label><input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
                </div>
                <div class="form-group">
                   <i class="fas fa-key"></i><label for="adminLogpass" class="p1-2 font-weight-bold">
                     Password</label><input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
                </div>
              </form>
              <!-- END admin Login  Form-->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="checkAdminLogin()">Login</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              
            </div>
          </div>
        </div>
      </div>

    <!--End Admin Log In Modal-->


    <!--Start Student Log In Modal-->


      <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="stuLoginModalCenterLabel">Student Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Start Student Login Form-->
              <form id="stuLoginForm">
    
                <div class="form-group">
                   <i class="fas fa-envelope"></i><label for="stuLogemail" class="p1-2 font-weight-bold">
                     Email</label><input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
                </div>
                <div class="form-group">
                   <i class="fas fa-key"></i><label for="stuLogpass" class="p1-2 font-weight-bold">
                     Password</label><input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
                </div>
              </form>
              <!-- END Student Login Form-->
            </div>
            <div class="modal-footer">
              <small id="statusLogMsg"></small>
              <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              
            </div>
          </div>
        </div>
      </div>

    <!--End Student Log In Modal-->

    <!--Start Student Registration Modal-->


      <div class="modal fade" id="stuRegModalCenter" tabindex="-1" role="dialog" aria-labelledby="stuRegModalCenterLabe1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="stuRegModalCenterLabe1">Student Registration</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Start Student Registration Form-->
              <?php include('studentRegistration.php'); ?>
              <!-- END Student Registration Form-->
            </div>
            <div class="modal-footer">
              <span id="successMsg"></span>
              <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              
            </div>
          </div>
        </div>
      </div>

    <!--End Student Registration Modal-->

	<!-- Jquery and Bootstrap Javasrcipt--> 
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs/dist/tf.min.js"> </script>

	<!-- Fontawesome Javasrcipy-->
	
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <!-- Student Testimonial owl Slider Js-->
  <script type="text/javascript" src="js/owl.min.js"></script>
  <script type="text/javascript" src="js/testyslider.js"></script>

  <!--Student Ajax call Javasrcipt-->
  <script type="text/javascript" src="js/ajaxrequest.js"></script>

  <!--Admin Ajax call Javasrcipt-->
  <script type="text/javascript" src="js/adminajaxrequest.js"></script>
 
</body>
</html>