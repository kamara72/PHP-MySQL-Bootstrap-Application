<?php session_start(); ?>
<?php include '../includes/header.inc.php'; ?>
<?php require_once '../functions/dbhandler.inc.php'; ?>

<?php 
	$emp_sql = "SELECT * FROM tbl_employee";
	$emp_res = mysqli_query($con, $emp_sql);
 ?>

 <?php 
	$user_sql = "SELECT * FROM tbl_users";
	$user_res = mysqli_query($con, $user_sql);
 ?>

<style type="text/css">
	.box {
		height: 500px;
		overflow: scroll;
	}
</style>

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
				  <a href="authorprofile.php" class="list-group-item list-group-item-action">Profile</a>
				  <a href="editrecords.php" class="list-group-item list-group-item-action active">View Records</a>
				</div>				
			</div>
			
			<div class="col-lg-10 col-md-10 col-sm-8 col-xs-12 box">
				<h3 class="page-header text-center">Employees Record Table</h3>
					<table class="table table-striped table-dark">
					  <thead>
					    <tr class="text-center">
					      <th scope="col">ID</th>
					      <th scope="col">Full Name</th>
					      <th scope="col">Contact</th>
					      <th scope="col">Salary</th>
					      <th scope="col">Tax</th>
					      <th scope="col">Net Income</th>
					      <th scope="col">Annual Income</th>
					      <th scope="col">Actions</th>
					    </tr>
					  </thead>
					  <tbody>

					    <?php 
					    	while ($rows = mysqli_fetch_assoc($emp_res)) {
					    		echo "<tbody>";
					    		echo "<th scope='row'>".$rows['Emp_id']."</th>";
					    		echo "<td>".$rows['Fullname']."</td>";
					    		echo "<td>".$rows['Contact']."</td>";
					    		echo "<td>".$rows['Salary']."</td>";
					    		echo "<td>".$rows['Tax']."</td>";
					    		echo "<td>".$rows['Net_Income']."</td>";
					    		echo "<td>".$rows['Annual_Income']."</td>";
					    		echo "<td><a class='btn btn-info btn-sm' href=\"editemp.php?Emp_id=".$rows['Emp_id']."\">Edit</a> <a class='btn btn-danger btn-sm' href=\"../functions/deleteemployee.inc.php?Emp_id=".$rows['Emp_id']."\">Delete</a></td>";
					    		echo "<tbody>";
					    	}
					     ?>
					  </tbody>
					</table>


					<h3 class="page-header text-center">Users Record Table</h3>
					<table class="table table-striped table-dark">
					  <thead>
					    <tr class="text-center">
					      <th scope="col">ID</th>
					      <th scope="col">Full Name</th>
					      <th scope="col">User Name</th>
					      <th scope="col">User Type</th>
					      <th scope="col">Actions</th>
					    </tr>
					  </thead>
					  <tbody>

					    <?php 
					    	while ($rows = mysqli_fetch_assoc($user_res)) {
					    		echo "<tbody>";
					    		echo "<th scope='row'>".$rows['User_id']."</th>";
					    		echo "<td>".$rows['Fullname']."</td>";
					    		echo "<td>".$rows['Username']."</td>";
					    		echo "<td>".$rows['User_Type']."</td>";
					    		echo "<td><a class='btn btn-info btn-sm' href=\"edituser.php?User_id=".$rows['User_id']."\">Edit</a> <a class='btn btn-danger btn-sm' href=\"../functions/deleteuser.inc.php?User_id=".$rows['User_id']."\">Delete</a></td>";
					    		echo "<tbody>";
					    	}
					     ?>
					  </tbody>
					</table>
			</div>
		</div>

	</div>


<?php include '../includes/footer.inc.php'; ?>