<?php 
    include('../include/dbconnection.php');
    $select_moderator = "SELECT * FROM roles WHERE role_id = 2";
        $result_moderator = $conn->query($select_moderator);
        if($result_moderator){
            $moderator = $result_moderator->fetch_assoc();
        }

        $select_user = "SELECT * FROM roles WHERE role_id = 3";
        $result_user = $conn->query($select_user);
        if($result_user){
            $user = $result_user->fetch_assoc();
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
        include('admin-nav.php');
    ?>
    <div class="add-user">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">
           <label for="" class="label-for-admin-add-user">First Name</label>
           <input type="text" name = "first_name" class="input-log-admin-add-user"> <br>
           
           <label for="" class="label-for-admin-add-user">Last Name</label>
           <input type="text" name = "last_name" class="input-log-admin-add-user"> <br>
           
           <label for="" class="label-for-admin-add-user">Email</label>
           <input type="email" name = "email" class="input-log-admin-add-user"> <br>
           
           <label for="" class="label-for-admin-add-user">Password</label>
           <input type="password" name = "password" class="input-log-admin-add-user"> <br>
           
           <label for="" class="label-for-admin-add-user">Confirm Password</label>
           <input type="password" name = "password2" class="input-log-admin-add-user"> <br>

           <select name= "role_id" id="role_id" >
                <option value="">select role</option>
                <option value="<?php echo $moderator['role_id']; ?>"> <?php echo $moderator['role_name']; ?> </option>
                <option value="<?php echo $user['role_id']; ?>"> <?php echo $user['role_name']; ?> </option> 
            </select> <br>
           
           <input type="submit" value="Add" name="add">
        </form>
    </div>
    <?php 
        if(isset($_POST['add'])){
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            $role_id = $_POST['role_id'];

            if($password == $password2){
                $password = md5($password);
            }

            $insert_sql = "INSERT INTO users (first_name, last_name, email, password, role_id)
                            VALUES('$first_name','$last_name','$email','$password','$role_id')";
    
            $result = $conn->query($insert_sql);

            if($result){
                echo "New user added successfully";   
            }
            else{
                echo "Failed to add: ".$conn->mysqli_error();
            }
        }
    
    ?>
</body>
</html>