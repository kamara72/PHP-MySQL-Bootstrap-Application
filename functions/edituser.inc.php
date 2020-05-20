<?php 
	
	$Id = $_POST['id'];
	$fname = $_POST['fname'];
	$uname = $_POST['uname'];
	$pswd = $_POST['pswd'];
	$user_type = $_POST['user_type'];	

	require_once '../functions/dbhandler.inc.php'; 

	$hash_pswd = password_hash($pswd, PASSWORD_DEFAULT);

	$sql = "UPDATE tbl_users SET Fullname = '$fname', Username = '$uname', Password = '$hash_pswd', User_Type = '$user_type' WHERE User_id = '$Id'";
	mysqli_query($con, $sql);

	header("Location: ../pages/editrecords.php");
