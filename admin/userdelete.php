<?php 
    include('../include/dbconnection.php');

    if(isset($_GET['user_id']) && is_numeric($_GET['user_id'])){
        $user_id = $_GET['user_id'];

        $delete = "DELETE FROM users WHERE user_id = $user_id";
        $result = $conn->query($delete);

        if($result){
            echo "success";
            header('Location: admindashboard.php');
            
        }
        else{
            echo "failed";
            header('Location: admindashboard.php');
        }
    }

    
    if(isset($_GET['user_id']) && is_numeric($_GET['user_id'])){
        $user_id = $_GET['user_id'];

        $update = "UPDATE users role_id = ";
        $result = $conn->query($delete);

        if($result){
            echo "success";
            header('Location: admindashboard.php');
            
        }
        else{
            echo "failed";
            header('Location: admindashboard.php');
        }
    }

?>
