<?php 
    include('../include/dbconnection.php');
 

    if(isset($_POST['add'])){
        $faculty_name = $_POST['faculty'];
        $program_id = $_POST['program'];
        $semester = $_POST['semester'];
        $course_id = $_POST['course'];
        $year = $_POST['year'];

        // echo $course_id, $year; die();
        
        $filename = $_FILES['myfile']['name'];
        // echo $filename; die();
        $destination = '../moderator/sets/'.$filename;

        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        $file  = $_FILES['myfile']['tmp_name'];
        // $size = $_FILES ['myfile']['size'];

        if(!in_array($extension, ['pdf','jpg','png'])){
            echo "your file must be .pdf, .jpg, .png";
        }
        else {
             
            // echo $file, $destination; die();
            if(move_uploaded_file($_FILES['myfile']['tmp_name'], "sets/".$_FILES['myfile']['name'])){
                $sql = "INSERT INTO questions (year, course_id, question_name, path)
                        VALUES('$year','$course_id','$filename','$destination')";

                //  echo "Heelo"; die();       
                if($conn->query($sql)){
                    echo "file uploaded";
                   
                }
                else {
                    echo "failed to upload";
                }
            }
        }
    }

?>