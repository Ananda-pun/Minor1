<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aboutus</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    
    
</head>
<body>
    <?php 
		if(isset($_SESSION['username'])){
			// header("Location: login.php");
			
			if($_SESSION['role_name']="Student"){
				include('../include/headerLogout.php');
				include('../include/nav.php');
			}
		}
		else{
            include('../include/header.php');
            include('../include/nav.php');
		}
	
	?> 

	
	<div id="aboutmain">
        <div id="abouttop">
            <p>We understand the significance of practice and preparation in achieving academic success. That's why we have curated an extensive collection of question banks covering a wide range of subjects and levels. Whether you're studying for boards, internal exams or classroom assessments, our question banks provide you with the ideal practice material to sharpen your skills, reinforce your understanding, and boost your confidence. With our user-friendly interface and comprehensive question banks, you can now embark on your journey towards excellence with ease and effectiveness.</p>
        </div>
        <div id="aboutfirst">
            <dt><strong><h3>Our mission:</h3></strong></dt>
                <dd>Our core mission is centered around offering a comprehensive array of invaluable resources, encompassing a wide range of old questions, sample questions, content, tools, and motivational materials, all meticulously curated to equip individuals with the necessary skills, knowledge, and inspiration to surpass their educational aspirations, unearth their genuine career passions, secure their dream job, and ultimately thrive and excel in their professional endeavors.</dd><br><br>
        </div>
        <div id="aboutsecond">
             <dt><strong><h3>Regular Updates and New Content:</h3></strong></dt>
                    <dd>We are dedicated to continually expanding our question banks and updating them to reflect current curriculum standards and exam formats. This ensures that you have access to the most up-to-date and relevant study material.</dd>
        </div>
        <div id="aboutthird">
            <dt><strong><h3 align="center">Idea of QH</h3></strong></dt>
                <dd>Imagine having access to a comprehensive collection of meticulously curated old questions, carefully handpicked from a wide range of previous exams. These questions serve as invaluable stepping stones towards exam success, offering you a unique glimpse into the patterns, formats, and topics that have historically appeared in your specific field of study. By studying these time-tested questions, you gain a remarkable insight into the exam's expectations, enabling you to navigate through the challenges with greater confidence and proficiency.<br>In addition to the comprehensive collection of old questions, we provide you with an assortment of complementary resources, including notes,tips which will help you gain better knowledge on certain topics, and insightful explanations.</dd></dl><br><br><br>
        </div>
    </div>


	<?php
        include('../include/footer.php')
    ?>


</body>
</html>