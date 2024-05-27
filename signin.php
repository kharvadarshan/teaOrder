<?php 

session_start(); 
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "signup";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $password = validate($_POST['password']);

    if (empty($email)) {

        header("Location: sign.php?error=User Name is required");

        exit();

    }else if(empty($password)){

        header("Location: sign.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM userdetails WHERE email='$email' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['password'] === $password) {

                

                $_SESSION['message'] ="Logged In";
                $_SESSION['email'] = $email;
                header("Location:redirect.php");
                exit();
            }else{
              $_SESSION['message'] ="Invalid Email Or Password !!!";
                header("Location: sign.php");
                exit();
            }

        }else{
          $_SESSION['message'] ="Invalid Email Or Password !!!";
            header("Location: sign.php");
            exit();
        }
    }

}else{
    
  $_SESSION['message'] ="User Not Found";
    header("Location: sign.php");

    exit();

}