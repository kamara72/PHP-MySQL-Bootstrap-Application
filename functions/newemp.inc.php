<?php 
	$msg = "";
	if (isset($_POST['save-emp'])) {
		$fname = $_POST['fname'];
		$contact = $_POST['contact'];
		$salary = $_POST['salary'];
		$tax = $_POST['tax'];

		$fname = mysqli_real_escape_string($con, $fname);
		$contact = mysqli_real_escape_string($con, $contact);
		$salary = mysqli_real_escape_string($con, $salary);
		$tax = mysqli_real_escape_string($con, $tax);

		if (empty($fname) || empty($contact) || empty($salary) || empty($tax)) {
			$msg = "No empty field is allowed, fill all!";
		}else{
			$sql = "INSERT INTO tbl_employee(Fullname, Contact, Salary, Tax) VALUES('$fname', '$contact', '$salary', '$tax');";
			mysqli_query($con, $sql);
			$msg = "You saved a new employee record";
		}
	}else{
		$msg = "Save a new employee record";
	}
 