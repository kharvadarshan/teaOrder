<?php 
session_start();
$sname= "localhost";
              
              $unmae= "root";
              
              $password = "";
              
              $db_name = "signup";
              
              $conn = mysqli_connect($sname, $unmae, $password, $db_name);
              
   if (!$conn) {  echo "Connection failed!";}

        $_SESSION['message']="Logged out";
        header("Location:main.php");

$conn->close();
?>