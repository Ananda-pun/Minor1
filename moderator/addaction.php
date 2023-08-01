<?php 
    include('../include/dbconnection.php');

    
    //fetching program data
    $faculty_id=!empty($_POST['faculty_id'])?$_POST['faculty_id']:'';
    if(!empty($faculty_id))
    {
    //   var_dump($faculty_id); die();
        $query="SELECT * FROM programs WHERE faculty_id=$faculty_id";
            
        $result = $conn->query($query);  
        if($result->num_rows>0)
        {
            echo "<option value=''>Select program</option>";
            while($arr= $result->fetch_assoc()){
                echo "<option value='".$arr['program_id']."'>".$arr['program_name']."</option><br>";        
            }
        }  
    }
    
    // fetching the course data
    $program=!empty($_POST['program'])?$_POST['program']:'';
    $semester=!empty($_POST['semester'])?$_POST['semester']:''; 
    if(!empty($program) && !empty($semester)){
        $query="SELECT * FROM coursedetail where program_id =$program AND semester= $semester";
        $result=$conn->query($query);
        if($result->num_rows>0){
            echo "<option value=''>--Select course--</option>";
            while($arr= $result->fetch_assoc()){
                echo "<option value='".$arr['course_id']."'>".$arr['course_name']."</option><br>";
            }
        }  
    }

    

    if(isset($_POST['add'])){
        $faculty_name = $_POST['faculty'];
        $program_id = $_POST['program'];
        $semester = $_POST['semester'];
        $course_id = $_POST['course'];
        $year = $_POST['year'];

        // echo $course_id, $year; die();
        
        $filename = $_FILES['myfile']['name'];
        // echo $filename; die();
        $destination = 'sets/'.$filename;

        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        $file  = $_FILES['myfile']['tmp_name'];
        // $size = $_FILES ['myfile']['size'];

        if(!in_array($extension, ['pdf','jpg','png'])){
            echo "your file must be .pdf, .jpg, .png";
        }
        else {
             
            // echo $file, $destination; die();
            if(move_uploaded_file($_FILES['myfile']['tmp_name'], "sets/".$_FILES['myfile']['name'])){
                $sql = "INSERT INTO questions (year, course_id, question_name)
                        VALUES('$year','$course_id','$filename')";

                //  echo "Heelo"; die();       
                if($conn->query($sql)){
                    // echo "file uploaded";   
                }
                else {
                    echo "failed to upload";
                }
            }
        }
    }

    
        
?>