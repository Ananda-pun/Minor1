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
    <style>
        #button{
            height: 150px;
            width: 70%;
            text-align: center;
            display: flex;
            justify-content:space-between;
            margin: auto;
            padding: 10px;
            
        }
        .buttons{
            height: 100px;
            width: 200px;
            background-color: green;
        }
        table{
            background-color:light green;
            width: 70%;
            margin: 100px auto;
            text-align: center;
            margin-top: 0;
        }
        table{
            border-collapse: collapse;
        }
        th{
            border: solid 2px;
            height: 30px;
        }
        td{
            border: solid 1px;
            height: 30px;
            
        }
    </style>
    
   
</head>
<body>
    <?php 
        include('../constant.php');
        include('../include/headerLogout.php');
    ?>
    <!--Adding Buttons  -->
    <div id="button">
        <div class="buttton">
            <a href=""><button class="buttons">Manage Question</button></a>
        </div>
        
        <div class="button">
            <a href=""><button class ="buttons">Manage users</button></a>
        </div>
    </div>

    <div>
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
            $sql = "SELECT * FROM userdetail WHERE role_name IN ('Moderator', 'User')";
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
                            $count++;
                }
                ?>

        </table>

        <?php
            }
        ?>

    </div>
</body>
</html>