<?php 
  error_reporting(0);
  session_start();
  $email =$_SESSION['email'];

  echo "<script type='text/javascript'>
        alert('$email');
    </script>";

    if(isset($_POST['goback']))
    {
      $_SESSION['email']=$email;
     
      header("Location:order.php");
    }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/cart.css">
</head>
<body>
     <form action="<?php echo $_SESSION['PHP_SELF'];?>">
    <button class="goback" name="gobak"><a href="order.php">Go to order page</a></button>
    </form>
    <div class="main">
        <div><h1>My Orders</h1></div>
        <div class="my-orders">
             <div class="detail main-details">
                  <div class="name">Item name</div>
                  <div class="quan">Quantity</div>
                  <div class="price">Price</div>
                  <div class="subTotal">Sub Total</div>
                  <div class="subTotal"></div>
             </div>
            <?php 
            SESSION_START();
                $sname= "localhost";
              
                $unmae= "root";
                
                $password = "";
                
                $db_name = "signup";
                
                $conn = mysqli_connect($sname, $unmae, $password, $db_name);
                
                if (!$conn) {
                    echo "Connection failed!";
                }
              $sql ='SELECT * FROM itemorder';
              $result = mysqli_query($conn,$sql);
               $total;
              while($row=mysqli_fetch_array($result))
              {  
                
                $itemId=$row['item_id'];
                 $itemName=$row['itemName'];
                 $quan=$row['quantity'];
                 $price=$row['price'];
                 $subTotal=$row['subTotal'];
                 $total+=$subTotal;
                 $num = $row['num'];
                 ?>
                 <div class="detail">
                 <div class="name"><?php echo $itemName;?></div>
                 <div class="quan"><?php echo $quan;?></div>
                 <div class="price"><?php echo 'Rs.'.$price;?></div>
                 <div class="subTotal"><?php echo 'Rs.'.$subTotal;?></div>
                 <div class="subTotal item-delete" style="align-content:center;">
                 <form action="delete.php" method="POST">
                 <button  class="btn" style="height:30px;
                 font-size:20px;
                 position:relative;" name="delete" value='<?php echo $num;?>'onclick="return confirm('Are you sure you want to delete this item?')" >Delete</button></form>
                  </div>
                 </div>
                 <?php
              }
            ?>
        </div>
        <div class="order-info">
                <div class="total-order">
                  <div class="order">
                      <div>Total Amount</div>
                       <div id="totalAmount"><img src="./images/rupee-indian.png"><?php echo $total;?></div>
                   </div>
                   <form method="POST" action="orderplace.php">
                   <div class="place-order"><button name="placeOrder" value='<?php echo $total?>'>Place Order</button></div>
                   </form>
                 </div>
        </div> 
    </div>
</body>
</html>