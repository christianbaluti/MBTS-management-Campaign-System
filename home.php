

<?php

include_once 'include/menu.php'

?>


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>MBTS Blood Campaign Management System</span></h2>
              <p class="animate__animated animate__fadeInUp">Helping in saving lives.</p>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Why should you donate blood</h2>
              <p class="animate__animated animate__fadeInUp"> To help in saving lives.</p>
            </div>
          </div>
        </div>



      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->






  <main id="main">

    <!-- ======= Campaign Section ======= -->
    <section id="campaign" class="campaign">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Campaign</h2>
          <p>Campaigns</p>
        </div>

        <?php 

        if (isset($_SESSION['id'])) {
          # code...
          echo "";
        }

         ?>
         
        <div class="row content">
          <div class="col-lg-6">
            <p>
              A simple description about campaigns and their importances bla bla bla
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              More talk about campaigns bla bla bla 
            </p>
            <a href="campaign.php" class="btn-learn-more">Learn More</a>
          </div>
        </div>
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
                $id = $row['id'];
          echo $row['location'] . "</p><p>";
          echo $row['date_made'] . "</p><p>For More info Call ";
          echo $row['contact'] . "</p><div class='text-center' > 
          <form method='POST' action='example.php'>
          <input type='number' name='thisid' value='". $id . "' style='display:none;'>
          </input>
          <button>
            <a href='example.php?id=$id' onclick='alert(" . '"Congraturations for Joining one of our Campaigns"' . ")". "'>Join</a>
          </button>
          </form>
          </div></div><br></div></div><br><br><br>";
          //if ($img > 3) {
            # code...
            //break;
          //}

          }


          if(isset($_POST['Join']))
          {
              $msg= 16;#$_POST['thisid'];
              #echo $msg;
              $sql = "SELECT * FROM campaign WHERE id = '$msg'";
              $fromdb = mysqli_query($con, $sql);
              mysql_fetch_array($fromdb);
              $usersjoined = $fromdb['usersjoined'];
              $usersjoined++;
            //$sql2 = "UPDATE `campaign` SET `usersjoined` = $usersjoined WHERE `id` = ".$fromdb['id'].")";
              $sql2 = " INSERT INTO campaign usersjoined VALUES('2000')";

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

      </div>
    </section><!-- End Campaign Section -->




    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">


    </section><!-- End Breadcrumbs -->




  </main><!-- End #main -->


  <?php

include_once 'include/footer.php'

?>