<!-- <?php 
    include('../constant.php');

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

	<!-- Social media icons -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="<?php echo CSS_URL."style.css" ?>">
	
</head>
<body>
<div id="footer">
		<div class="foot1">
			<img src="<?php echo IMG_URL."logofinal.png" ?>" class="footimg">
		</div>
		<div class="footmiddle">
			<div class="footform">
			<form class="formfooter" action="../suggestform.php" method="POST" onsubmit =" return fun()">
				Name:<br>
				<input type="text" name="name" class="infoot"><br>
				Email:<br>
				<input type="email" name="email" class="infoot"><br>
				Suggestions:<br>
				<textarea name="message" cols="32" rows="10" class="infoot"></textarea><br>
				<input type="submit" class="submit" name="submit" value="Submit" onsubmit="fun()">
			
			</form>
			<p id="result"></p>	
			</div>	
			<div class="footmiddle-content"><i class="fas fa-copyright"></i>2023 QHUB.All rights reserved</p>
			
			</div>
			
		</div>
		<div class="foot2">
			<div class="upperfoot">
				<p>Contact us</p>
				<p><i class="fas fa-phone"></i> +977-4268691</p>
				<p><i class="fas fa-envelope"></i> questionhubnp@gmail.com </p><br/><br>
			</div>
			<div class="lowerfoot">
				<p>Social Links</p>
				<p class="social-icons">
					<a href="#"><i class="fab fa-facebook"></i></a>&nbsp;
								<a href="#"><i class="fab fa-twitter"></i></a>&nbsp;
								<a href="#"><i class="fab fa-instagram"></i></a></p><br/>
							<p><a href="<?php echo PAGE_URL."aboutus.php" ?>" class="abtus">About QuestionHub</a></p>
			</div>
      	</div>
			
			
	</div>
</body>
</html>