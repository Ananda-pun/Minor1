<?php
// include ('dbconection.php');
session_start();

include('constant.php');
include ('include/dbconnection.php');


//

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO suggestion(name,email,message) VALUES('$name','$email','$message')";


     $result= $conn->query($sql);
    //  echo "Thank you for your suggestion!";
    if($result){
       $_SESSION['suggest']="Thank you for your suggestion!";
       header('Location: pages/landing.php');
    }
    else{
        $_SESSION['suggest']="Something went wrong";
        header("Location:pages/landing.php");
    }
     


    
}
?>