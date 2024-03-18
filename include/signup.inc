<?php 

if (isset($_POST['submit'])) {
	# code...
	include_once 'connectpage.php';

	$address = mysqli_real_escape_string($conn, $_POST['address']);
	$blood_group = mysqli_real_escape_string($conn, $_POST['blood_group']);
	$date_of_birth = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
	$weight = mysqli_real_escape_string($conn, $_POST['weight']);

	//error handlers
	//check for empty fields
	if (empty($address) || empty($blood_group) || empty($date_of_birth) || empty($email) || empty($first_name) || empty($gender) || empty($last_name) || empty($password) || empty($phone_number) || empty($weight)) {
		# code...
		header("Location: ../sign-up.php?signup=empty");
		exit();
	} else {
		//check if input characters are valid
		if(!preg_match("/^[a-zA-Z]*$/", $first_name) || !preg_match("/^[a-zA-Z]*$/", $last_name))
		{
			header("Location: ../sign-up.php?signup=invalid");
			exit();
		} else {
			//if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				# code...
				header("Location: ../sign-up.php?signup=email");
				exit();
			}
			else {
				$sql = "SELECT * FROM user WHERE email = '$email'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					# code...
					header("Location: ../sign-up.php?signup=emailtaken");
				exit();
				} else {
					//hashing the password
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					//insert the user into database
					$sql = "INSERT INTO users (address, blood_group, date_of_birth, email, first_name, gender, last_name, password, phone_number, weight) VALUES ('$address', '$blood_group', '$date_of_birth', '$email', '$first_name', '$gender', '$last_name', '$hashedPwd', 'phone_number', '$weight');";
					mysqli_query($conn, $sql);
					header("Location: ../sign-up.php?sign-up=success");
				exit();

				}

			}
		}
	}

}

else {
	header("Location: ../sign-up.php");
	exit();
}

?>