<?php 
	
	$Id = $_GET['Emp_id'];

	require_once '../functions/dbhandler.inc.php'; 


	$sql = "DELETE FROM tbl_employee WHERE Emp_id = '$Id'";
	mysqli_query($con, $sql);

	header("Location: ../pages/admindashboard.php");

