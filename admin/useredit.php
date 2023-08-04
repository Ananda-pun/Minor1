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
 
   
    if (isset($_GET['user_id']) && is_numeric($_GET['user_id'])) {
        $user_id = $_GET['user_id'];

        $select_query = "SELECT * FROM users WHERE user_id = $user_id";
        $result = $conn->query($select_query);
        
        if($result){
            $row = $result->fetch_assoc();
        }
        else{
            header('Location: admindashboard.php');
            exit;
        }

        $select_moderator = "SELECT * FROM roles WHERE role_id = 2";
        $result_moderator = $conn->query($select_moderator);
        if($result_moderator){
            $moderator = $result_moderator->fetch_assoc();
        }

        $select_user = "SELECT * FROM roles WHERE role_id = 3";
        $result_user = $conn->query($select_user);
        if($result_user){
            $Student = $result_user->fetch_assoc();
        }
    }
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
        include('../include/headerLogout.php');
        include('admin-nav.php');
    ?>
    <form action="userupdate.php" method = "POST">
        <input type="hidden" name = "user_id" value ="<?php echo $row['user_id']; ?>"> <br>
        <input type="text" name = "first_name" value = "<?php echo $row['first_name']; ?>"> <br>
        <input type="text" name = "last_name" value="<?php echo $row['last_name']; ?>"> <br>
        <input type="email" name = "email" value = "<?php echo $row['email']; ?>"> <br>
        <input type = "hidden" name ="password" value="<?php echo $row['password']; ?>"> <br>
        <select name= "role_id" id="role_id" >
            <option value="">select role</option>
            <option value="<?php echo $moderator['role_id']; ?>"> <?php echo $moderator['role_name']; ?> </option>
            <option value="<?php echo $Student['role_id']; ?>"> <?php echo $Student['role_name']; ?> </option>
            
        </select> <br> <br>

        <input type="submit" name="submit" value = "submit">
    </form>
</body>
</html>