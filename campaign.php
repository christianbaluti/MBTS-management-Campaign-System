<?php

include_once 'include/menu2.php';

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

?>


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Campaign Page</li>
        </ol>

<br><br>
          <?php 
        // Retrieve the posts from the database
        $sql = "SELECT * FROM campaign";
        $result = mysqli_query($con, $sql);
        $img = 1;


        // Display the posts
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='bd-row bd-border bd-card bd-white'>
              <div class='bd-half bd-border fluid'>
                <img src='assets/img/campaign/".$img.".jpg' alt='Campaign image' style='width:100%'>
              </div>
            <div class='bd-half bd-container'><br><br>
                <div class='bd-center bd-text-medium'><p>";
                $img++;
          echo $row['location'] . "</p><p>";
          echo $row['date_made'] . "</p><p>For More info Call ";
          echo $row['contact'] . "</p><br><div class='text-center' ><form method='post' action='include/sendMessage.php'><a href='login.php' class='mybutton' style='background: #071527; color:#f6f9fd;padding:20px; margin:20px; ' onclick='alert(" . '"You must Log In or Join first"' . ")". "'>Join Campaign</a></form></div></div><br></div></div><br><br><br>";
          }

           ?>
      </div>
    </section><!-- End Breadcrumbs -->
  </main>
  <?php

include_once 'include/footer.php'

?>