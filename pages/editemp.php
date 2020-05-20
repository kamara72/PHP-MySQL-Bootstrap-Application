<?php session_start(); ?>
<?php include '../includes/header.inc.php'; ?>
<?php 	
	$Id = $_GET['Emp_id'];

	require_once '../functions/dbhandler.inc.php'; 
?>

<?php 
	$sql = "SELECT * FROM tbl_employee WHERE Emp_id = '$Id'";
	$res = mysqli_query($con, $sql);
	$rows = mysqli_fetch_assoc($res);
 ?>


<div class="container">
	<style type="text/css">
		.lead {
			font-family: Arial Black, sans-serif;
			font-size: 1.2rem;
			color: blue;
			font-weight: bold;
			font-family: -apple-system;
		}

	</style>

		<div class="row pt-3">
			<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
				
				<div class="list-group text-center">
				  <a href="admindashboard.php" class="list-group-item list-group-item-action active">
				    Dashboard
				  </a>
				  <a href="newadmin.php" class="list-group-item list-group-item-action">
				    New Admin
				  </a>
				  <a href="newemployee.php" class="list-group-item list-group-item-action">New Employee</a>
				  <a href="authorprofile.php" class="list-group-item list-group-item-action">Profile</a>
				  <a href="editrecords.php" class="list-group-item list-group-item-action">View Records</a>
				</div>				
			</div>

			<div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
				<div class="container col-7 text-center">
					<p class="col-sm-10 lead p-1">
						Employee Record to update...
					</p>
					<form method="POST" action="../functions/editemp.inc.php">
			            <div class="form-group row">
			              <div class="col-sm-10">
			                <input type="text" readonly value="<?php echo $rows['Emp_id'] ?>" name='id' class="form-control" id="colFormLabelSm">
			              </div>
			            </div>
			            <div class="form-group row">
			              <div class="col-sm-10">
			                <input type="text" value="<?php echo $rows['Fullname'] ?>" name='fname' class="form-control" id="colFormLabelSm">
			              </div>
			            </div>
			            <div class="form-group row">
			              <div class="col-sm-10">
			                <input type="text" value="<?php echo $rows['Contact'] ?>" name='contact' class="form-control" id="colFormLabel">
			              </div>
			            </div>
			            <div class="form-group row">
			              <div class="col-sm-10">
			                <input type="text" value="<?php echo $rows['Salary'] ?>" name='salary' class="form-control" id="colFormLabel">
			              </div>
			            </div>
			            <div class="form-group row">
			              <div class="col-sm-10">
			                <input type="text" value="<?php echo $rows['Tax'] ?>" name='tax' class="form-control" id="colFormLabel">
			              </div>
			            </div>

			            <div class="form-group row pt-4">
			              <div class="col-sm-10">
			              	<button type="submit" name="save-emp" class="btn btn-primary col-7 mx-auto">Update</button>
			              </div>
			       		</div>
		          </form>
				</div>
			</div>
		</div>



</div>