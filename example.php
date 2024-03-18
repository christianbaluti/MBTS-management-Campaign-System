<?php
session_start();
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'mbts');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

 	if (isset($_POST)) {
 		# code....
 		

 		function joinCampaign($idd, $bguser)
		{
			# code...
			$sql = "SELECT * FROM campaign";
			$result = mysqli_query($GLOBALS['con'], $sql);
			$row = mysqli_fetch_assoc($result);
			echo "this is ".$row['id'];
			
				echo "helooooo";
				$sql3 = "UPDATE campaign SET usersjoined = usersjoined+1 WHERE id = $idd";
			    mysqli_query($GLOBALS['con'], $sql3);
			    $sql4 = "UPDATE campaign SET $bguser = $bguser+1 WHERE id = $idd";
			    mysqli_query($GLOBALS['con'], $sql4);

			    header('Location: home.php');
			
		}

		echo "hello <br>";
 		$idd = $_GET['id'];
 		echo $idd;
 		$iidd = $_SESSION['id'];
 		#echo $iidd;
 		echo "<br>";
 		$sql3 = "SELECT bg FROM users WHERE id = $iidd";
 		$result3 = mysqli_query($con, $sql3);
 		$result4 = mysqli_fetch_assoc($result3);
 		$bguser = $result4['bg'];
 		echo $bguser;

 		joinCampaign($idd, $bguser);
 		
 	}
 ?>