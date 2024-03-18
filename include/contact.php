<?php

include "config.php";
session_start();
if($_POST)
{
	
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
	$sql="INSERT INTO `feedback`(`name`, `subject`, `email`, `message`) VALUES ('".$name."', '".$subject."', '".$email."', '".$message."')";
	mysqli_query($con, $sql);
	}
	header('Location: ../contacts.php')
?>