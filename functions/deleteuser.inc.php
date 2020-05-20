<?php 

	$Id = $_GET['User_id'];


	require_once '../functions/dbhandler.inc.php';
	

	$sql = "DELETE FROM tbl_users WHERE User_id = '$Id';";
	mysqli_query($con, $sql);

	header("Location: ../pages/editrecords.php");
