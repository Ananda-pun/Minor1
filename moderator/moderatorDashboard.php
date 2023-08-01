<?php
    session_start();
    include ('../include/dbconnection.php');
	

    include('../constant.php');
    if(!isset($_SESSION['username'])){
        header("Location: login.php");
    }

    if($_SESSION['role_name']!="Moderator"){
        header("Location: landing.php");
    }

    // Echo "Welcome to Moderator DashBoard,".$_SESSION['Name'];
    
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- search icon -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- social media icons -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
	

	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">

		.button{
			height: 60px;
			width: 70px;
			margin-right: 40px;
		}
		.buttonmoderator{
			text-align: center;
			background-color: white;
		}
		#button{
			height: 60px;
			width: 70px;
			margin-right: 40px;

		}
		


	</style>
</head>
<body>
	<?php 
	  	
	 	include('../include/headerLogout.php'); 
	?>      
    <div class="main">
			
		
		
		
		<div class="buttonmoderator">
			
			
			
			<button class="button" name="question">View Questions</button>
			<button id="button">Add Question</button>
		</div>
		<script type="text/javascript">
				$(function(){
					$('#button').click(function(){ 
						if(!$('#iframe').length) {
								$('#iframeHolder').html('<iframe id="iframe" src="addquestions.php" width="100%" height="450"></iframe>');
						}
					});   
				});
			</script>
	
				
				<div id="iframeHolder"></div>
			
		
		
		
	</div>
		

</body>
</html>