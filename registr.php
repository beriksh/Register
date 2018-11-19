<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Sign-Up Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    
        <!-- <link rel="stylesheet" href="style3.css"> -->

        <style>
        body{
        background-image: url(1.png);}
        </style>  

    
</head>
 <div class="form">
          <h1>Sign Up for Free</h1>
          
          <form action="register.php" method="POST">
          
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text" name = "username" required autocomplete="off" />
              <br>
              <label>
                Name<span class="req">*</span>
              </label>
              <input type="text" name="name" required autocomplete="off"/>
              <br>
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
            <br>
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" id="password" name="password" required>
            <br>
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input type="password" name="confirm_password" id="confirm_password" required>
          </div>

          <p class="forgot"><a href="http://localhost/week12/log.php">Already a member?</a></p>
          
          <button type="submit"  name = "Submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
</html>

