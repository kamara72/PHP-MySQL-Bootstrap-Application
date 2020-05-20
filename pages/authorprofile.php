<?php session_start(); ?>
<?php include '../includes/header.inc.php'; ?>



<div class="container">

		<div class="row pt-3">
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
				
				<div class="list-group text-center">
				  <a href="admindashboard.php" class="list-group-item list-group-item-action">
				    Dashboard
				  </a>
				  <a href="newadmin.php" class="list-group-item list-group-item-action">
				    New Admin
				  </a>
				  <a href="newemployee.php" class="list-group-item list-group-item-action">New Employee</a>
				  <a href="authorprofile.php" class="list-group-item list-group-item-action active">Profile</a>
				  <a href="editrecords.php" class="list-group-item list-group-item-action">View Records</a>
				</div>				
			</div>
			
			<div class="col-lg-10 col-md-10 col-sm-8 col-xs-12 box">
				<div class="row">
					<div class="col-lg-6 col-sm-3 col-xs-12">
						<div class="card" style="width: 18rem;">
						  <img class="card-img-top b-3" src="../images/developer.jpg" alt="Card image cap" >
						  <div class="card-body">
						    <h5 class="card-title">Banagalee Kamara Jr.</h5>
						    <p class="card-text">An intermediate level developer and senior back end programmer</p>
						    <a href="www.facebook.com" class="btn btn-primary">Like Me</a>
						  </div>
						</div>
					</div>
					<div class="col-lg-6 col-sm-3 col-xs-12">
						<h2 class="text-primary">About Me</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						</p>
						<h4 class="text-primary">Education</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						</p>
						<h4 class="text-primary">Follow me on:</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequa
						</p>
					</div>
				</div>
				
			</div>
		</div>

	</div>


<?php include '../includes/footer.inc.php'; ?>