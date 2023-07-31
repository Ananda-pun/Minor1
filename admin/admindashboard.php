<?php
    session_start();
    include ('../include/dbconnection.php');


    if(!isset($_SESSION['username'])){
        header("Location: login.php");
    }

    if($_SESSION['role_name']!="Admin"){
        header("Location: landing.php");
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
    ?>
    <!--Adding icons  -->
    <div>
        <div class="question">
            <a href=""><button>Question</button></a>
        </div>
        <div class="syllabus">
            <a href=""><button> Syllabus</button></a>
        </div>
        <div class="user">
            <a href=""><button>users</button></a>

        </div>
        <table style="border: 2px solid black;">
            <tr>
                <th>S.N</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th colspan ="2">Action</th>
            </tr>

<?php

// displaying the users 
$sql = "SELECT * FROM userdetail";


$result = $conn -> query($sql);

$count=1;
if($result){
    while($row = $result->fetch_assoc()){
        echo "<tr> 
                <td>{$count}</td>
                <td>{$row['Name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['role_name']}</td>
                <td>
                  <a href='useredit.php'>Edit</a>
                </td>
                <td>
                  <a href='userdelete.php'>Delete</a>
                </td>
              </tr>
                ";
    }
    ?>

    </table>

    <?php
            }
    ?>

    </div>
</body>
</html>