<?php 
  error_reporting(0);
  session_start();

  if($_SESSION['stamp'])
  {
    $stamp = $_SESSION['stamp'];
    echo "<script type='text/javascript'>
        alert('$email');
    </script>";
  }
  $stamp =$_SESSION['stamp'];
  $total=$_SESSION['total'];
     $sname= "localhost";
      $unmae= "root";
      $password = "";
      $db_name = "signup";
      $conn = mysqli_connect($sname, $unmae, $password, $db_name);
      if (!$conn) {
          echo "Connection failed!";
      }
    $total =$_SESSION['total'];
  if(isset($_POST['save-con']))
  {
    $add=$_POST['add'];
    $nAdd=$_POST['nAdd'];
    $phone=$_POST['phone'];
    $sql="UPDATE orderplace SET Address='$add',nearAddress='$nAdd',phone='$phone' WHERE time='$stamp'";
     $result=mysqli_query($conn,$sql);
     if($result)
     {
       echo "<script>alert('updated');</script>";
     }
  }
  if(isset($_POST['gotocart']))
  {
        $_SESSION['email']=$email;
        header("Location:cart.php");
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="./CSS/payment.css">
</head>
<body>
    <div class="main">
       
        <div class="payment" id="payment">
          <div class="gotoplaceorder">
           <form  action="<?php echo $_SESSION['PHP_SELF']; ?>" method="POST">
            <button style="margin:20px 20px;"name="gotocart"><a href="cart.php">Go Back</a></button>
             </form>
      </div>
            <div class="add-log" id="add-log">
                <div class="btn">
                    <fieldset>
                     <legend><img src="./images/distance_FILL0_wght400_GRAD0_opsz24.svg"><p>Delivery   Address</p></legend>
                     <form action="<?php echo $_SESSION['PHP_SELF']; ?>" method="POST" style="background-color:white;">
                     <input name="add" type="text" placeholder="Enter Delivery Address">
                     <input name="nAdd" type="text" placeholder="Enter nearby Address">
                     <input name="phone" type="text" placeholder="Enter Mobile Number">
                     <button  name="save-con" class="save-con" id="deliButton"  >Save and Continue</button>
                     </form>
                    </fieldset> 
                </div>
             </div>
             
        </div>
        <div class="invoice" style="height:340px;">
              <h1>Billing Summary</h1>
              <div class="invoice-summary">
                  <div class="invoice1">
                     <div>Subtotal</div><div><img src="./images/rupee-indian.png"><?php echo $total; ?></div>
                  </div>
                  <div class="invoice1 discount">
                    <div>Discount</div><div><img src="./images/rupee-indian.png">10</div>
                  </div>
                  <div class="invoice1 GST">
                     <div>GST(2%)</div><div><img src="./images/rupee-indian.png">2</div>
                   </div>
                   <div class="line-break"><hr></div>
                  <div class="invoice1 total">
                    <div>Grand Total</div><div><img src="./images/rupee-indian.png">148</div>
                  </div>
              </div>
            
              <li>Order dilevered within 30-40 minutes</li>
              
          </div>
    </div>
   <script src="./javascript/payment.js"></script>
</body>
</html> 