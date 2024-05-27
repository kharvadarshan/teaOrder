
<?php
      session_start(); 
      if (!isset($_SESSION['email'])) {
        // Redirect to the login page if the session is not set
        header("Location: signin.php");
        exit();
    }
      $sname= "localhost";
      $unmae= "root";
      $password = "";
      $db_name = "signup";
      $conn = mysqli_connect($sname, $unmae, $password, $db_name);
      if (!$conn) {
          echo "Connection failed!";
      }
      $a=$_SESSION['email'];
      $c="select * from userdetails where email='$a'";
       
      $result=mysqli_query($conn,$c);
      $row = mysqli_fetch_assoc($result);
       ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="./CSS/profil.css">
</head>
<body>
  <div class="main">
    <div class="main1">
        <div class="back" ><a href="redirect.php">Home</a></div>
            <div class="img-profile"><img src="./images/user.png"></div>
             <div class="uname"><?php echo $row['name'];?></div>
            <div class="uemail"><?php echo $a;?></div>
            <div class="module">
            <form method="POST" action="">
                  <div class="m1"><button name="user-detail" >User Detail</button></div>
                  <div class="m1"><button name="change-pass" >Change Password</button></div>
                  <div class="m1"><button name="user-detail">My Orders</button></div>
                  <div class="m1"><button name="log-out">Log Out</button></div>
            </form>
            </div> 
      </div>
            <div class="main2">
              <?php
            if(isset($_POST['change-pass']))
           {
             ?>
                <h1>Change Password</h1>
                <div class="reset-form">
                <form class="reset">
                <h1>Reset Password</h1>
                <label for="password">Password</label><br>
                 <input  name="old"type="text" id="password"><br>
               <label for="confirm">Confirm Password</label><br>
                <input type="text" name="new" id="confirm"><br><br>
                   <input type="submit" name="reset" placeholder="Reset Password" id="reset-pass">
                    </form></div>
            <?php 
           }else if(isset($_POST['log-out'])){
               header("Location:logout.php");
           }
           else{
            ?>
            <h1>User Details</h1>
            
                 <div class="m1">
                    <label>Name :</label><br>
                    <input  name="name"class="det"placeholder="<?php  echo $row['name'];?>"></input>
                 </div>
                 <div class="m1">
                    <label>Email :</label><br>
                    <input class="det" name="email" placeholder="<?php  echo $row['email'];?>"></input>
              </div>
                 <div class="m1">
                    <label>Phone :</label><br>
                    <input class="det" name="phone" placeholder="<?php  echo $row['phone'];?>"></input>
                 </div>
                 <?php
           }
           ?>
            </div>
    </div>
    <script src="./javascript/profile.js"></script>
</body>
</html>