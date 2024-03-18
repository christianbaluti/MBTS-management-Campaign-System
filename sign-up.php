

<style>
  body {

  }
      .container {
        position: relative;
        
      }

      .center {
        position: absolute;
        top: 50%;
        width: 100%;
        text-align: center;
        font-size: 18px;
        font-size: 16px;
        border-radius: 5px;
        background-color: #f6f9fd;
        padding: 20px;
      }

      input[type=text], select {
        width: 50%;
        padding: 12px 18px;
        margin: 6px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type=date], select {
        width: 50%;
        padding: 12px 18px;
        margin: 6px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type=email], select {
        width: 50%;
        padding: 12px 18px;
        margin: 6px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type=password], select {
        width: 50%;
        padding: 12px 18px;
        margin: 6px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }


      input[type=int], select {
        width: 50%;
        padding: 12px 18px;
        margin: 6px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }

      input[type=submit] {
        width: 50%;
        background-color: #ed502e;
        color: white;
        padding: 12px 18px;
        margin: 6px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type=submit]:hover {
        background-color: #45a049;
      }

</style>
<?php

include_once 'include/menu.php'

?>

</head>
<body>



  <main id="main">

         <div class="container"><br><br><br>
         </div>





        <div  class="container"><br><br><br><br>
          <form action="include/signup.inc.php"  class="center" method="post">


            <input type="text" id="first_name" name="first_name" placeholder=" First Name.."><br>


            <input type="text" id="last_name" name="last_name" placeholder="Last Name.."><br>


            <input type="email" id="email" name="email" placeholder=" Email.."><br>


            <input type="text" id="gender" name="gender" placeholder="Gender.."><br>


            <input type="text" id="contact" name="contact" placeholder=" Phone Number.."><br>


            <input type="date" id="dob" name="dob" placeholder="Date Of Birth.."><br>

            
            <input type="text" id="location" name="location" placeholder="Address.."><br>

           
            <input type="text" id="bg" name="bg" placeholder=" Blood Group.."><br>

             
            <input type="int" id="weight" name="weight" placeholder="Weight.."><br>


            <input type="password" id="password" name="password" placeholder=" Password.."><br>            

          
            <input type="submit" value="SIgn Up">
          </form>
        </div>



  </main><!-- End #main -->

  <br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>
  <br><br><br><br>

  <?php

include_once 'include/footer.php'

?>
