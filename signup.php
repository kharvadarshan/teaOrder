<?php 
session_start();
$host = "localhost";
$user = "root";
$password="";
$db="signup";
$data = mysqli_connect($host,$user,$password,$db);
if($data==false)
{
    die("connection error");
}
if(isset($_POST['apply'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
  
    $sql="select * from userdetails where name='$name'";

    $result = mysqli_query($data,$sql);

    if($result)
    {
        $num = mysqli_num_rows($result);
        if($num>0)
        {
            $_SESSION['message']="user alredy exist";
            header("Location:sign.php");
            exit();
        }
        else{
            $sql="INSERT INTO userdetails(name,email,phone,password) 
          VALUES('$name','$email','$phone','$password')";
            mysqli_query($data,$sql);
            $_SESSION['message']="your application successful";
            header("Location:sign.php");
            exit();
        }
    }
    else{
        $_SESSION['message']="apply failed";
        header("Location:sign.php");
        exit();
       
    }
}
$data->close();
?>