<?php

include_once 'include/menu.php';





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
          }

           ?>
      </div>
    </section><!-- End Breadcrumbs -->
  </main>








   
            
 

       


  <?php

include_once 'include/footer.php'

?>