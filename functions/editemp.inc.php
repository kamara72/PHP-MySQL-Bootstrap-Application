<?php 
	
	$Id = $_POST['id'];
	$fname = $_POST['fname'];
	$contact = $_POST['contact'];
	$salary = $_POST['salary'];
	$tax = $_POST['tax'];	

	require_once '../functions/dbhandler.inc.php'; 


	$sql = "UPDATE tbl_employee SET Fullname = '$fname', Contact = '$contact', Salary = '$salary', Tax = '$tax' WHERE Emp_id = '$Id'";
	mysqli_query($con, $sql);

	header("Location: ../pages/admindashboard.php");
