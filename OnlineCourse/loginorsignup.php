
<?php
include('./dbConnection.php');
include('./mainIncluding/header.php');
?>


<!-- Start course page Banner-->

<div class="container-fluid bg-dark">
	<div class="row">
		<img src="image/coursebanner.jpg" alt="courses" style="height: 500px; width: 100%; object-fit: cover;box-shadow: 10px;"/>
		
	</div>
	
</div>
<!--End course page Banner-->

<div class="conaiter jumbotron mb-5" style="margin-left: 200px; margin-right: 200px;">
	<div class="row" >
		<div class="col-md-5" >
			<h5 class="mb-3">If Already Registered! Login</h5>
			<form role="form" id="stuLoginForm">
				<div class="form-group">
					<i class="fas fa-envelope"></i><label for="stuLogemail" class="pl-2 font-weight-bold">Email</label><small id="statusLogMsg1"></small><input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
				</div>

				<div class="form-group">
					<i class="fas fa-key"></i>
					<label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
					<input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
				</div>
              <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
			</form><br/>
			<small id="statusLogMsg"></small>
		</div>
		<div class="col-md-5 offset-md-1">
			<h5 class="mb-3">New User !! Sign Up</h5>
			<form role="form" id="stuRegForm">
				<div class="form-group">
					<i class="fas fs-user"></i>
					<label for="stuname" class="pl-2 font-weight-bold">Name
					</label>
					<small id="statusMsg1"></small>
					<input type="text" class="form-control" placeholder="name" name="stuname" id="stuname">
				</div>
				<div class="form-group">
					<i class="fas fa-enelope"></i>
					<label for="stuemail" class="pl-2 font-weight-bold">Email
					</label>
					<small id="statusMsg2"></small>
					<input type="text" class="form-control" placeholder="email" name="stuemail" id="stuemail">
					<small class="form-text">We'll never share your email with anyone else.</small>
				</div>


				<div class="form-group">
					<i class="fas fa-key"></i>
					<label for="stupass" class="pl-2 font-weight-bold">New Password</label>
					<small id="statusMsg3"></small>
					<input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
				</div>
				<button type="button" class="btn btn-primary" id="signup" onclick="addStu()">Sign Up</button>
			</form> <br/>
			<small id="successMsg"></small>
			
		</div>
	</div>
</div>
<hr/>

<?php 
include('./contact.php')

?>

<?php
include('./mainIncluding/footer.php');
?>