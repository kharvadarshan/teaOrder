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
    $item = $_POST['teaitem'];
    $quan = $_POST['teaquan'];

    $_SESSION['message'] = "success";
    header("location:order.php");
    
    <
}

// Close connection
$conn->close();
?>
