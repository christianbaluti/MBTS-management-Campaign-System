<?php

if (isset($_POST['submit'])) {
	# code...
	include_once 'dbh.inc.php';

	$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$gender = mysqli_real_escape_string($conn, $_POST['gender']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
	$dob = mysqli_real_escape_string($conn, $_POST['dob']);
	$location = mysqli_real_escape_string($conn, $_POST['location']);
	$bg = mysqli_real_escape_string($conn, $_POST['bg']);
	$weight = mysqli_real_escape_string($conn, $_POST['weight']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);


	if (empty($first_name) || empty($last_name) || empty($email) || empty($gender) || empty($contact) || empty($dob) || empty($location) || empty($password)) {
		# code...
		header("Location: ../sign-up.php?signup=empty");
		exit();
		} else {
		if(!preg_match("/^[a-zA-Z]*$/", $first_name) || !preg_match("/^[a-zA-Z]*$/", $last_name))
		{
			header("Location: ../sign-up.php?sign-up=invalid");
			exit();
		} else {
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
					$sql = "INSERT INTO user (first_name, last_name, email, gender, contact, dob, location, bg, weight, password) VALUES ('$first_name', '$last_name', '$email', '$gender', '$dob', '$location', '$bg', '$weight', '$hashedPwd');";
					mysqli_query($conn, $sql);
					header("Location: ../sign-up.php?signup=success");
					exit();
				}
			
		}
	}




} else {
	header("Location: ../sign-up.php");
	exit();
}



























 /* session_start();
require_once('config.php');

//Code for Registration 
if(isset($_POST['submit']))
{
    $address=$_POST['address'];
    $blood_group=$_POST['blood_group'];
    $date_of_birth=$_POST['date_of_birth'];
    $email=$_POST['email'];
    $first_name=$_POST['first_name'];
    $gender=$_POST['gender'];
    $last_name=$_POST['last_name'];
    $password=$_POST['password'];
    $phone_number=$_POST['phone_number'];
    $weight=$_POST['weight'];
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
    $msg=mysqli_query($con,"insert into user(address,blood_group,date_of_birth,email,first_name ,gender,last_name,password,phone_number, weight) values('$address','$blood_group', '$date_of_birth', '$email', '$first_name' ,'$gender', '$last_name', '$password', '$phone_number', '$weight')");

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    echo "<script type='text/javascript'> document.location = '../login.php'; </script>";
}
}
} */
?>