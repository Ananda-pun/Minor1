

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src = "../moderator/myscript.js"> </script>
    <script type="text/javascript" src = "../moderator/add-script.js"> </script>
    <link rel="stylesheet" href="../styles/modstyle.css">
    <script>
        $(document).ready(function(){
            $(document).on('change','#faculty', function(){
                var facultyID = $(this).val();
                if(facultyID){
                    $.ajax({
                        type:'POST',
                        url:'../moderator/dropdown.php',                      
                        data:{'faculty_id':facultyID}, 
                        success:function(result){
                            $('#program').html(result);  
                        }
                    }); 
                }
                else{
                    $('#program').html('<option value="">faculty</option>');
                    $('#semester').html('<option value="">program </option>');
                    $('#course').html('<option value="">course </option>');  
                }
            });
            $(document).on('change','#semester', function(){
                var semesterID = $(this).val();
                var programID = $('#program').val();

                if(semesterID){
                    $.ajax({
                        type:'POST',
                        url:'../moderator/dropdown.php',
                        data: { 'semester': semesterID,
                                'program': programID},
                        success:function(result){
                            $('#course').html(result);
                            // console.log(semesterID, programID);
                        // console.log("Succes");
                        }
                    }); 
                    
                }else{
                    $('#course').html('<option value="">course</option>');
                    
                } 
            });
        }) 
    </script>
    <style>
        #add-questions{
            width: 100%;
            display: flex;
            justify-content: center;
            /* padding-left: 25%; */

        }
        .quesform{
            background-color: #faf0ca;
            width: 400px;
            text-align: center;
            height: 530px;
            margin-top: 30px;
            margin-bottom: 40px;
            box-shadow:0 0 10px rgba(0,0,0,0.4);

        }
        .view{
            margin-top: 20px;
            width:60px;
            height:40px;
            border-radius:5px;
            background-color:#FDC921;
            margin-left: 190px;
        }
        .view:hover{
            cursor:pointer;
            background-color:white;
        }
    </style>
    
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
    <div id="add-questions">
       <form action="view-question.php" method="POST" enctype = "multipart/form-data" class="quesform">
            <!-- Faculty dropdown -->
            <!-- la hai sathi haru -->
            <div class="faculties">
                <label class = "label">Faculty</label>
                <select class = "add-select" name="faculty" id="faculty" class="faculty">
                    <option value="">--select faculty--</option>
                    <?php
                        $facultyData="SELECT * FROM faculties";
                        $result = $conn->query($facultyData);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                    ?>
                                <option value="<?php echo $row['faculty_id']; ?>"> <?php echo $row['faculty_name']; ?></option>
                                <?php
                        }
                    }
                                ?>
                </select>
            </div> 
            <!--program dropdown-->
            <div class="programs">
                <label class="label">Program</label>
                <select class = "add-select" name="program" id="program" >
                    <option value="">--select program--</option>
                </select> <br>
            </div>


            <!-- semester-->
            <div class="semesters">
                <label class ="label">Semester</label>
                <select class = "add-select" name="semester" id="semester">
                    <option value="">--select semester--</option>
                    <option value="1">First semester</option>
                    <option value="2">Second semester</option>
                    <option value="3">Third semester</option>
                    <option value="4">Fourth semester</option>
                    <option value="5">Fifth semester</option>
                    <option value="6">Sixth semester</option>
                    <option value="7">Seventh semester</option>
                    <option value="8">Eighth semester</option>
                </select> <br>
            </div>

            <!-- course-->
            <div class="courses">
                <label class ="label">Course</label>
                <select class = "add-select" name="course" id="course">
                    <option value="">--select course--</option>
                </select>

            

            <button type = "submit" name= "view" id="view" class="view">View</button>
        </form>
   </div>
</body>
</html>