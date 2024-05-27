<?php session_start();
$host = "localhost";
$user = "root";
$password="";
$db="signup";
$data = mysqli_connect($host,$user,$password,$db);
if($data==false)
{
    die("connection error");
}
$email=$_SESSION['email'];

echo $email;
if(isset($_POST['placeOrder']))
{  $total=$_POST['placeOrder'];
   $sql= "select * from userdetails where email='$email' ";
   $result=mysqli_query($data,$sql);
   $row=mysqli_fetch_assoc($result);
   $c_id=$row['c_id'];
   date_default_timezone_set('India/Gujarat');
   $stamp=date('y-m-d h:i:s T',time());
   $sql="INSERT INTO orderplace(c_id,time,toatalAmount) 
   VALUES('$c_id','$stamp','$total')";
    $result=mysqli_query($data,$sql);
   if($result )
   {
    echo "<script type='text/javascript'>
    alert('Order Placed');
    </script>";
    $_SESSION['stamp']=$stamp;
    $_SESSION['total']=$total;
    header("Location:payment.php");
   }

$data->close();
}
?>