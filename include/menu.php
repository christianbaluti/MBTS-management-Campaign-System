<?php

include_once 'notification.php';    



if (strlen($_SESSION['id']==0)) {
  header('location:index.php');
  } else{

    $thisuserid=$_SESSION['id'];
    $query=mysqli_query($con,"select * from users where id='$thisuserid'");
    while($resultofuser=mysqli_fetch_array($query)){
    $username = $resultofuser['email'];
    }


    

 ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <link href="assets/img/favicon.png" rel="icon">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blood Donor Interactive System</title>


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">


  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/bd.css" rel="stylesheet">
<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" style="box-shadow: 10px">
    <div class="container d-flex align-items-center">

      <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="home.php">Home</a></li>
          <li><a href="campaigns.php">Campaign</a></li>
          <li><a href="contacts.php">Contact</a></li>          
          <li><a href="#" onclick="document.getElementById('id01').style.display='block'"> <?php echo $username;?></a></li><?php  }?>
          <li><a href="logout.php">Log Out</a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  