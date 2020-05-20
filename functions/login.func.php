<?php
	$msg = "";
		if (isset($_POST['sub-login'])) {
			$uname = $_POST['uname'];
			$pswd = $_POST['pswd'];
			$user = $_POST['user'];
			if (empty($uname) || empty($pswd) || empty($user)) {
				$msg = "Please fill all fields.";
			}else {
				$sql = "SELECT * FROM tbl_users WHERE Username = '$uname' AND User_Type = '$user';";
				$res = mysqli_query($con, $sql);
				$rows = mysqli_num_rows($res);
				if ($rows < 1) {
					$msg = "Username and type do not match";
				}else {
					if ($row = mysqli_fetch_assoc($res)) {
						$dehash = password_verify($pswd, $row['Password']);
						if ($dehash == false) {
							$msg = "Wrong password entered";
						}elseif ($dehash == true) {
							switch ($user) {
								case 'Admin':
									session_start();
									$_SESSION['uname'] = $rows['Username'];
									header("Location: pages/admindashboard.php");
									break;

								case 'User':
									session_start();
									$_SESSION['uname'] = $rows['Username'];
									header("Location: pages/userdashboard.php");
									break;

								default:
									$msg = "Wrong user type entered";
									break;
							}
						}
					}
				}
			}
		}else {
			$msg = "Enter full credential to log in";
		}