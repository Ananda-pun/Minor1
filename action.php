<?php
session_start();
// include ('dbconection.php');

include('constant.php');
include ('include/dbconnection.php');


//creating a new user through register

if(isset($_POST['register'])){

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if($password=$password2){
    $password = md5($password);
}

$sql = "INSERT INTO users ( first_name, last_name, email, password, role_id)
        VALUES ('$firstName', '$lastName', '$email', '$password', 3)";


// echo $sql;   
// die();

 $result= $conn->query($sql);


 if($result){
    $_SESSION['message']="Registration Successfull !!!";
    $_SESSION['type'] = "success";
    // header("Location: register.php");
    header("Location: login.php");
 }
 else {
    $_SESSION['message']="Registration Failed !!!";
    $_SESSION['type'] = "fail";
    header("Location: register.php");
 }
   
}

// user login handle
if(isset($_POST['login'])){

    
    $username = $_POST['email'];
    $password = $_POST['password'];

    $sql_select="SELECT * FROM userdetail WHERE email = '$username'";

    // echo $sql_select; die();
    $result = $conn->query($sql_select);
    
    $row = $result -> fetch_assoc();

    if($row==0){
        $_SESSION['message']="User not found";
        
        header("Location: login.php");
    }
    // $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_assoc($result);
 
    // echo $row['role_name']; die();
    // echo md5($password); die();
    if($row['password'] == md5($password)){
        $_SESSION['Name'] = $row['Name'];
        $_SESSION['username'] = $row['email'];
        $_SESSION['role_name'] = $row['role_name'];
        

       
        if($row['role_name']=="Admin") {

        
        header("Location: admin/admindashboard.php");
    
    }
    
    if($row['role_name']=="Moderator"){
        // echo $row['role_name']; die();
        header("Location: moderator/ModeratorDashboard.php");
    }
    if($row['role_name']=="User"){

        header("Location: landing.php");
    }
    
}
else
    echo "password doesn't match";

}
else{
    echo "user not found";
}

?>