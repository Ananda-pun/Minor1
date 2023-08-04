<?php 
    include('../include/dbconnection.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['submit'])){
            $user_id = $_POST['user_id'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role_id = $_POST['role_id'];

            // updating the users role
            $update = "UPDATE users SET role_id = '$role_id' WHERE user_id = '$user_id' ";

            $result = $conn->query($update);

            if($result){
                // echo "updated successfully";
                header('Location: admindashboard.php?success = user is updated');
            }
            else{
                // echo "failed to update";
                header('Location: admindashboard.php?error=failed to update');
                exit;
            }
        }
    }

?>