

  <?php
  session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "signup";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['btnAdd']))
{
    $tempObj = $_POST['btnAdd'];
    $item = json_decode($tempObj);
    $itemId=$item->id;
    $itemName= $item->name;
    $quan= $_POST[$item->ref];
    $price = $item->price;
    $subTotal = $price*$quan;
    $sql = "INSERT INTO itemorder(item_id,itemName,quantity,price,subTotal) VALUES('$itemId','$itemName','$quan','$price','$subTotal')";
   $result =  mysqli_query($conn,$sql);
   if($result){
    echo "<script type='text/javascript'>
    alert('added');
</script>";
   }
   else{
    echo "<script type='text/javascript'>
    alert('not added');
</script>";
   }
}

// Close connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/order.css">
</head>
<body>
  

      <div class="header">
        <div class="header-start"><img style="width:200px;height:200px;" src="RADHE TEA Logo - Original with Transparent Background.svg"></div>
        <div class="header-mid">
          <ul>
            <li><a href="redirect.php">Home</a></li>
            <li><a href="borrow.php">Borrow</a></li>
          </ul>
        </div>
        <div class="header-end">
       
        <button class="btn"  id="btn-order"><a href="cart.php">My Cart</a></button>
        </div>
      </div>
    <div  class="order-head"><img src="./images/espresso.png"><h1>Order Tea</h1></div>
    <div class="seperate" id="sep1"></div> 
       <form  action="<?php $_SERVER['PHP_SELF']?>" method="POST"class="grid-container">
        <div class="grid-item">
          <div class="tea-photo"><img src="./images/OIP.jpeg"></div>
          <div class="detail">
            <div><label id="items1" >Ginger Tea</label></div>
            <div id="quan-inc-dec"><input class="quan-val quan-val1" name="teaquan1" value="0"></input></div>
            <div class="add-align">
              <div class="price"><img src="./images/rupee-indian.png"><label>20</label></div>
              <div class="add-img"><button name="btnAdd"class="add-img" id="additem1" value='{"id":"2","name":"Ginger Tea","price":"20","ref":"teaquan1"}' >Add</button></div>
            </div>
          </div>
        </div>
        <div class="grid-item">
          <div class="tea-photo"><img src="./images/006 (1).jpeg"></div>
          <div class="detail">
            <div><label  id="items2">Green Tea</label></div>
            <div id="quan-inc-dec"><input class="quan-val quan-val2" name="teaquan2" value="0"></input></div>
            <div class="add-align" id="addAlign">
              <div class="price" id="price"><img src="./images/rupee-indian.png"><label>30</label></div>
              <div class="add-img"><button name="btnAdd" class="add-img" id="additem" value='{"id":"5","name":"Green Tea","price":"25","ref":"teaquan2"}'>Add</button></div>
            </div>
          </div>
        </div>
        <div class="grid-item">
          <div class="tea-photo"><img src="./images/herble.jpeg"></div>
          <div class="detail">
            <div><label  id="items3">Herble Tea</label></div>
            <div id="quan-inc-dec"><input class="quan-val quan-val3" name="teaquan3" value="0"></input></div>
            <div class="add-align">
              <div class="price"><img src="./images/rupee-indian.png"><label>15</label></div>
              <div class="add-img"><button name="btnAdd" class="add-img" id="additem" value='{"id":"6","name":"Herble Tea","price":"30","ref":"teaquan3"}'>Add</button></div>
            </div>
          </div>
        </div>  
        <div class="grid-item">
          <div class="tea-photo"><img src="./images/masalatea.jpeg"></div>
          <div class="detail">
            <div><label  id="items4">Masala Tea</label></div> 
            <div id="quan-inc-dec"><input class="quan-val quan-val4" name="teaquan4" value="0"></input></div>
            <div class="add-align">
              <div class="price"><img src="./images/rupee-indian.png"><label>25</label></div>
              <div class="add-img"><button name="btnAdd" class="add-img" id="additem" value='{"id":"1","name":"Masala Tea","price":"15","ref":"teaquan4"}' >Add</button></div>
            </div>
          </div>
        </div>
        <div class="grid-item">
          <div class="tea-photo"><img src="./images/2d6fb806794e10f1d6085b52be673e10.jpg"></div>
          <div class="detail">
            <div><label  id="items5">Phudina Tea</label></div>
            <div id="quan-inc-dec"><input class="quan-val quan-val5" name="teaquan5" value="0"></input></div>
            <div class="add-align">
              <div class="price"><img src="./images/rupee-indian.png"><label>22</label></div>
              <div class="add-img"><button name="btnAdd" class="add-img" id="additem" value='{"id":"4","name":"Phudina Tea","price":"22","ref":"teaquan5"}'>Add</button></div>
            </div>
          </div>
        </div>
        <div class="grid-item">
          <div class="tea-photo"><img src="./images/Chai.jpg"></div>
          <div class="detail">
            <div><label  id="items6">Regular Tea</label></div>
            <div id="quan-inc-dec"><input class="quan-val quan-val6" name="teaquan6" value="0"></input></div>
            <div class="add-align">
              <div class="price"><img src="./images/rupee-indian.png"><label>10</label></div>
              <div class="add-img"><button name="btnAdd" class="add-img" id="additem" value='{"id":"3","name":"Regular Tea","price":"10","ref":"teaquan6"}'>Add</button></div>
            </div>
          </div>
        </div> 
        </form>
      </div>
      <!-- <div>
            <form action="" method="POST" class="add-item"> 
                  <fieldset>
                      <legend>Tea Items</legend>
                        <select name="teaitem" class="select-item" required>
                          <option>Select your tea item</option>
                          <option  value='{"id":"3","name":"Regular Tea","price":"10"}'  >Regular Tea</option>
                          <option  value='{"id":"1","name":"Masala Tea","price":"15"}' >Masala Tea</option>
                          <option  value='{"id":"4","name":"Phudina","price":"17"}' >Phudina Tea</option>
                          <option  value='{"id":"2","name":"Ginger Tea","price":"20"}'  >Ginger Tea</option>
                          <option  value='{"id":"5","name":"Green Tea","price":"25"}' >Green Tea</option>
                          <option  value='{"id":"6","name":"Herble Tea","price":"30"}' >Herble Tea</option>
                        </select>
                  </fieldset>
                <fieldset>
                   <legend>Quantity</legend>
                   <input class="select-quan" name="teaquan" placeholder="enter quantity">
                </fieldset>
                   <button class="btnAdd" name="btnAdd" >Add Item</button>
            </form>  
       </div> -->
       <!-- <div class="seperate" id="sep1"></div> 
       <div class="totalOrder">
        <div id="my-order"><label>My Orders</label></div>
        <div id="myOrders">  
        </div>
       </div> -->
       <div class="seperate" id="sep1"></div> 
       <!-- <div class="order-info">
                 <div class="borrow-order">
                      <input type="checkbox" id="borrow" name="borrow"><label>Borrow Order</label>
                  </div>
                <div class="total-order">
                  <div class="order">
                      <div>Total Amount</div>
                       <div id="totalAmount"><img src="./images/rupee-indian.png">0</div>
                   </div>
                   <div class="place-order"><button>Place Order</button></div>
                 </div>
        </div> -->
</div>
<footer>
    <address>
        Opposite of Amba Mata Tempal,Paniyari, Khambhat,Anand Pin-388620.
    </address>
  </footer>
<script src="./javascript/order.js"></script>
</body>
</html>
<!-- 
//   error_reporting(0);
//   session_start();
//   session_destroy();

//   if($_SESSION['message'])
//   {
//     $message = $_SESSION['message'];
//     echo "<script type='text/javascript'>
//         alert('$message');
//     </script>";
//   }
//   ?>


// session_start(); 
// $sname= "localhost";

// $unmae= "root";

// $password = "";

// $db_name = "signup";

// $conn = mysqli_connect($sname, $unmae, $password, $db_name);

// if (!$conn) {

//     echo "Connection failed!";

// }
// if($_SERVER["REQUEST_METHOD"] == "POST"){ 
// if(isset($_POST['placeOrder']))
// {

    
// }
// else{
//   $_SESSION['message'] ="Select Items";
//   header("Location:order.php");
//  }
// }
// mysqli_close($conn);
// ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Page</title>
    
    <link rel="stylesheet" href="./CSS/order.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referref">
</head>
<body > 
   
    <div  class="order-head"><img src="./images/espresso.png"><h1>Order Tea</h1></div>
  <div class="main" id="main-items">
        <div class="grid-container">
          <div class="grid-item">
            <div class="tea-photo"><img src="./images/OIP.jpeg"></div>
            <div class="detail">
              <div><label id="items1" >Ginger Tea</label></div>
              <div class="add-align">
                <div class="price"><img src="./images/rupee-indian.png"><label>20</label></div>
                <div class="add-img"><button class="add-img" id="additem1" onclick="add('items1')"><span><img src="./images/addN.png"></span>Add</button></div>
              </div>
            </div>
          </div>
          <div class="grid-item">
            <div class="tea-photo"><img src="./images/006 (1).jpeg"></div>
            <div class="detail">
              <div><label  id="items2">Green Tea</label></div>
              <div class="add-align" id="addAlign">
                <div class="price" id="price"><img src="./images/rupee-indian.png"><label>30</label></div>
                <div class="add-img"><button class="add-img" id="additem"  onclick="add('items2')"><span><img src="./images/addN.png"></span>Add</button></div>
              </div>
            </div>
          </div>
          <div class="grid-item">
            <div class="tea-photo"><img src="./images/herble.jpeg"></div>
            <div class="detail">
              <div><label  id="items3">Herble Tea</label></div>
              <div class="add-align">
                <div class="price"><img src="./images/rupee-indian.png"><label>15</label></div>
                <div class="add-img"><button class="add-img" id="additem" onclick="add('items3')"><span><img src="./images/addN.png"></span>Add</button></div>
              </div>
            </div>
          </div>  
          <div class="grid-item">
            <div class="tea-photo"><img src="./images/masalatea.jpeg"></div>
            <div class="detail">
              <div><label  id="items4">Masala Tea</label></div> 
              <div class="add-align">
                <div class="price"><img src="./images/rupee-indian.png"><label>25</label></div>
                <div class="add-img"><button class="add-img" id="additem" onclick="add('items4')"><span><img src="./images/addN.png"></span>Add</button></div>
              </div>
            </div>
          </div>
          <div class="grid-item">
            <div class="tea-photo"><img src="./images/2d6fb806794e10f1d6085b52be673e10.jpg"></div>
            <div class="detail">
              <div><label  id="items5">Phudina Tea</label></div>
              <div class="add-align">
                <div class="price"><img src="./images/rupee-indian.png"><label>22</label></div>
                <div class="add-img"><button class="add-img" id="additem" onclick="add('items5')"><img src="./images/addN.png">Add</button></div>
              </div>
            </div>
          </div>
          <div class="grid-item">
            <div class="tea-photo"><img src="./images/Chai.jpg"></div>
            <div class="detail">
              <div><label  id="items6">Regular Tea</label></div>
              <div class="add-align">
                <div class="price"><img src="./images/rupee-indian.png"><label>10</label></div>
                <div class="add-img"><button class="add-img" id="additem" onclick="add('items6')"><span><img src="./images/addN.png"></span>Add</button></div>
              </div>
            </div>
          </div> 
        </div>
</div>
           <div class="seperate" id="sep1"></div> 
  <form>
    <div class="add-item">
          <fieldset>
              <legend>Tea Items</legend>
                <select class="select-item">
                  <option>Select your tea item</option>
                  <option  value="15">Regular Tea</option>
                  <option  value="17">Masala Tea </option>
                  <option  value="20">Phudina Tea</option>
                  <option  value="25">Green Tea</option>
                  <option  value="22">Ginger Tea</option>
                  <option  value="30">Herble Tea</option>
                </select>
          </fieldset>
        <fieldset>
           <legend>Quantity</legend>
           <input class="select-quan" placeholder="enter quantity">
        </fieldset>
           <button class="btnAdd" onclick="add()">Add Item</button>
    </div>
    
  </form>     
</div>   
  <form  class="totalOrder" >
      <div id="my-order"><label>My Orders</label></div>
          <div id="myOrders" >
                  <div class="about-myOrder">
                     <div class="item">Item</div>
                     <div class="quantity">Quantity</div>
                     <div class="subtotal">Subtotal</div>
                  </div>
          </div>
  
       <div class="seperate"></div>
          <div class="order-info">
                 <div class="borrow-order">
                      <input type="checkbox" id="borrow" name="borrow"><label>Borrow Order</label>
                  </div>
                <div class="total-order">
                  <div class="order">
                      <div>Total Amount</div>
                       <div id="totalAmount"><img src="./images/rupee-indian.png">0</div>
                   </div>
                 </div>
        </div> -->
      <!-- <input type="submit" name="placeOrder" style="margin-top:10px;margin-bottom: 10px;margin-left:200px; width:100px; height:50px;">
  </form>
  <footer>
    <address>
        Opposite of Amba Mata Tempal,Paniyari, Khambhat,Anand Pin-388620.
    </address>
  </footer>  -->
  <!-- <script src="./javascript/order.js"></script> -->
<!-- </body>
</html>  -->