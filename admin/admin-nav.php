<?php 
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .admin-nav{
            text-align: center;
            height: 150px;
            background-color: #1ff1f1;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }
        .button{
            height: 50px;
            background-color: #FDC921;
            line-height: 0;
        }
        
            
        
        
    </style>
</head>
<body>
    <div class="admin-nav">
        <div class="welcome">
            <h2>Admin pannel</h2>
        </div>
        <div class="links">
            <a href="admindashboard.php"><i class='bx bxs-home'></i></a>
            <a href="manage-users.php"><button name = "manage-users" class ="button">Manage Users</button></a>
            <a href="add-user.php"><button name = "add-users" class ="button">Add Users</button></a>
            <!-- <a href="manage-questions.php"><button name = "manage-questions" class ="button">Manage questions</button></a> -->
            <a href="add-course.php"><button name = "add-couses" class ="button">Add Courses</button></a>
            <!-- <a href="add-program.php"><button name = "add-programs" class ="button">Add Programs</button></a> -->
        </div>
    </div>
</body>
</html>