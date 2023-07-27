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
    <script type="text/javascript">
        // $(document).on('select'){

        // }
        $(document).on('change','#faculty', function(){
            var facultyID = $(this).val();
                if(facultyID){
                    $.ajax({
                        type:'POST',
                        url:'addquestions.php',
                        data:{'faculty_id':facultyID},
                        success:function(result){
                            $('#program').html(result);                           
                        }
                    }); 
                }else{
                    $('#program').html('<option value="">faculty</option>');
                    $('#semester').html('<option value="">program </option>');
                    $('#course').html('<option value="">course </option>');  
                }
            });
            $(document).on('change','#program', function(){
                var programID = $(this).val();
                if(programID){
                    $.ajax({
                        type:'POST',
                        url:'addquestions.php',
                        data:{'program_id':programID},
                        success:function(result){
                            $('#semester').html(result);                      
                        }
                    }); 
                }else{
                    $('#semester').html('<option value="">semester</option>');
                    
                }
            });
            $(document).on('change','#semester', function(){
                var semesterID = $(this).val();
                var program_id = $('#program').val();

                var jsonData = {
                semester: semesterID,
                program:program_id
            };

                if(semesterID && program_id){
                    $.ajax({
                        type:'POST',
                        url:'addquestions.php',
                        data: JSON.stringify(jsonData),
                        contentType: 'application/json',
                        success:function(result){
                            $('#courses').html(result);
                            console.log(semesterID, program_id);
                            console.log("Succes");

                        
                        }
                    }); 
                }else{
                    $('#course').html('<option value="">course</option>');
                    
                }
            });
    </script>
</head>
<body>
    <?php 
        include('../include/headerLogout.php');
    ?>
   <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <!-- Faculty dropdown -->
        <lable>Faculty</lable>
        <select name="faculty" id="faculty">
            <option value="">--select faculty--</option>
            <?php
                $facultyData="SELECT * FROM faculties";
                
                $result = $conn->query($facultyData);
                // $row = $result -> fetch_assoc();
                
                

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <option value="<?php echo $row['faculty_id']; ?>"> <?php echo $row['faculty_name']; ?></option>
                    <?php 
                } 
            }
                ?>
        </select>  <br>

        <!--program dropdown-->
        <lable>Program</lable>
        <select name="program" id="program" >
            <option value="">--select program--</option>
  
        </select> <br>
        <!-- semester-->
        <lable>Semester</lable>
        <select name="semester" id="semester">
            <option value="">--select semester--</option>
            <option value="1">First semester</option>
            <option value="2">Second semester</option>
            <option value="3">THird semester</option>
            <option value="4">Fourth semester</option>
            <option value="5">Fifth semester</option>
            <option value="6">SIxth semester</option>
            <option value="7">Seventh semester</option>
            <option value="8">EIghth semester</option>
        </select> <br>

        <!-- course-->
        <lable>Course</lable>
        <select name="course" id="course">
            <option value="">select course</option>
        </select>



    </form>
    <script>

    </script>
            

    <?php 
        //fetching program data
        $faculty_id=!empty($_POST['faculty_id'])?$_POST['faculty_id']:'';
        if(!empty($faculty_id))
        {
        //   var_dump($faculty_id); die();
        $query="SELECT * FROM programs WHERE faculty_id=$faculty_id";
        //   $programData = $conn->query($query);
        $result = $conn->query($query);

        //   $facultyData->bind_param('s',$faculty_id); 
        //   $facultyData->execute();
        //   $result=$query->get_result();
                
        if($result->num_rows>0)
        {
            echo "<option value=''>Select program</option>";
            while($arr= $result->fetch_assoc())
            {
                echo "<option value='".$arr['program_id']."'>".$arr['program_name']."</option><br>";
                
            }
        }  
        }
        //fetching semester data
    


     //fetching course data
     
        $semester=!empty($_POST['semester_id'])?$_POST['semester_id']:'';
        $program=!empty($_POST['program_id'])?$_POST['program_id']:'';
        if(!empty($program) && !empty($semester))
        {
                // $semester = $_POST['semester_id'];
                // $program = $_POST['program_id']; 
            $query="SELECT * FROM coursedetail where program_id =$program AND semester=$semester";
            

            $result=$conn->query($query);
            
            if($result->num_rows>0)
            {
                echo "<option value=''>Select course</option>";
                while($arr= $result->fetch_assoc())
                {
                    echo "<option value='".$arr['course_id']."'>".$arr['course_name']."</option><br>";
                    
                }
            }  
        }
  ?>  
</body>
</html>