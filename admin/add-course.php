<?php 
    include('../include/dbconnection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
        });
    </script>
    <style>
        .newcourse{
            padding: 5px;
            /* margin-top:10px; */
            width:240px;
            height:30px;
            border: solid #FDC921 3px;
            border-radius:12px;
        }
        .add-course{
            margin-left:155px;
            width:100px;
            height:30px;
            border-radius:5px;
            background-color:#FDC921;

        }

        .add-course:hover {
            cursor:pointer;
            background-color:white;
        }
    </style>

</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
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

        <div>
            <label for="" class="label">Course</label>
            <input type="text" name="newcourse" class ="newcourse">
        </div> <br>
        
        <button type = "submit" name= "add-course" id="add-course" class="add-course">Add Course</button>

        
    </form>

    <!-- ADDING THE NEW CORUSE ON DATABASE -->
    <?php 
        if(isset($_POST['add-course'])){
            $faculty_id = $_POST['faculty_id'];
            $program_id = $_POST['program'];
            $semester = $_POST['semester'];
            $newcoruse = $_POST['newcourse'];
            
            try {
                
                $conn->begin_transaction();
                $insert_course = "INSERT INTO courses (course_name, credit)
                                VALUES('$newcourse', 3)";
                $result = $conn->query($insert_course);

                $insert_course_program = "INSERT INTO course_program(course_id, program_id, semester)
                                        VALUES ('$course_id','$program_id','$semester')";
            } catch (\Throwable $th) {
                //throw $th;
            }


        }
    ?>
</body>
</html>