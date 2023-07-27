<?php
	session_start();
	include('constant.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
	<style>
        .user_not_found{
            background-color: red;
            color: white;
            /* height:100px; */
            width:50%;
        }
        </style>
</head>
<body>
	<div class ="logo">
			<a href="pages/landing.php" id="logo"> <img src="<?php echo IMG_URL."logofinal.png" ?>" alt="loading" height="100px" width="100px" ></a>
		</div>
    <div>
		<form class="formlog" action = "action.php" method = "POST">
			<h2 class="formh4">Welcome To QuestionHUB</h2>
			<!-- <h4>Please enter your email and password to proceed</h4> -->
			<label class="labellog">Username</label>
			<input type="text" class="inputlog" name = "email" placeholder ="username or email" required ><br><br>

			<label>Password</label>
			<input type="password" class="inputlog" name="password" placeholder = "password" required >

			<button type="submit" class="logbutton" name="login">Login</button>
			<a href="register.php"><button type="button" class="logbutton">Register</button></a>
			
			<a href="#"><p>Forgot password</p></a>
		</form>
		<?php
   			if(isset($_SESSION['message'])){
				
				echo "<div class='user_not_found'>".$_SESSION['message']."</div>";
				$_SESSION['message']="";
   			}
		?>
	</div>
	<?php
   		if(isset($_SESSION['message'])){
			$msgType = $_SESSION['type'];
			echo "<div class='{$msgType}'>".$_SESSION['message']."</div>";
			$_SESSION['message']="";
    	}
	?>

</body>
</html>