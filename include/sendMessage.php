<?php

include "config.php";
include "../index.php";
session_start();
if($_POST)
{
    $msg=$_POST['thisid'];
    $sql = "SELECT * FROM campaign WHERE id = '$msg'";
    $fromdb = mysqli_query($con, $sql);
    mysql_fetch_array($fromdb);
    $usersjoined = $fromdb['usersjoined'];
    $usersjoined++;
	$sql2 = "UPDATE `campaign` SET `usersjoined` = '$usersjoined' WHERE `id` = ".$fromdb['id'].")";

	$query = mysqli_query($con, $sql2);
	if($query)
	{
		header('Location: ../campaigns.php');
	}
	else
	{
		echo "Something went wrong";
	}
	
	}
?>