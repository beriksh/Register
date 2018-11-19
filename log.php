<?php
// Start the session
session_start();
?>


<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    


    <style>
    body{
    background-image: url(1.png);
    
}


</style>
    
  </head>

  <body>

    <div class="form">
      
      
            <div id="login2">   
          <h1 id="welcome_back" name="welcome_back">Welcome Back!</h1>
          
          <form action="login2.php"  method="POST">
          
       
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email2"  required autocomplete="off"/  >
          </div>
          
       
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" id="password2" name="password2" required>
          </div>
          
          <p class="forgot"><a href="http://localhost/week12/registr.php">Don't have an accaunt?</a></p>
          
          <button type="submit" name="submit" class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      
      
       



  </body>
</html>
