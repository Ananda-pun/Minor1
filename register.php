<?php 
    include('constant.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
    	
    	.registration{
    		padding: 20px;
            width: 90%;
            /* background-color: limegreen; */
            display: flex;
            flex-direction: row;
            justify-content: 10px;
    	}
        .formreg {
        	width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            height: 550px;
            border-radius: 15px;
        }
        
        .formreg h2 {
            text-align: center;
        }
        
        .formreg .labelreg {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        .formreg .inputbox {
            
            width: 80%;
            padding: 8px;
            margin-bottom: 15px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 16px;
        }
        
        .inputbox:hover {
            cursor: pointer;
            background-color: lightblue;
        }
        .regphoto{
        	margin-right: 20px;
        	
        }
        @media (max-width: 600px) {
        	.registration {
        		flex-direction: column;
        		height: auto;
        	}
        	
        	.formreg {
        		width: 100%;
        		height: auto;
        	}
        	
        	.regphoto {
        		margin-right: 0;
        		margin-bottom: 20px;
        		display: none;
        	}
        }

        /* registration success or fail message */
        .success{
            background-color: green;
            color: white;
            /* height:100px; */
            width:100%;
        }
        .fail{
            background-color: red;
            color: white;
            /* height:100px; */
            width:100%;
        }

    </style>
</head>
<body>
    <div class ="logo">
			<a href="pages/landing.php" id="logo"> <img src="<?php echo IMG_URL."logofinal.png" ?>" alt="loading" height="100px" width="100px" ></a>
		</div>
    <div>
	<div class="registration">
        <div class="formreg">
            <h2>Registration Form</h2>
            <form action="action.php" method="POST">
                <label for="firstname" class="labelreg"> First Name</label>
                <input type="text" class="inputbox" name="firstname" required>

                <label for="lastname" class="labelreg"> Last Name</label>
                <input type="text" class="inputbox" name="lastname" required>

                <label for="email" class="labelreg">Email</label>
                <input type="email" class="inputbox" name="email">

                <label for="password" class="labelreg">Password</label>
                <input type="password" class="inputbox" name="password" required>

                <label for="confirm" class="labelreg">Confirm Password</label>
                <input type="password" class="inputbox" name="password2" required>

                <input type="submit" class="inputbox" value="Register" name = "register">
            </form>
        </div>
    
        <div class="regphoto">
            <img src="regphoto.jpg" height= "600px" width ="600px">
        </div>
    </div>
</body>
</html>