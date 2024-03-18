<?php
 session_start();
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

//Code for Registration 
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $weight=$_POST['weight'];
    $bg=$_POST['bg'];
    $location=$_POST['location'];
    $password=$_POST['password'];
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
    $msg=mysqli_query($con,"insert into users(fname,lname,email, contact, dob, gender, weight, bg, location, password) values('$fname','$lname','$email', '$contact','$dob' ,'$gender' ,'$weight' ,'$bg' ,'$location','$password')");

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'home.php'; </script>";
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blood Donor management system</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style type="text/css">
        	.mybutton{
        		color: white;
        		background-color: #ed502e ;
        	}

        	.mybutton:hover{
        		color: white;
        		background-color: #071527  ;
        	}
        </sty
        </style>
  <script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.confirmpassword.value)
{
alert(' Password and Confirm Password field does not match');
document.signup.confirmpassword.focus();
return false;
}
return true;
} 

</script>

    </head>
    <body class="bg-primar" style="background: url('assets/img/campaign/1.jpg') no-repeat center fixed;
  background-size: cover;"><br><br><br>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="mybutton">
                                        <h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
<form method="post" name="signup" onsubmit="return checkpass();">

<div class="row mb-3">
<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="fname" name="fname" type="text" placeholder="Enter your first name" required />
<label for="inputFirstName">First name</label>
</div>
</div>
                                                
<div class="col-md-6">
<div class="form-floating">
<input class="form-control" id="lname" name="lname" type="text" placeholder="Enter your last name" required />
 <label for="inputLastName">Last name</label>
</div>
</div>
</div>



<div class="row mb-3">
<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="fname" name="email" placeholder="your@gmail.com" required />
<label for="inputEmail">Email address</label>
</div>
</div>
                                                
<div class="col-md-6">
<div class="form-floating">
<input class="form-control" id="lname" name="contact" type="text" placeholder="your number" required pattern="[0-9]{10}" title="10 numeric characters only"  maxlength="10" required />
<label for="inputcontact">Contact Number</label>
</div>
</div>
</div>


<div class="row mb-3">
<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="fname" name="dob" type="date" placeholder="Enter your  Date of Birth" required />
<label for="inputFirstName">Date of Birth</label>
</div>
</div>
                                                
<div class="col-md-6">
<div class="form-floating">
<input class="form-control" id="lname" name="gender" type="text" placeholder="Enter your  gender" required />
 <label for="inputLastName">Gender</label>
</div>
</div>
</div>

<div class="row mb-3">
<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="fname" name="weight" type="text" placeholder="Enter your weight"/>
<label for="inputFirstName">Weight</label>
</div>
</div>
                                                
<div class="col-md-6">
<div class="form-floating">
<input class="form-control" id="lname" name="bg" type="text" placeholder="Enter your  Blood Group"  />
 <label for="inputLastName">Blood Group</label>
</div>
</div>
</div>


<div class="form-floating mb-3">
<input class="form-control" id="email" name="location" type="text" placeholder="Where are you based at" required />
<label for="inputEmail">Location</label>
</div>


        


<div class="row mb-3">
<div class="col-md-6">
 <div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="password" name="password" type="password" placeholder="Create a password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required/>
<label for="inputPassword">Password</label>
</div>
</div>
                                                

<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="confirmpassword" name="confirmpassword" type="password" placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required />
<label for="inputPasswordConfirm">Confirm Password</label>
</div>
</div>
</div>
                                            

<div class="mt-4 mb-0">
<div class="d-grid"><button type="submit" class="btn mybutton btn-block mybutton" name="submit">Create Account</button></div>
</div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
 <div class="small"><a href="login.php">Have an account? Go to login</a></div>
  <div class="small"><a href="index.php">Back to Home</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>







  <br>

  <?php

include_once 'include/footer.php'

?>
