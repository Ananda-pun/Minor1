<!-- <?php
 include ('../constant.php');
 


 ?> -->
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?php echo CSS_URL."style.css" ?>">
      
 </head>
 <body>
    <div id="header">
        <div class ="logo">
             <a href="../pages/landing.php" id="logo"> <img src="<?php echo IMG_URL."logofinal.png" ?>" alt="loading" height="100px" width="100px" ></a>
        </div>
 
        <div class="content">
             Question hub
        </div>
 
        <div class="header3">
            <div class="login">
                <a href="../log out.php"><button class="loginbutton">Log out</button></a>
            </div>
             
             
            <div class="search">
                <form action="../pages/searchHandle.php" method = "POST">
            
                   <input type="text" class="search" placeholder=" Search " name="search">
            
                   <a href="">
                       <button  type = "submit" name="searchSubmit">
                           <i class="fa fa-search" style="font-size: 18px;"></i>
                       </button>
                   </a>       
                </form>
            </div>
 
        </div>	         
         
    </div>
 </body>
 </html>