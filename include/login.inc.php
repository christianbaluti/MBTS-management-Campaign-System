<?php 

session_start();

if (isset($_POST['submit'])) {
	# code...
	include 'connectpage.php';

	$uid = mysqli_real_escape_string($con, $_POST['uid']);
	$pwd = mysqli_real_escape_string($con, $_POST['pwd']);


	//error handling
	//if inputs are empty
	if (empty($uid) || empty($pwd)) {
		# code...
		header("Location: ../first.php?login=empty");
			exit();

	} else {
			$sql = "SELECT * FROM users WHERE user_uid = '$uid'";
			$result = mysqli_query($con, $sql);
			$resultCheck = mysqli_num_rows($result);
				if ($resultCheck < 1) {
					# code...
					header("Location: ../first.php?login=error");
				exit();

			} else {
			if ($row = mysqli_fetch_assoc($result)) {
			# code...
			// de-hashing 
			$hashedPwdCheck == password_verify($pwd, $row['user_pwd']);
			if ($hashedPwdCheck == false) {
				# code...
				header("Location: ../first.php?login=error");
				exit();
			}elseif ($hashedPwdCheck == true) {
				# code...
				$_SESSION['u_id'] = $row['user_id'];
				$_SESSION['u_first'] = $row['user_first'];
				$_SESSION['u_last'] = $row['user_last'];
				$_SESSION['u_email'] = $row['user_email'];
				$_SESSION['u_uid'] = $row['user_uid'];
				header("Location: ../first.php?login=success");
				exit();
			}

			}//close

			}
		}
	}

	

else {
		header("Location: ../first.php?login=errorone");
		exit();
	}

?>