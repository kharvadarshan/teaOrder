<?php 
  error_reporting(0);
  session_start();
  session_destroy();

  if($_SESSION['message'])
  {
    $message = $_SESSION['message'];
    echo "<script type='text/javascript'>
        alert('$message');
    </script>";
  }
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Tea Ordering</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./CSS/sign.css">
    
    
</head>
<body>
    <div class="main">
    <div class="start">
        <header>
            <div class="main-head">
                <img src="./images/RADHE TEA Logo - Original - 5000x5000.png">
            </div>
        </header>
    </div>
    <div class="sub">
        <form  method="POST" action="signin.php" class="sign-inform">
            <div class="start1">
                <h1 ><b>WelCome,</b></h1><button id="signup" onclick="signUp()">Sign Up</button>
               </div>
               <p class="cont"><b>Sign in to Continue</b></p>
        <label for="email"><b>Email</b></label><br>
        <input class="data1" name="email" id="email" type="email" size="40" placeholder="Enter email" required><br>
        <label for="password"><b>Password</b></label><br>
        <input class="data2" name="password" id="password" type="password" size="40" placeholder="********" required><br>
        <label id="forgot"><p onclick="resetPassword()">Forgot Password?</p></label>
        <div class="invalid"></div>
        <!-- <input name="signin" type="submit" id="memail"/> -->
        <button name="signin" type="submit" id="memail">Sign in</button>
        </form>
    </div>
</div>
<script src="./javascript/sign.js"></script>
    </body>
</html>