<?php 
	session_start();
	
	require_once 'functions/dbhandler.inc.php';
	require 'functions/login.func.php';
	include 'includes/header.inc.php';
?>

	<style type="text/css">
		.lead {
			font-family: Arial Black, sans-serif;
			font-size: 1.2rem;
			color: blue;
			font-weight: bold;
			font-family: -apple-system;
		}

	</style>
	<div class="container">

		<div class="row pt-5">
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
				  <div class="card-header">Tool</div>
				  <div class="card-body">
				    <h5 class="card-title">PHP, MySQL, Bootstrap</h5>
				    <p class="card-text">This is a simple web application built using the above tool. It is a CRUD application that store information about employees yearly activities</p>
				  </div>
				</div>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
				<div class="container col-7 text-center">
					<p class="col-sm-10 lead p-1">
						<?php echo $msg; ?>
					</p>
					<form method="POST" action="index.php">
			            <div class="form-group row">
			              <div class="col-sm-10">
			                <input type="text" placeholder="Username..." name='uname' class="form-control" id="colFormLabelSm">
			              </div>
			            </div>
			            <div class="form-group row">
			              <div class="col-sm-10">
			                <input type="password" placeholder="Password" name='pswd' class="form-control" id="colFormLabel">
			              </div>
			            </div>
			            <div class="form-group row">
			              <div class="col-sm-10">
			              	<select name='user' class="form-control">
			              		<option>Admin</option>
			              		<option>User</option>
			              	</select>
			              </div>
			            </div>
			            <div class="form-group row pt-4">
			              <div class="col-sm-10">
			              	<button type="submit" name="sub-login" class="btn btn-primary col-7 mx-auto">Log In</button>
			              </div>
			       		</div>
		          </form>
				</div>
			</div>
		</div>

	</div>


<?php include 'includes/footer.inc.php'; ?>