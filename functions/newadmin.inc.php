<?php
	$msg = "";
	if (isset($_POST['save-adm'])) {
		$fname = $_POST['fname'];
		$uname = $_POST['uname'];
		$pswd = $_POST['pswd'];
		$user_type = $_POST['user_type'];

		$fname = mysqli_real_escape_string($con, $fname);
		$uname = mysqli_real_escape_string($con, $uname);
		$pswd = mysqli_real_escape_string($con, $pswd);
		$user_type = mysqli_real_escape_string($con, $user_type);

		if (empty($fname) || empty($uname) || empty($pswd) || empty($user_type)) {
			$msg = "No empty field is allowed, fill all!";
		}else{
			if (!filter_var($uname, FILTER_VALIDATE_EMAIL)) {
				$msg = "Please enter mail type username!";
			}else{
				$has_pswd = password_hash($pswd, PASSWORD_DEFAULT);
				$sql = "INSERT INTO tbl_users(Fullname, Username, Password, User_Type) VALUES('$fname', '$uname', '$has_pswd', '$user_type');";
				mysqli_query($con, $sql);
				$msg = "You saved a new admin record";
			}
		}
	}else{
		$msg = "Save a new admin record";
	}