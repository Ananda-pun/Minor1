<!DOCTYPE html>
<html lang="en">
<head>
<?php 
    include('../include/dbconnection.php');
?>  
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
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
        include('admin-nav.php');
    ?>
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
            $sql = "SELECT * FROM userdetail WHERE role_name IN ('Moderator', 'Student')";
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
                            <a href='useredit.php?user_id={$row['user_id']}'>Edit</a>
                        </td>
                        <td>
                            <a href='userdelete.php?user_id={$row['user_id']}'>Delete</a>
                        </td>
                    </tr>";

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