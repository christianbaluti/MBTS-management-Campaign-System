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

    $thisuserid=$_SESSION['id'];
    $query=mysqli_query($con,"select * from users where id='$thisuserid'");
    while($resultofuser=mysqli_fetch_array($query)){
    $username = $resultofuser['lname'] . " " . $resultofuser['fname'];
    }

 ?>
<style type="text/css">
  .mybutton {
  background-color: #f6f9fd!important;
  color: #071527 !important;
}
.mybutton:hover {
  background-color: #ed502e!important;
  color: white!important;
}
</style>
<div id="id01" class="bd-modal">
  <div class="bd-modal-content bd-card-4 bd-animate-zoom" style="padding:32px;max-width:600px;border-radius: 20px;">
    <div class="bd-container bd-white bd-center">

        <div class="bd-half">
          <button onclick="document.getElementById('healthy-tips').style.display='none';
          document.getElementById('notification').style.display='inline'" type="button" class="bd-button bd-block mybutton" style="background-color: #ed502e!important; color: #f6f9fd!important;">Notifications</button>
        </div>
        <div class="bd-half">
          <button onclick="document.getElementById('notification').style.display='none';
          document.getElementById('healthy-tips').style.display='inline'" type="button" class="bd-button bd-block mybutton" style="color: #f6f9fd!important; background-color: #071527!important;">Healthy Tips</button>
        </div>
      </div>



      <div id="notification">
        <p>
          <ul><?php 
                  $sql = "SELECT * FROM notifications";
                  $query = mysqli_query($con, $sql);
                  while ($row = mysqli_fetch_assoc($query)) {
                  echo "<li>" . $row['content'] . "<b style='text-transform: capitalize;'>" . $username . "</b>" . "</li>";}
           ?>
          </ul>
        </p>
      </div>





      <div id="healthy-tips" style="display: none;">
        <p>
          <ul><?php 
                  $sql = "SELECT * FROM tips";
                  $query = mysqli_query($con, $sql);
                  while ($row = mysqli_fetch_assoc($query)) {
                  echo "<li>" . $row['tip'] . "</li>";}
           ?>
          </ul>
        </p>
      </div>

<br><br><br>




    <div class="text-center">
        <button onclick="document.getElementById('id01').style.display='none';" type="button" class="bd-button bd-green">Close</button>
    </div>
    

    </div>
  </div>
</div>
