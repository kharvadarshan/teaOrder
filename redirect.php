<?php 
 error_reporting(0);
  session_start();
   $email=$_session['email'];
   echo  "<script type='text/javascript'>
   alert('$email');
</script>";
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
    <title>Tea Web</title>
    <link rel="stylesheet" href="./CSS/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referref"> 
</head>
<body>
   <section class="main">
        <div class="navbar h-class">
            <div id="nav-start">
                <li><img src="./images/RADHE TEA Logo - Original - 5000x5000.png"></li>
            </div>
                 <div id="nav1">
                    <ul class="item v-class">
                    <li><a href="/">home</a></li>
                    <li><a href="/borrow.html">borrow</a></li>
                    <!-- <li><a href="tea_menu/index1.html">menu</a></li> -->
                    <!-- <li><img src="RADHE TEA Logo - Original with Transparent Background.svg"></li> -->
                    </ul>
                 </div>
                 <div class="nav2">
                    <div id="log-in"><a href="logout.php">Log Out</a></div>
                   <div id="log-in"><a href="profile.php">Profile</a></div>
                   <button class="btn"  id="btn-order"><a href="cart.php">My Cart</a></button>
                 </div>
        </div>
            <div class="main-heading" id="main-heading">
                     <p class="para" >Tea Products</p>   
                    <div class="tea-menu" id="tea-menu">
                    <img src="./images/RADHE TEA Logo - Original - 5000x5000.png"> 
                    </div>
                   <div class="mid-para" id="slogan">Feel the wonders of the mornigs</div>
                  <button class="btn"  id="btn-order"><a href="order.php">order now</a></button>
            </div>
           
</section>
      
      <!--story--> 
      <section class="sec">
        <p class="para">since 2007</p>
        <h1 class="heading">Our story</h1>
        <div class="row">
            <div class="boxes">
                <h1>Tea with the story</h1>
                <p class="mid-para">
                    When compared with other kinds of chocolate, 
                    dark chocolate stands tall. “Dark chocolate 
                    has lower added sugar and
                     fat than milk or white chocolate,” says Peart, 
                </p>
                <button class="btn btn1">history</button>
            </div>
            <div class="img"><img src="./images/story.jpg" alt=""></div>
        </div>
      </section>
      <!-- types -->
      <!-- <section class="types-tea">
        <p class="para">types of the</p>
        <h1 class="heading">Tea</h1>
        <div class="row">
            <div class="box" >
                <img src="images1/ginger.jpg" alt="" style="height:220px">
                <h2>Ginger Tea</h2>
            </div>
            <div class="box">
                <img src="images1/phudina.jpg" alt="" style="height:220px">
                <h2>Phudina Tea</h2>
            </div>
            <div class="box">
                <img src="images1/coffee.jpg" alt="" style="height:220px">
                <h2>Coffee</h2>
            </div>
        </div>
      </section> -->
      <!-- about -->
      <!-- <sectin class="sec a-sec">
        <div class="about">
            <div class="about-box">
                <h1 class="heading">About</h1>
                <p mid="mid-para">When compared with other kinds of chocolate, dark chocolate stands tall. “Dark chocolate has lower added sugar and fat than milk or white chocolate,” says Peart, 
                    while  noting it also boasts an abundance of beneficial antioxidants called flavonoids.
                </p>
                <button class="btn btn1">more info</button>
            </div>
        </div>
      </sectin> -->
      <!--comments-->
      <section class="comments sec">
        <p class="para">Top comments</p>
        <h1 class="heading">comment</h1>
        <div class="row">
            <div></div>
            <div class="box c-box" style="background-image: radial-gradient(rgb(4 3 3/5%),rgb(0 0 0/70%)),url('./images/Chai.jpg')">
                <div class="data">
                <p>When compared with other kinds of chocolate, dark chocolate stands tall. “Dark chocolate has lower added sugar and fat than milk or white chocolate,” says Peart,
                </p>
                </div>
                <div class="user">
                <h3>Bhargav</h3>
                </div>
            </div>
            <div class="box c-box" style="background-image: radial-gradient(rgb(4 3 3/5%),rgb(0 0 0/70%)),url('./images/Chai.jpg')">
                <div class="data">
                <p>When compared with other kinds of chocolate, dark choco
                </p>
                </div>
                <div class="user" >
                <h3>Shubham</h3>
                </div>
            </div>
            <div class="box c-box" style="background-image: radial-gradient(rgb(4 3 3/5%),rgb(0 0 0/70%)),url('./images/Chai.jpg')">
                <div class="data">
                <p>When compared with other kinds of chocolate, dark chocolate stands tall. “Dark chocolate has lower added sugar and fat than milk or 
                </p>
                </div>
                <div class="user">
                <h3>Dhaval</h3>
                </div>
            </div>
        </div>
      </section>
      <!--contact-->
      
      <footer>
        <div class="footer-up">
                <div class="footer1 f1"><img src="./images/RADHE TEA Logo - Original - 5000x5000.png" alt="Radhe Tea logo"></div>
                <div class="footer1 f2">
                    <h2>Social</h2>
                    <div class="footer-logo">
                        <img src="./images/FaceBooknew.png"/>
                        <img src="./images/instagram.png"/>
                        <img src="./images/whatsapp.png"/>
                    </div>
                </div>
                <div class="footer1 f3">
                    <li><a href="">Home</a></li>
                    <li><a href="">About Tea</a></li>
                    <li><a href="">Tea collections</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </div>
                <div class="footer1 f4">
                    <h2>Call Us</h2>
                    <p>+91 4242545423</p>
                </div>
                
        </div>
       <div class="address">
        <hr/>
        <p>
            Opposite of Amba Mata Tempal,Paniyari, Khambhat,Anand Pin-388620.
            </p>
       </div>
      </footer>    
       <script src="./javascipt/main.js"></script>
</body>
</html>