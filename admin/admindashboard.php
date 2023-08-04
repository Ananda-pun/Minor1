<?php
    session_start();
    include ('../include/dbconnection.php');


    if(!isset($_SESSION['username'])){
        header("Location: ../login.php");
    }

    if($_SESSION['role_name']!="Admin"){
        header("Location: ../pages/landing.php");
    }

    // Echo "Welcome to Admin DashBoard,".$_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    
   
</head>
<body>
    <?php 
        include('../constant.php');
        include('../include/headerLogout.php');
        include('admin-nav.php');
    ?>
    <!--Adding Buttons  -->

    
</body>
</html>