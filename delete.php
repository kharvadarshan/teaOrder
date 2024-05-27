<?php 
session_start();
$sname= "localhost";
              
              $unmae= "root";
              
              $password = "";
              
              $db_name = "signup";
              
              $conn = mysqli_connect($sname, $unmae, $password, $db_name);
              
if (!$conn) {  echo "Connection failed!";}

if(isset($_POST['delete'])){
    $delete =$_POST['delete'];
    $sql="DELETE FROM itemorder WHERE num='$delete'";
    $result=mysqli_query($conn,$sql);
    
    if($result)
    {
        $_SESSION['message']="Item deleted from cart";
        header("Location:cart.php");
    }
}
$conn->close();
?>